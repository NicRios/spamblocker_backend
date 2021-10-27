<?php

namespace Database\Seeders;

use App\Models\Option;
use Illuminate\Database\Seeder;

class OptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $options = [
            ['id' => 1, 'question_id' => 1, 'option' => 'Multiple times a day'],
            ['id' => 2, 'question_id' => 1, 'option' => 'Every few days'],
            ['id' => 3, 'question_id' => 1, 'option' => 'By weekly basis'],
        ];

        Option::insert($options);
    }
}
