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

//Route::get('/', function () {
//    return view('welcome');
//});

//Auth::routes(); ui 的路徑 先註解

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix'=>'2fa'], function(){
    Route::get('/','LoginSecurityController@show2faForm');
    Route::post('/generateSecret','LoginSecurityController@generate2faSecret')->name('generate2faSecret');
    Route::post('/enable2fa','LoginSecurityController@enable2fa')->name('enable2fa');
    Route::post('/disable2fa','LoginSecurityController@disable2fa')->name('disable2fa');

    // 2fa middleware
    Route::post('/2faVerify', function () {
        return redirect(URL()->previous());
    })->name('2faVerify')->middleware('2fa');
});

// test middleware
Route::get('/test_middleware', function () {
    return "2FA middleware work!";
})->middleware(['auth', '2fa']);

// For websockets
Route::get('/', 'ChatsController@index');
Route::get('messages', 'ChatsController@fetchMessages');
Route::post('messages', 'ChatsController@sendMessage');

// For Excel Export and Import
Route::get('user/export/', 'UserController@export');
