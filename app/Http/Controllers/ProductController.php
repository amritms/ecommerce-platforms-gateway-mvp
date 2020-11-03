<?php

namespace App\Http\Controllers;

use App\Facades\PlatformGateway;
use App\Http\Resources\ProductCollectionResource;
use App\Models\Store;
use App\Providers\PlatformGatewayServiceProvider;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{
    public function index(Store $store)
    {
        try{
            $platforms = [
                1 => 'shopify',
                2 => 'woocommerce'
            ];

            $store_id = Route::current()->parameter('id');

            $platform_type = $platforms[$store_id];

            config(['custom.platform' =>  $platform_type]);

            // @TODO: make sure platform exists.

            app()->register(PlatformGatewayServiceProvider::class);
            $products = PlatformGateway::products();

            return response()->json(json_decode($products->content()), Response::HTTP_OK);
        }catch (\Exception $exception){
            Log::error($exception->getMessage(), ['_trace' => $exception->getTraceAsString()]);

            return response()->json(['error' => 'Sorry! Something went wrong'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
