<?php
use Illuminate\Http\Request;

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

Route::get('/search', function(){
	return view('search');
})->name('search');

Route::get('/search/results', function (Request $request) {
    $results =  App\Room::search($request->search)->get();
    return view('search_results', ['results' => $results]);
})->name('results');