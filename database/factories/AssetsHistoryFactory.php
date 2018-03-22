<?php

$factory->define(App\AssetsHistory::class, function (Faker\Generator $faker) {
    return [
        "asset_id" => factory('App\Asset')->create(),
        "status_id" => factory('App\AssetsStatus')->create(),
        "location_id" => factory('App\AssetsLocation')->create(),
        "assigned_user_id" => factory('App\User')->create(),
    ];
});
