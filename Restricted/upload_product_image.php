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
            <li><a href="../Restricted/admin_home.php">Admin</a><div class="line"></div></li>
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




$target_dir = "../assets/img/img_products/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
<!DOCTYPE html>
<html>

<body>

<form  method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
