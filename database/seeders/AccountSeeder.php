<?php

namespace Database\Seeders;

use App\Models\GolonganList;
use App\Models\KelasList;
use App\Models\MataPelajaranList;
use App\Models\PosisiList;
use App\Models\UnitList;
use App\Models\User;
use App\Models\UserDetail;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PosisiList::create([
            'name' => 'Direktur 1'
        ]);

        PosisiList::create([
            'name' => 'Direktur 2'
        ]);

        PosisiList::create([
            'name' => 'Staff'
        ]);

        GolonganList::create([
            'name' => '1A'
        ]);

        GolonganList::create([
            'name' => '2A'
        ]);

        GolonganList::create([
            'name' => '3A'
        ]);

        UnitList::create([
            'name' => 'SMP'
        ]);

        UnitList::create([
            'name' => 'SMA'
        ]);

        KelasList::create([
            'name' => '7'
        ]);

        KelasList::create([
            'name' => '8'
        ]);

        KelasList::create([
            'name' => '9'
        ]);

        KelasList::create([
            'name' => '10'
        ]);

        KelasList::create([
            'name' => '11'
        ]);

        KelasList::create([
            'name' => '12'
        ]);

        KelasList::create([
            'name' => 'Tidak Mengajar'
        ]);

        MataPelajaranList::create([
            'name' => 'IPA'
        ]);

        MataPelajaranList::create([
            'name' => 'IPS'
        ]);

        User::create([
            'name' => 'Leonardo Wijaya',
            'email' => 'admin1@admin.com',
            'password' => Hash::make('admin123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        UserDetail::create([
            'userID' => 1,
            'NIY' => '12345678',
            'posisiID' => 1,
            'golonganID' => 1,
            'unitID' => 1,
            'kelasID' => 7,
            'mataPelajaranID' => 1,
        ]);

        User::create([
            'name' => 'Silvia Pasifica',
            'email' => 'guru1@guru.com',
            'password' => Hash::make('guru123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        UserDetail::create([
            'userID' => 2,
            'NIY' => '12345678',
            'posisiID' => 3,
            'golonganID' => 1,
            'unitID' => 1,
            'kelasID' => 2,
            'mataPelajaranID' => 1,
        ]);

        User::create([
            'name' => 'Adrian Nathanael',
            'email' => 'guru2@guru.com',
            'password' => Hash::make('guru123'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        UserDetail::create([
            'userID' => 3,
            'NIY' => '3212312',
            'posisiID' => 3,
            'golonganID' => 2,
            'unitID' => 2,
            'kelasID' => 3,
            'mataPelajaranID' => 2,
        ]);
    }
}
