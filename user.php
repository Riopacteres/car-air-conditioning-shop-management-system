<?php
include('database.php'); 

$sql = "SELECT * FROM user";
$query = mysqli_query($conn, $sql);

if (mysqli_num_rows($query) > 0) {
    echo "<h1>user table </h1>";
    echo "<table border='1'>";
    echo "<tr><th> User ID</th><th>UserName</th><th>Password</th><th>Role</th><th>FullName</th><th>PhoneNumber</th><th>Email</th><th>ServiceRecords</th></tr>";

    while ($row = mysqli_fetch_assoc($query)) {
        echo "<tr>";
        echo "<td>".$row["User_ID"]."</td>";
        echo "<td>".$row["UserName"]."</td>";
        echo "<td>".$row["Password"]."</td>";
        echo "<td>".$row["Role"]."</td>";
        echo "<td>".$row["FullName"]."</td>";
        echo "<td>".$row["PhoneNumber"]."</td>";
        echo "<td>".$row["Email"]."</td>";
        echo "<td>".$row["ServiceRecords"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No results found.<br>";
}
?>