<?php
include "common/header.php";
include "common/menu.php";
?>

<h1>Tableaux</h1>
<?php

$numbersArray = [2, 6, 12, 5, 26, 34, 50];

//  & devant $value permet de remplacer les nouvelles valeurs de $value dans le tableau après la boucle

function checkIfAllNumbersAreEven($array)
{

    foreach ($array as &$value) {
        $value = $value % 2;
    }

    if (in_array(1, $array)) {
        echo "Tous les nombres ne sont pas pairs.";
    } else {
        echo "Tous les nombres sont pairs.";
    }
}

checkIfAllNumbersAreEven($numbersArray);

include "common/footer.php";
?>