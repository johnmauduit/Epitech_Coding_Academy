<?php

use Illuminate\Database\Seeder;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            'name' => 'Charlie',
            'team_id' => 1
        ]);

        DB::table('players')->insert([
            'name' => 'BananaKing',
            'team_id' => 2
        ]);
        DB::table('players')->insert([
            'name' => 'BananaQueen',
            'team_id' => 2
        ]);

        DB::table('players')->insert([
            'name' => 'Lucifer',
            'team_id' => 3
        ]);
    }
}
