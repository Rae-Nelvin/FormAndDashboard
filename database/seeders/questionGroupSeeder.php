<?php

namespace Database\Seeders;

use App\Models\QuestionGroup;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class QuestionGroupSeeder extends Seeder
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
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionGroup::create([
            'type' => 'PKB',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionGroup::create([
            'type' => 'SKP',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionGroup::create([
            'type' => 'Nilai SKP',
            'status' => '1',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
