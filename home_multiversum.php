<?php

include 'model/connectDatabase.php';

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

$sql05 = "SELECT * FROM `productenoverzicht` WHERE Prijs BETWEEN ". $_POST['minimaal'] ." AND " .$_POST['maximaal'] ."";
$result05 = $conn ->query($sql05);


$sql06 = "SELECT * FROM `productenoverzicht`
WHERE Merk LIKE '%" . $_POST['Merk'] . "%'";
$result06 = $conn->query($sql06);



?>
<section class="product-overzicht">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="review-pages">
        <h2>Aanbiedings producten</h2>
        <p>Geniet van de aanbieding nu het nog kan!</p>
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
                                <div class="col-4">
                                    <div class="headsets">
                                        <!--<img src="assets/img/img_products/acer.png">-->
                                        <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                        <?php $img_path = "assets/img/imgproducts/" . $data['id'] . ".jpeg"; ?>
                                        <!--<p><?php echo $img_path; ?></p>-->
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
                                        <a href="view/specificaties.php?id=<?php echo $data['id']?>">More info</a>
                                        <a href="./view/ShoppingCart.php?id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs']?>">Add to cart</a>
                                    </div>
                                </div>
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
                                <div class="col-4">
                                    <div class="headsets">
                                        <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
                                        <a href="view/specificaties.php?id=<?php echo $data['id']?>">More info</a>
                                        <a href="./view/ShoppingCart.php?id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs']?>">Add to cart</a>
                                    </div>
                                </div>
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
                                <div class="col-4">
                                    <div class="headsets">
                                        <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
                                        <a href="view/specificaties.php?id=<?php echo $data['id']?>">More info</a>
                                        <a href="./view/ShoppingCart.php?id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs']?>">Add to cart</a>
                                    </div>
                                </div>
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
                                <div class="col-4">
                                    <div class="headsets">
                                        <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
                                        <a href="view/specificaties.php?id=<?php echo $data['id']?>">More info</a>
                                        <a href="./view/ShoppingCart.php?id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs']?>">Add to cart</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="review-05">
            <div class="review-container">
                <div class="review">
                    <div class="producten">
                        <div class="row">
                            <?php while ($data = $result05->fetch_assoc()) {
                                ?>
                                <div class="col-4">
                                    <div class="headsets">
                                        <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
                                        <a href="view/specificaties.php?id=<?php echo $data['id']?>">More info</a>
                                        <a href="./view/ShoppingCart.php?id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs']?>">Add to cart</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="review-06">
            <div class="review-container">
                <div class="review">
                    <div class="producten">
                        <div class="row">
                            <?php while ($data = $result06->fetch_assoc()) {
                                ?>
                                <div class="col-4">
                                    <div class="headsets">
                                        <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
                                        <a href="view/specificaties.php?id=<?php echo $data['id']?>">More info</a>
                                        <a href="./view/ShoppingCart.php?id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs']?>">Add to cart</a>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="./assets/javascript/productOverview.js"></script>
    <script src="./assets/javascript/menu.js"></script>
</section>
