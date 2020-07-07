<?php
namespace App\Util;
use App\Contracts\CharUtil as Contracts;
//实现接口类，接口类中方法必须实现
class SCharUtil implements Contracts{
	public function char(){
		return "这是一个超级工具类";
	}
}