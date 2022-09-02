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
            'title' => 'Evaluasi Diri Pendidik',
            'status' => '1',
            'description' => 'Tolong isi 1 sampai 4 <br> 1. Buruk <br> 2. Cukup <br> 3. Baik <br> 4. Sangat Baik',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        QuestionGroup::create([
            'title' => 'Program Pengembangan Keprofesian Berkelanjutan',
            'status' => '1',
            'description' => 'PKB',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // QuestionGroup::create([
        //     'type' => 'SKP',
        //     'status' => '1',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
