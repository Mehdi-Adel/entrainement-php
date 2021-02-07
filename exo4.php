<?php
include "common/header.php";
include "common/menu.php";

session_start();
if (!isset($_SESSION['randomNumber'])) {
    $_SESSION['randomNumber'] = rand(1, 100);
}
?>

<h1>Trouver le nombre</h1>

<form action="#" method="POST">
    <input type="hidden" name="reset">
    <input type="submit" value="Reset">
</form>


<form action="#" method="POST">
    <label for="user_answer">Devinez le nombre entre 1 et 100</label>
    <input type="number" name="user_answer" id="user_answer">
    <input type="submit" value="Vérifier">
</form>

<?php

if (isset($_POST['reset'])) {
    $_SESSION['randomNumber'] = rand(1, 100);
}

$randomNumber = $_SESSION['randomNumber'];

if (isset($_POST["user_answer"]) && $_POST["user_answer"] > 0) {
    $userAnswer = (int) $_POST["user_answer"];
    if ($userAnswer === $randomNumber) {
        echo "<p>Bravo, vous avez trouvé.</p>";
    } elseif ($userAnswer > $randomNumber) {
        echo "<p>C'est moins.</p>";
    } elseif ($userAnswer < $randomNumber) {
        echo "<p>C'est plus.</p>";
    } else {
        echo "Saisissez un chiffre.";
    }
}

?>

<?php
include "common/footer.php";
?>