<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "car_air_db";

$conn = mysqli_connect($servername, $username, $password, $database_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
} else {
    echo "Connected successfully <br>";
}


?>
