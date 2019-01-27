<?php

use Illuminate\Database\Seeder;
use App\Reply;

class ReplysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $replys = [
            ['user_id' => 1, 'discussion_id' => 1, 'content' => 'um accumsan suscipit dui praesent aptent sed, sagittis dui euismod felis, quis odio imperdiet non. Justo sed mi curae sed dictum, metus vel tellus metus nec nonummy ante, felis amet in consequat dui, enim et magna auctor, ornare vestibulum blandit. Lectus suspendisse, pellentesque tellus vitae pede at, natoque ante, quam congue. Sit ut, porta in ultricies tellus accumsan, vestibulum lobortis a, ligul'],
            ['user_id' => 2, 'discussion_id' => 2, 'content' => 'olestie quidem wisi dolor mollis. Nibh velit dictumst id sed accumsan aliquam. Non dignissim, pede pulvinar wisi pede, lacus risus felis porttitor duis. Dictum orci ullamcorper, consequat eleifend volutpat id odio diam, aenean etiam laoreet. Arcu cursus ligula, risus arcu amet quis conubia ri'],
            ['user_id' => 1, 'discussion_id' => 2, 'content' => 'vallis sed massa cursus, ut pellentesque dolor in sed eget pede. In montes fusce vehicula, laoreet et expedita aenean semper, aliquam est in phasellus, morbi ipsum lacus, lacinia natoque suscipit urna. Vel libero mauris habitasse, a rutrum. Pharetra iaculis a turpis accumsan nec, pra'],
            ['user_id' => 2, 'discussion_id' => 2, 'content' => 'turpis condimentum orci suspendisse, arcu turpis in suspendisse felis'],
            ['user_id' => 2, 'discussion_id' => 3, 'content' => 'lutpat dui mi lectus, facilisis consequat dolor dui, at risus molestie'],
            ['user_id' => 1, 'discussion_id' => 4, 'content' => 'integer mauris phasellus senectus in ut. Vel ante sed torto']
        ];

        foreach ($replys as $reply)
            Reply::create($reply);
    }
}
