<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Test;
use App\Model\User;
use App\Model\UserRole;
use App\Facades\Char;

class IndexController extends Controller
{
    public function index()
    {
        // 连接数据库
        // 先查看配置

        //dump(config('database'));
        // DB Illuminate\Support\Facades\DB::class,
        //dump(DB::table('admin_user')->where('user_id',1)->first());

        // 使用DB操作数据库的话返回就是一个数组
        // 使用model返回的是一个对象,这个对象是当前模型实例
        // 可以通过toArray()转化为数组输出

        // model 对数据表进行抽象的描述
        // 数据表中的字段名就是模型中的属性
        //dd(User::where('user_id',1)->first()->name);

        // DB 和 model 区别
        // 功能上没什么区别,底层实现: 本质上的话都是依托于
        // \Illuminate\Database\DatabaseManager::class
        // model就是比DB都一些属性维护起来更加方便

        // 关联模型怎样筛选字段呢
        // 模型关联的普通查询方式
        // 普通一对一
        // $user = User::where('uid',63)->first();
        // dd($user->userRole->ToArray());
        // 一对多
        // $model = UserRole::where('role_id', 1)->first();
        // dd($model->user->ToArray());
        // 本质不是用的join查询

        // 预载入 with 以user为例操作
        // dd(User::where('uid',63)->with('instance','userRole')->first()->toArray());
        /*dd(User::where('uid',63)->with([
            'instance',
            'userRole' => function($query){ // 代表当前key 模型
                $query->with('userGroup');
            }
        ])->first()->toArray());*/
        //查看服务注册者有哪些
        //dd(app()->getBindings());
        //两种方法去调用工具类，门面和容器
        //return Char::char();
        return app('char')->char();

    }
}
