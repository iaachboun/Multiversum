<?php include 'model/connectDatabase.php';

$sql = "SELECT * FROM `productenoverzicht` WHERE actie = true;";
$result = $conn->query($sql);

?>
<h2 class="actie-title">Nu in de aanbieding!</h2>

<div class="actie-sectie">
    <div class="ActieProducten">
        <?php while ($data = $result->fetch_assoc()) {
            ?>
            <div class="col-4">
                <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                <div class="description">
                    <p><?php echo $data['Naam'] ?></p>
                    <p>Prijs: € <?php echo $data['Prijs'] ?></p>
                    <a href="view/home/specificaties.php?id=<?php echo $data['id']?>">Lees meer</a>
                    <a href="view/ShoppingCart.php?id=<?php echo $data['id'] . '&naam=' . $data['Naam'] . '&prijs=' . $data['Prijs']?>">Naar winkelwagen</a>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

