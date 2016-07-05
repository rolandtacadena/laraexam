<?php

use App\Teacher;
use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Teacher::class, 2)->create();

        $user = Teacher::find(1);
        $user->name = 'teacher';
        $user->email = 'teacher@teacher.com';
        $user->password = bcrypt('teacher');
        $user->save();
    }
}
