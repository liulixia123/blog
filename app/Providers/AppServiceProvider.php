<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\DB;
class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
      DB::listen(function ($query) {
         echo $query->sql;
         // $query->bindings
         // $query->time
     });
    }
}
