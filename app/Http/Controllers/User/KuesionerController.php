<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\AnswerPackage;
use App\Models\Question;
use App\Models\QuestionGroup;
use App\Models\QuestionSection;
use App\Models\QuestionSubSection;
use App\Models\RekapanEDP;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class KuesionerController extends Controller
{
    /**
     * renderKuesioner
     *
     * @param  mixed $id
     * @return void
     */
    public function renderKuesionerEDP($titleID, $sectionID, $subSectionID)
    {
        $title = QuestionGroup::where('id', '=', $titleID)->first();
        $sectionIDnew = QuestionSubSection::where('id', '=', $subSectionID - 1)->first();
        $subSection = QuestionSubSection::where('id', '=', $subSectionID)->first();
        $question = Question::where('subSectionID', '=', $subSection->id)->get();
        $underLimit = Question::where('groupID', '=', $titleID)->select('subsectionID')->first();
        $upperLimit = Question::where('groupID', '=', $titleID)->orderBy('id', 'desc')->select('subsectionID')->first();
        $answer = DB::table('answers')
            ->join('answer_packages', 'answer_packages.id', '=', 'answers.answerPackageID')
            ->where('dinilaiID', '=', Auth::user()->id)
            ->where('isDone', '=', 0)
            ->where('questionGroupID', '=', 1)
            ->where('questionSubSectionID', '=', $subSectionID)
            ->select('answers.answer', 'answers.questionID')
            ->get();

        return view('pages.user.kuesioner.kuesioner', compact('title', 'subSection', 'question', 'underLimit', 'upperLimit', 'answer'));
    }

    /**
     * storeKuesioner
     *
     * @param  mixed $titleID
     * @param  mixed $sectionID
     * @param  mixed $subSectionID
     * @param  mixed $request
     * @return void
     */
    public function storeKuesionerEDP($titleID, $sectionID, $subSectionID, Request $request)
    {
        $sectionIDnew = QuestionSubSection::where('id', '=', $subSectionID - 1)->first();
        $answerPackageID = DB::table('answer_packages')
            ->where('answer_packages.dinilaiID', '=', Auth::user()->id)
            ->where('answer_packages.isDone', '=', 0)
            ->where('answer_packages.periodeID', '=', 1)
            ->where('answer_packages.questionGroupID', '=', 1)
            ->select('answer_packages.*')
            ->first();
        $allData = DB::table('answers')
            ->join('answer_packages', 'answers.answerPackageID', '=', 'answer_packages.id')
            ->where('answer_packages.dinilaiID', '=', Auth::user()->id)
            ->where('answer_packages.isDone', '=', 0)
            ->where('answer_packages.periodeID', '=', 1)
            ->where('answer_packages.questionGroupID', '=', 1)
            ->where('answers.questionSectionID', '=', (int)$sectionIDnew->sectionQuestionID)
            ->where('answers.questionSubSectionID', '=', $subSectionID - 1)
            ->select('answer_packages.*', 'answers.*')
            ->get();
        $answer = $request->all();

        if (!$allData->isEmpty()) {
            $i = 0;
            foreach ($allData as $items) {
                Answer::where('id', '=', $items->id)
                    ->update([
                        'answer' => $answer['answer'][$i],
                    ]);
                $i++;
            }
        } else {
            for ($i = 0; $i < count($answer['answer']); $i++) {
                Answer::create([
                    'answerPackageID' => $answerPackageID->id,
                    'questionSectionID' => (int)$sectionIDnew->sectionQuestionID,
                    'questionSubSectionID' => $subSectionID - 1,
                    'questionID' => $answer['questionID'][$i],
                    'answer' => $answer['answer'][$i],
                ]);
            }
        }

        return $this->renderKuesionerEDP($titleID, $sectionID, $subSectionID);
    }

    /**
     * storeKuesionerFinal
     *
     * @param  mixed $titleID
     * @param  mixed $sectionID
     * @param  mixed $subSectionID
     * @param  mixed $request
     * @return void
     */
    public function storeKuesionerFinalEDP($titleID, $sectionID, $subSectionID, Request $request)
    {
        $sectionIDnew = QuestionSubSection::where('id', '=', $subSectionID - 1)->first();
        $answerPackageID = DB::table('answer_packages')
            ->where('answer_packages.dinilaiID', '=', Auth::user()->id)
            ->where('answer_packages.isDone', '=', 0)
            ->where('answer_packages.periodeID', '=', 1)
            ->where('answer_packages.questionGroupID', '=', 1)
            ->select('answer_packages.*')
            ->first();
        $answer = $request->all();

        for ($i = 0; $i < count($answer['answer']); $i++) {
            Answer::create([
                'answerPackageID' => $answerPackageID->id,
                'questionSectionID' => (int)$sectionIDnew->sectionQuestionID,
                'questionSubSectionID' => $subSectionID - 1,
                'questionID' => $answer['questionID'][$i],
                'answer' => $answer['answer'][$i],
            ]);
        }

        $answers = DB::table('answers')
            ->join('answer_packages', 'answer_packages.id', '=', 'answers.answerPackageID')
            ->where('answer_packages.questionGroupID', '=', 1)
            ->where('dinilaiID', '=', Auth::user()->id)
            ->where('answer_packages.isDone', '=', 0)
            ->select('answers.*')
            ->get();

        $answers = json_decode(json_encode($answers), true);

        $data = [];

        $questionSubSection = QuestionSubSection::where('groupQuestionID', '=', 1)->get();
        foreach ($questionSubSection as $items) {
            $count = 0;
            $subAverage = 0;
            $question = Question::where('subsectionID', '=', $items->id)->get();
            foreach ($question as $data) {
                $count = $count + (int)$answers[$data->id - 1]['answer'];
            }
            $subAverage = $count / count($question);
            RekapanEDP::create([
                'userID' => Auth::user()->id,
                'questionSectionID' => $items->sectionQuestionID,
                'questionSubSectionID' => $items->id,
                'average' => $subAverage,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        return redirect('user/rekapanEDP');
    }

    public function renderRekapanEDP()
    {
        $rekapan = DB::table('rekapan_e_d_p_s')
            ->join('question_sub_sections', 'rekapan_e_d_p_s.questionSubSectionID', '=', 'question_sub_sections.id')
            ->select('rekapan_e_d_p_s.average', 'question_sub_sections.name', 'rekapan_e_d_p_s.questionSectionID')
            ->get();
        $title = QuestionGroup::where('id', '=', 1)->first();
        $section = QuestionSection::where('groupQuestionID', '=', 1)->get();
        $subSection = QuestionSubSection::get();
        $question = Question::where('groupID', '=', 1)->get();
        return view('pages.user.kuesioner.rekapanEDP', compact('rekapan', 'section', 'subSection', 'question'));
    }
}
