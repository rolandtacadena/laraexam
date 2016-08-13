<?php

use App\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Teacher::class, 2)->create();
        for($i = 1; $i <= 2; $i++) {
            DB::table('teachers')->insert([
                'id' => $i,
                'name' => str_random(20),
                'email' => str_random(20),
                'password' => bcrypt(str_random(10)),
                'status' => (boolean) 1,
                'remember_token' => str_random(10),
            ]);
        }

        $user = Teacher::find(1);
        $user->name = 'teacher';
        $user->email = 'teacher@teacher.com';
        $user->password = bcrypt('teacher');
        $user->save();
    }
}
