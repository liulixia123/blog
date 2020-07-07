<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * 注册服务
     * @return void
     */
    public function register()
    {
        //char 容器标识
        //$this->app->singleton('char',\App\Util\CharUtil::class); 
        $this->app->singleton('char',\App\Util\SCharUtil::class); 
    }

    /**
     * Bootstrap services.
     * 执行服务
     * @return void
     */
    public function boot()
    {
        
        //echo "服务注册者";
    }
}
