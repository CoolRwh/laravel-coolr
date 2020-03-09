<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
use AuthenticatesUsers;

    protected $redirectTo = '/admin';

     public function __construct()
     {
         $this->middleware('guest:admin')->except('logout');

     }

    public function username()
    {
        return 'username';
    }

    /**
     * 重写登录视图页面
     */

    public function showLoginForm()
    {
        return view('admin.login.login');
    }

    /**
     * 退出到登录页面
     */
    public function logout()
    {
        if (auth('admin')->id()){
            auth('admin')->logout();
        }

        return redirect('admin/login')->with('success','退出成功！');
    }
    /**
     * 自定义认证驱动
     */
    protected function guard()
    {
        return auth('admin');
    }

}
