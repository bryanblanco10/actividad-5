<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Orden;
use Faker\Generator as Faker;

$factory->define(Orden::class, function (Faker $faker) {
    return [
        'name_cliente' => $faker->firstName, 
        'address' => $faker->address, 
        'cell_phone' =>$faker->e164PhoneNumber, 
        'order_date' =>$faker->date($format = 'Y-m-d', $max = 'now'), 
        'deliver_date' =>$faker->date($format = 'Y-m-d', $max = 'now'), 
        'subtotal' =>$faker->numberBetween($min = 10000, $max = 40000),
        'total'=>$faker->numberBetween($min = 10000, $max = 40000), 
        'average_time'=>$faker->randomDigitNot(0), 
        'state'=> 'recibido'
    ];
});
