<?php

$factory->define(App\Asset::class, function (Faker\Generator $faker) {
    return [
        "category_id" => factory('App\AssetsCategory')->create(),
        "serial_number" => $faker->name,
        "title" => $faker->name,
        "status_id" => factory('App\AssetsStatus')->create(),
        "location_id" => factory('App\AssetsLocation')->create(),
        "assigned_user_id" => factory('App\User')->create(),
        "notes" => $faker->name,
        "assigned_clinic_id" => factory('App\ContactCompany')->create(),
    ];
});
