<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ProductCategory;
use App\Models\Phone;
use App\Models\Address;

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
         $categories = (ProductCategory::all())->toArray();
         $listPhone = Phone::all();
         $listAddress = Address::all();
          View::share('categories', $categories);
          View::share('listPhone', $listPhone);
          View::share('listAddress', $listAddress);
    }
}
