<?php

require_once 'DeliveryService.php';

class SlowDeliveryService implements DeliveryService {


    public function calculateDeliveryTime($paramsArray) {
        $price = $paramsArray['coefficient'];
        return $price;
    }

}