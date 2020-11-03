## Readme
***Requirements to run the project:***
1. PHP >=7.2.5

###Setup project:
1. clone the repo.
 1. run ```composer install``` to install the dependencies.

####Run the project:
```php artisan serve```

Use any of the REST API tools to view the result:
```URL
http://localhost:8000/api/stores/{store_id}/products
```

Note: You can change the ```store_id``` value to 1 or 2 where 1 =>  shopify and 2 => woocommerce
