<?php



Route::get('/r', function ()
{
    function philsroutes()
    {
        $routeCollection = Route::getRoutes();
        echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">';
        echo "<div class='container'><div class='col-md-12'><table class='table table-striped' style='width:100%'>";
        echo '<tr>';
      //  echo '<td><h4>Domain</h4></td>';
        echo "<td width='10%'><h4>HTTP Method</h4></td>";
        echo "<td width='30%'><h4>URL</h4></td>";
        echo "<td width='30%'><h4>Route</h4></td>";
        echo "<td width='30%'><h4>Corresponding Action</h4></td>";
        echo '</tr>';

        foreach ($routeCollection as $value)
        {
            echo '<tr>';
        //    echo '<td>lcadashboard.com</td>';
            echo '<td>'.$value->methods()[0].'</td>';
            echo "<td><a href='".$value->uri()."' target='_blank'>".$value->uri().'</a> </td>';
            echo '<td>'.$value->getName().'</td>';
            echo '<td>'.$value->getActionName().'</td>';
            echo '</tr>';
        }

        echo '</table></div></div>';
        echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>';

    }

    return philsroutes();
})->name('assigned-routes');

    /****************   Model binding into route **************************/

    Route::model('user', App\Models\User::class);
    Route::pattern('id', '[0-9]+');
    Route::pattern('slug', '[0-9a-z-_]+');

    Route::get('ss', function()
    {

        $pathToImage = public_path('images/ss/');
        $ss = \Spatie\Browsershot\Browsershot::url('https://www.affordableprogrammer.com')->fullPage()->save($pathToImage);

      // return $ss;

    });
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

    Route::get('/', 'HomeController@dash')->name('dashboard');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/dashboard', 'HomeController@dash')->name('dashboard');
    Route::get('/sales-dashboard', 'HomeController@salesdash')->name('sales-dashboard');
    Route::get('/marketing-dashboard', 'HomeController@marketingdash')->name('marketing-dashboard');
    Route::get('/social-dashboard', 'HomeController@socialdash')->name('social-dashboard');
    Route::get('/analytical-dashboard', 'HomeController@anadash')->name('analytical-dashboard');

    Route::resource('users', 'UserController');

    Route::resource('profiles', 'ProfileController');
    Route::resource('websites', 'WebsiteController');
    Route::resource('clinics', 'ClinicController');
    Route::resource('locations', 'LocationController');
    Route::resource('zipcodes', 'ZipcodeController');
    Route::resource('pages', 'PageController');
	Route::get('{page}', ['as' => 'pages.show', 'uses' => 'PageController@show']);


Route::post('/users/{user}/website', 'WebsiteController@store');


/* Instructors show */
// Route::get('/instructors/show/{instructor}',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'InstructorController@show']);



Route::resource('analyticsclients', 'AnalyticsclientController');

Route::resource('adsclients', 'AdsclientController');

Route::get('/toprefs/read-data', 'HomeController@readTopRef');

Route::get('/getRequest', function(){
    if(Request::ajax()){
        return 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.<br />';
    }
});


Route::get('us', 'UserController@progress');
