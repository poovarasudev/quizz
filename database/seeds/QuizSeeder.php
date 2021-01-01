<?php

use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Quiz::create([
            'title' => 'Quiz One',
            'user_id' => 1,
            'number_of_question' => '5',
            'marks_per_question' => '2',
            'passing_marks' => '8',
            'description' => 'Quiz One Description',
            'publish' => '1',
        ]);

        \App\Quiz::create([
            'title' => 'Quiz Two',
            'user_id' => 1,
            'number_of_question' => '10',
            'marks_per_question' => '1',
            'passing_marks' => '7',
            'description' => 'Quiz Two Description',
            'publish' => '1',
        ]);

        \App\Quiz::create([
            'title' => 'Quiz Three',
            'user_id' => 1,
            'number_of_question' => '15',
            'marks_per_question' => '5',
            'passing_marks' => '50',
            'description' => 'Quiz Three Description',
            'publish' => '1',
        ]);

        \App\Quiz::create([
            'title' => 'Quiz Four',
            'user_id' => 1,
            'number_of_question' => '20',
            'marks_per_question' => '3',
            'passing_marks' => '50',
            'description' => 'Quiz Four Description',
            'publish' => '1',
        ]);

        \App\Quiz::create([
            'title' => 'Quiz Five',
            'user_id' => 1,
            'number_of_question' => '8',
            'marks_per_question' => '1',
            'passing_marks' => '5',
            'description' => 'Quiz Five Description',
            'publish' => '0',
        ]);

        \App\Quiz::create([
            'title' => 'Quiz Six',
            'user_id' => 1,
            'number_of_question' => '6',
            'marks_per_question' => '2',
            'passing_marks' => '10',
            'description' => 'Quiz Six Description',
            'publish' => '0',
        ]);
    }
}
