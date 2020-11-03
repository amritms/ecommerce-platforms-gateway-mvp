<?php

namespace App\Repositories;

use App\Contracts\PlatformInterface;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class Shopify implements PlatformInterface
{

    private $url;
    private $client;
    private $platform;

    public function __construct()
    {
        $this->url = '';
        $this->client = new Client();
    }

    /**
     * Get products from shopify.
     */
    public function products()
    {
        // api call to shopify
//        try {
//        $request = $this->client->get($this->url);
//        $response = $request->getBody();

            $response = array (
                'products' =>
                    array (
                        0 =>
                            array (
                                'id' => 632910392,
                                'title' => 'IPod Nano - 8GB',
                                'body_html' => '<p>It\'s the small iPod with one very big idea: Video. Now the world\'s most popular music player, available in 4GB and 8GB models, lets you enjoy TV shows, movies, video podcasts, and more. The larger, brighter display means amazing picture quality. In six eye-catching colors, iPod nano is stunning all around. And with models starting at just $149, little speaks volumes.</p>',
                                'vendor' => 'Apple',
                                'product_type' => 'Cult Products',
                                'created_at' => '2020-10-30T15:50:19-04:00',
                                'handle' => 'ipod-nano',
                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                'published_at' => '2007-12-31T19:00:00-05:00',
                                'template_suffix' => NULL,
                                'published_scope' => 'web',
                                'tags' => 'Emotive, Flash Memory, MP3, Music',
                                'admin_graphql_api_id' => 'gid://shopify/Product/632910392',
                                'variants' =>
                                    array (
                                        0 =>
                                            array (
                                                'id' => 808950810,
                                                'product_id' => 632910392,
                                                'title' => 'Pink',
                                                'price' => '199.00',
                                                'sku' => 'IPOD2008PINK',
                                                'position' => 1,
                                                'inventory_policy' => 'continue',
                                                'compare_at_price' => NULL,
                                                'fulfillment_service' => 'manual',
                                                'inventory_management' => 'shopify',
                                                'option1' => 'Pink',
                                                'option2' => NULL,
                                                'option3' => NULL,
                                                'created_at' => '2020-10-30T15:50:19-04:00',
                                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                                'taxable' => true,
                                                'barcode' => '1234_pink',
                                                'grams' => 567,
                                                'image_id' => 562641783,
                                                'weight' => 1.25,
                                                'weight_unit' => 'lb',
                                                'inventory_item_id' => 808950810,
                                                'inventory_quantity' => 10,
                                                'old_inventory_quantity' => 10,
                                                'requires_shipping' => true,
                                                'admin_graphql_api_id' => 'gid://shopify/ProductVariant/808950810',
                                                'presentment_prices' =>
                                                    array (
                                                        0 =>
                                                            array (
                                                                'price' =>
                                                                    array (
                                                                        'currency_code' => 'USD',
                                                                        'amount' => '199.00',
                                                                    ),
                                                                'compare_at_price' => NULL,
                                                            ),
                                                    ),
                                            ),
                                        1 =>
                                            array (
                                                'id' => 49148385,
                                                'product_id' => 632910392,
                                                'title' => 'Red',
                                                'price' => '199.00',
                                                'sku' => 'IPOD2008RED',
                                                'position' => 2,
                                                'inventory_policy' => 'continue',
                                                'compare_at_price' => NULL,
                                                'fulfillment_service' => 'manual',
                                                'inventory_management' => 'shopify',
                                                'option1' => 'Red',
                                                'option2' => NULL,
                                                'option3' => NULL,
                                                'created_at' => '2020-10-30T15:50:19-04:00',
                                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                                'taxable' => true,
                                                'barcode' => '1234_red',
                                                'grams' => 567,
                                                'image_id' => NULL,
                                                'weight' => 1.25,
                                                'weight_unit' => 'lb',
                                                'inventory_item_id' => 49148385,
                                                'inventory_quantity' => 20,
                                                'old_inventory_quantity' => 20,
                                                'requires_shipping' => true,
                                                'admin_graphql_api_id' => 'gid://shopify/ProductVariant/49148385',
                                                'presentment_prices' =>
                                                    array (
                                                        0 =>
                                                            array (
                                                                'price' =>
                                                                    array (
                                                                        'currency_code' => 'USD',
                                                                        'amount' => '199.00',
                                                                    ),
                                                                'compare_at_price' => NULL,
                                                            ),
                                                    ),
                                            ),
                                        2 =>
                                            array (
                                                'id' => 39072856,
                                                'product_id' => 632910392,
                                                'title' => 'Green',
                                                'price' => '199.00',
                                                'sku' => 'IPOD2008GREEN',
                                                'position' => 3,
                                                'inventory_policy' => 'continue',
                                                'compare_at_price' => NULL,
                                                'fulfillment_service' => 'manual',
                                                'inventory_management' => 'shopify',
                                                'option1' => 'Green',
                                                'option2' => NULL,
                                                'option3' => NULL,
                                                'created_at' => '2020-10-30T15:50:19-04:00',
                                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                                'taxable' => true,
                                                'barcode' => '1234_green',
                                                'grams' => 567,
                                                'image_id' => NULL,
                                                'weight' => 1.25,
                                                'weight_unit' => 'lb',
                                                'inventory_item_id' => 39072856,
                                                'inventory_quantity' => 30,
                                                'old_inventory_quantity' => 30,
                                                'requires_shipping' => true,
                                                'admin_graphql_api_id' => 'gid://shopify/ProductVariant/39072856',
                                                'presentment_prices' =>
                                                    array (
                                                        0 =>
                                                            array (
                                                                'price' =>
                                                                    array (
                                                                        'currency_code' => 'USD',
                                                                        'amount' => '199.00',
                                                                    ),
                                                                'compare_at_price' => NULL,
                                                            ),
                                                    ),
                                            ),
                                        3 =>
                                            array (
                                                'id' => 457924702,
                                                'product_id' => 632910392,
                                                'title' => 'Black',
                                                'price' => '199.00',
                                                'sku' => 'IPOD2008BLACK',
                                                'position' => 4,
                                                'inventory_policy' => 'continue',
                                                'compare_at_price' => NULL,
                                                'fulfillment_service' => 'manual',
                                                'inventory_management' => 'shopify',
                                                'option1' => 'Black',
                                                'option2' => NULL,
                                                'option3' => NULL,
                                                'created_at' => '2020-10-30T15:50:19-04:00',
                                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                                'taxable' => true,
                                                'barcode' => '1234_black',
                                                'grams' => 567,
                                                'image_id' => NULL,
                                                'weight' => 1.25,
                                                'weight_unit' => 'lb',
                                                'inventory_item_id' => 457924702,
                                                'inventory_quantity' => 40,
                                                'old_inventory_quantity' => 40,
                                                'requires_shipping' => true,
                                                'admin_graphql_api_id' => 'gid://shopify/ProductVariant/457924702',
                                                'presentment_prices' =>
                                                    array (
                                                        0 =>
                                                            array (
                                                                'price' =>
                                                                    array (
                                                                        'currency_code' => 'USD',
                                                                        'amount' => '199.00',
                                                                    ),
                                                                'compare_at_price' => NULL,
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'options' =>
                                    array (
                                        0 =>
                                            array (
                                                'id' => 594680422,
                                                'product_id' => 632910392,
                                                'name' => 'Color',
                                                'position' => 1,
                                                'values' =>
                                                    array (
                                                        0 => 'Pink',
                                                        1 => 'Red',
                                                        2 => 'Green',
                                                        3 => 'Black',
                                                    ),
                                            ),
                                    ),
                                'images' =>
                                    array (
                                        0 =>
                                            array (
                                                'id' => 850703190,
                                                'product_id' => 632910392,
                                                'position' => 1,
                                                'created_at' => '2020-10-30T15:50:19-04:00',
                                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                                'alt' => NULL,
                                                'width' => 123,
                                                'height' => 456,
                                                'src' => 'https://cdn.shopify.com/s/files/1/0006/9093/3842/products/ipod-nano.png?v=1604087419',
                                                'variant_ids' =>
                                                    array (
                                                    ),
                                                'admin_graphql_api_id' => 'gid://shopify/ProductImage/850703190',
                                            ),
                                        1 =>
                                            array (
                                                'id' => 562641783,
                                                'product_id' => 632910392,
                                                'position' => 2,
                                                'created_at' => '2020-10-30T15:50:19-04:00',
                                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                                'alt' => NULL,
                                                'width' => 123,
                                                'height' => 456,
                                                'src' => 'https://cdn.shopify.com/s/files/1/0006/9093/3842/products/ipod-nano-2.png?v=1604087419',
                                                'variant_ids' =>
                                                    array (
                                                        0 => 808950810,
                                                    ),
                                                'admin_graphql_api_id' => 'gid://shopify/ProductImage/562641783',
                                            ),
                                    ),
                                'image' =>
                                    array (
                                        'id' => 850703190,
                                        'product_id' => 632910392,
                                        'position' => 1,
                                        'created_at' => '2020-10-30T15:50:19-04:00',
                                        'updated_at' => '2020-10-30T15:50:19-04:00',
                                        'alt' => NULL,
                                        'width' => 123,
                                        'height' => 456,
                                        'src' => 'https://cdn.shopify.com/s/files/1/0006/9093/3842/products/ipod-nano.png?v=1604087419',
                                        'variant_ids' =>
                                            array (
                                            ),
                                        'admin_graphql_api_id' => 'gid://shopify/ProductImage/850703190',
                                    ),
                            ),
                        1 =>
                            array (
                                'id' => 921728736,
                                'title' => 'IPod Touch 8GB',
                                'body_html' => '<p>The iPod Touch has the iPhone\'s multi-touch interface, with a physical home button off the touch screen. The home screen has a list of buttons for the available applications.</p>',
                                'vendor' => 'Apple',
                                'product_type' => 'Cult Products',
                                'created_at' => '2020-10-30T15:50:19-04:00',
                                'handle' => 'ipod-touch',
                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                'published_at' => '2008-09-25T20:00:00-04:00',
                                'template_suffix' => NULL,
                                'published_scope' => 'web',
                                'tags' => '',
                                'admin_graphql_api_id' => 'gid://shopify/Product/921728736',
                                'variants' =>
                                    array (
                                        0 =>
                                            array (
                                                'id' => 447654529,
                                                'product_id' => 921728736,
                                                'title' => 'Black',
                                                'price' => '199.00',
                                                'sku' => 'IPOD2009BLACK',
                                                'position' => 1,
                                                'inventory_policy' => 'continue',
                                                'compare_at_price' => NULL,
                                                'fulfillment_service' => 'shipwire-app',
                                                'inventory_management' => 'shipwire-app',
                                                'option1' => 'Black',
                                                'option2' => NULL,
                                                'option3' => NULL,
                                                'created_at' => '2020-10-30T15:50:19-04:00',
                                                'updated_at' => '2020-10-30T15:50:19-04:00',
                                                'taxable' => true,
                                                'barcode' => '1234_black',
                                                'grams' => 567,
                                                'image_id' => NULL,
                                                'weight' => 1.25,
                                                'weight_unit' => 'lb',
                                                'inventory_item_id' => 447654529,
                                                'inventory_quantity' => 13,
                                                'old_inventory_quantity' => 13,
                                                'requires_shipping' => true,
                                                'admin_graphql_api_id' => 'gid://shopify/ProductVariant/447654529',
                                                'presentment_prices' =>
                                                    array (
                                                        0 =>
                                                            array (
                                                                'price' =>
                                                                    array (
                                                                        'currency_code' => 'USD',
                                                                        'amount' => '199.00',
                                                                    ),
                                                                'compare_at_price' => NULL,
                                                            ),
                                                    ),
                                            ),
                                    ),
                                'options' =>
                                    array (
                                        0 =>
                                            array (
                                                'id' => 891236591,
                                                'product_id' => 921728736,
                                                'name' => 'Title',
                                                'position' => 1,
                                                'values' =>
                                                    array (
                                                        0 => 'Black',
                                                    ),
                                            ),
                                    ),
                                'images' =>
                                    array (
                                    ),
                                'image' => NULL,
                            ),
                    ),
            );

            $products = $this->transformData($response);

            return response()->json($products);
//        }catch (\Exception $exception){
//                Log::error($exception->getMessage(), ['_trace' => $exception->getTraceAsString()]);
//
//                throw new \Exception('Whoops! something went wrong with Shopify product listings.', 500);
//        }
    }

    /**
     * Transform data to required format
     *
     * @param $products
     */
    private function transformData($products)
    {

        return collect($products['products'])->map(function($product){
            $variants = [];
            $inventory = 0;
            $weight = 0;
            $price = 0;

            if(isset($product['variants'] )) {
                foreach ($product['variants'] as $variant) {
                    $inventory += $variant['inventory_quantity'];
                    $weight = $variant['grams'];
                    $price = $variant['price'];

                    $variants[] = [
                        'size' => $variant['size'] ?? '',
                        'colour' => $variant['title']
                    ];
                }
            }

            return [
                'id' => $product['id'] ,
                'title' => $product['title'],
                'price' => $price,
                'inventory' => $inventory,
                'variant' => $variants,
                'weight' =>$weight
            ];
        });
    }
}
