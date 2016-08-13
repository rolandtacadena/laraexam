<?php

use App\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Subject::class, 20)->create();
        for($i = 1; $i <= 12; $i++) {
        DB::table('subjects')->insert([
            'id' => $i,
            'teacher_id' => random_int(1,2),
            'name' => str_random(10),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.'
        ]);
    }
    }
}
