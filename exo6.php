<?php
include "common/header.php";
include "common/menu.php";
?>

<h1>Sélection du personnage</h1>
<form action="#" method="post">
    <label for="characters">Choisissez un personnage :</label>

    <select name="characters" id="character-select">
        <option value="">Liste des personnages</option>
        <option value="roger">Gol D. Roger</option>
        <option value="whitebeard">Edward Newgate</option>
    </select>
    <input type="submit" value="Valider">
</form>

<?php
// if (isset($_POST["characters"])) {
//     if ($_POST["characters"] === "roger") {
//         echo "<img src='sources/images/roger.jpg' class='character-poster' alt='Roger'>";

//     } elseif ($_POST["characters"] === "whitebeard") {
//         echo "<img src='sources/images/whitebeard.jpg' class='character-poster' alt='Whitebeard'>";
//     }
// }

if (isset($_POST["characters"])) {
    $character = $_POST["characters"];} else {($character = null);
}

switch ($character) {
    case "roger":
        echo "<img src='sources/images/roger.jpg' class='character-poster' alt='Roger'>";
        break;
    case "whitebeard":
        echo "<img src='sources/images/whitebeard.jpg' class='character-poster' alt='Whitebeard'>";
        break;
}

include "common/footer.php";
?>