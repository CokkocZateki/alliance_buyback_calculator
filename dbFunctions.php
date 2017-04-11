<?php

function checkIfCharacterExists($characterId)
{
    $character = array();
    $databaseConfig = new DatabaseConfig();
    $mysqli = new mysqli($databaseConfig->mysqlHost, $databaseConfig->mysqlUsername, $databaseConfig->mysqlPassword, $databaseConfig->mysqlDatabase);
    if (mysqli_connect_errno()) {
        $error = mysqli_connect_error();
        trigger_error("Database Connection Error, $error", E_USER_NOTICE);
    }
    $query = "SELECT * FROM users WHERE characterId=$characterId";
    if ($result = $mysqli->query($query)) {
        while ($row = $result->fetch_assoc()) {
            array_push($character, $row);
        }
        $result->close();
    }
    if (sizeof($character) > 0)
        return true;
    else
        return false;
}

function updateConfig($allianceName, $buybackRate)
{
    $databaseConfig = new DatabaseConfig();
    $mysqli = new mysqli($databaseConfig->mysqlHost, $databaseConfig->mysqlUsername, $databaseConfig->mysqlPassword, $databaseConfig->mysqlDatabase);
    if (mysqli_connect_errno()) {
        $error = mysqli_connect_error();
        trigger_error("Database Connection Error, $error", E_USER_NOTICE);
    }
    $query = "UPDATE config SET value = '$allianceName' WHERE id = 'allianceName'";
    echo $query;
    $result = $mysqli->query($query);
    $query = "UPDATE config SET value = $buybackRate WHERE id = 'buyBackRate'";
    $result = $mysqli->query($query);
}



