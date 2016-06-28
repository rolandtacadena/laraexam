<?php

use App\Admin;
use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class, 2)->create();

        $user = Admin::find(1);
        $user->name = 'admin';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('090412');
        $user->save();
    }
}
