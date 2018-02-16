<?php

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
        App\User::create([
            'name' => 'admin',
            'email' => 'admin@advance-forum.com',
            'password' => bcrypt('admin'),
            'admin' => 1,
            'avatar' => asset('avatars/user.jpg'),
        ]);

        App\User::create([
            'name' => 'Nouwatin Jacob',
            'email' => 'jaysansa@gmail.com',
            'password' => bcrypt('password'),
            'avatar' => asset('avatars/user.jpg'),
        ]);
     

    }
}
