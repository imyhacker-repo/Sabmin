<?php
namespace Arikun\Sabmin;

use Illuminate\Support\ServiceProvider;

class SabminServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            //image
            __DIR__.'/../core/img/iso.png' => public_path('adm/arikun/iso.png'),

            //css
            __DIR__.'/../core/css/all.min.css' => public_path('adm/arikun/css/all.min.css'),
            __DIR__.'/../core/css/sabmin.min.css' => public_path('adm/arikun/css/sabmin.min.css'),

            //Layout
            __DIR__.'/../core/layouts/adm/arikun/head.blade.php' => resource_path('/views/layouts/ly/adm/arikun/head.blade.php'),
            __DIR__.'/../core/layouts//adm/arikun/footer.blade.php' => resource_path('/views/layouts/ly/adm/arikun/footer.blade.php'),

            //login
            __DIR__.'/../core/pages/auth/login.blade.php' => resource_path('/views/auth/login.blade.php'),
            __DIR__.'/../core/pages/auth/register.blade.php' => resource_path('/views/auth/register.blade.php'),
            __DIR__.'/../core/pages/auth/verify.blade.php' => resource_path('/views/auth/verify.blade.php'),
            /////////
            __DIR__.'/../core/pages/auth/passwords/confirm.blade.php' => resource_path('/views/auth/passwords/confirm.blade.php'),
            __DIR__.'/../core/pages/auth/passwords/email.blade.php' => resource_path('/views/auth/passwords/email.blade.php'),
            __DIR__.'/../core/pages/auth/passwords/reset.blade.php' => resource_path('/views/auth/passwords/reset.blade.php'),

            //login main
            __DIR__.'/../core/layouts/adm/arikun/main/login.blade.php' => resource_path('/views/layouts/ly/adm/arikun/main/login.blade.php'),

            __DIR__.'/../core/layouts/adm/arikun/main/register.blade.php' => resource_path('/views/layouts/ly/adm/arikun/main/register.blade.php'),

            __DIR__.'/../core/layouts/adm/arikun/main/verify.blade.php' => resource_path('/views/layouts/ly/adm/arikun/main/verify.blade.php'),


            __DIR__.'/../core/layouts/adm/arikun/main/confirm.blade.php' => resource_path('/views/layouts/ly/adm/arikun/main/confirm.blade.php'),


            __DIR__.'/../core/layouts/adm/arikun/main/email.blade.php' => resource_path('/views/layouts/ly/adm/arikun/main/email.blade.php'),

            __DIR__.'/../core/layouts/adm/arikun/main/reset.blade.php' => resource_path('/views/layouts/ly/adm/arikun/main/reset.blade.php'),


        ]);
    }

    public function register()
    {
        
    }

}