<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Model\UserBind;

class SocialitesController extends Controller
{

    public function login($type)
    {
        if ($this->checkType($type)) {
            return \Socialite::with($type)->redirect();
        } else {
            return response()->json(['code' => 1, 'msg' => '没有授权该授权类型！']);
        }
    }


    public function callback($type)
    {
        if ($this->checkType($type)) {
            dd($type);
            $info = \Socialite::driver($type)->user();
            $data = [
                'provider' => $type,
                'openid'   => $info->id,
                'user_id'  => 0,
                'nickname' => $info->nickname,
                'avatar'   => $info->avatar,
            ];

            return $this->checkUser($data);
        } else {
            return response()->json(['code' => 1, 'msg' => '没有授权该授权类型！']);
        }
    }

    /**
     * 检查类型
     * @param $type
     * @return bool
     */
    public function checkType($type)
    {
        $auth_type = ['qq', 'weixin', 'weibo', 'github'];
        if (in_array($type, $auth_type)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     *
     * @param $data
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function checkUser($data)
    {
        $where = [
            'provider' => $data['provider'],
            'openid'   => $data['openid'],
        ];
        $res = UserBind::query()->where($where)->first();
        if (empty($res)) {
            try {
                $user_bind = new UserBind();
                $user_bind['provider'] = $data['provider'];
                $user_bind['openid'] = $data['openid'];
                $user_bind['user_id'] = 0;
                $user_bind['nickname'] = $data['nickname'];
                $user_bind['avatar'] = $data['avatar'];
                $user_bind->save();
            } catch (\Exception $exception) {
                return response()->json(['code' => 1, 'msg' => $exception->getMessage()]);
            }
        }
        \request()->session()->put('webUserInfo', $data);

        return redirect('/');
    }
}
