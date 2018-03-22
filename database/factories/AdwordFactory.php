<?php

$factory->define(App\Adword::class, function (Faker\Generator $faker) {
    return [
        "website_id" => factory('App\Website')->create(),
        "client_customer_id" => $faker->name,
        "user_agent" => $faker->name,
        "client_id" => $faker->name,
        "client_secret" => $faker->name,
        "refresh_token" => $faker->name,
        "authorization_uri" => $faker->name,
        "redirect_uri" => $faker->name,
        "token_credential_uri" => $faker->name,
        "scope" => $faker->name,
    ];
});
