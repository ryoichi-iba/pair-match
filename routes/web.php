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
    return view('home');
});
Route::get('/tournament/create', 'TournamentsController@create')->name('tournament.create');
Route::post('/tournament/create', 'TournamentsController@store')->name('tournament.store');
Route::post('/players', 'PlayersController@create');
Route::post('/results', 'ResultsController@seed')->name('results.seed');
Route::get('/results/{token?}', 'ResultsController@index')->name('results.index');
Route::get('/results/{id}/edit', 'ResultsController@edit')->name('results.edit');
Route::put('/results/{id}', 'ResultsController@update')->name('results.update');

