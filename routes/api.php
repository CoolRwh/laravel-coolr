<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, X-CSRF-TOKEN, Accept, Authorization, X-XSRF-TOKEN');
header('Access-Control-Expose-Headers', 'Authorization, authenticated');
header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS');
header('Access-Control-Allow-Credentials', 'true');
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/

/*Route::group([

  'prefix' => 'auth'

], function ($router) {
    Route::post('token', 'AuthController@token');
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});*/



$api = app('Dingo\Api\Routing\Router');
#默认配置指定版本为v1,可直接通过{host}/api/version访问
/*$api->version('v1',['namespace'=>'App\Api\Controllers'],function ($api){
    $api->get('user','UserController@show');
});*/
$api->version('v1',['namespace'=>'App\Http\Controllers\api'], function ($api) {
    //登陆获取token
    $api->post('login', 'AuthController@login');

    $api->post('me', 'AuthController@me');

    $api->group(['middleware' => 'auth.jwt'], function ($api) {


        $api->post('me', 'AuthController@me');
        $api->get('user', 'UserController@show');
        //获取我的博客文章
        $api->get('get_my_blog', 'BlogController@getUserBlog');

    });
});



