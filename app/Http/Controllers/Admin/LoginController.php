<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Eloquent\Users as UsersModel;
use Mews\Captcha\Captcha;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('admin/login/login');
    }

    /**
     * 登录动作
     */
    public function loginAction(Users $request)
    {
        $access = $request->input('access');
        $password = $request->input('password');
        $data = [
            'access' => $access,
            'password' => $password,
        ];
        $result = UsersModel::test($data);
        if($result['code'] == 200){//登陆成功保存session，生成对应的token 服务端保存一份，客户端保存一份
           $token = UsersModel::createToken();
           Cookie::queue('token',$token,1440);//浏览器端设置Cookie
           Cache::put('token',$token,1440);//服务端设置token
           $request->session()->put('userInfo',$result['data']);
        }
        return $result;
    }
}
