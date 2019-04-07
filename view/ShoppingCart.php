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

?><table>
    <tr>
        <th>Naam</th>
        <th>Aantal</th>
        <th>Prijs</th>
        <th>Totaal</th>
        <th>Delete</th>
    </tr>
    <?php
    $total = '';

    if (isset($_COOKIE["shopping_cart"])) {
        $total = 0;
        $cookie_data = stripslashes($_COOKIE["shopping_cart"]);
        $cart_data = json_decode($cookie_data, true);

        foreach ($cart_data as $keys => $values) {
            ?>
            <tr>
                <td><?php echo $values["item_name"] ?></td>
                <td><?php echo $values["item_quantity"] ?></td>
                <td><?php echo $values["item_price"] ?></td>
                <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                <td><a href="index.php?page=winkelwagen&action=delete&id=<?php echo $values["item_id"]; ?>"><span
                                class="text-danger">Remove</span></a></td>
            </tr>
            <?php
            $total = $total + ($values["item_quantity"] * $values["item_price"]);

        }
    } else {
        $cart_data = array();
    } ?>
</table>
<?php echo number_format($total, 2);
?>
