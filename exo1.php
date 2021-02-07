<?php
include "common/header.php";
include "common/menu.php";
?>

<h1>Affichage des tables de multiplication</h1>

<form action="#" method="post">
<label for="table">Calculer la table de : </label>
<input type="number" name="table_number" id="table_number">
<input type="submit" value="Calculer">
</form>

<?php
if (isset($_POST["table_number"])) {
    $number = $_POST["table_number"];
    echo "<h2>Table de " . $number . "</h2>";
    for ($i = 0; $i <= 10; $i++) {
        echo "<p>" . $number . " × " . $i . " = " . $number * $i . "</p>";
    }
}

?>

<?php
include "common/footer.php";
?>