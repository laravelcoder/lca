<?php

$factory->define(App\TaskStatus::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
    ];
});
