<?php

use Illuminate\Database\Seeder;

use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $channel1 = ['title' => 'Laravel', 'slug' => str_slug('Laravel')];
        $channel2 = ['title' => 'PHP', 'slug' => str_slug('PHP')];
        $channel3 = ['title' => 'Lumen', 'slug' => str_slug('Lumen')];
        $channel4 = ['title' => 'Codeignite', 'slug' => str_slug('Codeignite')];
        $channel5 = ['title' => 'Forge', 'slug' => str_slug('Forge')];
        $channel6 = ['title' => 'Spark', 'slug' => str_slug('Spark')];
        $channel7 = ['title' => 'Javascript', 'slug' => str_slug('Javascript')];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);
        Channel::create($channel7);
    }
}
