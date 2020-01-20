<?php

namespace dzonibg\bladecomponents;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class BladeComponentsServiceProvider extends ServiceProvider {

    public function boot() {
        $this->loadViewsFrom(__DIR__.'/resources/views', 'bladecomponents');
        Blade::component('bladecomponents::layout.main', 'layout');
        Blade::component("bladecomponents::component.card", 'card');
    }

    public function register()
    {

    }
}
