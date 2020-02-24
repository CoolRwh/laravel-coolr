<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\UserBind;
use Socialite;

class SocialitesController extends Controller
{

    //跳转到QQ授权页面
    public function qq()
    {

        return Socialite::with('qq')->redirect();
    }

    //用户授权后回调地址
    public function callback()
    {
        $info  = Socialite::driver('qq')->user();
        $where = [
          'provider' => 'qq',
          'openid'   => $info->id,
        ];
        $res   = UserBind::where($where)->first();
        if (!$res) {
            $user_bind             = new UserBind();
            $user_bind['provider'] = 'qq';
            $user_bind['openid']   = $info->id;
            $user_bind['user_id']  = 0;
            $user_bind['nickname'] = $info->nickname;
            $user_bind['avatar']   = $info->avatar;
            $user_bind->save();

            return 'ok';
        }

        return redirect('/');
    }
}
