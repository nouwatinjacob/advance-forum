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
        Like::create([
            'user_id' => 1,
            'reply_id' => 2,
        ]);

        Like::create([
            'user_id' => 2,
            'reply_id' => 2,
        ]);
    }
}
