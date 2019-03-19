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
$sql04 = "SELECT * FROM `productenoverzicht` WHERE id > 18;";
$result04 = $conn->query($sql04);

?>
<section class="product-overzicht">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <div class="review-pages">
        <button class="slide" name="review0">1</button>
        <button class="slide" name="review1">2</button>
        <button class="slide" name="review2">3</button>
        <button class="slide" name="review3">4</button>
    </div>
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
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Merk: <?php echo $data['Merk'] ?></p>
                                        <p>Resolutie: <?php echo $data['Resolutie'] ?></p>
                                        <p>Gezichtsveld: <?php echo $data['Gezichtsveld'] ?></p>
                                        <p>Platform: <?php echo $data['Platform'] ?></p>
                                        <p>kleur <?php echo $data['Kleur'] ?></p>
                                        <p>gewicht: <?php echo $data['Gewicht'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
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
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Merk: <?php echo $data['Merk'] ?></p>
                                        <p>Resolutie: <?php echo $data['Resolutie'] ?></p>
                                        <p>Gezichtsveld: <?php echo $data['Gezichtsveld'] ?></p>
                                        <p>Platform: <?php echo $data['Platform'] ?></p>
                                        <p>kleur <?php echo $data['Kleur'] ?></p>
                                        <p>gewicht: <?php echo $data['Gewicht'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
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
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Merk: <?php echo $data['Merk'] ?></p>
                                        <p>Resolutie: <?php echo $data['Resolutie'] ?></p>
                                        <p>Gezichtsveld: <?php echo $data['Gezichtsveld'] ?></p>
                                        <p>Platform: <?php echo $data['Platform'] ?></p>
                                        <p>kleur <?php echo $data['Kleur'] ?></p>
                                        <p>gewicht: <?php echo $data['Gewicht'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
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
                                        <p><?php echo $data['Naam'] ?></p>
                                        <p>Merk: <?php echo $data['Merk'] ?></p>
                                        <p>Resolutie: <?php echo $data['Resolutie'] ?></p>
                                        <p>Gezichtsveld: <?php echo $data['Gezichtsveld'] ?></p>
                                        <p>Platform: <?php echo $data['Platform'] ?></p>
                                        <p>kleur <?php echo $data['Kleur'] ?></p>
                                        <p>gewicht: <?php echo $data['Gewicht'] ?></p>
                                        <p>Prijs: <?php echo $data['Prijs'] ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="./assets/javascript/productOverview.js"></script>
</section>
