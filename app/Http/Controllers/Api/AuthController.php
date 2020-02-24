<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    //
    public function __construct()
    {
        //除login外都需要验证
        $this->middleware('auth:api', ['except' => ['login']]);
    }

    //登陆获取token
    public function login()
    {

        $credentials = \request(['name', 'password']);

        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['success' => false,'error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }


    //获取用户资料
    public function me()
    {
        return response()->json(auth('api')->user());
    }

    //响应token
    protected function respondWithToken($token)
    {

        return response()->json(
          [
            'success'      => true,
            'access_token' => $token,
            'token_type'   => 'Bearer',
            'expires_in'   => auth('api')->factory()->getTTL() * 60,
          ]
        );
    }

    //刷新token
    public function refresh()
    {

        return $this->respondWithToken(auth('api')->refresh());
    }


}
