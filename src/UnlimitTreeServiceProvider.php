<?php

namespace Wys\UnlimitTree;

use Illuminate\Support\ServiceProvider;

class UnlimitTreeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->app->singleton('unlimitTree', function () {
            return new UnlimitTree();
        });
    }
}
