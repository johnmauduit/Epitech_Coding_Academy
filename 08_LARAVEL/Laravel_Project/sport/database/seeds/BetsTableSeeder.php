<?php

use Illuminate\Database\Seeder;

class BetsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('bets')->delete();
        
        \DB::table('bets')->insert(array (
            0 => 
            array (
                'id' => 1,
                'user_id' => 2,
                'match_id' => 2,
                'bet_team_winner_id' => 1,
                'bet' => 32,
                'created_at' => '2018-08-12 17:35:26',
                'updated_at' => '2018-08-12 17:35:26',
            ),
            1 => 
            array (
                'id' => 2,
                'user_id' => 3,
                'match_id' => 2,
                'bet_team_winner_id' => 2,
                'bet' => 71,
                'created_at' => '2018-08-12 17:35:36',
                'updated_at' => '2018-08-12 17:35:36',
            ),
            2 => 
            array (
                'id' => 3,
                'user_id' => 1,
                'match_id' => 2,
                'bet_team_winner_id' => 1,
                'bet' => 98,
                'created_at' => '2018-08-12 17:35:51',
                'updated_at' => '2018-08-12 17:35:51',
            ),
            3 => 
            array (
                'id' => 4,
                'user_id' => 0,
                'match_id' => 2,
                'bet_team_winner_id' => 2,
                'bet' => 11,
                'created_at' => '2018-08-14 15:20:10',
                'updated_at' => '2018-08-14 15:20:10',
            ),
        ));
        
        
    }
}