<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function (){
    Route::get('/index', function (){
        return view('index');
    })->name('index');

    // Route::get('/index', [
    //     'uses' => 'Index@showIndexPage',
    //     'as' => 'index'
    // ]);

    Route::get('/adminlogin', [
        'uses' => 'AdminLogin@showAdminLogin',
        'as' => 'adminlogin'
    ]);

     Route::post('/adminlogin', [
        'uses' => 'AdminLogin@doAdminLogin',
        'as' => 'adminlogin'
    ]);
    
    Route::get('/dashboard', [
        'uses' => 'Dashboard@showDashboard',
        'as' => 'dashboard'
    ]);
    
});    