<?php include("database.php"); ?>
<div class="form-container">
<h1><div class="status-message"> For InventoryParts </div></h1><br>
<form method="post" action="">
    PartName: <input type="text" name="PartName" required><br><br>
    Description: <input type="text" name="Description" required><br><br>
    QuantityInStock: <input type="number" name="QuantityInStock" required><br><br>
    SupplierName:<input type="text" name="SupplierName" required><br><br>
    <input type="submit" name="submit" value="Save">
</form>
<?php

if(isset($_POST['submit'])){
    $PartName = $_POST['PartName'];
    $Description     = $_POST['Description'];
    $QuantityInStock    = $_POST['QuantityInStock'];
    $SupplierName  = $_POST['SupplierName'];

    $sql = "INSERT INTO inventorypart (PartName, Description, QuantityInStock, SupplierName)
            VALUES ('$PartName', '$Description', '$QuantityInStock', '$SupplierName')";

    if(mysqli_query($conn, $sql)){
        $msg = "✅ Student added successfully!";
        header("Location:inventorypart.php?status=success");
        exit();
    } else {
        $msg = "❌ Error: " . mysqli_error($conn);
    }
}
?>

<?php
if(isset($msg)){
    echo "<p>$msg</p>";
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