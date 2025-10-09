<?php include("database.php"); ?>

<div class="form-container">
    <h1><div class="status-message"> For Costumer </div></h1><br>
<form method="post" action="">
    FullName: <input type="text" name="FullName" required><br><br>
    PhoneNumber: <input type="number" name="PhoneNumber" required><br><br>
    Email: <input type="text" name="Email" required><br><br>
    Address:<input type="text" name="Address" required><br><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php

if(isset($_POST['submit'])){
    $FullName = $_POST['FullName'];
    $PhoneNumber  = $_POST['PhoneNumber'];
    $Email  = $_POST['Email'];
    $Address  = $_POST['Address'];

    $sql = "INSERT INTO customer (FullName, PhoneNumber, Email, Address)
            VALUES ('$FullName', '$PhoneNumber', '$Email', '$Address')";
            

    if(mysqli_query($conn, $sql)){
        header("Location:customer.php?status=success");
        exit();
        $msg = "✅ Student added successfully!";
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?>
<style>
    body {
        font-family: "Poppins", sans-serif;
        background:  #3a7bd5;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
    }

    .form-container {
        background: white;
        width: 350px;
        padding: 40px 30px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
    }

    .form-container h2 {
        text-align: center;
        color: #008cba;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .form-group {
        margin-bottom: 20px;
        position: relative;
    }

    label {
        display: block;
        font-size: 14px;
        color: #333;
        margin-bottom: 5px;
    }

    input {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: none;
        border-bottom: 2px solid #ccc;
        outline: none;
        transition: all 0.3s;
    }

    input:focus {
        border-bottom: 2px solid #00bcd4;
    }

    .btn {
        width: 100%;
        padding: 12px;
        border: none;
        background: linear-gradient(90deg, #00d2ff, #3a7bd5);
        color: white;
        font-size: 16px;
        border-radius: 30px;
        cursor: pointer;
        transition: 0.3s;
    }

    .btn:hover {
        background: linear-gradient(90deg, #3a7bd5, #00d2ff);
        transform: translateY(-2px);
    }

    .footer-text {
        text-align: center;
        font-size: 13px;
        margin-top: 15px;
        color: #555;
    }

    .footer-text a {
        color: #00bcd4;
        text-decoration: none;
    }

    .footer-text a:hover {
        text-decoration: underline;
    }
</style>

<?php
if(isset($msg)){
    echo "<p>$msg</p>";
}
?>  