<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\doctor::class, function (Faker $faker) {
    return [
        'specification_id' => $faker->unique()->numberBetween(1, App\specification::count()),
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'fee' =>rand(10,1000),
        'password' => bcrypt('123456'),
        'status' => 1,
        'description' => $faker->text
    ];
});
