<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
            'avatar' => '',
            'admin'=> (1),
        ]);

        DB::table('users')->insert([
            'name' => 'unicorn',
            'email' => 'unicorn@unicorn.com',
            'password' => bcrypt('unicorn'),
            'avatar' => '',
            'admin'=> (0),
        ]);  

        DB::table('users')->insert([
            'name' => 'unicorn1',
            'email' => 'unicorn1@unicorn.com',
            'password' => bcrypt('unicorn1'),
            'avatar' => '',
        ]);  

        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
            'avatar' => '',
            'admin'=> (1),
            
        ]); 

   
    }
}
