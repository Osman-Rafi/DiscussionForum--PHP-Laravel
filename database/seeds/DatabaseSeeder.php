<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(ChannelsTableSeeder::class);
        $this->call(discussionsTableSeeder::class);
        $this->call(ReplysTableSeeder::class);
        $this->call(LikesTableSeeder::class);
    }
}
