<?php

$serverName = $_ENV["DATABASE_SERVICE_NAME"]; //mydb.local
$dBUsername = $_ENV["DATABASE_USER"]; //root
$dBPassword = $_ENV["DATABASE_PASSWORD"]; //"eldererajinMenji99";
$dBName = "klik_database"; //klik_database

echo("DB SVC NAME". $_ENV["DATABASE_SERVICE_NAME"]);

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


