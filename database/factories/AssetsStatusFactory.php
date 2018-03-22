<?php

$factory->define(App\AssetsStatus::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
    ];
});
