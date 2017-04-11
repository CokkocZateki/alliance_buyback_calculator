<?php

function getJitaPrice($itemId){
    $json = file_get_contents("http://api.eve-central.com/api/marketstat/json?typeid=$itemId&usesystem=30000142");
    $obj = json_decode($json);
    $obj = $obj[0];
    $obj = $obj->buy;
    $obj = $obj->avg;
    $obj = round($obj,2);
    return $obj;
}

function getBuyBackPrice($itemId, $buyBackRate){
    $jitaPrice = getJitaPrice($itemId);
    $buybackPrice = $jitaPrice * $buyBackRate;
    $buybackPrice = round($buybackPrice, 2);
    return $buybackPrice;
}