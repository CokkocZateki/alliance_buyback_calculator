<?php
include "DatabaseConfig.php";
extract($_GET);
$databaseConfig = new DatabaseConfig();
$mysqli = new mysqli($databaseConfig->mysqlHost, $databaseConfig->mysqlUsername, $databaseConfig->mysqlPassword, $databaseConfig->mysqlDatabase);
if (mysqli_connect_errno()) {
    $error = mysqli_connect_error();
    trigger_error("Database Connection Error, $error", E_USER_NOTICE);
}
switch ($action){
    case "read":
        echo "read";
        break;
    case "delete";
        echo "delete <br>";
        $query = "DELETE FROM users WHERE characterId = $characterId";
        echo $query;
        $result = $mysqli->query($query);
        break;
    case "create";
        echo "create <br>";
        $query = "INSERT INTO users VALUES ($characterId, '$characterName')";
        echo $query;
        $result = $mysqli->query($query);
        break;
}