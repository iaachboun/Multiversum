<head>
    <script src="assets/javascript/admin-page.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>


    input[type=text] {
        padding: 10px;
        font-size: 17px;
        border: 1px solid grey;
        width: 10%;
        background: #f1f1f1;
    }

    form button {
        width: 3%;
        padding: 10px;
        background: #2196F3;
        color: white;
        font-size: 18px;
        border: 1px solid grey;
        border-left: none; /* Prevent double borders */
        cursor: pointer;
    }


    button:hover {
        background: #0b7dda;
    }

    .maken{
        margin: 30px;
    }

    .maken input{
        background-color:#1bbc9b;
        border: none;
        -webkit-border-radius: 10px;
        -moz-border-radius: 10px;
        border-radius: 10px;
        font-size: 20px;
        color: #555555;
        cursor: pointer;


    }

</style>

<?php
require "model/connectDatabase.php";

$sql = 'SELECT * FROM productenoverzicht ORDER BY id ASC';
$result = $conn->query($sql);
$row = "";

?>


<h1>Producten Multiversum</h1>

<div class="maken">
    <form method="post" action="insertdb_producten_multiversum.php">
        <input type="submit" name="submit" value="Create new product">
    </form>
</div>
<div class="tabel" style="overflow-x:auto;">
    <div class="container-table100">
        <div class="wrap-table100">
            <div class="table">

                <div class="row header">
                    <div class="cell">Id</div>
                    <div class="cell">Naam</div>
                    <div class="cell">Prijs</div>
                    <div class="cell">Merk</div>
                    <div class="cell">Resolutie</div>
                    <div class="cell">Gezichtsveld</div>
                    <div class="cell">Platform</div>
                    <div class="cell">Kleur</div>
                    <div class="cell">Gewicht</div>
                    <div class="cell">Beschrijving</div>
                    <div class="cell">Actie</div>
                    <div class="cell">Actie price</div>
                    <div class="cell">Actions</div>
                </div>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    // output data of each row
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        if (!$row['actie'] == 1) {
                            $ActiePrijs = '---';
                        } else {
                            $ActiePrijs = "€" . $row['NewPrice'];
                        }
                        //$row['product_price'] = number_format($row['product_price'], 2);
                        echo "<div class='row'>";
                        echo "<p class='cell'>" . $row['id'] . "</p>";
                        echo "<p class='cell'>" . $row['Naam'] . "</p>";
                        echo "<p class='cell'> € " . $row['Prijs'] . "</p>";
                        echo "<p class='cell'>" . $row['Merk'] . "</p>";
                        echo "<p class='cell'>" . $row['Resolutie'] . "</p>";
                        echo "<p class='cell'>" . $row['Gezichtsveld'] . "</p>";
                        echo "<p class='cell'>" . $row['Platform'] . "</p>";
                        echo "<p class='cell'>" . $row['Kleur'] . "</p>";
                        echo "<p class='cell'>" . $row['Gewicht'] . "</p>";
                        echo "<p class='cell'>" .  substr($row['Beschrijving'], 0, 50) . "...</p>";
                        echo "<p class='cell ActiePrijs'>" . $row['actie'] . "</p>";
                        echo "<p class='cell'>" . $ActiePrijs . "</p>";
                        echo "<p class='cell'>" . "<a href='update_producten_db.php?id=" . $id . "'><i class='fa fa-pencil'></i></a>" . "<a href='delete_producten_db.php?id=" . $id . "'><i class='fa fa-trash'></i></a>" . "<a class='actie-button' id=" . $id . "><i class='fas fa-tags'></i></a></p>";
                        echo "</div>";
                    }
                }



                ?>
            </div>
        </div>
    </div>

    <form method="get" action="actie-producten.php" class="actie-settings-closed">
        <i class="fas fa-times close"></i>
        <p>Nieuwe prijs</p>
        <input type="text" name="price" class="input-price"><br>
        <input type="hidden" name="hidden_id" class="hidden_id">
        <input type="submit">
    </form>
</div>
