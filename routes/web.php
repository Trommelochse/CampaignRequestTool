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


// Creatives
Route::post('campaigns/{id}/creative/update', [
		'uses' => 'CampaignController@updateCreative',
		'as' => 'updateCreative'
	]);
Route::get('campaigns/{id}/creative/edit', [
	'uses' => 'CampaignController@editCreative',
	'as' => 'editCreative'
	]);

Route::post('campaigns/{id}/creative/store', [
		'uses' => 'CampaignController@storeCreative',
		'as' => 'storeCreative'
	]);

Route::get('campaigns/{id}/creative', [
	'uses' => 'CampaignController@createCreative',
	'as' => 'createCreative'
	]);

// Localisation
Route::post('campaigns/{id}/localisation/update', [
		'uses' => 'CampaignController@updateLocalisation',
		'as' => 'updateLocalisation'
	]);
Route::get('campaigns/{id}/localisation/edit', [
	'uses' => 'CampaignController@editLocalisation',
	'as' => 'editLocalisation'
	]);

Route::post('campaigns/{id}/localisation/store', [
		'uses' => 'CampaignController@storeLocalisation',
		'as' => 'storeLocalisation'
	]);

Route::get('campaigns/{id}/localisation', [
	'uses' => 'CampaignController@createLocalisation',
	'as' => 'createLocalisation'
	]);

// Campaign
Route::post('campaigns/{id}/update', [
		'uses' => 'CampaignController@updateCampaign',
		'as' => 'updateCampaign'
	]);

Route::get('campaigns/{id}/edit', [
	'uses' => 'CampaignController@editCampaign',
	'as' => 'editCampaign'
	]);

Route::post('campaigns/store', [
		'uses' => 'CampaignController@store',
		'as' => 'storeCampaign'
	]);

Route::get('campaigns/create', [
	'uses' => 'CampaignController@create',
	'as' => 'createCampaign'
	]);

Route::get('campaigns/{id}', [
	'uses' => 'CampaignController@show',
	'as' => 'showCampaign'
	]);

Route::get('campaigns', [
	'uses' => 'CampaignController@index'
]);

Route::get('/', [
	'uses' => 'CampaignController@index',
	'as' => 'index'
]);



Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
