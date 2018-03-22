<?php

$factory->define(App\ContactCompany::class, function (Faker\Generator $faker) {
    return [
        "name" => $faker->name,
    ];
});
