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

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/resume', function () {
// //     return view('pages.resume');
// // });

// Route::get('/hyped', function () {
//     return view('hyped');
// });

// Route::get('/augement_bionics', function () {
//     return view('augement_bionics');
// });

// Route::get('/cabochon_games', function () {
//     return view('cabochon_games');
// });


Route::group(['middleware' => ['web']], function (){

    Route::group(['domain' => 'covid19reachout.lvh.me'], function(){
        
        Route::get('/', ["uses" => "Covid19problemsController@create", 'as' => "covid19reachout.welcome"]);

        Route::post('submit_issue', ["uses" => "Covid19problemsController@store", 'as' => "covid19issue.store"]);
    
    });

});

Route::get('/', function () {
    return view('pages.welcome');
});

// Route::get('/resume', function () {
//     return view('pages.resume');
// });

Route::get('/hyped', function () {
    return view('pages.hyped');
});

Route::get('/augement_bionics', function () {
    return view('pages.augement_bionics');
});

Route::get('/cabochon_games', function () {
    return view('pages.cabochon_games');
});

Route::get('/covid19livespread', function () {
    return view('pages.covid19livespread');
});

Route::get('/techlunar', function () {
    return view('pages.techlunar');
});

Route::get('/project_protectus', function () {
    return view('pages.project_protectus');
});

Route::get('/artwork', function () {
    return view('pages.artwork');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
