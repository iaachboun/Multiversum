<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="../assets/javascript/admin-page.js"></script>

<?php require '../model/connectDatabase.php';

$id = $_REQUEST['id'];

$checkActie = "SELECT * FROM productenoverzicht WHERE id = $id;";
$result = $conn->query($checkActie);

while ($data = $result->fetch_assoc()) {
    $actie = $data['actie'];

    if ($actie == 1) {
        $addActie = "UPDATE `productenoverzicht` SET actie = FALSE WHERE id = $id;";
        $result = $conn->query($addActie);
        require 'admin_home.php';
    } else if ($actie == 0) {
        $addActie = "UPDATE `productenoverzicht` SET actie = TRUE WHERE id = $id;";
        $result = $conn->query($addActie);
        require 'admin_home.php';
    }
}



//nieuwe tabel maken voor alle kortingen 1% tot 80% ofzo endan die precentage gebruiken met de oude prijs om de nieuwe prijs te berekenen
