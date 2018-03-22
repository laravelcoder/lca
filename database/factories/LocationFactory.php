<?php

$factory->define(App\Location::class, function (Faker\Generator $faker) {
    return [
        "company_id" => factory('App\ContactCompany')->create(),
        "nickname" => $faker->name,
        "address" => $faker->name,
        "address_2" => $faker->name,
        "city" => $faker->name,
        "state" => $faker->name,
        "phone" => $faker->name,
    ];
});
