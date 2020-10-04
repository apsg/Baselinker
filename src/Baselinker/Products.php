<?php
namespace Apsg\Baselinker\Baselinker;

use GuzzleHttp\Client;

class Products extends AbstractBaselinker
{
    public function getProductsList() : array
    {
        $response = $this->request(__FUNCTION__, $this->storageData());

        return $response->products;
    }

    public function addProduct(array $productData)
    {
        return $this->request(__FUNCTION__, $this->storageData() + $productData);
    }
}
