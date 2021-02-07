<?php
include "common/header.php";
include "common/menu.php";
?>

<h1>Affichage d'une pyramide</h1>

<form action="#" method="post">
<label for="table">Hauteur de la pyramide : </label>
<input type="number" name="table_number" id="table_number">
<input type="submit" value="Réprésenter">
</form>

<?php
if (isset($_POST["table_number"])) {
    $number = $_POST["table_number"];
    echo "<h2>Pyramide de hauteur " . $number . "</h2>";
    for ($i = 0; $i <= $number; $i++) {
        echo "<p>" . str_repeat('*', $i) . "</p>";
    }
    for ($i = $number - 1; $i >= 0; $i--) {
        echo "<p>" . str_repeat('*', $i) . "</p>";
    }
}

?>

<?php
include "common/footer.php";
?>