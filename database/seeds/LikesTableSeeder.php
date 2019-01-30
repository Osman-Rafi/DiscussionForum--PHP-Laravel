<?php

use Illuminate\Database\Seeder;
use App\Like;

class LikesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $likes=[
            ['reply_id' => 1,'user_id'=>1],
            ['reply_id' => 2,'user_id'=>2]
        ];

        foreach ($likes as $like)
            Like::create($like);
    }
}
