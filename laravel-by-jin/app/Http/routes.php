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

Route::get('/', function () {
    return view('welcome');
});
// 认证路由...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// 注册路由...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('profile','UserController@profile');
//支付宝
//支付宝支付处理
Route::get('alipay/pay','AlipayController@pay');
//支付后跳转页面
Route::post('alipay/return','AlipayController@result');
//微信
Route::get('wechat/pay','WechatController@pay');
Route::any('user/index','UserController@index');
Route::get('home/{num}',function($num){
    $people = [
        'limei',
        'wangwu',
        'zhaoliu'
    ];
    return view('home'.$num,compact('people'));
});
Route::get('child',function(){

    return view('child');
});
Route::get('login/{service}', 'LoginController@redirectToProvider');
Route::get('login/{service}/callback', 'LoginController@handleProviderCallback');

//test cart
Route::get('cart', 'TestController@index');