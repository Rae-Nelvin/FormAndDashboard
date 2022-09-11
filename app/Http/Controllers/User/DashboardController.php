<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AnswerPackage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * To render dashboard
     *
     * @return void
     */
    public function render()
    {
        $answerPackage = AnswerPackage::where('penilaiID', '=', Auth::user()->id)->where('isDone', '=', 0)->get();

        return view('pages.user.dashboard', compact('answerPackage'));
    }
}
