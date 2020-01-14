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
    <a href="../?page=winkelwagen"><i class="fas fa-shopping-cart shopping-cart"></i></a>
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

<?php
include '../database_multiversum.php'
?>
