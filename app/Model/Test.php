<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

// model laravel 会在解析的时候
// 根据类名然后会把它变成一个复数(English的复数)
class Test extends Model
{
    // 需要自定义表名
    protected $table = 'test';


}
