<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(TreatmentTableSeeder::class) ;
        $this->call(AppointmentsTableSeeder::class) ;
    }
}
