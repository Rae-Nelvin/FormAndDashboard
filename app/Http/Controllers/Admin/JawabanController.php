<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    public function renderSectionChart()
    {
        return view('pages.admin.jawaban.chart');
    }

    public function renderSectionTable()
    {
        return view('pages.admin.jawaban.table');
    }
}
