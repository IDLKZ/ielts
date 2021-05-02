<?php

namespace App\Providers;

use App\Models\Footer;
use App\Models\Logo;
use App\Models\Social;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Route;

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
        Route::prefix('api')
            ->middleware('api')
            ->as('api.')
            ->namespace($this->app->getNamespace().'Http\Controllers\API')
            ->group(base_path('routes/api.php'));

        \view()->composer("frontend.layout.navbar",function ($view){
            $logo = Logo::orderBy("created_at","desc")->first();
            $view->with("logo",$logo);
        });
        \view()->composer("frontend.layout.footer",function ($view){
            $socials = Social::all();
            $view->with("socials",$socials);
        });
        \view()->composer("frontend.layout.footer",function ($view){
            $footer = Footer::orderBy("created_at","desc")->first();
            $view->with("footer",$footer);
        });
        \view()->composer("frontend.layout.footer",function ($view){
            $logo = Logo::orderBy("created_at","desc")->first();
            $view->with("logo",$logo);
        });
        Paginator::useBootstrap();
    }
}
