<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    //
    public  function mail1(){
        \Mail::raw("邮件内容",function ($message){
            $message->from('to@163.com','搞怪大海');
            $message->subject('邮件主题');
            $message->to('xxxx@qq.com');
        });
    }

    public function mail()
    {
        Mail::raw("我是一封lavavel新邮件！",function ($message){
            $message->from('18790380660@163.com','搞怪大海');
            $message->subject('them');
            for ($i = 0,$a=10; $i < 10;$i++){
                $result = $message->to('wqzbxh@163.com');
            }
            var_dump($result);
        });
    }
}
