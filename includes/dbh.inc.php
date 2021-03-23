<?php

$serverName = $_ENV["DATABASE_SERVICE_NAME"]; 
$dBUsername = $_ENV["DATABASE_USER"]; 
$dBPassword = $_ENV["DATABASE_PASSWORD"]; 
$dBName = "klik_database";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName, 3306);

if (!$conn)
{
    die("Connection failed: ". mysqli_connect_error());
}


