<?php

use Faker\Generator as Faker;

$factory->define(App\Customer::class, function (Faker $faker) {
    return [
		'name' => $faker->name,
		'address' => $faker->address,
		'city'=>$faker->city,
		'postal_code' =>$faker->postcode,
		'country' => $faker->country
    ];
});
