<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Error extends Model
{
    //
    const ERROR = [
        '200' => 'SUCCESS',
        '202' => '未找到记录',
    ];
}
