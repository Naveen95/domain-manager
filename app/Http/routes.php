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
Route::group(['middleware' => ['web']], function () {

Route::get('/', [
	'uses' => 'HomeController@index',
	'middleware' => 'auth'
	]);

Route::auth();



Route::get('/home1' ,[
	'uses' => 'HomeController@index',
	'middleware' => 'auth'

	]);

Route::get('/add_domain', function(){

	return view('add_domain');
})->middleware('auth');

Route::post('/add_domain' , [
	'uses'=>'addDomainController@save',
	'middleware'=>'auth']);

Route::get('/purchased_domain' , [
	'uses'=>'purchasedDomainController@show',
	'middleware'=>'auth']);

Route::get('/domain_alert',['uses'=>'domainAlertController@index',
	'middleware'=> 'auth']);

Route::get('/recent_purchase',[
	'uses'=>'recentPurchaseController@index',
	'middleware'=> 'auth']);

Route::get('/update_domain',[
	'uses'=>'updateDomainController@index',
	'middleware'=> 'auth']);

Route::get('/updateDomainModal' ,[

	'uses' => 'updateDomainController@updateDomain',
	'as' => 'updateDomain',
	'middleware'=> 'auth'

	]);

Route::get('/delete_domain' ,[

	'uses' => 'updateDomainController@showDeleteDomain',
	'middleware' => 'auth',
	'as'=> 'show.delete.domain'

	]);

Route::get('delete_domain/{domain_id}',[
	'uses'=>'updateDomainController@deleteDomain',
	'as' => 'delete.domain',
	'middleware'=> 'auth'
	]);


Route::get('/home', [
	'uses'=>'HomeController@index',
	'middleware'=> 'auth']);
});