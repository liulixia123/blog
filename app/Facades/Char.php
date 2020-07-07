<?php
namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class Char extends Facade{
	//从容器中获取必须重写父类此方法
	protected static function getFacadeAccessor(){
		return "char";
	}
}