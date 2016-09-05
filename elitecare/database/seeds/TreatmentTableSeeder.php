<?php

use Illuminate\Database\Seeder;

class TreatmentTableSeeder extends Seeder
{

    public function run()
    {
        factory(App\Treatment::class, 250)->create() ;
    }
}
