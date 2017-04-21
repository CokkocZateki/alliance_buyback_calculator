<?php

include "Config.php";
include "typeHelpers.php";
include "priceHelpers.php";

$config = new Config();

class Type
{
    var $icon;
    var $name;
    var $quantity;
    var $typeId;
    var $price;
    var $total;
}

class Response
{
    var $grandTotal;
    var $itemsTable;
    var $buyBackRate;
}

extract($_POST);

if(!isset($items))
    $items = "Tritanium\t1\tMineral\t0.15 m3";
elseif(empty($items))
    $items = "Tritanium\t1\tMineral\t0.15 m3";

$itemsTable = array();
$grandTotal = 0;

foreach (preg_split("/((\r?\n)|(\r\n?))/", $items) as $item) {
    $type = new Type();
    $item = preg_split('/\s+/', $item);//http://stackoverflow.com/a/1792977
    $type->icon = "<img src='https://image.eveonline.com/Type/" . $getTypeId($item[0]) . "_32.png'>";
    $type->name = $item[0];
    $item[1] = preg_replace('/[,]/', '', $item[1]);
    if ($item[1] == "")
        $item[1] = "0";
    $type->quantity = intval($item[1]);
    $type->typeId = $getTypeId($item[0]);
    if ($type->typeId == -1) {
    } else {
        $type->price = floatval(getBuyBackPrice($getTypeId($item[0]), $config->buyBackRate));
        $type->total = $type->price * $type->quantity;
        $grandTotal += $type->total;
        array_push($itemsTable, $type);
    }
}

$response = new Response();
$response->itemsTable = $itemsTable;
$response->grandTotal = $grandTotal;
$response->buyBackRate = $config->buyBackRate;

$response = json_encode($response);

echo $response;

