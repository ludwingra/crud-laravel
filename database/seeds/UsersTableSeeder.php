<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = new User();

        $users->name = 'Jhonatan Fernandez';
        $users->email = 'jhonatan.fernandez@gmail.com';
        $users->password = bcrypt('123456');
        $users->save();

        $users = new User();

        $users->name = 'Pepito';
        $users->email = 'pepito@gmail.com';
        $users->password = bcrypt('123456');
        $users->save();
    }
}
