### Laravel Baselinker API integration

##### Baselinker docs:

https://api.baselinker.com

#### Installation

Jus use: 

`composer require apsg/baselinker`

The package should be auto-discovered by Laravel. 
After installation add the `BASELINKER_TOKEN={your-token}` to your `.env` file.

#### Usage

Use `Baselinker` facade and use one of shortcut methods:
- products()
- categories()
- orders()
- storages()

Example: 

```php
use Apsg\Baselinker\Facades\Baselinker;

$categories = Baselinker::categories()->getCategories();
```

###### Change default storage

Default storage is set to Baselinker's default `bl_1`. 
One can  change the default storage globally by setting the `BASELINKER_STORAGE` value in their env file. 

To change the storage dynamically use the `setStorage(...)` helper method on any baselinker support class. 

Example:

```php
use Apsg\Baselinker\Facades\Baselinker;

$productsInOtherStorage = Baselinker::products()->setStorage('storage_id');

$products = $productsInOtherStorage->getProductsList();
$newProduct = $productsInOtherStorage->addProduct($someProductData);
```

##### Currently covered methods:

See [baselinker docs](https://api.baselinker.com) for reference.

###### Storages:

- `getStoragesList`

###### Categories:

- `addCategory`
- `getCategories`

###### Products: 

- `addProduct`
- `getProductsList`

###### Orders: 

- `addOrder`
- `getOrderStatusList`
