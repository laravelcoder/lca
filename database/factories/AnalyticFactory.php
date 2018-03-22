<?php

$factory->define(App\Analytic::class, function (Faker\Generator $faker) {
    return [
        "view_name" => $faker->name,
        "website_id" => factory('App\Website')->create(),
        "view_id" => $faker->name,
    ];
});
