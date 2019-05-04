<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * 博客首页
     */
    public function index(){
        return view('blog/index/index');
    }

    public function blogDetails(Request $request)
    {
        var_dump($request->get(''));exit;
        return view('blog/index/blog_details');
    }
}
