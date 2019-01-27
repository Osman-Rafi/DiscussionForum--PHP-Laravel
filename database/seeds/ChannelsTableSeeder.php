<?php

use Illuminate\Database\Seeder;
use App\Channels;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channels=[
            ['title'=>'Laravel'],
            ['title'=>'Vue.js'],
            ['title'=>'CSS3'],
            ['title'=>'PHP Testing'],
            ['title'=>'Ruby'],
            ['title'=>'Python'],
            ['title'=>'Electron'],
        ];

        foreach ($channels as $channel)
            Channels::create($channel);

    }
}
