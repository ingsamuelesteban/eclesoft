<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
Use Carbon\Carbon;
use Illuminate\Support\Facades\URL;
use App\Models\Parroquia;

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
        if($this->app->environment('production'))
        {
            URL::forceScheme('https');
        }
        Carbon::setUTF8(true);
        Carbon::setLocale(config('app.locale'));
        setlocale(LC_ALL, 'es_MX', 'es', 'ES', 'es_MX.utf8');

        view()->composer('*', function ($view) {
            $parroquia = Parroquia::first(); // O busca la parroquia correspondiente
            $view->with('facturacion_activa', $parroquia ? $parroquia->facturacion_activa : false);
        });
    }
}
