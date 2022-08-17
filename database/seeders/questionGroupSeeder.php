<?php

namespace Database\Seeders;

use App\Models\QuestionGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class questionGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QuestionGroup::create([
            'type' => 'EDP',
            'status' => '1',
        ]);

        QuestionGroup::create([
            'type' => 'PKB',
            'status' => '1',
        ]);

        QuestionGroup::create([
            'type' => 'SKP',
            'status' => '1',
        ]);
    }
}
