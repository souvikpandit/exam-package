<?php

namespace souvik\exam;

use Illuminate\Support\ServiceProvider;

    class ExamServiceProvider extends ServiceProvider
    {
        public function boot()
        {
            $this->loadRoutesFrom(__DIR__.'/routes/web.php');
            $this->loadViewsFrom(__DIR__.'/views','exam');
            $this->loadMigrationsFrom(__DIR__.'/database/migrations');
            $this->publishes([
                            __DIR__.'/assets' => public_path('assets'),
                            ], 'public');

        }

        public function register()
        {
            # code...
        }
    }

?>
