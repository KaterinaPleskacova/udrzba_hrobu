<?php

declare(strict_types=1);

$username = "udrzba_php";
$password = "udrzbahrobu";
$host = "localhost";
$database = "udrzba_hrobu";

$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}


$graves = $connection->query("SELECT * FROM `graves`");

$graves->num_row;

while ($row = $graves->fetch_assoc()) {
    echo $row['grave_name'], "->", $row['grave_size'], "<br />";
}

$serviceId = 3;

$stmt = $connection->prepare("SELECT * FROM `services` WHERE `service_id`=?");
$stmt->bind_param("i", $serviceId);

$serviceSuccess = $stmt->execute();

if ($serviceSuccess) {
    $service = $stmt->get_result();

    if ($service) {
        $data = $service->fetch_assoc();
        if ($data){
            echo "<br /><strong>", $data['service_name'], "->", $data['description'], "</strong><br />";
        }

    }
}

$connection->close();