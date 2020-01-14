<?php

$id = $_POST['id'];
$newprijs = $_POST['prijs'];


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

$sql = "UPDATE productenoverzicht SET NewPrice = $newprijs WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>