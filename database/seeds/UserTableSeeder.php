<?php

use App\Teacher;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 10)->create();

        $user = User::first();
        $user->teacher_id = 1;
        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->password = bcrypt('user');
        $user->status = true;
        $user->save();

        $teacher = Teacher::first();
        $teacher->name = 'teacher';
        $teacher->email = 'teacher@teacher.com';
        $teacher->password = bcrypt('teacher');
        $teacher->save();
    }
}
