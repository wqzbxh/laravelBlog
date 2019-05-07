<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
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
//        $list =  DB::table('users')->get();
//        foreach ($list as $user) {
//            echo $user->access;
//        }
//
//        var_dump($list);
//        return array('code' => 200);
        $data = [
            'access' => $access,
            'password' => $password,
        ];
        \App\Eloquent\Users::test($data);
    }
}
