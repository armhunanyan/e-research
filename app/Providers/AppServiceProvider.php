<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Spatie\Valuestore\Valuestore;
use Illuminate\Support\Facades\View;

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
        $settings = Valuestore::make(storage_path('app/settings.json'));

        $navbar = [
            array(
                'name' => 'About',
                'route' =>'about',
                'icon'=> 'bg-about',
                'class'=> ''
            ),
            array(
                'name' => 'Services',
                'route' =>'services',
                'icon'=> 'bg-services',
                'class'=> ''
            ),
            array(
                'name' => 'Portfolio',
                'route' =>'portfolio',
                'icon'=> 'bg-portfolio',
                'class'=> ''
            ),
            array(
                'name' => 'News/Announcements',
                'route' =>'news',
                'icon'=> 'bg-news',
                'class'=> ''
            ),
            array(
                'name' => 'Useful materials',
                'route' =>'materials',
                'icon'=> 'bg-materials',
                'class' => ''
            ),
            array(
                'name' => 'Contact',
                'route' =>'contact',
                'icon'=> 'bg-contact',
                'class' => ''
            )
        ];

        View::share([
            'settings' => $settings,
            'navbar' => $navbar
        ]);
    }
}
