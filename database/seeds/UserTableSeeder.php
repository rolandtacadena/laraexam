<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

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

        $user = User::find(1);
        $user->name = 'user';
        $user->email = 'user@user.com';
        $user->password = bcrypt('090412');
        $user->save();

    }
}
