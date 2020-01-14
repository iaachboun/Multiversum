

<?php require 'model/connectDatabase.php';



$sql = 'SELECT * FROM productenoverzicht WHERE id =' . $id;
$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        //$id = $row['id'];
        $naam = $row['Naam'];
        $prijs = $row['Prijs'];
        $merk = $row['Merk'];
        $resolutie = $row['Resolutie'];
        $gezichtsveld = $row['Gezichtsveld'];
        $platform = $row['Platform'];
        $kleur = $row['Kleur'];
        $gewicht = $row['Gewicht'];
        $beschrijving = $row['Beschrijving'];

        echo "<br>";


    }

}


?>

<h2>Wijzig Product</h2>
<?php
echo $naam;
echo $prijs;

?>
<form method="post" action="actie_query.php" class="updateform">
    <input type="text" name="id" value="<?php echo $id; ?>" hidden>
    <label>Nieuwe prijs:</label><input type="text" name='prijs' value="<?php echo $prijs; ?>">
    <input type="submit" value="Update" class="sturen">
</form>
<?php
$newprijs = $_POST['prijs'];

echo $newprijs;

?>
