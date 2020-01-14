<style>
    <?php include '../assets/style/admin-page/admin-page.scss';?>
</style>

<?php

$productId = $_POST['id'];
$productName = $_POST['Naam'];
$productPrice = $_POST['Prijs'];
$productBrand = $_POST['Merk'];
$productResolution = $_POST['Resolutie'];
$productField = $_POST['Gezichtsveld'];
$productPlatform = $_POST['Platform'];
$productColor = $_POST['Kleur'];
$productWeight = $_POST['Gewicht'];
$productDecs = $_POST['Beschrijving'];


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

$sql = "INSERT INTO `productenoverzicht` (`id`, `Naam`, `Prijs`, `Merk`, `Resolutie`, `Gezichtsveld`, `Platform`, `Kleur`, `Gewicht`, `Beschrijving`) VALUES ('$productId', '$productName', '$productPrice', '$productBrand', '$productResolution', '$productField', '$productPlatform', '$productColor', '$productWeight', '$productDecs');";

if ($conn->query($sql) === TRUE) {
    //header("location:/Restricted/admin_home.php");
    include 'upload_product_image.php';
    echo "Product toegevoegd";
    echo "<br>";
    echo "Voeg een afbeelding toe met dezelfde naam als het ID van het product";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
