<?php

require_once 'DeliveryService.php';

class FastDeliveryService implements DeliveryService {

    public function calculateDeliveryTime($paramsArray) {
        $price = $paramsArray['period'] * $paramsArray['price'];
        return $price;
    }

}