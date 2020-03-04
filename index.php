<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=dylandil_aceinthehole', 'dylandil_ace_user', 'qWE-are135');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'includes/error.html.php';
  exit();
}
  $apiKey = "2d4b9a9b29b1de9c7a87914a379bd372";
  $cityId = "5746545";
  $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=imperial&APPID=" . $apiKey;

  $ch = curl_init();

  curl_setopt($ch, CURLOPT_HEADER, 0);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_VERBOSE, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($ch);

  curl_close($ch);
  $data = json_decode($response);

include 'home/home.html.php';
