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
    return view('welcome');
});
// routes for Super admin
Route::group(['prefix' => 'superadmin'], function () {
  Route::get('/login', 'SuperadminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'SuperadminAuth\LoginController@login');
  Route::post('/logout', 'SuperadminAuth\LoginController@logout')->name('logout');

  // Route::get('/register', 'SuperadminAuth\RegisterController@showRegistrationForm')->name('register');
  // Route::post('/register', 'SuperadminAuth\RegisterController@register');

  Route::post('/password/email', 'SuperadminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'SuperadminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'SuperadminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'SuperadminAuth\ResetPasswordController@showResetForm');
});
// routes for admin
Route::group(['prefix' => 'admin'], function () {
  Route::get('/login', 'AdminAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'AdminAuth\LoginController@login');
  Route::post('/logout', 'AdminAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'AdminAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'AdminAuth\RegisterController@register');

  Route::post('/password/email', 'AdminAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'AdminAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'AdminAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'AdminAuth\ResetPasswordController@showResetForm');
});

// routes for User
Route::group(['prefix' => 'user'], function () {
  Route::get('/login', 'UserAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'UserAuth\LoginController@login');
  Route::post('/logout', 'UserAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'UserAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'UserAuth\RegisterController@register');

  Route::post('/password/email', 'UserAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'UserAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'UserAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'UserAuth\ResetPasswordController@showResetForm');
});

// routes for  Blogger
Route::group(['prefix' => 'blogger'], function () {
  Route::get('/login', 'BloggerAuth\LoginController@showLoginForm')->name('login');
  Route::post('/login', 'BloggerAuth\LoginController@login');
  Route::post('/logout', 'BloggerAuth\LoginController@logout')->name('logout');

  Route::get('/register', 'BloggerAuth\RegisterController@showRegistrationForm')->name('register');
  Route::post('/register', 'BloggerAuth\RegisterController@register');

  Route::post('/password/email', 'BloggerAuth\ForgotPasswordController@sendResetLinkEmail')->name('password.request');
  Route::post('/password/reset', 'BloggerAuth\ResetPasswordController@reset')->name('password.email');
  Route::get('/password/reset', 'BloggerAuth\ForgotPasswordController@showLinkRequestForm')->name('password.reset');
  Route::get('/password/reset/{token}', 'BloggerAuth\ResetPasswordController@showResetForm');
});


