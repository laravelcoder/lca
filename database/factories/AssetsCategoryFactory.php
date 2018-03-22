<?php

$factory->define(App\AssetsCategory::class, function (Faker\Generator $faker) {
    return [
        "title" => $faker->name,
    ];
});
