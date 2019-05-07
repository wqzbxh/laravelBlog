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

       $flights = self::where($data)->first()->toArray();
        var_dump($flights);
    }
}
