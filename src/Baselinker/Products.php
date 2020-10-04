<?php
namespace Apsg\Baselinker\Baselinker;

use GuzzleHttp\Client;

class Products extends AbstractBaselinker
{
    public function getProductsList() : array
    {
        $response = $this->request(__FUNCTION__, $this->storageData());

        return object_get($response, 'products');
    }

    public function addProduct(array $productData)
    {
        $response = $this->request(__FUNCTION__, $this->storageData() + $productData);

        return object_get($response, 'product_id');
    }
}
