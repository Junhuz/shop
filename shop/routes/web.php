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

Route::group(['prefix'=>'/shop'],function(){
    Route::any('home',function(){
        return view('shop.home');
    });
    Route::any('upimg','FileController@upImg');
});


Route::group(['prefix'=>'/shop/admin'],function(){
    Route::any('login',function(){
        return view('admin.login');
    });
});


Route::group(['prefix'=>'/shop/user'],function(){

    Route::group(['middleware'=>['islogin']],function(){
        Route::any('login','UserController@login');
        Route::any('register','UserController@register');
    });
    Route::group(['middleware'=>['islogin']],function(){
        Route::any('plan',function(){
            return view('shop.plan');
        });
        Route::any('home',function(){
            return view('shop.home');
        });
        Route::any('lucky','UserController@lucky');
        Route::get('logout','UserController@logout');
        Route::any('personal','UserController@personal');
        Route::any('personal_set','UserController@personalInfoSet');
        Route::any('password_reset','UserController@passwordReset');
        Route::any('personal_icon','UserController@personalIcon');
    });

});