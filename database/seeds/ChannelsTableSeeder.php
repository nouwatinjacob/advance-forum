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
        $channel1 = ['title' => 'Laravel'];
        $channel2 = ['title' => 'PHP'];
        $channel3 = ['title' => 'Lumen'];
        $channel4 = ['title' => 'Codeignite'];
        $channel5 = ['title' => 'Forge'];
        $channel6 = ['title' => 'Spark'];
        $channel7 = ['title' => 'Javascript'];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);
        Channel::create($channel7);
    }
}
