<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        $this->call(TeamsTableSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(MatchesTableSeeder::class);
        $this->call(StatsTableSeeder::class);
        $this->call(BetsTableSeeder::class);
    }
}
