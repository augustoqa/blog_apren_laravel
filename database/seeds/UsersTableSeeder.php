<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $user = new User;
        $user->name = 'Cesar Acual';
        $user->email = 'correo@correo.com';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
