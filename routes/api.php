<?php
/*header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers', 'Origin, Content-Type, Cookie, X-CSRF-TOKEN, Accept, Authorization, X-XSRF-TOKEN');
header('Access-Control-Expose-Headers', 'Authorization, authenticated');
header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, OPTIONS');
header('Access-Control-Allow-Credentials', 'true');*/
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




$api = app('Dingo\Api\Routing\Router');
#默认配置指定版本为v1,可直接通过{host}/api/version访问
/*$api->version('v1',['namespace'=>'App\Api\Controllers'],function ($api){ cors
    $api->get('user','UserController@show');          ['namespace'=>'App\Http\Controllers\api'],
});*/
$api->version('v1',['middleware'=>'cors'] ,function ($api) {
    $api->get('user','App\Http\Controllers\Api\UserController@getUserList');
    //登陆获取token
    $api->post('login', 'APAuthController@login');

    $api->group(['middleware' => 'auth.jwt','namespace'=>'App\Http\Controllers\Api'], function ($api) {

        $api->post('me', 'AuthController@me');


        //获取我的博客文章
        $api->get('get_my_blog',function (){
            dd('get_my_blog');
        });

    });
});

$api->version('v2',function ($api){
    $api->get('some',function (){
       dd('some');
    });

/*    $api->group(['namespace'=>'App\Http\Controllers\Api'],function ($api){

        $api->get('me',function (){
            echo 'me-v2';
        });

    });*/

});



