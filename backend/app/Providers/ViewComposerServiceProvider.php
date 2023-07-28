<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\View\Composers\ExampleComposer;
use Illuminate\Support\Facades\View;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composers([
            // header.blade.phpにHeaderComposerで結合した$statusが常に渡される
            ExampleComposer::class => '*'
        ]);
    }
}
