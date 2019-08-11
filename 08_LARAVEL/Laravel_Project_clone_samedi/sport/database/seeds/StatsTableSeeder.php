<?php

use Illuminate\Database\Seeder;

class StatsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('stats')->delete();
        
        \DB::table('stats')->insert(array (
            0 => 
            array (
                'id' => 1,
                'stat1' => 41,
                'stat2' => 9,
                'stat3' => 35,
                'match_id' => 5,
                'player_id' => 0,
                'created_at' => '2018-08-09 20:04:57',
                'updated_at' => '2018-08-09 20:04:57',
            ),
            1 => 
            array (
                'id' => 2,
                'stat1' => 15,
                'stat2' => 5,
                'stat3' => 22,
                'match_id' => 5,
                'player_id' => 2,
                'created_at' => '2018-08-09 20:05:24',
                'updated_at' => '2018-08-09 20:06:03',
            ),
            2 => 
            array (
                'id' => 3,
                'stat1' => 16,
                'stat2' => 22,
                'stat3' => 48,
                'match_id' => 5,
                'player_id' => 1,
                'created_at' => '2018-08-09 20:05:54',
                'updated_at' => '2018-08-09 20:05:54',
            ),
            3 => 
            array (
                'id' => 4,
                'stat1' => 13,
                'stat2' => 66,
                'stat3' => 10,
                'match_id' => 6,
                'player_id' => 3,
                'created_at' => '2018-08-09 20:13:31',
                'updated_at' => '2018-08-09 20:13:31',
            ),
            4 => 
            array (
                'id' => 5,
                'stat1' => 2,
                'stat2' => 12,
                'stat3' => 1,
                'match_id' => 6,
                'player_id' => 4,
                'created_at' => '2018-08-09 20:22:05',
                'updated_at' => '2018-08-09 20:22:05',
            ),
            5 => 
            array (
                'id' => 6,
                'stat1' => 45,
                'stat2' => 13,
                'stat3' => 77,
                'match_id' => 7,
                'player_id' => 2,
                'created_at' => '2018-08-09 20:22:27',
                'updated_at' => '2018-08-09 20:22:27',
            ),
        ));
        
        
    }
}