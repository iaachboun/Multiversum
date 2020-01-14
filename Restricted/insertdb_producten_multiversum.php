<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="../build/assets/style/app.css" type="text/css">
    <link rel="stylesheet" href="#" type="text/css">
    <title>Multiversum</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
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
    <a href="?page=winkelwagen"><i class="fas fhopping-cart shopping-cart"></i></a>
    <div class="logo">
        <a href="index.php"><img src="../assets/img/logo.jpg"></a>
    </div>
    <i class="fas fa-bars menu-knop"></i>
    <div class="nav-closed">
        <ul class="nav-links">
            <li><a href="?page=home">Home</a><div class="line"></div></li>
            <li><a href="?page=productoverzicht">Productoverzicht</a><div class="line"></div></li>
            <li><a href="?page=contact">Contact</a><div class="line"></div></li>
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
</div>

<style>
    <style>
    h2{
        text-align: center;
    }

    .insertform{
        width: 50%;
        margin: 0 auto;
    }


    /* Style inputs */
    input[type=text], label, textarea {
        width: 100%;
        padding: 12px 20px;
        /*margin: 8px 0;*/
        /*display: inline-block;*/
        /*border: 1px solid #ccc;*/
        border-radius: 4px;
        box-sizing: border-box;
    }

    /* Style the submit button */
    .insert {
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
    .insert:hover {
        background-color: #45a049;
    }

</style>


<form method="post" action="query_insert_db.php" class="insertform">
    <label>Product id:</label><input type="text" name="id">
    <label>Product name:</><input type="text" name="Naam">
    <label>Product price:</label><input type="text" name="Prijs">
    <label>Product Merk:</label><input type="text" name="Merk">
    <label>Product Resolutie:</label><input type="text" name="Resolutie">
    <label>Product Gezichtsveld:</label><input type="text" name="Gezichtsveld">
    <label>Product Platform:</label><input type="text" name="Platform">
    <label>Product Kleur:</label><input type="text" name="Kleur">
    <label>Product Gewicht:</label><input type="text" name="Gewicht">
    <label>Product Beschrijving:</label><input type="text" name="Beschrijving">
    <input type="submit" name="insert" value="Create" class="insert">
</form>



