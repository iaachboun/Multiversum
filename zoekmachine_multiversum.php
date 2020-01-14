<?php
/**
 * Created by PhpStorm.
 * User: anass
 * Date: 17-3-2019
 * Time: 21:48
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: anass
 * Date: 17-3-2019
 * Time: 21:49
 */
?>

<?php

include 'header.php';
require 'model/connectDatabase.php';

$invoer = $_GET['invoer'];

$raw_results = mysqli_query($conn, "SELECT * FROM productenoverzicht
            WHERE (`Naam` LIKE '%".$invoer."%')") or die(mysql_error());
$hoeveel = mysqli_num_rows($raw_results);


echo "<br>";
echo  $hoeveel . " Resultaten voor " . "''" . $invoer . "''";
echo "<table border='1px'>";
/*echo "<tr>";
echo "<td>". "Naam" ."</td>";
echo "<td>". "Prijs" ."</td>";
echo "</tr>";
*/
/*if(mysqli_num_rows($raw_results) > 0){
    while($results = mysqli_fetch_array($raw_results)){
        echo "<tr>";
        echo "<td>".$results['Naam']. "</td>";
        echo "<td>".$results['Prijs']. "</td>";
        echo "<td>".$results['id']. "</td>";
        echo "</tr>";



        //echo "<p><h3>".$results['product_name']."</h3>"."</p>";

    }

}
else{
    echo "<br>" . "No results";
    echo "<img src='https://media.gifs.nl/the-godfather-gifs-sF3gj7.gif' />";


}
echo "</table>"
*/
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
                            <?php while($results = mysqli_fetch_array($raw_results)){
                                ?>
                                <div class="col-4">
                                    <div class="headsets">
                                        <!--<img src="assets/img/img_products/acer.png">-->
                                        <img src="assets/img/img_products/<?php echo $results['id'] ?>.jpeg">
                                        <?php $img_path = "assets/img/imgproducts/" . $results['id'] . ".jpeg"; ?>
                                        <!--<p><?php echo $img_path; ?></p>-->
                                        <p><?php echo $results['Naam'] ?></p>
                                        <p>Prijs: <?php echo $results['Prijs'] ?></p>
                                        <a href="view/specificaties.php?id=<?php echo $results['id']?>">More info</a>
                                        <a href="view/ShoppingCart.php?id=<?php echo $results['id']?>">Add to cart</a>
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
</section>
