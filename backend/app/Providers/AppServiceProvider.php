<?php

namespace App\Providers;

use App\Services\MypageServises;
use Illuminate\Support\ServiceProvider;
use App\consts\ServiseAliasConst;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(ServiseAliasConst::MYPAGE, function () {
            return new MypageServises;
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}
