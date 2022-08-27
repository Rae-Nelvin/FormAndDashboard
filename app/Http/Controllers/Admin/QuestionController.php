<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Question;
use App\Models\QuestionSection;
use App\Models\QuestionSubSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class QuestionController extends Controller
{
    /**
     * renderPackage
     *
     * @return void
     */
    public function renderSection($id)
    {
        $data = DB::table('question_groups')
            ->join('question_sections', 'question_groups.id', '=', 'question_sections.groupQuestionID')
            ->where('question_groups.id', '=', $id)
            ->select('question_groups.id as groupID', 'question_sections.*')
            ->get();
        $title = DB::table('question_groups')
            ->join('question_sections', 'question_groups.id', '=', 'question_sections.groupQuestionID')
            ->where('question_groups.id', '=', $id)
            ->select('question_groups.*')
            ->first();
        return view('pages.admin.questions.questionSectionDashboard', ['data' => $data, 'groupID' => $id, 'title' => $title]);
    }

    /**
     * Create New Section Soal
     *
     * @param  mixed $request
     * @return void
     */
    public function newSection(Request $request)
    {
        $request->validate([
            'groupName' => 'required',
        ]);

        $data = $request->all();

        QuestionSection::create([
            'groupQuestionID' => $data['groupQuestionID'],
            'name' => $data['groupName'],
        ]);

        return Redirect::back()->with('success', 'Paket soal baru telah sukses ditambahkan!');
    }

    /**
     * Edit Section Soal
     *
     * @param  mixed $request
     * @return void
     */
    public function editSection(Request $request)
    {
        $request->validate([
            'groupName' => 'required',
        ]);

        $data = $request->all();

        QuestionSection::where('id', '=', $data['groupSectionID'])
            ->update([
                'groupQuestionID' => $data['groupQuestionID'],
                'name' => $data['groupName']
            ]);

        return Redirect::back()->with('success', 'Paket soal telah sukses di edit!');
    }

    /**
     * Delete Section Soal
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteSection($id)
    {
        $questionSection = QuestionSection::findOrFail($id);
        $questionSection->delete();

        return Redirect::back()->with('fail', 'Paket soal telah sukses dihapus!');
    }

    public function renderSubSection($id)
    {
        $data = DB::table('question_sub_sections')
            ->join('question_sections', 'question_sub_sections.sectionQuestionID', '=', 'question_sections.id')
            ->where('question_sub_sections.sectionQuestionID', '=', $id)
            ->select('question_sub_sections.*')
            ->get();
        $title = DB::table('question_sub_sections')
            ->join('question_sections', 'question_sub_sections.sectionQuestionID', '=', 'question_sections.id')
            ->join('question_groups', 'question_sections.groupQuestionID', '=', 'question_groups.id')
            ->select('question_groups.type', 'question_sections.name')
            ->where('question_sub_sections.id', '=', $id)
            ->first();

        return view('pages.admin.questions.questionSubSectionDashboard', ['data' => $data, 'sectionQuestionID' => $id, 'title' => $title]);
    }

    /**
     * Create New Sub Section Soal
     *
     * @param  mixed $request
     * @return void
     */
    public function newSubSection(Request $request)
    {
        $request->validate([
            'subSectionName' => 'required',
        ]);

        $data = $request->all();

        QuestionSubSection::create([
            'sectionQuestionID' => $data['sectionQuestionID'],
            'name' => $data['subSectionName'],
        ]);

        return Redirect::back()->with('success', 'Paket soal baru telah sukses ditambahkan!');
    }

    /**
     * Edit Sub Section Soal
     *
     * @param  mixed $request
     * @return void
     */
    public function editSubSection(Request $request)
    {
        $request->validate([
            'subSectionName' => 'required',
        ]);

        $data = $request->all();

        QuestionSubSection::where('id', '=', $data['subSectionID'])
            ->update([
                'name' => $data['subSectionName']
            ]);

        return Redirect::back()->with('success', 'Paket soal telah sukses di edit!');
    }

    /**
     * Delete Sub Section Soal
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteSubSection($id)
    {
        $questionSubSection = QuestionSubSection::findOrFail($id);
        $questionSubSection->delete();

        return Redirect::back()->with('fail', 'Paket soal telah sukses dihapus!');
    }

    /**
     * renderQuestion
     *
     * @return void
     */
    public function renderQuestion($id)
    {
        $subSection = DB::table('question_sub_sections')
            ->join('question_sections', 'question_sub_sections.sectionQuestionID', '=', 'question_sections.id')
            ->where('question_sub_sections.id', '=', $id)
            ->select('question_sub_sections.*')
            ->get();
        $question = DB::table('questions')
            ->join('question_sub_sections', 'questions.subsectionID', '=', 'question_sub_sections.id')
            ->where('question_sub_sections.id', '=', $id)
            ->select('questions.*')
            ->get();
        $fQuestion = DB::table('questions')
            ->join('question_sub_sections', 'questions.subsectionID', '=', 'question_sub_sections.id')
            ->where('question_sub_sections.id', '=', $id)
            ->select('questions.*')
            ->first();
        $underLimit = DB::table('questions')
            ->where('questions.sectionID', '=', $fQuestion->sectionID)
            ->first();
        $upperLimit = DB::table('questions')
            ->where('questions.sectionID', '=', $fQuestion->sectionID)
            ->orderBy('created_at', 'desc')
            ->first();
        $title = DB::table('question_sub_sections')
            ->join('question_sections', 'question_sub_sections.sectionQuestionID', '=', 'question_sections.id')
            ->join('question_groups', 'question_sections.groupQuestionID', '=', 'question_groups.id')
            ->select('question_groups.type', 'question_sections.name as sectionName', 'question_sub_sections.name as subSectionName')
            ->where('question_sub_sections.id', '=', $fQuestion->subsectionID)
            ->first();

        return view('pages.admin.questions.questionDashboard', ['subSection' => $subSection, 'question' => $question, 'subsectionID' => $id, 'underLimit' => $underLimit, 'upperLimit' => $upperLimit, 'title' => $title]);
    }

    /**
     * To Create New Question
     *
     * @param  mixed $request
     * @return void
     */
    public function newQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'tipeQuestion' => 'required',
        ]);

        $data = $request->all();

        $sectionID = DB::table('question_sections')
            ->join('question_sub_sections', 'question_sub_sections.sectionQuestionID', '=', 'question_sections.id')
            ->where('question_sub_sections.id', $data['subsectionID'])
            ->select('question_sections.id')
            ->first();

        $groupID = DB::table('question_groups')
            ->join('question_sections', 'question_groups.id', '=', 'question_sections.groupQuestionID')
            ->where('question_sections.id', '=', $sectionID->id)
            ->select('question_groups.id')
            ->first();

        Question::create([
            'groupID' => $groupID->id,
            'sectionID' => $sectionID->id,
            'subsectionID' => $data['subsectionID'],
            'question' => $data['question'],
            'questionType' => $data['tipeQuestion'],
            'minimumScore' => $data['minimumScore'],
            'maximumScore' => $data['maximumScore'],
        ]);

        return Redirect::back()->with('success', 'Soal telah sukses ditambahkan!');
    }

    /**
     * To Edit the Question
     *
     * @param  mixed $request
     * @return void
     */
    public function editQuestion(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'tipeQuestion' => 'required'
        ]);

        $data = $request->all();

        if ($data['tipeQuestion'] == 'number') {
            Question::where('id', '=', $data['questionID'])
                ->update([
                    'question' => $data['question'],
                    'questionType' => $data['tipeQuestion'],
                    'minimumScore' => $data['minimumScore'],
                    'maximumScore' => $data['maximumScore']
                ]);
        } else {
            Question::where('id', '=', $data['questionID'])
                ->update([
                    'question' => $data['question'],
                    'questionType' => $data['tipeQuestion'],
                    'minimumScore' => 0,
                    'maximumScore' => 0
                ]);
        }

        return Redirect::back()->with('success', 'Soal telah sukses diedit!');
    }

    /**
     * To Delete a Question
     *
     * @param  mixed $id
     * @return void
     */
    public function deleteQuestion($id)
    {
        $question = Question::where('id', '=', $id)->first();
        $question->delete();

        return Redirect::back()->with('fail', 'Soal telah sukses dihapus!');
    }
}
