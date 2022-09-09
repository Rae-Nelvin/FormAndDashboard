<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\AnswerPackage;
use App\Models\Question;
use App\Models\QuestionGroup;
use App\Models\QuestionSubSection;
use App\Models\RekapanEDP;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class KuesionerController extends Controller
{
    /**
     * renderKuesioner
     *
     * @param  mixed $id
     * @return void
     */
    public function renderKuesioner($titleID, $sectionID, $subSectionID)
    {
        $title = QuestionGroup::where('id', '=', $titleID)->first();
        $subSection = QuestionSubSection::where('id', '=', $subSectionID)->first();
        $question = Question::where('subSectionID', '=', $subSection->id)->get();
        $underLimit = Question::where('groupID', '=', $titleID)->select('subsectionID')->first();
        $upperLimit = Question::where('groupID', '=', $titleID)->orderBy('id', 'desc')->select('subsectionID')->first();

        return view('pages.user.kuesioner.kuesioner', compact('title', 'subSection', 'question', 'underLimit', 'upperLimit'));
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
    public function storeKuesioner($titleID, $sectionID, $subSectionID, Request $request)
    {
        for ($i = $subSectionID - 1; $i <= $subSectionID - 1; $i++) {
            $data[$i]['groupID'] = (int)$titleID;
            $data[$i]['sectionID'] = (int)$sectionID;
            $data[$i]['subSectionID'] = $subSectionID - 1;
            $data[$i]['questionID'] = $request->questionID;
            $data[$i]['answer'] = $request->answer;
        }

        Session::push('answer', $data);

        return $this->renderKuesioner($titleID, $sectionID, $subSectionID);
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
    public function storeKuesionerFinal($titleID, $sectionID, $subSectionID, Request $request)
    {
        for ($i = $subSectionID - 1; $i <= $subSectionID - 1; $i++) {
            $data[$i]['groupID'] = (int)$titleID;
            $data[$i]['sectionID'] = (int)$sectionID;
            $data[$i]['subSectionID'] = $subSectionID - 1;
            $data[$i]['questionID'] = $request->questionID;
            $data[$i]['answer'] = $request->answer;
        }
        $answerPackage = AnswerPackage::where('penilaiID', '=', Auth::user()->id)->first();

        Session::push('answer', $data);

        $data = session()->get('answer');
        // dd($data);

        // dd(count($data[0][0 + 1]['questionID']));

        for ($i = 0; $i < count($data); $i++) {
            $count = 0;
            $average = 0;
            for ($j = 0; $j < count($data[$i][$i + 1]['questionID']); $j++) {
                $count = $count + $data[$i][$i + 1]['answer'][$j];
                Answer::create([
                    'answerPackageID' => $answerPackage->id,
                    'questionSectionID' => $sectionID,
                    'questionSubSectionID' => $i + 1,
                    'answer' => $data[$i][$i + 1]['answer'][$j]
                ]);
            }
            $average = $count / count($data[$i][$i + 1]['questionID']);

            RekapanEDP::create([
                'userID' => Auth::user()->id,
                'questionSectionID' => (int)$sectionID,
                'questionSubSectionID' => $i + 1,
                'average' => $average,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        dd('Good Job Leonardo Wijaya');
    }
}
