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

//web 端
Route::get('/', 'web\IndexController@index');



Route::group(['prefix' => '/', 'namespace' => 'Web'], function () {

    Route::get('', 'IndexController@index')->name('web');

    Route::get('article/{id}', 'ArticleController@info')->name('web.article.info');

    //
    Route::get('category/{cate}', 'CateGoryController@list')->name('web.category.list');

    Route::get('work', 'WorkController@index');
}
);


//QQ登录
Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
      Route::get('qq', 'SocialitesController@qq')->name('auth.qq');
      Route::get('qq/callback', 'SocialitesController@callback');

    Route::get('wei_xin', 'SocialitesController@wei_xin')->name('auth.wei_xin');
    Route::get('wei_xin/wx_callback', 'SocialitesController@wx_callback');
}
);

//引入admin路由
require "admin.php";


