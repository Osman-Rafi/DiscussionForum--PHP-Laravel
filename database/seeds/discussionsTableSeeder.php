<?php

use Illuminate\Database\Seeder;
use App\Discussion;

class discussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $t1 = 'Lorem ipsum dolor sit amet';
        $t2 = 'Ea morbi nunc parturient faucibus';
        $t3 = 'Praesent platea ut id magna etiam';
        $t4 = 'Sed nonummy nec suspendisse';
        $t5 = 'justo ultrices molestie aenean nec';
        $t6 = 'nec ac quis consequat risus';

        $discussions = [
            ['user_id' => 2,
                'channel_id' => 1,
                'title' => $t1,
                'content' => 'Lorem ipsum dolor sit amet, sapien in augue ipsum et ipsum, integer velit praesent feugiat id donec bibendum. Taciti sagittis, ornare at etiam ac orci, at et sed nullam est nam, sodales quis metus dui, est lorem tellus. Suspendisse integer lacinia sollicitudin neque pharetra vestibulum, ipsum accumsan suscipit dui praesent aptent sed, sagittis dui euismod felis, quis odio imperdiet non. Justo sed mi curae sed dictum, metus vel tellus metus nec nonummy ante, felis amet in consequat dui, enim et magna auctor, ornare vestibulum blandit. Lectus suspendisse, pellentesque tellus vitae pede at, natoque ante, quam congue. Sit ut, porta in ultricies tellus accumsan, vestibulum lobortis a, ligula sed egestas justo semper. Nec lorem hendrerit malesuada cras nunc maecenas. Tortor sit, etiam dolor. Nulla sodales vulputate feugiat nulla, mattis quis dolor nam semper in, magnis egestas, ut eget.',
                'slug' => str_slug($t1)],

            ['user_id' => 1,
                'channel_id' => 2,
                'title' => $t2,
                'content' => 'Ea morbi nunc parturient faucibus, quam placerat ut metus viverra, neque elit cras tincidunt id, ipsum lacus eu diam vehicula. Class elementum, justo est quis morbi eleifend cras suscipit, vitae cursus etiam nostra. Augue in ut gravida arcu sed pellentesque, morbi iaculis nullam et, in ac volutpat dui mi lectus, facilisis consequat dolor dui, at risus molestie quidem wisi dolor mollis. Nibh velit dictumst id sed accumsan aliquam. Non dignissim, pede pulvinar wisi pede, lacus risus felis porttitor duis. Dictum orci ullamcorper, consequat eleifend volutpat id odio diam, aenean etiam laoreet. Arcu cursus ligula, risus arcu amet quis conubia risus nibh, maecenas rutrum sit volutpat vitae, turpis condimentum orci suspendisse, arcu turpis in suspendisse felis venenatis laoreet. Laudantium dictum dui varius, vel ut, dui enim varius voluptate sapien suspendisse, integer mauris phasellus senectus in ut. Vel ante sed tortor, justo ultrices molestie aenean nec, molestie risus convallis sed massa cursus, ut pellentesque dolor in sed eget pede. In montes fusce vehicula, laoreet et expedita aenean semper, aliquam est in phasellus, morbi ipsum lacus, lacinia natoque suscipit urna. Vel libero mauris habitasse, a rutrum. Pharetra iaculis a turpis accumsan nec, praesent etiam egestas ultricies, habitant felis ac, eget magna vestibulum.',
                'slug' => str_slug($t2)],

            ['user_id' => 2,
                'channel_id' => 1,
                'title' => $t3,
                'content' => 'Praesent platea ut id magna etiam. Nam suscipit mi id fermentum ipsum fames, amet nec fusce erat ipsum, est enim pretium id donec sapien sed. Vulputate fringilla dui wisi eu viverra suscipit, vel ac viverra, in pede. Ut vel erat dolor, magna vestibulum mauris. Duis dapibus voluptatem libero, suscipit mauris pellentesque, adipiscing dapibus blandit. Ipsum elementum ipsum ridiculus. Felis blandit vulputate ac, risus id sapien sodales, eros porttitor suspendisse odio, scelerisque a dolor dui. Pariatur urna ut, nec ac quis consequat risus. Nisl quam euismod, vitae sapien lobortis lectus autem eros urna, mauris sollicitudin vel vehicula enim et, feugiat tortor non neque augue habitasse.',
                'slug' => str_slug($t3)],
            ['user_id' => 1,
                'channel_id' => 2,
                'title' => $t4,
                'content' => 'Sed nonummy nec suspendisse. Elementum nonummy. Duis gravida at ac interdum. Vel id integer, facilisis turpis consectetuer erat adipiscing, elementum ut magna blandit odio quis nibh, volutpat tortor lacus enim cubilia lacus penatibus, turpis varius felis purus. Eu id nam. Cumque porta, sit quis nunc posuere vitae, neque arcu lorem, eget morbi posuere ante odio justo. Tortor amet sem et sodales et, enim dolores penatibus est sapien, tincidunt varius, sociis id lectus id feugiat. Sem scelerisque platea, pede sed vivamus, ultrices a, nunc leo nam dictum, fringilla eget leo egestas aliquam id. Convallis duis dis adipiscing, orci quisque, vel rhoncus, mollis nisl. Ut magna torquent iaculis, vestibulum risus magnis lacinia neque, luctus et consectetuer dui lorem tempor neque, ante suscipit id arcu sit. Ut proin viverra neque cras eu nec, dictum viverra est, laboriosam lacus sapien aliquam est, cras sem amet elit sed nullam. Eu egestas, in integer vehicula leo sit erat habitasse, donec viverra tortor elementum, id dolor quam ligula purus turpis aliquet.',
                'slug' => str_slug($t4)],
            ['user_id' => 2,
                'channel_id' => 3,
                'title' => $t5,
                'content' => 'magna vestibulum mauris. Duis dapibus voluptatem libero, suscipit mauris pellentesque, adipiscing dapibus blandit. Ipsum elementum ipsum ridiculus. Felis blandit vulputate ac, risus id sapien sodales, eros porttitor suspendisse odio, scelerisque a dolor dui. Pariatur urna ut, nec ac quis consequat risus. Nisl quam euismod, vitae sapien lobortis lectus autem eros urna, mauris sollicitudin vel vehicula enim et, feugiat tortor non neque augue habitasse.',
                'slug' => str_slug($t5)],
            ['user_id' => 1,
                'channel_id' => 4,
                'title' => $t6,
                'content' => 'lor in sed eget pede. In montes fusce vehicula, laoreet et expedita aenean semper, aliquam est in phasellus, morbi ipsum lacus, lacinia natoque suscipit urna. Vel libero mauris habitasse, a rutrum. Pharetra iaculis a turpis accumsan nec, praesent etiam egestas ultricies, habitant felis ac, eget magna vestibulum.Praesent platea ut id magna etiam. Nam suscipit mi id fermentum ipsum fames, amet nec fusce erat ipsum, est enim pretium id donec sapien sed. Vulputate fringilla dui wisi eu viverra suscipit, vel ac viverra, in pe',
                'slug' => str_slug($t6)],

        ];

        foreach ($discussions as $discussion)
            Discussion::create($discussion);
    }
}
