<?php
use App\Middlewares\Admin\Authentication;
use App\Middlewares\Admin\Authorization;
use Pecee\SimpleRouter\SimpleRouter as Route;

Route::group(['prefix' => '', 'namespace' => 'App\Controllers'], function() {
   Route::get('/', 'home@index');
   Route::get('/product', 'product@index');
   Route::get('/product/{id}', 'product@detail');
   Route::get('/cart', 'cart@index');
   Route::get('/checkout', 'checkout@index');
   Route::get('/blog', 'blog@index');
   Route::get('/blog/{id}', 'blog@detail');
   Route::get('/contact', 'contact@index');
});

Route::group(['prefix'=>'/admin', 'namespace' => 'App\Controllers\Admin', 'middleware' => [Authentication::class]], function() {
   Route::get('auth/login', 'auth@login');
   Route::post('auth/login', 'auth@handleLogin'); 
   Route::group(['middleware'=>Authorization::class], function() {
      Route::get('/', 'dashboard@index');
      Route::get('/profile', 'user@profile');
      Route::get('/user', 'user@user');
      Route::get('/user/admin', 'user@admin');
   });
});