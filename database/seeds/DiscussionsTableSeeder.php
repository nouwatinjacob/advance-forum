<?php

use Illuminate\Database\Seeder;

use App\Discussion;

class DiscussionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title1 = 'The Singular Pursuit of Comrade Bezos';
        $title2 = 'Laws of Algebra of Sets';
        $title3 = 'The Beginning of my Success Story';
        $title4 = 'The Release of Laravel 5.6 and its the changes';
        $title5 = 'How to gain the Attention of Ladies';
        $title6 = 'There is no place like home';

        $discussion1 = [
            'user_id' => 2,
            'channel_id' => 4,
            'title' => $title1,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => str_slug($title1)            
        ];

        $discussion2 = [
            'user_id' => 1,
            'channel_id' => 7,
            'title' => $title2,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => str_slug($title2)            
        ];

        $discussion3 = [
            'user_id' => 2,
            'channel_id' => 4,
            'title' => $title3,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => str_slug($title3)            
        ];

        $discussion4 = [
            'user_id' => 2,
            'channel_id' => 4,
            'title' => $title4,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => str_slug($title4)            
        ];

        $discussion5 = [
            'user_id' => 2,
            'channel_id' => 3,
            'title' => $title5,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => str_slug($title5)            
        ];

        $discussion6 = [
            'user_id' => 1,
            'channel_id' => 5,
            'title' => $title6,
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 
                        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in 
                        reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla 
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in 
                        culpa qui officia deserunt mollit anim id est laborum.',
            'slug' => str_slug($title6)            
        ];

        Discussion::create($discussion1);
        Discussion::create($discussion2);
        Discussion::create($discussion3);
        Discussion::create($discussion4);
        Discussion::create($discussion5);
        Discussion::create($discussion6);
    }
}
