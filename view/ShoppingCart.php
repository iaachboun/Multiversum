<head>
    <link rel="stylesheet" href="../assets/style/ShoppingCart.scss" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<?php
if (isset($_GET["action"])) {
    if (isset($_GET) == "delete") {
        $cookie_data = stripslashes($_COOKIE["shopping_cart"]);

        $cart_data = json_decode($cookie_data, true);

        foreach ($cart_data as $keys => $values) {
            if ($cart_data[$keys]['item_id'] == $_GET["id"]) {
                unset($cart_data[$keys]);
                $item_data = json_encode($cart_data);

                setcookie('shopping_cart', $item_data, time() + (86400 * 30));
                header("location:index.php?page=winkelwagen&remove=1");
            }
        }
    }
}
if (isset($_GET["success"])) {
    $message = 'Toegevoegd aan winkelwagen';
}

if (isset($_GET["remove"])) {
    $message = 'product verwijdert uit winkelwagen';
}

if (isset($_COOKIE["shopping_cart"])) {
    $total = 0;
    $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
    $cart_data = json_decode($cookie_data, true);

    if ($cart_data == null) { ?>
        <div class="empty-cart">
            <p>Uw winkelwagen is leeg</p>
            <p>Ga naar ons productoverzicht om brillen aan te schaffen</p>
        </div>
    <?php } else { ?>
        <div class="tabel-shopping-cart" style="overflow-x:auto;">
            <div class="container-table100">
                <div class="wrap-table100">
                    <div class="table">
                        <div class="row header">
                            <div class="cell">Aantal</div>
                            <div class="cell">Naam</div>
                            <div class="cell">Prijs</div>
                            <div class="cell">Totaal</div>
                            <div class="cell">Delete</div>
                        </div>
                        <?php
                        $total = '';

                        if (isset($_COOKIE["shopping_cart"])) {
                            $total = 0;
                            $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
                            $cart_data = json_decode($cookie_data, true);

                            foreach ($cart_data as $keys => $values) {
                                ?>


                                <div class="row">
                                    <p class="cell"><?php echo $values["item_quantity"] ?></p>
                                    <p class="cell"><?php echo $values["item_name"] ?></p>
                                    <p class="cell">€<?php echo $values["item_price"] ?></p>
                                    <p class="cell">
                                        €<?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></p>
                                    <p class="cell"><a
                                                href="index.php?page=winkelwagen&action=delete&id=<?php echo $values["item_id"]; ?>"><i
                                                    class="fas fa-trash-alt"></i></a></p>
                                </div>

                                <?php
                                $total = $total + ($values["item_quantity"] * $values["item_price"]);
                                $btw = $total / 100 * 21;
                                $exclbtw = $total - $btw;
                                $inclbtw = $total;
                                $aantal = $values['item_quantity'] + $aantal;

                                $cookie_name = "cart_counter";
                                $cookie_value = "$aantal";
                                setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day


                            }
                        } else {
                            $cart_data = array();
                        } ?>
                        <div class="prijs">
                            <div class="totaal subtotaal">
                                <p class="cell">Excl Btw</p>
                                <p class="cell">€ <?php echo number_format($exclbtw, 2) ?></p>
                            </div>
                            <div class="totaal btw">
                                <p class="cell">BTW</p>
                                <p class="cell">€ <?php echo number_format($btw, 2) ?></p>
                            </div>
                            <div class="totaal">
                                <p class="cell">Aantal</p>
                                <p class="cell"><?php echo $aantal ?></p>
                            </div>
                            <div class="totaal">
                                <p class="cell">Totaal*</p>
                                <p class="cell">€ <?php echo number_format($inclbtw, 2) ?></p>
                            </div>
                            <div class="totaal subtotaal">
                                <p class="cell"><sup></sup></p>
                                <p class="cell"><sup>*Prijzen zijn incl BTW</sup></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php }
} else {
    $cart_data = array();
}

?>


<!DOCTYPE html>



