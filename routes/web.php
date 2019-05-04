<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index\index');
});

Route::get('hello', function () {
    return 'Hello, Welcome to LaravelAcademy.org';
});
/**
 * 前端路由
 */


//博客路由
Route::get('blog', 'Web\BlogController@index');
Route::get('blog_details', 'Web\BlogController@blogDetails')->middleware('web');

/*
 * 后台路由
 */

Route::get('login','Admin\LoginController@login');



Route::get('test', function () {})->middleware('token');

Route::group(['middleware'=>['web']],function (){

    Route::post('login/loginAction','Admin\LoginController@loginAction');

});

Route::put('post/{id}', function ($id) {
    //
})->middleware('role:editor');


Route::get('form_without_csrf_token', function (){
    return '<form method="POST" action="/hello_from_form"><button type="submit">提交</button></form>';
});

Route::get('form_with_csrf_token', function () {
    return '<form method="POST" action="/hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
});

Route::post('hello_from_form', function (){
    return 'hello laravel!';
});