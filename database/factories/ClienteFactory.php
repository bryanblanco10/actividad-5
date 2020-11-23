<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(Cliente::class, function (Faker $faker) {
    return [
        'type_identification' => 'Cedula de ciudadania', 
        'identification' => $faker->randomNumber($nbDigits = NULL, $strict = false),
        'names'=> $faker->lastName,
        'surnames' => $faker->lastName, 
        'address' => $faker->address,
        'cell_phone'=> $faker->e164PhoneNumber, 
        'email' => $faker->unique()->safeEmail, 
        'birth_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'biografia'=> $faker->text($maxNbChars = 100),
        'activo'=> true
    ];
});
