<?php

namespace App\Providers;

use App\Truck_request;

use App\Booking;

use App\Truck;

use App\Warehouse;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       //using view composer to set following variables globally

        view()->composer('*', function($view) {
            $view->with('truck_requests', Truck_request::All());
            $view->with('bookings', Booking::All());
            $view->with('trucks', Truck::All());
            $view->with('warehouses', Warehouse::All());

        });
        
      //  \Illuminate\Support\Facades\URL::forceScheme('https');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
