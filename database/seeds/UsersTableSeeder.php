<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

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

        $adminRole = Role::create(['name' => 'Admin']);
        $writerRole = Role::create(['name' => 'Writer']);

        $admin = new User;
        $admin->name = 'Cesar Acual';
        $admin->email = 'correo@correo.com';
        $admin->password = bcrypt('secret');
        $admin->save();

        $admin->assignRole($adminRole);

        $writer = new User;
        $writer->name = 'Jorge';
        $writer->email = 'correo2@correo.com';
        $writer->password = bcrypt('secret');
        $writer->save();

        $admin->assignRole($writerRole);
    }
}
