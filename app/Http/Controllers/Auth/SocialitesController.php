<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\UserBind;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

//use Socialite;


class SocialitesController extends Controller
{

    //跳转到QQ授权页面
    public function qq()
    {
        return \Socialite::with('qq')->redirect();
    }

    //用户授权后回调地址
    public function qqCallback()
    {
        $info = \Socialite::driver('qq')->user();
        $data = [
          'provider' => 'qq',
          'openid'   => $info->id,
          'user_id'  => 0,
          'nickname' => $info->nickname,
          'avatar'   => $info->avatar,
        ];
        return $this->checkUser($data);
    }


    public function wei_xin()
    {

        return \Socialite::with('weixin')->redirect();
    }

    public function wx_callback()
    {

        $info = \Socialite::driver('weixin')->user();

    }


    public function weiBo()
    {

        return \Socialite::with('weibo')->redirect();
    }

    public function weiBoCallback(Request $request)
    {
        if (!isset($request->code)) {
            return redirect('admin/login');
        }
        $info = \Socialite::driver('weibo')->user();
        $data = [
          'provider' => 'weibo',
          'openid'   => $info->id,
          'user_id'  => 0,
          'nickname' => $info->nickname,
          'avatar'   => $info->avatar,
        ];

        return $this->checkUser($data);
    }

    public function github()
    {
        return \Socialite::with('github')->redirect();
    }

    public function githubCallback()
    {

        $info = \Socialite::driver('github')->user();
        // dd($info);

        $data = [
          'provider' => 'github',
          'openid'   => $info->id,
          'user_id'  => 0,
          'nickname' => $info->nickname,
          'avatar'   => $info->avatar,
        ];

        return $this->checkUser($data);
    }


    public function checkUser($data)
    {
        $where = [
          'provider' => $data['provider'],
          'openid'   => $data['openid'],
        ];
        $res   = UserBind::where($where)->first();
        if (empty($res)) {
            $user_bind             = new UserBind();
            $user_bind['provider'] = $data['provider'];
            $user_bind['openid']   = $data['openid'];
            $user_bind['user_id']  = 0;
            $user_bind['nickname'] = $data['nickname'];
            $user_bind['avatar']   = $data['avatar'];
            $user_bind->save();
        }
//        session(['webUserInfo' => $data],600);
        \request()->session()->put('webUserInfo',$data);
        return redirect('/');
    }

}
