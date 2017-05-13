<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Teacher::class, 2)->create();

        $this->call(TeacherTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(SubjectTableSeeder::class);
        $this->call(ExamTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
    }
}
