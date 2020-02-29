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
    Route::get('/', 'IndexController@index')->name('web');
    Route::get('/article/{id}', 'ArticleController@info')->name('web.article.info');

    //
    Route::get('/category/{cate}', 'CateGoryController@list')->name('web.category.list');
}
);


//QQ登录
Route::group(['prefix' => 'auth/qq', 'namespace' => 'Auth'], function () {
      Route::get('/', 'SocialitesController@qq')->name('auth.qq');
      Route::get('/callback', 'SocialitesController@callback');
  }
);

//引入admin路由
require "admin.php";


