<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('admin', 'Admin\AdminController@index');
Route::resource('admin/roles', 'Admin\RolesController');
Route::resource('admin/permissions', 'Admin\PermissionsController');
Route::resource('admin/users', 'Admin\UsersController');
Route::get('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@getGenerator']);
Route::post('admin/generator', ['uses' => '\Appzcoder\LaravelAdmin\Controllers\ProcessController@postGenerator']);
Auth::routes();


/*
* CRUD ROOMS
*/
Route::resource('rooms', 'RoomsController', ['except' => ['index']]);
Route::get('{user_id}/rooms', ['as' => 'rooms.index', 'uses' => 'RoomsController@index']);


Route::get('/home', 'HomeController@index')->name('home');

Route::resource('users','UserController');

//Route::get('/SignOut', function () {
//    Auth::logout();
//    return view('welcome');
//});

Route::get('/DeleteUser/{id}', 'UserController@delete')->name('users.delete');
Route::get('/MajUser', 'UserController@maj')->name('users.maj');
Route::get('/ChgPwd', 'UserController@chgpwd')->name('users.chgpwd');
Route::post('/UpdatePwd', 'UserController@updpwd')->name('users.updpwd');
Route::get('/SignOut', 'UserController@signout')->name('users.signout');
