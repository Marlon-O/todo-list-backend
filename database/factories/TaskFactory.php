<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Task;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            // Retrieve a random user ID from the User model
            return \App\Models\User::inRandomOrder()->first()->id;
        },
        'name' => $faker->name,
        'description' => $faker->sentence,
        'status' => 1
    ];
});
