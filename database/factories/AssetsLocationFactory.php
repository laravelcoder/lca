<?php

$factory->define(App\AssetsLocation::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
    ];
});
