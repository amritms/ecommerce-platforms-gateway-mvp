## Readme
This project is created on Laravel 6.

***Requirements to run the project:***
1. PHP >=7.2.5

### Setup project:
1. clone the repo.
 1. run ```composer install``` to install the dependencies.

### Run the project:
```php artisan serve```

Use any of the REST API tools to view the result:

### Instructions to run the get the output:
Method: ```GET```

url: ```http://localhost:8000/api/stores/{store_id}/products```

**Note:** You can change the ```store_id``` value to 1 or 2 where 1 =>  shopify and 2 => woocommerce

### Output:
**1.JSON Output for WooCommerce platform**
```http://localhost:8000/api/stores/1/products```
```JSON
[
    {
        "id": 632910392,
        "title": "IPod Nano - 8GB",
        "price": "199.00",
        "inventory": 100,
        "variant": [
            {
                "size": "",
                "colour": "Pink"
            },
            {
                "size": "",
                "colour": "Red"
            },
            {
                "size": "",
                "colour": "Green"
            },
            {
                "size": "",
                "colour": "Black"
            }
        ],
        "weight": 567
    },
    {
        "id": 921728736,
        "title": "IPod Touch 8GB",
        "price": "199.00",
        "inventory": 13,
        "variant": [
            {
                "size": "",
                "colour": "Black"
            }
        ],
        "weight": 567
    }
]
```

**2.JSON Output for wooCommerce platform**
```http://localhost:8000/api/stores/2/products```
```JSON
[
    {
        "id": 799,
        "title": "Ship Your Idea",
        "price": "",
        "inventory": null,
        "variant": {
            "color": "Black,Green",
            "size": "S,M"
        },
        "weight": ""
    },
    {
        "id": 794,
        "title": "Premium Quality",
        "price": "21.99",
        "inventory": null,
        "variant": [],
        "weight": ""
    }
]
```
