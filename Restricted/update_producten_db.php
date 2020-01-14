<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../build/assets/style/app.css" type="text/css">
    <title>Multiversum</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <link rel="stylesheet" href="../admin_page.css" type="text/css">

</head>
<body>
<div class="aanmelden">

    <form method="post" action="eigen_website.php">
        <input class="loginData" type="text" name="username" placeholder="Username">
        <input class="loginData" type="password" name="password" placeholder="Password">
        <input class="loginSubmit" type="submit" name="login" value="Login">

    </form>
</div>
<div class="header">
    <a href="?page=winkelwagen"><i class="fas fa-shopping-cart shopping-cart"></i></a>
    <div class="logo">
        <a href="/index.php"><img src="../assets/img/logo.jpg"></a>
    </div>
    <i class="fas fa-bars menu-knop"></i>
    <div class="nav-closed">
        <ul class="nav-links">
            <li><a href="../index.php">Home</a><div class="line"></div></li>
            <li><a href="/Restricted/admin_home.php">Admin</a><div class="line"></div></li>
        </ul>
    </div>
    <div class="search">
        <form action="zoekmachine_multiversum.php">
            <input type="search" name="invoer">
            <input type="submit" value="Zoeken">
        </form>
    </div>
    <script src="../assets/javascript/menu.js"></script>
    <script src="../assets/javascript/admin-page.js"></script>
</div>

<style>
    h2{
        text-align: center;
    }

    .updateform{
        width: 50%;
        margin: 0 auto;
    }
    /* Style inputs */
    input[type=text], label, textarea {
        float: left;
        width: 50%;
        padding: 12px 20px;
        /*margin: 8px 0;*/
        /*display: inline-block;*/
        /*border: 1px solid #ccc;*/
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Style the submit button */
   .sturen {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    /* Add a background color to the submit button on mouse-over */
    .sturen:hover {
        background-color: #45a049;
    }

    .beschrijving{
        width: 100%;
        height: 150px;
    }

</style>
<?php

$id = $_GET['id'];

require '../model/connectDatabase.php';



$sql = 'SELECT * FROM productenoverzicht WHERE id =' . $id;
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $naam = $row['Naam'];
        $prijs = $row['Prijs'];
        $merk = $row['Merk'];
        $resolutie = $row['Resolutie'];
        $gezichtsveld = $row['Gezichtsveld'];
        $platform = $row['Platform'];
        $kleur = $row['Kleur'];
        $gewicht = $row['Gewicht'];
        $ActiePrijs = $row['NewPrice'];
        $beschrijving = $row['Beschrijving'];
        echo "<br>";
    }
}
?>

<h2>Wijzig Product</h2>

<form method="post" action="update_producten_db_2.php" class="updateform">
    <input type="text" name="id" value="<?php echo $id; ?>" hidden>
    <label>Naam:</label><input type="text" name='naam' value="<?php echo $naam; ?>">
    <label>Prijs:</label><input type="text" name='prijs' value="<?php echo $prijs; ?>">
    <label>Merk:</label><input type="text"  name='merk' value="<?php echo $merk; ?>">
    <label>Resolutie:</label><input type="text"  name='resolutie' value="<?php echo $resolutie; ?>">
    <label>Gezichtsveld:</label><input type="text"  name='gezichtsveld' value="<?php echo $gezichtsveld; ?>">
    <label>Platform:</label><input type="text"  name='platform' value="<?php echo $platform; ?>">
    <label>Kleur:</label><input type="text"  name='kleur' value="<?php echo $kleur; ?>">
    <label>Gewicht:</label><input type="text"  name='gewicht' value="<?php echo $gewicht; ?>">
    <label>ActiePrijs:</label><input type="text"  name='ActiePrijs' value="<?php echo $ActiePrijs; ?>">
    <label>Beschrijving:</label><textarea cols="40" name='beschrijving' class="beschrijving"><?php echo $beschrijving; ?></textarea>
    <input type="submit" value="Update" class="sturen">
</form>


