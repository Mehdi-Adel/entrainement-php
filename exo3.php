<?php
include "common/header.php";
include "common/menu.php";
?>

<h1>Cercle - Périmètre et aire</h1>

<form action="#" method="post">
<label for="radius_number">Rayon d'un cercle : </label>
<input type="number" name="radius_number" id="radius_number">
<div><input type="checkbox" name="perimeter" id="perimeter"><label for="perimeter">Périmètre</label></div>
<div><input type="checkbox" name="area" id="area"><label for="area">Aire</label></div>
<input type="submit" value="Calculer">
</form>

<?php
if (isset($_POST["radius_number"])) {
    $radius_number = $_POST["radius_number"];
    if (isset($_POST["perimeter"])) {
        $perimeter = $radius_number * 2 * pi();
        echo "<p>Le périmètre du cercle de rayon " . $radius_number . " est de " . $perimeter . ".</p>";
    }
    if (isset($_POST["area"])) {
        $area = pow($radius_number, 2) * pi();
        echo "<p>L'aire du cercle de rayon " . $radius_number . " est de " . $area . "</p>";
    }
}

?>

<?php
include "common/footer.php";
?>