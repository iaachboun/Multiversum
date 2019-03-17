<?php
// require_once "DataHandler.php";
    $servername = "localhost";
    $username = "ilias";
    $password = "12345";
    $dbname = "webshopMultiversum";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM `productenoverzicht` WHERE id < 7;";
    $result = $conn->query($sql);

?>
<section class="product-overzicht">
    <div class="producten">
        <div class="row">
        <?php while($data = $result->fetch_assoc()) {
            ?>
            <div class="col-4">
                <div class="headsets">
                    <p>naam: <?php echo $data['Naam'] ?></p>
                    <p>Merk: <?php echo $data['Merk'] ?></p>
                    <p>Resolutie: <?php echo $data['Resolutie'] ?></p>
                    <p>Gezichtsveld: <?php echo $data['Gezichtsveld'] ?></p>
                    <p>Platform: <?php echo $data['Platform'] ?></p>
                    <p>kleur <?php echo $data['Kleur'] ?></p>
                    <p>gewicht: <?php echo $data['Gewicht'] ?></p>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
