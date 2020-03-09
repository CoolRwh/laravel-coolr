<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\UserBind;
//use Socialite;


class SocialitesController extends Controller
{

    //跳转到QQ授权页面
    public function qq()
    {
        $info = request()->url();
   /*     dd($info);*/
        return \Socialite::with('qq')->redirect();
    }

    //用户授权后回调地址
    public function callback()
    {
        $info  = \Socialite::driver('qq')->user();

        $where = [
          'provider' => 'qq',
          'openid'   => $info->id,
        ];
        $res   = UserBind::where($where)->first();
        if (empty($res)) {
            $user_bind   = new UserBind();
            $user_bind['provider'] = 'qq';
            $user_bind['openid']   = $info->id;
            $user_bind['user_id']  = 0;
            $user_bind['nickname'] = $info->nickname;
            $user_bind['avatar']   = $info->avatar;
            $user_bind->save();

            return redirect('/')->with('success','QQ 登陆成功！');
        }

        return redirect('/')->with('success','QQ 登陆成功！');
    }



    public function wei_xin(){

       return \Socialite::with('weixin')->redirect();
    }

    public function wx_callback(){

        $info  = \Socialite::driver('weixin')->user();
        dd($info);

        $where = [
          'provider' => 'weixin',
          'openid'   => $info->id,
        ];
        $res   = UserBind::where($where)->first();
        if (empty($res)) {
            $user_bind   = new UserBind();
            $user_bind['provider'] = 'weixin';
            $user_bind['openid']   = $info->id;
            $user_bind['user_id']  = 0;
            $user_bind['nickname'] = $info->nickname;
            $user_bind['avatar']   = $info->avatar;
            $user_bind->save();

            return redirect('/')->with('success','微信 登陆成功！');
        }

        return redirect('/')->with('success','微信 登陆成功！');

    }
}
