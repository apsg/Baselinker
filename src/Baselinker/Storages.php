<?php
namespace Apsg\Baselinker\Baselinker;

class Storages extends AbstractBaselinker
{
    public function getStoragesList()
    {
        return $this->request(__FUNCTION__);
    }
}
