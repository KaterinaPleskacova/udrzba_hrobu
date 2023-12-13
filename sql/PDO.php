<?php

declare(strict_types=1);

$username = "udrzba_php";
$password = "udrzbahrobu";
$host = "localhost";
$database = "udrzba_hrobu";

$connection = new PDO(
    "mysql:host=$host;dbname=$database;charset=utf8mb4",
    $username,
    $password,
    array(
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    )
);

$graves = $connection->query("SELECT * FROM `graves`");

$graves->rowCount();

while ($row = $graves->fetch(PDO::FETCH_ASSOC)) {
    echo $row['grave_name'], "->", $row['grave_size'], "<br />";
}

$serviceId = 3;

$stmt = $connection->prepare("SELECT * FROM `services` WHERE `service_id`=?");

$serviceSuccess = $stmt->execute([$serviceId]);

if ($serviceSuccess) {
    $service = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($service) {
        echo "<br /><strong>", $service['service_name'], "->", $service['description'], "</strong><br />";
    }
}

$connection = null;