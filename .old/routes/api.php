<?php

use Illuminate\Http\Request;
use Spatie\Analytics\Period;
use App\Libraries\GoogleAnalytics;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

 
Route::resource('users', 'UserAPIController');

Route::resource('profiles', 'ProfileAPIController');

Route::resource('websites', 'WebsiteAPIController');

Route::resource('clinics', 'ClinicAPIController');

Route::resource('locations', 'LocationAPIController');

Route::resource('zipcodes', 'ZipcodeAPIController');

$router->get('/tr', function()
{
    
    $topreferrers = \Analytics::fetchTopReferrers(Period::days(7));

    // $topreferrers = json_encode($topreferrers);
    // $topreferrers = implode("\n", array_slice(explode("\n", $topreferrers), 4));
    // return response()->json($topreferrers);
    // return response()->json(compact('topreferrers'))->header('Content-Type', 'application/javascript');
   return $topreferrers;
    // return response($topreferrers);
    // return response()->json($topreferrers); 
  // 
});

Route::resource('clinics', 'ClinicAPIController');

Route::resource('clinics', 'ClinicAPIController');

Route::resource('analyticsclients', 'AnalyticsclientAPIController');

Route::resource('adsclients', 'AdsclientAPIController');

Route::resource('pages', 'PageAPIController');