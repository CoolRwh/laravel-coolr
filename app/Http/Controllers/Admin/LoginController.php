<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


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


    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        if (auth('admin')->attempt($credentials)) {
            session()->flash('success','登录成功！');
            return redirect(route('admin'));
        }else{
            return redirect(route('admin.login'))->with('danger','用户名或者密码错误!');
        }
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
