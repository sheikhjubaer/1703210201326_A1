<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Department;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
	// $date = $this->faker->dateTimeBetween('-1 day' );
    return [
        //
        'id' => $faker->urandomDigit,
        'name' => $faker->name,
        'email' => $faker->email,
        'address' => $faker->address,
        'salary' => $faker->salary,
        'status' => $faker->status,
        'department_id' => function() {
            return factory(\App\Department::class)->create()->id;
        },
        // 'created_at' => $faker->date,
        // 'updated_at' => $faker->date
    ];
});
