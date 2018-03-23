<?php
Route::get('/', function () { return redirect('/admin/home'); });

// Authentication Routes...
$this->get('login', 'Auth\LoginController@showLoginForm')->name('auth.login');
$this->post('login', 'Auth\LoginController@login')->name('auth.login');
$this->post('logout', 'Auth\LoginController@logout')->name('auth.logout');

// Change Password Routes...
$this->get('change_password', 'Auth\ChangePasswordController@showChangePasswordForm')->name('auth.change_password');
$this->patch('change_password', 'Auth\ChangePasswordController@changePassword')->name('auth.change_password');

// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('auth.password.reset');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('auth.password.reset');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset')->name('auth.password.reset');

Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', 'HomeController@index');
    Route::get('/reports/bookings-report', 'Admin\ReportsController@bookingsReport');

    
    Route::resource('roles', 'Admin\RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'Admin\RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('contact_companies', 'Admin\ContactCompaniesController');
    Route::post('contact_companies_mass_destroy', ['uses' => 'Admin\ContactCompaniesController@massDestroy', 'as' => 'contact_companies.mass_destroy']);
    Route::resource('lca_dashboards', 'Admin\LcaDashboardsController');
    Route::resource('tasks', 'Admin\TasksController');
    Route::post('tasks_mass_destroy', ['uses' => 'Admin\TasksController@massDestroy', 'as' => 'tasks.mass_destroy']);
    Route::resource('assets', 'Admin\AssetsController');
    Route::post('assets_mass_destroy', ['uses' => 'Admin\AssetsController@massDestroy', 'as' => 'assets.mass_destroy']);
    Route::resource('users', 'Admin\UsersController');
    Route::post('users_mass_destroy', ['uses' => 'Admin\UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('locations', 'Admin\LocationsController');
    Route::post('locations_mass_destroy', ['uses' => 'Admin\LocationsController@massDestroy', 'as' => 'locations.mass_destroy']);
    Route::post('locations_restore/{id}', ['uses' => 'Admin\LocationsController@restore', 'as' => 'locations.restore']);
    Route::delete('locations_perma_del/{id}', ['uses' => 'Admin\LocationsController@perma_del', 'as' => 'locations.perma_del']);
    Route::resource('analyticals', 'Admin\AnalyticalsController');
    Route::resource('task_statuses', 'Admin\TaskStatusesController');
    Route::post('task_statuses_mass_destroy', ['uses' => 'Admin\TaskStatusesController@massDestroy', 'as' => 'task_statuses.mass_destroy']);
    Route::resource('assets_categories', 'Admin\AssetsCategoriesController');
    Route::post('assets_categories_mass_destroy', ['uses' => 'Admin\AssetsCategoriesController@massDestroy', 'as' => 'assets_categories.mass_destroy']);
    Route::resource('contacts', 'Admin\ContactsController');
    Route::post('contacts_mass_destroy', ['uses' => 'Admin\ContactsController@massDestroy', 'as' => 'contacts.mass_destroy']);
    Route::resource('marketings', 'Admin\MarketingsController');
    Route::resource('task_tags', 'Admin\TaskTagsController');
    Route::post('task_tags_mass_destroy', ['uses' => 'Admin\TaskTagsController@massDestroy', 'as' => 'task_tags.mass_destroy']);
    Route::resource('assets_locations', 'Admin\AssetsLocationsController');
    Route::post('assets_locations_mass_destroy', ['uses' => 'Admin\AssetsLocationsController@massDestroy', 'as' => 'assets_locations.mass_destroy']);
    Route::resource('zipcodes', 'Admin\ZipcodesController');
    Route::post('zipcodes_mass_destroy', ['uses' => 'Admin\ZipcodesController@massDestroy', 'as' => 'zipcodes.mass_destroy']);
    Route::post('zipcodes_restore/{id}', ['uses' => 'Admin\ZipcodesController@restore', 'as' => 'zipcodes.restore']);
    Route::delete('zipcodes_perma_del/{id}', ['uses' => 'Admin\ZipcodesController@perma_del', 'as' => 'zipcodes.perma_del']);
    Route::resource('websites', 'Admin\WebsitesController');
    Route::post('websites_mass_destroy', ['uses' => 'Admin\WebsitesController@massDestroy', 'as' => 'websites.mass_destroy']);
    Route::post('websites_restore/{id}', ['uses' => 'Admin\WebsitesController@restore', 'as' => 'websites.restore']);
    Route::delete('websites_perma_del/{id}', ['uses' => 'Admin\WebsitesController@perma_del', 'as' => 'websites.perma_del']);
    Route::resource('call_metrics', 'Admin\CallMetricsController');
    Route::resource('task_calendars', 'Admin\TaskCalendarsController');
    Route::resource('assets_statuses', 'Admin\AssetsStatusesController');
    Route::post('assets_statuses_mass_destroy', ['uses' => 'Admin\AssetsStatusesController@massDestroy', 'as' => 'assets_statuses.mass_destroy']);
    Route::resource('assets_histories', 'Admin\AssetsHistoriesController');
    Route::resource('analytics', 'Admin\AnalyticsController');
    Route::post('analytics_mass_destroy', ['uses' => 'Admin\AnalyticsController@massDestroy', 'as' => 'analytics.mass_destroy']);
    Route::post('analytics_restore/{id}', ['uses' => 'Admin\AnalyticsController@restore', 'as' => 'analytics.restore']);
    Route::delete('analytics_perma_del/{id}', ['uses' => 'Admin\AnalyticsController@perma_del', 'as' => 'analytics.perma_del']);
    Route::resource('adwords', 'Admin\AdwordsController');
    Route::post('adwords_mass_destroy', ['uses' => 'Admin\AdwordsController@massDestroy', 'as' => 'adwords.mass_destroy']);
    Route::post('adwords_restore/{id}', ['uses' => 'Admin\AdwordsController@restore', 'as' => 'adwords.restore']);
    Route::delete('adwords_perma_del/{id}', ['uses' => 'Admin\AdwordsController@perma_del', 'as' => 'adwords.perma_del']);
    Route::resource('user_actions', 'Admin\UserActionsController');
    Route::resource('bookings', 'Admin\BookingsController');
    Route::post('bookings_mass_destroy', ['uses' => 'Admin\BookingsController@massDestroy', 'as' => 'bookings.mass_destroy']);
    Route::post('bookings_restore/{id}', ['uses' => 'Admin\BookingsController@restore', 'as' => 'bookings.restore']);
    Route::delete('bookings_perma_del/{id}', ['uses' => 'Admin\BookingsController@perma_del', 'as' => 'bookings.perma_del']);
    Route::resource('booking_dashboards', 'Admin\BookingDashboardsController');
    Route::resource('content_categories', 'Admin\ContentCategoriesController');
    Route::post('content_categories_mass_destroy', ['uses' => 'Admin\ContentCategoriesController@massDestroy', 'as' => 'content_categories.mass_destroy']);
    Route::resource('content_tags', 'Admin\ContentTagsController');
    Route::post('content_tags_mass_destroy', ['uses' => 'Admin\ContentTagsController@massDestroy', 'as' => 'content_tags.mass_destroy']);
    Route::resource('content_pages', 'Admin\ContentPagesController');
    Route::post('content_pages_mass_destroy', ['uses' => 'Admin\ContentPagesController@massDestroy', 'as' => 'content_pages.mass_destroy']);

    Route::model('messenger', 'App\MessengerTopic');
    Route::get('messenger/inbox', 'Admin\MessengerController@inbox')->name('messenger.inbox');
    Route::get('messenger/outbox', 'Admin\MessengerController@outbox')->name('messenger.outbox');
    Route::resource('messenger', 'Admin\MessengerController');


 
    Route::get('language/{lang}', function ($lang) {
        return redirect()->back()->withCookie(cookie()->forever('language', $lang));
    })->name('language');});
