<?php

$factory->define(App\Zipcode::class, function (Faker\Generator $faker) {
    return [
        "zipcode" => $faker->name,
        "location_id" => factory('App\Location')->create(),
    ];
});
