<?php
namespace Apsg\Baselinker\Baselinker;

class Categories extends AbstractBaselinker
{
    public function addCategory(string $name, array $options = []) : int
    {
        $response = $this->request(__FUNCTION__, [
                'name'      => $name,
                'parent_id' => 0,
            ] + $options);

        return object_get($response, 'category_id');
    }

    public function getCategories()
    {
        $response = $this->request(__FUNCTION__);

        return object_get($response, 'categories');
    }

    public function getOrCreate(string $name) : int
    {
        $categories = $this->getCategories();

        foreach ($categories as $category) {
            if (object_get($category, 'name') === $name) {
                return object_get($category, 'category_id');
            }
        }

        return $this->addCategory($name);
    }
}
