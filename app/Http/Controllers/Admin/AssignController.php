<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AssignController extends Controller
{
    /**
     * renderAssignTable
     *
     * @return void
     */
    public function renderAssignTable()
    {
        return view('pages.admin.assign.assignTable');
    }

    public function renderAssignDetail()
    {
        return view('pages.admin.assign.detail');
    }
}
