<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GolonganList;
use App\Models\KelasList;
use App\Models\MataPelajaranList;
use App\Models\PosisiList;
use App\Models\QuestionGroup;
use App\Models\UnitList;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function renderDashboard()
    {
        $user = Auth::user();
        $userDetail = UserDetail::where('userID', '=', $user->id)->first();
        $data = QuestionGroup::all();

        return view('pages.admin.dashboard', compact('data', 'user', 'userDetail'));
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
        $golongan = GolonganList::all();
        $kelas = KelasList::all();
        $mataPelajaran = MataPelajaranList::all();
        $posisi = PosisiList::all();
        $unit = UnitList::all();

        return view('pages.admin.pengguna', compact('golongan', 'kelas', 'mataPelajaran', 'posisi', 'unit'));
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
