<?php
include "common/header.php";
include "common/menu.php";
?>

<h1>Calculer une moyenne</h1>

<form action="#" method="GET">
    <label for="scores_number">Nombre de notes</label>
    <input type="number" name="scores_number" id="scores_number">
    <input type="submit" value="Ajouter">
</form>

<?php
if (!isset($_GET["scores_number"])) {
    $_GET["scores_number"] = 1;
}

$scoresNumber = $_GET["scores_number"];
?>

<form action="#" method="POST">

    <?php for ($i = 1; $i <= $scoresNumber; $i++) {
    echo "<div><label for='user_answer'>Note " . $i . "</label>
        <input type='number' name='score" . $i . "' class='score' required></div>";
}?>
    <input type='submit' value='Calculer'>
</form>

<?php
if (isset($_POST["score1"])) {
    $scores = [];
    for ($i = 1; $i <= $scoresNumber; $i++) {
        array_push($scores, (int) $_POST["score" . $i]);
    }
    $scoresSum = array_sum($scores);
    echo "<p>Votre moyenne est de " . $scoresSum / $scoresNumber . ".</p>";
}

include "common/footer.php";
?>