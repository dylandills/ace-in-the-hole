<?php
try
{
  $pdo = new PDO('mysql:host=localhost;dbname=dylandil_aceinthehole', 'dylandil_ace_user', 'qWE-are135');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  include '../includes/error.html.php';
  exit();
}

include 'about.html.php';
