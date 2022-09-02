<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionGroup;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function renderDashboard()
    {
        $data = QuestionGroup::all();

        return view('pages.admin.dashboard', compact('data'));
    }

    public function createGroup(Request $request)
    {
        $request->validate([
            'type' => 'required'
        ]);

        QuestionGroup::create([
            'title' => $request->type,
            'description' => $request->description,
            'status' => 0
        ]);

        return redirect()->back()->with('success', 'Paket Soal baru telah berhasil dibuat!');
    }

    /**
     * To delete Package Soal
     *
     * @param  mixed $id
     * @return void
     */
    public function deletePackage($id)
    {
        $package = QuestionGroup::findOrFail($id);
        $package->delete();

        return redirect()->back()->with('fail', 'Sebuah paket soal berhasil dihapus!');
    }

    /**
     * renderPengguna
     *
     * @return void
     */
    public function renderPengguna()
    {
        return view('pages.admin.pengguna');
    }

    /**
     * renderJawaban
     *
     * @return void
     */
    public function renderJawaban()
    {
        return view('pages.admin.jawaban.dashboard');
    }

    /**
     * renderAssign
     *
     * @return void
     */
    public function renderAssign()
    {
        return view('pages.admin.assign.dashboard');
    }
}
