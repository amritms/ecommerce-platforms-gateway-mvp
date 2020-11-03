<?php

namespace App\Providers;

use App\Contracts\PlatformInterface;
use App\Repositories\Shopify;
use App\Repositories\WooCommerce;
use Illuminate\Contracts\Support\DeferrableProvider;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PlatformGatewayServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $platform_type = config('custom.platform');

        $this->app->singleton(PlatformInterface::class, function ($app) use($platform_type){

        return $this->resolveInvoice($platform_type);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Resolve the interface according to store id
     *
     * @param $platform_type
     * @return Shopify|WooCommerce
     */
    private function resolveInvoice($platform_type)
    {
        // @TODO replace switch with dynamic switching code
        switch($platform_type) {
            case 'shopify':
                return new Shopify();
                break;
            case 'woocommerce':
                return new WooCommerce();
                break;
        }
    }

}
