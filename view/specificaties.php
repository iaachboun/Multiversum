<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../build/assets/style/app.css" type="text/css">
    <title>Multiversum</title>
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
    <a href="ShoppingCart.php"><i class="fas fa-shopping-cart shopping-cart"></i></a>
    <div class="logo">
        <a href="../index.php"><img src="../assets/img/logo.jpg"></a>
    </div>
    <i class="fas fa-bars menu-knop"></i>
    <div class="nav-closed">
        <ul class="nav-links">
            <li><a href="../index.php">Home</a><div class="line"></div></li>
        </ul>
    </div>
    <div class="search">
        <form action="zoekmachine_multiversum.php">
            <input type="search" name="invoer">
            <input type="submit" value="Zoeken">
        </form>
    </div>
</div>

<?php require "../../model/connectDatabase.php";

$id = $_REQUEST['id'];

$sql = "SELECT * FROM `productenoverzicht` WHERE id = $id;";
$result = $conn->query($sql);

$data = $result->fetch_assoc(); ?>

<div class="specificaties">
    <img src="../../assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
    <h1><?php echo $data['Naam']?></h1>
    <p>Resolutie: <?php echo $data['Resolutie']?></p>
    <p>Kleur: <?php echo $data['Kleur']?></p>
    <p>Platform: <?php echo $data['Platform']?></p>
    <p>Gezichtsveld: <?php echo $data['Gezichtsveld']?></p>
    <p>Gewicht: <?php echo $data['Gewicht']?></p>
    <p>Beschrijving: <?php echo $data['Beschrijving']?></p>
    <h3>€ <?php echo $data['Prijs']?></h3>
</div>

</body>
</html>

