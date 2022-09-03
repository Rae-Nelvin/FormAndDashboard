<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GolonganList;
use App\Models\KelasList;
use App\Models\MataPelajaranList;
use App\Models\PosisiList;
use App\Models\UnitList;
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
        $posisi = PosisiList::all();

        return view('pages.admin.assign.detail', compact('posisi'));
    }
}
