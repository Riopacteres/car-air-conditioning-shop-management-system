<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "car_air_con_db";

$conn = mysqli_connect($servername, $username, $password, $database_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error($conn));
} 
echo "
<style>
 
    body {
        font-family: Arial, sans-serif;
        margin: 20px;
        text-align: center;
    }
    h1 {
        color: #333;
    }
    table {
        border-collapse: collapse;
        width: 80%;
        margin-bottom: 30px;
        box-shadow: 0 2px 8px rgba(14, 3, 3, 0.1);
        margin-left: auto;
        margin-right: auto;
    }
    th, td {
        border: 1px solid #ddd;
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: blue;
        color: white;
    }
    tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
       
</style>
";

?>