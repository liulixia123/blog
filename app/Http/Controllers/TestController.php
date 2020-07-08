<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// 命令行创建控制器 和 右键没什么区别 能够快速的帮助我们写好一些内容
class TestController extends Controller
{
    public function test(){
    	session(['aa'=>'ddd']);
    	dd(session('aa'));
    }
    public function test1(){
    	dd(session('a'));
    }
}
