<?php
    /**
     * Created by 十清凉.
     * User: 十清凉
     * Date: 2020/2/13 0013
     * Time: 11:06
     */





//'middleware'=>['auth.admin','web']

Route::group(['prefix' => '/admin', 'namespace' => 'Admin','middleware'=>['auth.admin','web']], function () {
    //后台首页
    Route::get('/','IndexController@index')->name('admin');
    //welcome页面
    Route::get('/welcome','IndexController@welcome')->name('admin.welcome');
    //article-list page
    Route::get('/article/list','ArticleController@index')->name('admin.article.list');

    //user用户列表
    Route::get('/user/list','UserController@list')->name('admin.user.list');
    //user用户添加
    Route::post('/user/add','UserController@add')->name('admin.user.add');
    //user用户修改
    Route::post('/user/update/{id}','UserController@update')->name('admin.user.update');

    //栏目
    Route::resource('cate','CateController',['as'  =>  'admin']);
    //规则
    Route::resource('rule','RuleController',['as'  =>  'admin']);
    //角色
    Route::resource('role','RoleController',['as'  =>  'admin']);
    //规则
    Route::resource('permission','PermissionController',['as'  =>  'admin']);

}
);


Route::get('admin/login','Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin/login','Admin\LoginController@login');
Route::get('admin/logout','Admin\LoginController@logout')->name('admin.logout');