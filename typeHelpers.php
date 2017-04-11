<?php

$getTypeId = function ($typeName){
    $databaseConfig = new DatabaseConfig();
    $mysqli = new mysqli($databaseConfig->mysqlHost, $databaseConfig->mysqlUsername, $databaseConfig->mysqlPassword, $databaseConfig->mysqlDatabase);
    $result = $mysqli->query("SELECT typeId FROM type WHERE typeName='$typeName'");
    $typeId = $result->fetch_assoc();
    if(isset($typeId["typeId"])){
        $typeId = $typeId["typeId"];
        return $typeId;
    }else{
        $typeId = -1;
    }
    return $typeId;
};