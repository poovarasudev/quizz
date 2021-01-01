<?php

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
        $quizzes = \App\Quiz::where('publish', '1')->get();
        foreach ($quizzes as $quiz) {
            for($i = 1; $i <= $quiz->number_of_question; $i++) {
                \App\Question::create([
                    'quiz_id' => $quiz->id,
                    'question' => $quiz->title . ' - Question ' . $i,
                    'correct_answer' => random_int(1, 4),
                    'option_1' => 'Option One',
                    'option_2' => 'Option Two',
                    'option_3' => 'Option Three',
                    'option_4' => 'Option Four',
                ]);
            }
        }
    }
}
