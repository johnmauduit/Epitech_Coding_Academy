<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => 'Licorne',
            'country' => 'France',
            'flag' => 'france.jpg',
        ]);

        DB::table('teams')->insert([
            'name' => 'Chubbys',
            'country' => 'England',
            'flag' => 'england.jpg',
        ]);

        DB::table('teams')->insert([
            'name' => 'Yunikon',
            'country' => 'Korea',
            'flag' => 'korea.png',
        ]);

    }
}
