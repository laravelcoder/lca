<?php

$factory->define(App\Contact::class, function (Faker\Generator $faker) {
    return [
        "first_name" => $faker->name,
        "last_name" => $faker->name,
        "phone1" => $faker->name,
        "phone2" => $faker->name,
        "email" => $faker->name,
        "company_id" => factory('App\ContactCompany')->create(),
        "skype" => $faker->name,
        "twitter_username" => $faker->name,
        "instagram_username" => $faker->name,
        "facebook_url" => $faker->name,
        "linked_in_url" => $faker->name,
        "google_plus_url" => $faker->name,
        "personal_website" => $faker->name,
        "contact_type" => collect(["ge","cp",])->random(),
    ];
});
