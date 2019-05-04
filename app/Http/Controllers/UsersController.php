<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    //
    public function index(Request $request)
    {
        $path = $request->path();
        echo  $path."<br>";
        if($request->is('user/*')){echo 1; }else{ echo 2;}
        $url = $request->fullUrl();
        echo $url."<br>";
        $urlType = $request->method();
        echo $urlType."<br>";
        if($request->isMethod('post')){echo 'post';}else{echo 'get';}
        var_dump($request->all());
        $name = $request->input('name','111');
        var_dump($name."<br>");

    }
}
