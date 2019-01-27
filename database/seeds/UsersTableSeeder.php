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
        $users = [
            ['name' => 'Osman', 'password' => bcrypt('osman'), 'email' => 'rafi@mail.com', 'admin' => 1, 'avatar' => asset('avater/avater.png')],
            ['name' => 'Rafi', 'password' => bcrypt('rafi'), 'email' => 'rafi@gmail.com', 'admin' => 0, 'avatar' => asset('avater/avater.png')],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
