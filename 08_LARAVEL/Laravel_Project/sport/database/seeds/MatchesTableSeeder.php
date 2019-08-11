<?php

use Illuminate\Database\Seeder;

class MatchesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('matches')->delete();
        
        \DB::table('matches')->insert(array (
            0 => 
            array (
                'id' => 1,
                'team1_id' => 1,
                'team2_id' => 3,
                'open' => 0,
                'winner_id' => 1,
                'stats_id' => NULL,
                'match_start' => '2018-08-11 17:45:00',
                'created_at' => '2018-08-09 14:51:35',
                'updated_at' => '2018-08-09 14:51:35',
            ),
            1 => 
            array (
                'id' => 2,
                'team1_id' => 2,
                'team2_id' => 1,
                'open' => 1,
                'winner_id' => 0,
                'stats_id' => NULL,
                'match_start' => '2018-08-11 17:45:00',
                'created_at' => '2018-08-09 14:51:50',
                'updated_at' => '2018-08-09 14:51:50',
            ),
            2 => 
            array (
                'id' => 3,
                'team1_id' => 1,
                'team2_id' => 2,
                'open' => 0,
                'winner_id' => 2,
                'stats_id' => NULL,
                'match_start' => '2018-08-11 17:45:00',
                'created_at' => '2018-08-09 14:52:07',
                'updated_at' => '2018-08-09 14:52:07',
            ),
            3 => 
            array (
                'id' => 4,
                'team1_id' => 1,
                'team2_id' => 2,
                'open' => 0,
                'winner_id' => 1,
                'stats_id' => NULL,
                'match_start' => '2018-08-11 17:45:00',
                'created_at' => '2018-08-09 16:03:04',
                'updated_at' => '2018-08-09 16:03:04',
            ),
            4 => 
            array (
                'id' => 5,
                'team1_id' => 2,
                'team2_id' => 1,
                'open' => 0,
                'winner_id' => 2,
                'stats_id' => NULL,
                'match_start' => '2018-08-11 17:45:00',
                'created_at' => '2018-08-09 20:01:56',
                'updated_at' => '2018-08-09 20:01:56',
            ),
            5 => 
            array (
                'id' => 6,
                'team1_id' => 2,
                'team2_id' => 3,
                'open' => 0,
                'winner_id' => 2,
                'stats_id' => NULL,
                'match_start' => '2018-08-11 17:45:00',
                'created_at' => '2018-08-09 20:02:06',
                'updated_at' => '2018-08-09 20:02:06',
            ),
            6 => 
            array (
                'id' => 7,
                'team1_id' => 2,
                'team2_id' => 3,
                'open' => 0,
                'winner_id' => 3,
                'stats_id' => NULL,
                'match_start' => '2018-08-11 17:45:00',
                'created_at' => '2018-08-09 20:02:15',
                'updated_at' => '2018-08-09 20:04:14',
            ),
            7 => 
            array (
                'id' => 8,
                'team1_id' => 2,
                'team2_id' => 1,
                'open' => 0,
                'winner_id' => 2,
                'stats_id' => NULL,
                'match_start' => '2018-08-11 17:45:00', 
                'created_at' => '2018-08-12 12:35:49',
                'updated_at' => '2018-08-12 12:35:49',
            ),
        ));
        
        
    }
}