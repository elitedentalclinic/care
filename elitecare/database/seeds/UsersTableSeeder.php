<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('users')->insert([
            'name' => 'Manju Abraham',
            'email' => 'drabrahammanju@gmail.com',
            'password' => bcrypt('qwerty'),
        ]);
    }
}
