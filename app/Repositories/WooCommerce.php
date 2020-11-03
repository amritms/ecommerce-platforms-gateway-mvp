<?php


namespace App\Repositories;


use App\Contracts\PlatformInterface;
use Illuminate\Support\Facades\Log;

class WooCommerce implements PlatformInterface
{

    /**
     * Get products from WooCommerce.
     */
    public function products()
    {
        // api call to shopify
//        try {
//        $request = $this->client->get($this->url);
//        $response = $request->getBody();

            $response = array(
                0 =>
                    array(
                        'id' => 799,
                        'name' => 'Ship Your Idea',
                        'slug' => 'ship-your-idea-22',
                        'permalink' => 'https://example.com/product/ship-your-idea-22/',
                        'date_created' => '2017-03-23T17:03:12',
                        'date_created_gmt' => '2017-03-23T20:03:12',
                        'date_modified' => '2017-03-23T17:03:12',
                        'date_modified_gmt' => '2017-03-23T20:03:12',
                        'type' => 'variable',
                        'status' => 'publish',
                        'featured' => false,
                        'catalog_visibility' => 'visible',
                        'description' => '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
',
                        'short_description' => '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
',
                        'sku' => '',
                        'price' => '',
                        'regular_price' => '',
                        'sale_price' => '',
                        'date_on_sale_from' => NULL,
                        'date_on_sale_from_gmt' => NULL,
                        'date_on_sale_to' => NULL,
                        'date_on_sale_to_gmt' => NULL,
                        'price_html' => '',
                        'on_sale' => false,
                        'purchasable' => false,
                        'total_sales' => 0,
                        'virtual' => false,
                        'downloadable' => false,
                        'downloads' =>
                            array(),
                        'download_limit' => -1,
                        'download_expiry' => -1,
                        'external_url' => '',
                        'button_text' => '',
                        'tax_status' => 'taxable',
                        'tax_class' => '',
                        'manage_stock' => false,
                        'stock_quantity' => NULL,
                        'stock_status' => 'instock',
                        'backorders' => 'no',
                        'backorders_allowed' => false,
                        'backordered' => false,
                        'sold_individually' => false,
                        'weight' => '',
                        'dimensions' =>
                            array(
                                'length' => '',
                                'width' => '',
                                'height' => '',
                            ),
                        'shipping_required' => true,
                        'shipping_taxable' => true,
                        'shipping_class' => '',
                        'shipping_class_id' => 0,
                        'reviews_allowed' => true,
                        'average_rating' => '0.00',
                        'rating_count' => 0,
                        'related_ids' =>
                            array(
                                0 => 31,
                                1 => 22,
                                2 => 369,
                                3 => 414,
                                4 => 56,
                            ),
                        'upsell_ids' =>
                            array(),
                        'cross_sell_ids' =>
                            array(),
                        'parent_id' => 0,
                        'purchase_note' => '',
                        'categories' =>
                            array(
                                0 =>
                                    array(
                                        'id' => 9,
                                        'name' => 'Clothing',
                                        'slug' => 'clothing',
                                    ),
                                1 =>
                                    array(
                                        'id' => 14,
                                        'name' => 'T-shirts',
                                        'slug' => 't-shirts',
                                    ),
                            ),
                        'tags' =>
                            array(),
                        'images' =>
                            array(
                                0 =>
                                    array(
                                        'id' => 795,
                                        'date_created' => '2017-03-23T14:03:08',
                                        'date_created_gmt' => '2017-03-23T20:03:08',
                                        'date_modified' => '2017-03-23T14:03:08',
                                        'date_modified_gmt' => '2017-03-23T20:03:08',
                                        'src' => 'https://example.com/wp-content/uploads/2017/03/T_4_front-11.jpg',
                                        'name' => '',
                                        'alt' => '',
                                    ),
                                1 =>
                                    array(
                                        'id' => 796,
                                        'date_created' => '2017-03-23T14:03:09',
                                        'date_created_gmt' => '2017-03-23T20:03:09',
                                        'date_modified' => '2017-03-23T14:03:09',
                                        'date_modified_gmt' => '2017-03-23T20:03:09',
                                        'src' => 'https://example.com/wp-content/uploads/2017/03/T_4_back-10.jpg',
                                        'name' => '',
                                        'alt' => '',
                                    ),
                                2 =>
                                    array(
                                        'id' => 797,
                                        'date_created' => '2017-03-23T14:03:10',
                                        'date_created_gmt' => '2017-03-23T20:03:10',
                                        'date_modified' => '2017-03-23T14:03:10',
                                        'date_modified_gmt' => '2017-03-23T20:03:10',
                                        'src' => 'https://example.com/wp-content/uploads/2017/03/T_3_front-10.jpg',
                                        'name' => '',
                                        'alt' => '',
                                    ),
                                3 =>
                                    array(
                                        'id' => 798,
                                        'date_created' => '2017-03-23T14:03:11',
                                        'date_created_gmt' => '2017-03-23T20:03:11',
                                        'date_modified' => '2017-03-23T14:03:11',
                                        'date_modified_gmt' => '2017-03-23T20:03:11',
                                        'src' => 'https://example.com/wp-content/uploads/2017/03/T_3_back-10.jpg',
                                        'name' => '',
                                        'alt' => '',
                                    ),
                            ),
                        'attributes' =>
                            array(
                                0 =>
                                    array(
                                        'id' => 6,
                                        'name' => 'Color',
                                        'position' => 0,
                                        'visible' => false,
                                        'variation' => true,
                                        'options' =>
                                            array(
                                                0 => 'Black',
                                                1 => 'Green',
                                            ),
                                    ),
                                1 =>
                                    array(
                                        'id' => 0,
                                        'name' => 'Size',
                                        'position' => 0,
                                        'visible' => true,
                                        'variation' => true,
                                        'options' =>
                                            array(
                                                0 => 'S',
                                                1 => 'M',
                                            ),
                                    ),
                            ),
                        'default_attributes' =>
                            array(),
                        'variations' =>
                            array(),
                        'grouped_products' =>
                            array(),
                        'menu_order' => 0,
                        'meta_data' =>
                            array(),
                        '_links' =>
                            array(
                                'self' =>
                                    array(
                                        0 =>
                                            array(
                                                'href' => 'https://example.com/wp-json/wc/v3/products/799',
                                            ),
                                    ),
                                'collection' =>
                                    array(
                                        0 =>
                                            array(
                                                'href' => 'https://example.com/wp-json/wc/v3/products',
                                            ),
                                    ),
                            ),
                    ),
                1 =>
                    array(
                        'id' => 794,
                        'name' => 'Premium Quality',
                        'slug' => 'premium-quality-19',
                        'permalink' => 'https://example.com/product/premium-quality-19/',
                        'date_created' => '2017-03-23T17:01:14',
                        'date_created_gmt' => '2017-03-23T20:01:14',
                        'date_modified' => '2017-03-23T17:01:14',
                        'date_modified_gmt' => '2017-03-23T20:01:14',
                        'type' => 'simple',
                        'status' => 'publish',
                        'featured' => false,
                        'catalog_visibility' => 'visible',
                        'description' => '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
',
                        'short_description' => '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
',
                        'sku' => '',
                        'price' => '21.99',
                        'regular_price' => '21.99',
                        'sale_price' => '',
                        'date_on_sale_from' => NULL,
                        'date_on_sale_from_gmt' => NULL,
                        'date_on_sale_to' => NULL,
                        'date_on_sale_to_gmt' => NULL,
                        'price_html' => '<span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>21.99</span>',
                        'on_sale' => false,
                        'purchasable' => true,
                        'total_sales' => 0,
                        'virtual' => false,
                        'downloadable' => false,
                        'downloads' =>
                            array(),
                        'download_limit' => -1,
                        'download_expiry' => -1,
                        'external_url' => '',
                        'button_text' => '',
                        'tax_status' => 'taxable',
                        'tax_class' => '',
                        'manage_stock' => false,
                        'stock_quantity' => NULL,
                        'stock_status' => 'instock',
                        'backorders' => 'no',
                        'backorders_allowed' => false,
                        'backordered' => false,
                        'sold_individually' => false,
                        'weight' => '',
                        'dimensions' =>
                            array(
                                'length' => '',
                                'width' => '',
                                'height' => '',
                            ),
                        'shipping_required' => true,
                        'shipping_taxable' => true,
                        'shipping_class' => '',
                        'shipping_class_id' => 0,
                        'reviews_allowed' => true,
                        'average_rating' => '0.00',
                        'rating_count' => 0,
                        'related_ids' =>
                            array(
                                0 => 463,
                                1 => 47,
                                2 => 31,
                                3 => 387,
                                4 => 458,
                            ),
                        'upsell_ids' =>
                            array(),
                        'cross_sell_ids' =>
                            array(),
                        'parent_id' => 0,
                        'purchase_note' => '',
                        'categories' =>
                            array(
                                0 =>
                                    array(
                                        'id' => 9,
                                        'name' => 'Clothing',
                                        'slug' => 'clothing',
                                    ),
                                1 =>
                                    array(
                                        'id' => 14,
                                        'name' => 'T-shirts',
                                        'slug' => 't-shirts',
                                    ),
                            ),
                        'tags' =>
                            array(),
                        'images' =>
                            array(
                                0 =>
                                    array(
                                        'id' => 792,
                                        'date_created' => '2017-03-23T14:01:13',
                                        'date_created_gmt' => '2017-03-23T20:01:13',
                                        'date_modified' => '2017-03-23T14:01:13',
                                        'date_modified_gmt' => '2017-03-23T20:01:13',
                                        'src' => 'https://example.com/wp-content/uploads/2017/03/T_2_front-4.jpg',
                                        'name' => '',
                                        'alt' => '',
                                    ),
                                1 =>
                                    array(
                                        'id' => 793,
                                        'date_created' => '2017-03-23T14:01:14',
                                        'date_created_gmt' => '2017-03-23T20:01:14',
                                        'date_modified' => '2017-03-23T14:01:14',
                                        'date_modified_gmt' => '2017-03-23T20:01:14',
                                        'src' => 'https://example.com/wp-content/uploads/2017/03/T_2_back-2.jpg',
                                        'name' => '',
                                        'alt' => '',
                                    ),
                            ),
                        'attributes' =>
                            array(),
                        'default_attributes' =>
                            array(
                                0 =>
                                    array(
                                        'id' => 6,
                                        'name' => 'Color',
                                        'option' => 'black',
                                    ),
                                1 =>
                                    array(
                                        'id' => 0,
                                        'name' => 'Size',
                                        'option' => 'S',
                                    ),
                            ),
                        'variations' =>
                            array(),
                        'grouped_products' =>
                            array(),
                        'menu_order' => 0,
                        'meta_data' =>
                            array(),
                        '_links' =>
                            array(
                                'self' =>
                                    array(
                                        0 =>
                                            array(
                                                'href' => 'https://example.com/wp-json/wc/v3/products/794',
                                            ),
                                    ),
                                'collection' =>
                                    array(
                                        0 =>
                                            array(
                                                'href' => 'https://example.com/wp-json/wc/v3/products',
                                            ),
                                    ),
                            ),
                    ),
            );

            $products = $this->transformData($response);

            return response()->json($products);
//        }catch (\Exception $exception){
//            Log::error($exception->getMessage(), ['_trace' => $exception->getTraceAsString()]);
//
//            throw new \Exception('Whoops! something went wrong with WooCommerce product listings.', 500);
//        }
    }

    /**
     * Transform data to required format
     *
     * @param $products
     * @return \Illuminate\Support\Collection
     */
    private function transformData($products)
    {
        return  collect($products)->map(function($product){
            $variants = [];
            $inventory = 0;
            $weight = 0;

            foreach($product['attributes'] as $attribute)
            {
                $variants[strtolower($attribute['name'])] = implode(',', $attribute['options']);
            }

            return [
                'id' => $product['id'],
                'title' => $product['name'],
                'price' => $product['price'],
                'inventory' => $product['stock_quantity'],
                'variant' => $variants,
                'weight' =>$product['weight']
            ];
        });
    }
}
