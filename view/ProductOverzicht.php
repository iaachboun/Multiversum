<?php
include 'model/connectDatabase.php';
$cart_data = [];

echo $_POST['hidden_name'];
if (isset($_POST['add_to_cart'])) {
    if (isset($_COOKIE["shopping_cart"])) {
        $total = 0;
        $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
        $cart_data = json_decode($cookie_data, true);

    } else {
        echo 'Geen producten in winkelwagen';
    }

    $item_id_list = array_column($cart_data, 'item_id');

    if (in_array($_POST['hidden_id'], $item_id_list)) {
        foreach ($cart_data as $keys => $values) {
            if ($cart_data[$keys]["item_id"] == $_POST["hidden_id"]) {
                $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
            }
        }
    } else {
        $item_array = array(
            'item_id' => $_POST["hidden_id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"],
        );
        $cart_data[] = $item_array;
    }
    $item_data = json_encode($cart_data);

    setcookie('shopping_cart', $item_data, time() + (86400 * 30));
    header("location:index.php?page=productoverzicht&success=1");
}


//page 1
$sql01 = "SELECT * FROM `productenoverzicht` WHERE id < 7;";
$result01 = $conn->query($sql01);

//page 2
$sql02 = "SELECT * FROM `productenoverzicht` WHERE id > 6 && id < 13 ;";
$result02 = $conn->query($sql02);

//page 3
$sql03 = "SELECT * FROM `productenoverzicht` WHERE id > 12 && id < 19;";
$result03 = $conn->query($sql03);

//page 4
$sql04 = "SELECT * FROM `productenoverzicht` WHERE id > 19;";
$result04 = $conn->query($sql04);

$sql05 = "SELECT * FROM `productenoverzicht` WHERE Prijs BETWEEN " . $_POST['minimaal'] . " AND " . $_POST['maximaal'] . "";
$result05 = $conn->query($sql05);


$sql06 = "SELECT * FROM `productenoverzicht`
WHERE Merk LIKE '%" . $_POST['Merk'] . "%'";
$result06 = $conn->query($sql06);


?>
<section class="product-overzicht">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="review-pages">
        <button class="slide" name="review0">1</button>
        <button class="slide" name="review1">2</button>
        <button class="slide" name="review2">3</button>
        <button class="slide" name="review3">4</button>
    </div>

    <!--<div class="filter">
       <div class="slidecontainer">
        <form method="post">
            <input name="minimaal" type="text" placeholder="Vanaf">
            <input name="maximaal" type="text" placeholder="Tot">
            <input type="submit" value="Vernieuwen">
            </form>
           <form method="post">
               <input name="Merk" type="text" placeholder="Merk">
               <input type="submit" value="Vernieuwen">
           </form>
       </div>
    </div>-->
    <div class="slider" id="slider">
        <section id="review-01">
            <div class="review-container">
                <div class="review">
                    <div class="producten">
                        <div class="row">
                            <?php while ($data = $result01->fetch_assoc()) {
                                ?>
                                <form method="post">

                                    <div class="col-4">
                                        <div class="headsets">
                                            <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                            <p><?php echo $data['Naam'] ?></p>
                                            <p>Prijs: € <?php echo $data['Prijs'] ?></p>
                                            <a href="./view/home/specificaties.php?id=<?php echo $data['id'] ?>">Lees
                                                meer</a><br>
                                            <a href="?page=winkelwagen&id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs'] ?>">Naar
                                                winkelwagen</a>
                                        </div>
                                        <input type="text" name="quantity" value="1">
                                        <input type="hidden" name="hidden_name" value="<?php echo $data['Naam'] ?>">
                                        <input type="hidden" name="hidden_id" value="<?php echo $data['id'] ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $data['Prijs'] ?>">
                                        <input type="submit" name="add_to_cart" value="Add to cart">
                                    </div>
                                </form>

                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="review-02">
            <div class="review-container">
                <div class="review">
                    <div class="producten">
                        <div class="row">
                            <?php while ($data = $result02->fetch_assoc()) {
                                ?>
                                <form method="post">

                                    <div class="col-4">
                                        <div class="headsets">
                                            <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                            <p><?php echo $data['Naam'] ?></p>
                                            <p>Prijs: € <?php echo $data['Prijs'] ?></p>
                                            <a href="./view/home/specificaties.php?id=<?php echo $data['id'] ?>">Lees
                                                meer</a><br>
                                            <a href="?page=winkelwagen&id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs'] ?>">Naar
                                                winkelwagen</a>
                                        </div>
                                        <input type="text" name="quantity" value="1">
                                        <input type="hidden" name="hidden_name" value="<?php echo $data['Naam'] ?>">
                                        <input type="hidden" name="hidden_id" value="<?php echo $data['id'] ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $data['Prijs'] ?>">
                                        <input type="submit" name="add_to_cart" value="Add to cart">
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="review-03">
            <div class="review-container">
                <div class="review">
                    <div class="producten">
                        <div class="row">
                            <?php while ($data = $result03->fetch_assoc()) {
                                ?>
                                <form method="post">

                                    <div class="col-4">
                                        <div class="headsets">
                                            <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                            <p><?php echo $data['Naam'] ?></p>
                                            <p>Prijs: € <?php echo $data['Prijs'] ?></p>
                                            <a href="./view/home/specificaties.php?id=<?php echo $data['id'] ?>">Lees
                                                meer</a><br>
                                            <a href="?page=winkelwagen&id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs'] ?>">Naar
                                                winkelwagen</a>
                                        </div>
                                        <input type="text" name="quantity" value="1">
                                        <input type="hidden" name="hidden_name" value="<?php echo $data['Naam'] ?>">
                                        <input type="hidden" name="hidden_id" value="<?php echo $data['id'] ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $data['Prijs'] ?>">
                                        <input type="submit" name="add_to_cart" value="Add to cart">
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="review-04">
            <div class="review-container">
                <div class="review">
                    <div class="producten">
                        <div class="row">
                            <?php while ($data = $result04->fetch_assoc()) {
                                ?>
                                <form method="post">

                                    <div class="col-4">
                                        <div class="headsets">
                                            <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                            <p><?php echo $data['Naam'] ?></p>
                                            <p>Prijs: € <?php echo $data['Prijs'] ?></p>
                                            <a href="./view/home/specificaties.php?id=<?php echo $data['id'] ?>">Lees
                                                meer</a><br>
                                            <a href="?page=winkelwagen&id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs'] ?>">Naar
                                                winkelwagen</a>
                                        </div>
                                        <input type="text" name="quantity" value="1">
                                        <input type="hidden" name="hidden_name" value="<?php echo $data['Naam'] ?>">
                                        <input type="hidden" name="hidden_id" value="<?php echo $data['id'] ?>">
                                        <input type="hidden" name="hidden_price" value="<?php echo $data['Prijs'] ?>">
                                        <input type="submit" name="add_to_cart" value="Add to cart">
                                    </div>
                                </form>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>
