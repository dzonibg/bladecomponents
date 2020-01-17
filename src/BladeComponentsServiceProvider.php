<?php

namespace dzonibg\bladecomponents;
use Illuminate\Support\ServiceProvider;

class BladeComponentsServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'bladecomponents');
    }

    public function register()
    {

    }
}