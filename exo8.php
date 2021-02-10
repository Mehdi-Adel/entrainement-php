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

$characters = [
    "roger" => [
        "name" => 'Gol D. Roger',
        "crew" => 'Roger Pirates',
        "ship" => 'Oro Jackson',
    ],

    "whitebeard" => [
        "name" => 'Edward Newgate',
        "crew" => 'Whitebeard Pirates',
        "ship" => 'Moby Dick',
    ],
];

foreach ($characters as $characterName) {
    echo $characters[$characterName];
    foreach ($characterName as $key => $value) {

        // echo "<p>" . $key . " : " . $value . "</p>";
    }
}

include "common/footer.php";
?>