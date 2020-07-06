<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        if($request['age']<200){
            echo  "不通过";
        }
        // 在 $next($request)前执行的就是前置
        $response = $next($request); // 闭包,controller
        // 在 $next($request); 后置中间
        return $response;
    }
}
