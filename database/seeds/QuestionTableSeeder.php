<?php

use App\Question;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Question::class, 500)->create();
        for($i = 1; $i <= 100; $i++) {
            DB::table('questions')->insert([
                'id' => $i,
                'question' => str_random(100),
                'exam_id' => random_int(1, 10),
                'choice1' => str_random(10),
                'choice2' => str_random(10),
                'choice3' => str_random(10),
                'choice4' => str_random(10),
                'answer' => str_random(10)
            ]);
        }
    }
}
