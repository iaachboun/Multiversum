<?php
// require_once "DataHandler.php";
$servername = "localhost";
$username = "ilias";
$password = "12345";
$dbname = "webshopMultiversum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
