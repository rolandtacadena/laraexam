<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(User::class, 10)->create();
        for($i = 1; $i <= 12; $i++) {
            DB::table('users')->insert([
                'id' => $i,
                'teacher_id' => random_int(1, 2),
                'name' => str_random(20),
                'email' => str_random(20),
                'password' => bcrypt(str_random(10)),
                'status' => (boolean) 1,
                'remember_token' => str_random(10),
            ]);
        }

        $user = User::find(1);
        $user->teacher_id = 1;
        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->password = bcrypt('user');
        $user->status = true;
        $user->save();

    }
}
