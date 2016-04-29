<?php
Route::get('/', function (){
	 return redirect('/home');
});


Route::get('home', 'BlogController@index');
Route::get('blog/{slug}', 'BlogController@showPost');

// Admin area
Route::get('admin', function () {
	return redirect('/admin/post');
});
$router->group([
	'namespace' => 'Admin',
	'middleware' => 'auth',
], function() {
	Route::resource('admin/post', 'PostController');
	Route::resource('admin/tag', 'TagController');
	Route::get('admin/upload', 'UploadController@index');
});

// Logging in and out
Route::get('/auth/login', 'Auth\AuthController@getLogin');
Route::post('/auth/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');


/*Route::get('/', function () {
    return view('welcome');
});
*/
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

/*
Route::group(['middleware' => ['web']], function () {
    //
});
*/