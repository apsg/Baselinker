<?php
namespace Apsg\Baselinker\Baselinker;

class Orders extends AbstractBaselinker
{
    const NEW_ORDER_STATUS = 9784;

    public function addOrder(array $orderData)
    {
        $response = $this->request(__FUNCTION__, $orderData + [
                'order_status_id' => self::NEW_ORDER_STATUS,
            ]);

        return $response;
    }

    public function getOrderStatusList()
    {
        $response = $this->request(__FUNCTION__);

        return $response;
    }
}
