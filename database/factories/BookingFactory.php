<?php

$factory->define(App\Booking::class, function (Faker\Generator $faker) {
    return [
        "submitted" => $faker->date("m/d/Y", $max = 'now'),
        "customername" => $faker->name,
        "email" => $faker->safeEmail,
        "phone" => $faker->name,
        "family_number" => $faker->name,
        "how_long" => $faker->name,
        "requested_date" => $faker->date("m/d/Y", $max = 'now'),
        "requested_time" => $faker->date("H:i:s", $max = 'now'),
        "requested_clinic_id" => factory('App\Location')->create(),
        "clinic_id" => factory('App\Location')->create(),
        "clinic_address_id" => factory('App\Location')->create(),
        "clinic_phone_id" => factory('App\Location')->create(),
        "clinic_text_numbers" => $faker->name,
        "client_firstname" => $faker->name,
    ];
});
