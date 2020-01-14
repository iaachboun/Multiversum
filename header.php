<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="build/assets/style/app.css" type="text/css">
    <title>Multiversum</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="assets/javascript/admin-page.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
</head>
<body>

<div class="header">
    <a href="?page=winkelwagen"><i class="fas fa-shopping-cart shopping-cart"><?php echo  $_COOKIE["cart_counter"]; ?></i></a>
    <div class="logo">
        <a href="index.php"><img src="assets/img/logo.jpg"></a>
    </div>
    <i class="fas fa-bars menu-knop"></i>
    <div class="nav-closed">
        <ul class="nav-links">
            <li><a href="?page=home">Home</a><div class="line"></div></li>
            <li><a href="?page=productoverzicht">Productoverzicht</a><div class="line"></div></li>
            <li><a href="?page=contact">Contact</a><div class="line"></div></li>
        </ul>
    </div>
    <div class="search">
        <form action="zoekmachine_multiversum.php">
            <input type="search" name="invoer">
            <input type="submit" value="Zoeken">
        </form>
    </div>
    <script src="./assets/javascript/menu.js"></script>
    <script src="./assets/javascript/admin-page.js"></script>

</div>
