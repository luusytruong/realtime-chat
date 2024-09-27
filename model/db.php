<?php

// host info
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chitchat_db";

// connect host
try {
    $pdo = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "" . $e->getMessage() . "\n";
}
