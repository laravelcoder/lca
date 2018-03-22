<?php

$factory->define(App\Website::class, function (Faker\Generator $faker) {
    return [
        "website" => $faker->name,
        "location_id" => factory('App\Location')->create(),
    ];
});
