<?php

include "dbFunctions.php";

$data = json_decode(file_get_contents('php://input'), true);
$allianceName = $data[0]["value"];
$buyBackRate = $data[1]["value"];
echo $allianceName;
echo $buyBackRate;

updateConfig($allianceName, $buyBackRate);