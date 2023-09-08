<?php

require_once 'classes/DeliveryService.php';
require_once 'classes/FastDeliveryService.php';
require_once 'classes/SlowDeliveryService.php';

// Get user input
$type = $_POST['type'];
$sourceKladr = $_POST['sourceKladr'];
$targetKladr = $_POST['targetKladr'];
$weight = $_POST['weight'];


// data from company fake examples
$price = 300;  //p   $_POST['price'];
$period = 5; //day   $_POST['period'];
$error = '';  // $_POST['error'];
$coefficient = 150; //  $_POST['coefficient'];
$date = '2017-10-20'; //  $_POST['date'];


if($type == 'fast'){
// Calculate delivery for fast service
$paramsArray = ['price' => $price, 'period' => $period];
$fastDeliveryService = new FastDeliveryService();
$price = $fastDeliveryService->calculateDeliveryTime($paramsArray);
} elseif($type == 'slow'){
// Calculate delivery time for slow service
$slowDeliveryService = new SlowDeliveryService();
$paramsArray = ['coefficient' => $coefficient];
$price = $slowDeliveryService->calculateDeliveryTime($paramsArray);
} else {
    $error = 'Not set type';
}
// Display results
if($error == null){
    echo "price: $price<br>";
    echo "date: $date<br>";
} else {
    echo $error;
}
echo '<br><button type="button" class="btn btn-default" onclick="javascript:history.go(-1)">Back</button>';
