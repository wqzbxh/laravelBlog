<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
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
        return json_encode(array('code' => 1));
    }
}
