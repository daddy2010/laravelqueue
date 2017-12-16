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


Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('home', 'HomeController@Index');
Route::get('home/user/{id}', 'HomeController@User')->name('homeUser');
Route::get('page/add', 'HomeController@Add');
Route::post('page/add', 'HomeController@Store')->name('addStore');
Route::delete('page/delete/{page}', function ($page){
    $page_del = \App\Test::where('id', $page)->first();
    $page_del->delete();
    return redirect('/');       
})->name('pageDelete');