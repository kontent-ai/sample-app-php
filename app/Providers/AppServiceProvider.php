<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Kontent\Ai\Delivery\DeliveryClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $projectId =  env('PROJECT_ID');
        $deliverClient = new DeliveryClient($projectId != NULL && strlen($projectId) > 0 ? $projectId : '975bf280-fd91-488c-994c-2f04416e5ee3');
        $this->app->instance('DeliverClient', $deliverClient);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $client = $this->app->make('DeliverClient');
        $homeData = $client->getItem('home');

        view()->share('company_address', $homeData->contact);

        view()->share('google_maps_key', 'AIzaSyAVOq4C-rf7JVeHt6ws9vsf-KHIRpueASg');
    }
}
