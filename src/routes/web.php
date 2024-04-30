<?php
use App\Middlewares\AuthMiddleware;
use App\Middlewares\AuthorMiddleware;
use App\Middlewares\RateLimitMiddleware;
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

Route::group(['prefix'=>'/admin', 'namespace' => 'App\Controllers\Admin'], function() {
   Route::get('auth/login', 'auth@login');
   Route::get('auth/register', 'auth@register');
});