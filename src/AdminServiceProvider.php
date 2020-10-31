<?php
namespace AkshayJumbade\Admin;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider {
   function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        // $this->loadRoutesFrom(__DIR__.'/routes/api.php');
        // $this->loadRoutesFrom(__DIR__.'/routes/console.php');
        // $this->loadRoutesFrom(__DIR__.'/routes/channels.php');

        // Config
        $this->mergeConfigFrom(__DIR__.'/config/config.php', 'admin');

        $this->loadTranslationsFrom(__DIR__.'/translations', 'admin');
        // views
        $this->loadViewsFrom(__DIR__.'/views', 'admin');

        // publishes
        $this->publishes([
            __DIR__.'/config/config.php' => config_path('admin.php'),
            __DIR__.'/translations' => resource_path('lang/vendor/admin'),
        ]);
   }
   function register() {

   }
}
