<?php

namespace Database\Seeders;

use App\Models\AnswerPackage;
use App\Models\PeriodeList;
use Illuminate\Database\Seeder;

class KuesionerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PeriodeList::create([
            'name' => "2021/2021"
        ]);

        PeriodeList::create([
            'name' => "2021/2021"
        ]);

        AnswerPackage::create([
            'dinilaiID' => 2,
            'penilaiID' => 2,
            'questionGroupID' => 1,
            'isDone' => 0,
            'periodeID' => 1,
        ]);

        AnswerPackage::create([
            'dinilaiID' => 3,
            'penilaiID' => 3,
            'questionGroupID' => 1,
            'isDone' => 0,
            'periodeID' => 1,
        ]);

        AnswerPackage::create([
            'dinilaiID' => 2,
            'penilaiID' => 2,
            'questionGroupID' => 2,
            'isDone' => 0,
            'periodeID' => 1,
        ]);

        AnswerPackage::create([
            'dinilaiID' => 3,
            'penilaiID' => 3,
            'questionGroupID' => 2,
            'isDone' => 0,
            'periodeID' => 1,
        ]);
    }
}
