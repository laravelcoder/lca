<?php

$factory->define(App\TaskTag::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
    ];
});
