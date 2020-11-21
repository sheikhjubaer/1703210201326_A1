<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Department;
use Faker\Generator as Faker;

$factory->define(Department::class, function (Faker $faker) {
	// $date = $this->faker->dateTimeBetween('-1 day' );
    return [
        'id' => $faker->randomDigit,
        'name' => $faker->name,
        'short_name' => $faker->name,
        'created_at' => $faker->date,
        'updated_at' => $faker->date
    ];
});
