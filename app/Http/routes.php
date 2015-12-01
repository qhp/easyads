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

Route::get('/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

Route::group(['middleware' => ['guest']], function() {
    Route::get('/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
    Route::post('/login', 'Auth\AuthController@postLogin');
    Route::get('/register', ['as' => 'register', 'uses' => 'Auth\AuthController@getRegister']);
    Route::post('/register', 'Auth\AuthController@postRegister');
});


Route::group(['middleware' => ['auth', 'role:client|manager|administrator']], function() {
    Route::get('/admin', ['as' => 'dashboard', 'uses' => 'Admin\SiteController@index']);
    Route::get('/admin/campaigns', ['as' => 'campaigns', 'uses' => 'Admin\CampaignsController@index']);
    Route::get('/admin/campaigns/create', ['as' => 'campaigns.create', 'uses' => 'Admin\CampaignsController@create']);
    Route::post('/admin/campaigns/store', ['as' => 'campaigns.store', 'uses' => 'Admin\CampaignsController@store']);
    Route::get('/admin/ads', ['as' => 'ads', 'uses' => 'Admin\AdsController@index']);
});


Route::group(['middleware' => ['role:administrator']], function() {
    Route::get('/admin/clients', ['as' => 'clients', 'uses' => 'Admin\ClientsController@index']);
    Route::get('/admin/clients/create', ['as' => 'clients.create', 'uses' => 'Admin\ClientsController@create']);
});


# Test routers
Route::get('/', ['as' => 'home', 'uses' => 'SiteController@index']);

Route::get('/test', function () {
    return view('pay');
});

Route::get('pay', function() {
    $test = App::make('AmazonPayments');

    $data = [
        'orderReferenceId'=>$_GET['amazon_order_reference_id'],
        'amount' => 99,
        'orderId' => 'T14'
    ];

    $d = $test->SetOrderReferenceDetails($data);

    dd($d);
});

Route::get('/test', ['as' => 'test', 'uses' => 'SiteController@test']);