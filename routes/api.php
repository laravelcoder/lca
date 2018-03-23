<?php

Route::group(['prefix' => '/v1', 'namespace' => 'Api\V1', 'as' => 'api.'], function () {

        Route::resource('tasks', 'TasksController', ['except' => ['create', 'edit']]);

        Route::resource('assets', 'AssetsController', ['except' => ['create', 'edit']]);

        Route::resource('locations', 'LocationsController', ['except' => ['create', 'edit']]);

        Route::resource('websites', 'WebsitesController', ['except' => ['create', 'edit']]);

        Route::resource('bookings', 'BookingsController', ['except' => ['create', 'edit']]);

});
