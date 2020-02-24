<?php
    /**
     * Created by 十清凉.
     * User: 十清凉
     * Date: 2020/2/13 0013
     * Time: 11:06
     */






Route::any('admin/login','Admin\LoginController@index');

Route::group(['prefix' => '/admin', 'namespace' => 'Admin','middleware'=>'login'], function () {
    //后台首页
    Route::get('/','IndexController@index');
    //welcome页面
    Route::get('/welcome','IndexController@welcome');

}
);