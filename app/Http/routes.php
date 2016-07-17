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

Route::any( '/', ['as' => 'index', 'uses' => 'Mat139Controller@index'] );

Route::group( ['prefix' => 'jours/{jour}/interventions'], function(){
	// {jour} <=> App\Jour
	// {inter} <=> App\Intervention
	Route::get( '/', ['as' => 'interventions.index', 'uses' => 'InterventionsController@index'] );
	Route::get( 'nouvelle', ['as' => 'interventions.create', 'uses' => 'InterventionsController@create'] );
	Route::post( 'nouvelle', ['as' => 'interventions.store', 'uses' => 'InterventionsController@store'] );
	Route::get( '{inter}', ['as' => 'interventions.show', 'uses' => 'InterventionsController@show'] );
	Route::post( '{inter}', ['as' => 'interventions.update', 'uses' => 'InterventionsController@update'] );
} );

Route::group( ['prefix' => 'jours'], function(){
	// {jour} <=> App\Jour
	Route::get( '/', ['as' => 'jours.index', 'uses' => 'JoursController@index'] );
	Route::get( 'nouveau', ['as' => 'jours.create', 'uses' => 'JoursController@create'] );
	Route::post( 'nouveau', ['as' => 'jours.store', 'uses' => 'JoursController@store'] );
	Route::get( '{jour}', ['as' => 'jours.show', 'uses' => 'JoursController@show'] );
	Route::post( '{jour}', ['as' => 'jours.update', 'uses' => 'JoursController@update'] );
} );

Route::resource('api','APIController');