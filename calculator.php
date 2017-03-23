<?php

include "typeHelpers.php";
include "priceHelpers.php";
include "config.php";

class Type{
    var $icon;
    var $name;
    var $quantity;
    var $typeId;
    var $price;
    var $total;
}

class Response{
    var $grandTotal;
    var $itemsTable;
    var $buyBackRate;
}

extract($_POST);

$itemsTable = array();
$grandTotal = 0;

foreach(preg_split("/((\r?\n)|(\r\n?))/", $items) as $item){
    $type = new Type();
    $item = preg_split("/[\t]/", $item);
    $type->icon = "<img src='https://image.eveonline.com/Type/".getTypeId($item[0])."_32.png'>";
    $type->name = $item[0];
    $item[1] = preg_replace('/[,]/', '', $item[1]);
    if($item[1] == "")
        $item[1] = "0";
    $type->quantity = intval($item[1]);
    $type->typeId = getTypeId($item[0]);
    if($type->typeId == -1){
    }else{
        $type->price = floatval(getBuyBackPrice(getTypeId($item[0])));
        $type->total = $type->price * $type->quantity;
        $grandTotal += $type->total;
        array_push($itemsTable, $type);
    }
}

$response = new Response();
$response->itemsTable = $itemsTable;
$response->grandTotal = $grandTotal;
$response->buyBackRate = $buyBackRate;

$response = json_encode($response);

echo $response;

