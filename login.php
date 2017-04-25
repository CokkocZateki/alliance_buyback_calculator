<?php

session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);
require 'vendor/autoload.php';

include "Config.php";
include "dbFunctions.php";

use GuzzleHttp\Client;

extract($_GET);
$config = new Config();
$clientId = $config->clientId;
$clientId = str_replace(' ', '', $clientId);
echo $clientId;
$secretKey = $config->secretKey;
if (!isset($code)) {
    $redirectURI = $config->redirectURI;
    $redirectURI = str_replace(' ', '', $redirectURI);
    $ssoRequestUrl =
        "https://login.eveonline.com/oauth/authorize?response_type=code&redirect_uri=$redirectURI&client_id=$clientId";
    header("Location: $ssoRequestUrl");
    exit();
} else {
    $authorization = "$clientId:$secretKey";
    $authorization = base64_encode($authorization);
    $authorization = "Basic $authorization";
    $url = 'https://login.eveonline.com/oauth/token';
    $client = new Client([
        'headers' => [
            'Content-Type' => 'application/json',
            'Host' => 'login.eveonline.com',
            'Authorization' => $authorization],
    ]);
    $body["grant_type"] = "authorization_code";
    $body["code"] = $code;
    $response = $client->post(
        $url,
        ['body' => json_encode($body)]
    );
    $accessToken = $response->getBody();
    $accessToken = json_decode($accessToken);
    $accessToken = $accessToken->access_token;
    $url = 'https://login.eveonline.com/oauth/verify';
    $authorization = "Bearer $accessToken";
    $client = new Client([
        'headers' => [
            'Authorization' => $authorization],
    ]);
    $response = $client->get($url);
    $response = $response->getBody();
    $character = json_decode($response);
    $characterId = $character->CharacterID;
    $characterName = $character->CharacterName;
    if (checkIfCharacterExists($characterId)) {
        $_SESSION["isLoggedIn"] = true;
        header('Location: dashboard.php');
    } else
        echo "$characterName is not allowed access to the dashboard. You have to go back :). <a href='/'>homepage</a>";
}