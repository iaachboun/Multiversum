<?php include 'model/connectDatabase.php';
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
    header("location:index.php?page=home&success=1");
}
$sql = "SELECT * FROM `productenoverzicht` WHERE actie = true;";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM `productenoverzicht` WHERE actie = true;";
$result2 = $conn->query($sql2);

?>
<h2 class="actie-title">Nu in de aanbieding!</h2>

<div class="actie-sectie">

    <div class="ActieProducten-for">
        <?php while ($data = $result->fetch_assoc()) {
            ?>
            <div class="col-4">
                <div class="product-img">
                    <img src="assets/img/img_products/<?php echo $data['id'] ?>.jpeg">
                </div>
                <div class="description">
                    <form method="post">
                        <p><?php echo $data['Naam'] ?></p>
                        <p class="oldPrice">€ <?php echo $data['Prijs'] ?></p>
                        <p class="newPrice">€ <?php echo $data['NewPrice'] ?></p>
                        <input type="text" name="quantity" value="1">
                        <input type="hidden" name="hidden_name" value="<?php echo $data['Naam'] ?>">
                        <input type="hidden" name="hidden_id" value="<?php echo $data['id'] ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $data['NewPrice'] ?>">
                        <input type="submit" name="add_to_cart" value="Add to cart"><br><br>
                        <a href="view/home/specificaties.php?id=<?php echo $data['id'] ?>">Lees meer <i
                                    class="fas fa-info-circle"></i></a>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
    <div class="ActieProducten-nav">
        <?php while ($data2 = $result2->fetch_assoc()) {
            ?>
            <div class="col-4">
                <div class="product-img">
                    <img src="assets/img/img_products/<?php echo $data2['id'] ?>.jpeg">
                </div>
                <div class="description">
                    <form method="post">
                        <p><?php echo $data2['Naam'] ?></p>
                        <p class="oldPrice">€ <?php echo $data2['Prijs'] ?></p>
                        <p class="newPrice">€ <?php echo $data2['NewPrice'] ?></p>
                        <a href="view/home/specificaties.php?id=<?php echo $data2['id'] ?>"><i
                                    class="fas fa-info-circle"></i></a>
                        <input type="hidden" name="quantity" value="1">
                        <input type="hidden" name="hidden_name" value="<?php echo $data2['Naam'] ?>">
                        <input type="hidden" name="hidden_id" value="<?php echo $data2['id'] ?>">
                        <input type="hidden" name="hidden_price" value="<?php echo $data2['NewPrice'] ?>">
                        <button type="submit" name="add_to_cart" value="Add to cart" class="submit-actie"><i class="fas fa-cart-plus"></i></button>
                    </form>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

