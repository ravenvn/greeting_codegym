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

Route::get('/users', 'UserController@list');

Route::get('/user/{id}', function ($id) {
    echo $id;
})->where('id', '\d+');
// Route::get('/user/{name:[A-Za-z]+}', function ($name) {
//     echo $name;
// });

Route::get('/greeting/{name?}', function ($name = null) {
    if ($name) {
        echo 'Hello ' . $name . '!';
    } else {
        echo 'Hello World!';
    }
});

Route::get('/login', function () {
    return view('login');
});
Route::post('/login/{name}', function (Illuminate\Http\Request $request, $name) {
    echo $name;
    if ($request->username == 'admin'
        && $request->password == 'admin') {
        return view('welcome_admin');
    }

    return view('login_error');
});

Route::group(['prefix' => 'admin'], function () {
    Route::get('/translation/{search}/{age?}', 'DictionaryController@translation')->name('Vinh');
    Route::get('/translation2/{search}/{age?}', 'DictionaryController@translation')->name('Vinh');
});

Route::get('/dictionaries/new', 'DictionaryController@new');
Route::post('/dictionaries/create', 'DictionaryController@create');

