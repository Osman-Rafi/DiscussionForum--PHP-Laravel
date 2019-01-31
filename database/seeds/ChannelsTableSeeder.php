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
            ['title'=>'Laravel','slug'=>str_slug('Laravel')],
            ['title'=>'Vue.js','slug'=>str_slug('Vue.js')],
            ['title'=>'CSS3','slug'=>str_slug('CSS3')],
            ['title'=>'PHP Testing','slug'=>str_slug('PHP Testing')],
            ['title'=>'Ruby','slug'=>str_slug('Ruby')],
            ['title'=>'Python','slug'=>str_slug('Python')],
            ['title'=>'Electron','slug'=>str_slug('Electron')],
        ];

        foreach ($channels as $channel)
            Channels::create($channel);

    }
}
