<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\QuestionGroup;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * To delete Package Soal
     *
     * @param  mixed $id
     * @return void
     */
    public function deletePackage($id)
    {
        $package = QuestionGroup::findOrFail($id);
        $package->delet();

        return redirect()->back()->with('fail', 'Sebuah paket soal berhasil dihapus!');
    }
}
