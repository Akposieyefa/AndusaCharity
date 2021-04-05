<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('supperadmin', function ()  {
            $userRoles = auth()->user()->roles->pluck('name');
                if($userRoles[0] == 'Supperadmin'){
                    return true;
                }
        });
        
        Blade::if('admin', function ()  {
            $userRoles = auth()->user()->roles->pluck('name');
                if($userRoles[0] == 'Admin'){
                    return true;
                }
        });
    }
}
