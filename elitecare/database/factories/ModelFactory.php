<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Patient::class, function (Faker\Generator $faker) {
    return [
       'registration_no' => $faker->randomNumber(8),
       'name' => $faker->name,
	   'birth_date' => $faker->date('Y-m-d'),
	   'sex' => $faker->randomElement($array = ['male', 'female']),
	   'phone_number' => $faker->phoneNumber,
       'email' => $faker->safeEmail,
	   'address' => $faker->address
    ];
});

$factory->define(App\Treatment::class, function (Faker\Generator $faker) {
    return [
        'patient_id' => factory(App\Patient::class)->create()->id,
        'headline' => $faker->catchPhrase,
        'tooth_number' =>$faker->randomElements($array = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24), $count = 3),
        'complaint' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'examination' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'treatment' => $faker->realText($maxNbChars = 200, $indexSize = 2),
        'active' => $faker->boolean($chanceOfGettingTrue = 50)
    ];
});

$factory->define(App\Appointment::class, function (Faker\Generator $faker) {
    return [
        'treatment_id' => factory(App\Treatment::class)->create()->id,
        'title' => $faker->catchPhrase,
        'appointment_time' => $faker -> dateTimeThisDecade($max = '+10 years')->format('Y-m-d\TH:i:s'),
        'summary' => $faker->realText($maxNbChars = 200, $indexSize = 2)
    ];
});