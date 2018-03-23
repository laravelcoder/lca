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
        "phone2" => $faker->name,
        "google_map_link" => $faker->name,
        "clinic_id" => $faker->randomNumber(2),
        "email" => $faker->name,
        "created_by_id" => factory('App\User')->create(),
    ];
});
