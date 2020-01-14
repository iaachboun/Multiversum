<?php

$id = $_GET['id'];

//echo $id;

$servername = "localhost";
$username = "ilias_admin";
$password = "Admin4a7a";
$dbname = "ilias_multiversum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `productenoverzicht` WHERE id = " . $id;

if ($conn->query($sql) === TRUE) {
    header("location:admin_home.php");
    echo "Product succesvol verwijderd";
} else {
    header("location:admin_home.php");
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


