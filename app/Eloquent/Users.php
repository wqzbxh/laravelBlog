<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     *  与模型关联的数据表.
     * @var string
     */

    protected $table = 'users';


    /**
     * 执行模型是否自动维护时间戳.
     * @var bool
     */
    public $timestamps = false;


    public static function test($data)
    {

       $result = self::where($data)->first();
       if($result){
            $resultArray = [
                'code' => 200,
                'msg' => Error::ERROR[200],
                'data' => $result->toArray()
             ];
       }else{
           $resultArray = [
               'code' => 202,
               'msg' => Error::ERROR[202],
               'data' => $result->toArray()
           ];
       }
        return $resultArray;
    }

    /**
     * 生成随机Token
     * @return string
     */
    public static function createToken()
    {
        $pattern = '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
        $token = '';
        for($i = 0 ; $i < 63 ; $i++){
            $token = $token.$pattern[rand(0,62)];
        }
        return $token;
    }
}
