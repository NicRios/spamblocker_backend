<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $questions = [
            ['id' => 1, 'name' => 'How often do you expect calls?'],
            ['id' => 2, 'name' => 'To your best estimate, what states do you expect typical calls to originate from? (Please check all that apply)'],
            ['id' => 3, 'name' => 'On a regular basis, which industries or kinds of companies (if any) do you expect calls from? (Please check all that apply)'],
        ];

        Question::insert($questions);
    }
}
