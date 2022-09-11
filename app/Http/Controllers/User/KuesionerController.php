<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\AnswerPackage;
use App\Models\NilaiEDP;
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
     * checkKuesioner
     *
     * @param  mixed $titleID
     * @param  mixed $sectionID
     * @param  mixed $subSectionID
     * @param  mixed $periodeID
     * @return void
     */
    public function checkKuesioner($titleID, $sectionID, $subSectionID, $periodeID)
    {
        if ($titleID == 1) {
            return $this->renderFirstKuesionerEDP($titleID, $periodeID);
        } else if ($titleID == 2) {
            return $this->renderFirstKuesionerPKB($titleID, $periodeID);
        }
    }

    public function renderFirstKuesionerEDP($titleID, $periodeID)
    {
        $title = QuestionGroup::where('id', '=', $titleID)->first();
        $section = QuestionSection::where('groupQuestionID', '=', $titleID)->first();
        $subSection = QuestionSubSection::where('groupQuestionID', '=', $titleID)->first();
        $question = Question::where('subSectionID', '=', $subSection->id)->get();
        $underLimit = Question::where('groupID', '=', $titleID)->select('subsectionID')->first();
        $upperLimit = Question::where('groupID', '=', $titleID)->orderBy('id', 'desc')->select('subsectionID')->first();
        $answer = DB::table('answers')
            ->join('answer_packages', 'answer_packages.id', '=', 'answers.answerPackageID')
            ->where('dinilaiID', '=', Auth::user()->id)
            ->where('isDone', '=', 0)
            ->where('questionGroupID', '=', $titleID)
            ->where('periodeID', '=', $title->periodeID)
            ->where('questionSubSectionID', '=', $subSection->id)
            ->select('answers.answer', 'answers.questionID')
            ->get();
        $periode = $periodeID;

        return view('pages.user.kuesioner.EDP', compact('title', 'subSection', 'question', 'underLimit', 'upperLimit', 'answer', 'periode'));
    }

    /**
     * renderKuesioner
     *
     * @param  mixed $id
     * @return void
     */
    public function renderKuesionerEDP($titleID, $sectionID, $subSectionID, $periodeID)
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
            ->where('periodeID', '=', $periodeID)
            ->where('questionSubSectionID', '=', $subSectionID)
            ->select('answers.answer', 'answers.questionID')
            ->get();

        $periode = $periodeID;

        return view('pages.user.kuesioner.EDP', compact('title', 'subSection', 'question', 'underLimit', 'upperLimit', 'answer', 'periode'));
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
            ->where('answer_packages.periodeID', '=', $request->periodeID)
            ->where('answer_packages.questionGroupID', '=', $request->periodeID)
            ->select('answer_packages.*')
            ->first();
        $allData = DB::table('answers')
            ->join('answer_packages', 'answers.answerPackageID', '=', 'answer_packages.id')
            ->where('answer_packages.dinilaiID', '=', Auth::user()->id)
            ->where('answer_packages.isDone', '=', 0)
            ->where('answer_packages.periodeID', '=', $request->periodeID)
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

        $periode = $request->periodeID;

        return $this->renderKuesionerEDP($titleID, $sectionID, $subSectionID, $periode);
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
    public function storeKuesionerFinalEDP($subSectionID, Request $request)
    {
        $sectionIDnew = QuestionSubSection::where('id', '=', $subSectionID - 1)->first();
        $answerPackageID = DB::table('answer_packages')
            ->where('answer_packages.dinilaiID', '=', Auth::user()->id)
            ->where('answer_packages.isDone', '=', 0)
            ->where('answer_packages.periodeID', '=', $request->periodeID)
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
            ->where('answer_packages.periodeID', '=', $request->periodeID)
            ->where('answer_packages.isDone', '=', 0)
            ->select('answers.*')
            ->get();

        $answers = json_decode(json_encode($answers), true);

        $rekapan = RekapanEDP::create([
            'userID' => Auth::user()->id,
            'paketJawabanID' => $answerPackageID->id,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        $rekapan->save();

        $questionSubSection = QuestionSubSection::where('groupQuestionID', '=', 1)->get();
        foreach ($questionSubSection as $items) {
            $count = 0;
            $subAverage = 0;
            $question = Question::where('subsectionID', '=', $items->id)->get();
            foreach ($question as $data) {
                $count = $count + (int)$answers[$data->id - 1]['answer'];
            }
            $subAverage = $count / count($question);
            NilaiEDP::create([
                'rekapanEDPID' => $rekapan->id,
                'questionSectionID' => $items->sectionQuestionID,
                'questionSubSectionID' => $items->id,
                'average' => $subAverage,
            ]);
        }

        AnswerPackage::where('id', '=', $answerPackageID->id)->update([
            'isDone' => 1,
        ]);

        return redirect('user/rekapanEDP/' . $answerPackageID->id);
    }

    /**
     * renderRekapanEDP
     *
     * @param  mixed $id
     * @return void
     */
    public function renderRekapanEDP($id)
    {
        $rekapan = DB::table('nilai_e_d_p_s')
            ->join('rekapan_e_d_p_s', 'nilai_e_d_p_s.rekapanEDPID', '=', 'rekapan_e_d_p_s.id')
            ->join('question_sub_sections', 'nilai_e_d_p_s.questionSubSectionID', '=', 'question_sub_sections.id')
            ->where('paketJawabanID', '=', $id)
            ->select('nilai_e_d_p_s.*', 'question_sub_sections.name')
            ->get();
        $title = QuestionGroup::where('id', '=', 1)->first();
        $section = QuestionSection::where('groupQuestionID', '=', 1)->get();
        $subSection = QuestionSubSection::get();
        $question = Question::where('groupID', '=', 1)->get();
        return view('pages.user.kuesioner.rekapanEDP', compact('rekapan', 'section', 'subSection', 'question', 'rekapan'));
    }

    public function renderFirstKuesionerPKB($titleID, $periodeID)
    {
        $title = QuestionGroup::where('id', '=', $titleID)->first();
        $rekapan = DB::table('nilai_e_d_p_s')
            ->join('rekapan_e_d_p_s', 'rekapan_e_d_p_s.id', '=', 'nilai_e_d_p_s.rekapanEDPID')
            ->join('answer_packages', 'answer_packages.id', '=', 'rekapan_e_d_p_s.paketJawabanID')
            ->where('rekapan_e_d_p_s.userID', '=', Auth::user()->id)
            ->where('periodeID', '=', $periodeID)
            ->select('nilai_e_d_p_s.*')
            ->get();

        $rekapan = json_decode(json_encode($rekapan), true);

        for ($i = 0; $i < count($rekapan); $i++) {
            if ($rekapan[$i]['average'] < 2.5) {
                break;
            }
        }

        for ($j = $i + 1; $j < count($rekapan); $j++) {
            if ($rekapan[$j]['average'] < 2.5) {
                break;
            } else if ($j == count($rekapan) - 1) {
                $j = 0;
                break;
            }
        }

        $subSection = QuestionSubSection::where('id', '=', $rekapan[$i + 1]['questionSubSectionID'])->first();
        $question = Question::where('question', 'like', '%' . $subSection->name . '%')->get();
        $answer = DB::table('answers')
            ->join('answer_packages', 'answer_packages.id', '=', 'answers.answerPackageID')
            ->where('dinilaiID', '=', Auth::user()->id)
            ->where('isDone', '=', 0)
            ->where('questionGroupID', '=', $titleID)
            ->where('periodeID', '=', $periodeID)
            ->where('questionSubSectionID', '=', $subSection->id)
            ->select('answers.answer', 'answers.questionID')
            ->get();
        $periode = $periodeID;
        $upperLimit = $j;
        $underLimit = 0;

        return view('pages.user.kuesioner.PKB', compact('title', 'subSection', 'question', 'answer', 'periode', 'upperLimit', 'underLimit'));
    }

    /**
     * renderKuesionerPKB
     *
     * @param  mixed $titleID
     * @param  mixed $sectionID
     * @param  mixed $subSectionID
     * @param  mixed $periodeID
     * @return void
     */
    public function renderKuesionerPKB($titleID, $sectionID, $subSectionID, $periodeID)
    {
        $title = QuestionGroup::where('id', '=', $titleID)->first();
        $rekapan = DB::table('nilai_e_d_p_s')
            ->join('rekapan_e_d_p_s', 'rekapan_e_d_p_s.id', '=', 'nilai_e_d_p_s.rekapanEDPID')
            ->join('answer_packages', 'answer_packages.id', '=', 'rekapan_e_d_p_s.paketJawabanID')
            ->where('rekapan_e_d_p_s.userID', '=', Auth::user()->id)
            ->where('periodeID', '=', $periodeID)
            ->select('nilai_e_d_p_s.*')
            ->get();

        $rekapan = json_decode(json_encode($rekapan), true);

        for ($i = $subSectionID; $i < count($rekapan); $i++) {
            if ($rekapan[$i]['average'] < 2.5) {
                break;
            }
        }

        for ($j = $i + 1; $j < count($rekapan); $j++) {
            if ($rekapan[$j]['average'] < 2.5) {
                $upperLimit = "true";
                break;
            } else if ($j == count($rekapan) - 1) {
                $j = 0;
                $upperLimit = "false";
                break;
            }
        }

        $subSection = QuestionSubSection::where('id', '=', $rekapan[$i]['questionSubSectionID'])->first();
        $question = Question::where('question', 'like', '%' . $subSection->name . '%')->get();
        $answer = DB::table('answers')
            ->join('answer_packages', 'answer_packages.id', '=', 'answers.answerPackageID')
            ->where('dinilaiID', '=', Auth::user()->id)
            ->where('isDone', '=', 0)
            ->where('questionGroupID', '=', $titleID)
            ->where('periodeID', '=', $periodeID)
            ->where('questionSubSectionID', '=', $subSection->id)
            ->select('answers.answer', 'answers.questionID')
            ->get();
        $periode = $periodeID;
        $underLimit = 0;

        return view('pages.user.kuesioner.PKB', compact('title', 'subSection', 'question', 'answer', 'periode', 'upperLimit', 'underLimit'));
    }

    /**
     * storeKuesionerPKB
     *
     * @param  mixed $titleID
     * @param  mixed $sectionID
     * @param  mixed $subSectionID
     * @param  mixed $request
     * @return void
     */
    public function storeKuesionerPKB($titleID, $sectionID, $subSectionID, Request $request)
    {
        $dataInput = $request->all();
        $answerPackageID = AnswerPackage::where('periodeID', '=', $request->periodeID)->where('questionGroupID', '=', 2)->where('isDone', '=', 0)->where('dinilaiID', '=', Auth::user()->id)->first();

        foreach ($dataInput['answer'] as $items) {
            $chk = "";
            $question = Question::where('id', '=', $items['answers']['questionID'])->first();
            $i = 0;
            if ($question->questionType == "checkbox") {
                foreach ($items['answers']['answer'] as $chk1) {
                    $chk .= $chk1 . ",";
                }
                $i = $i + 1;
                Answer::create([
                    'answerPackageID' => $answerPackageID->id,
                    'questionSectionID' => $question->sectionID,
                    'questionSubSectionID' => $question->subsectionID,
                    'questionID' => $question->id,
                    'answer' => $chk
                ]);
            } else {
                Answer::create([
                    'answerPackageID' => $answerPackageID->id,
                    'questionSectionID' => $question->sectionID,
                    'questionSubSectionID' => $question->subsectionID,
                    'questionID' => $question->id,
                    'answer' => $items['answers']['answer'][0]
                ]);
            }
        }

        $periodeID = $request->periodeID;

        if ($request->final == true) {
            AnswerPackage::where('id', '=', $answerPackageID->id)->update([
                'isDone' => 1,
            ]);
        } else {
            return $this->renderKuesionerPKB($titleID, $sectionID, $subSectionID, $periodeID);
        }
    }

    public function renderRekapanPKB($id)
    {
        $answerPackageID = AnswerPackage::where('dinilaiID', '=', Auth::user()->id)->where('periodeID', '=', $id)->where('questionGroupID', '=', 2)->first();
        $answer = Answer::where('answerPackageID', '=', $answerPackageID->id)->get();
        $section = QuestionSection::where('groupQuestionID', '=', 2)->get();


        return view('pages.user.kuesioner.rekapanPKB', compact('answer', 'section'));
    }
}
