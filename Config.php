<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include "DatabaseConfig.php";
include "dbFunctions.php";

class Config
{
    var $allianceName;
    var $buyBackRate;
    var $version;
    var $clientId;
    var $secretKey;
    var $redirectURI;

    public function __construct()
    {
        $databaseConfig = new DatabaseConfig();
        $config = getConfig($databaseConfig->mysqlHost, $databaseConfig->mysqlUsername, $databaseConfig->mysqlPassword, $databaseConfig->mysqlDatabase);
        $buyBackRate = $config[0]['value'];
        $allianceName = $config[1]['value'];
        $version = $config[2]['value'];
        $clientId = $config[4]['value'];
        $secretKey = $config[5]['value'];
        $redirectURI = $config[6]['value'];
        $this->allianceName = $allianceName;
        $this->buyBackRate = $buyBackRate;
        $this->version = $version;
        $this->clientId = $clientId;
        $this->secretKey = $secretKey;
        $this->redirectURI = $redirectURI;
    }
}

/*
 *gets the config values from the database as an array, returns the array
 */
function getConfig($mysqlHost, $mysqlUsername, $mysqlPassword, $mysqlDatabase)
{
    $config = array();
    $mysqli = new mysqli($mysqlHost, $mysqlUsername, $mysqlPassword, $mysqlDatabase);
    if (mysqli_connect_errno()) {
        $error = mysqli_connect_error();
        trigger_error("Database Connection Error, $error", E_USER_NOTICE);
    }
    $query = "SELECT * FROM config";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            array_push($config, $row);
        }
        $result->close();
    }
    return $config;
}



