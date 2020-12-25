<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        // User
        Gate::define("user/create", function (){
        return in_array(Auth::user()->role_id, [1]);
        });
        Gate::define("user/edit", function (){
        return  in_array(Auth::user()->role_id, [1]);
        });
        // Banner
        Gate::define("banner/edit", function (){
        return  in_array(Auth::user()->role_id, [1,2]);
        });
        // About
        Gate::define("about/edit", function (){
        return  in_array(Auth::user()->role_id, [1]);
        });
        // Service
        Gate::define("service/create", function (){
        return in_array(Auth::user()->role_id, [1]);
        });
        Gate::define("service/edit", function (){
        return  in_array(Auth::user()->role_id, [1]);
        });
        // Feature 
        Gate::define("feature/create", function (){
        return in_array(Auth::user()->role_id, [1]);
        });
        Gate::define("feature/edit", function (){
        return  in_array(Auth::user()->role_id, [1]);
        });
        // Portfolio
        Gate::define("portfolio/create", function (){
        return in_array(Auth::user()->role_id, [1]);
        });
        Gate::define("portfolio/edit", function (){
        return  in_array(Auth::user()->role_id, [1,2]);
        });
        // Testimonial
        Gate::define("testimonial/create", function (){
        return in_array(Auth::user()->role_id, [1]);
        });
        Gate::define("testimonial/edit", function (){
        return  in_array(Auth::user()->role_id, [1]);
        });


    }
}
