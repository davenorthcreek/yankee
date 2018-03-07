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

Route::get('/', 'Auth\LoginController@showLoginForm');

Route::group(['middleware' => 'auth'], function () {
    Route::get("/products", 'BigCommerceController@index');
    Route::get("/orders", 'WebhookController@index');
    Route::get("/orderCreated", 'WebhookController@orderCreated');
    Route::get("/create/{order_id}", 'DPDController@create');
    Route::get("/create", 'DPDController@test_create');
    Route::get("/label/{pl_number}", 'DPDController@test_label');
    Route::get("/close", 'DPDController@test_close');
    Route::get("/labels", 'DPDController@labels');
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
});
