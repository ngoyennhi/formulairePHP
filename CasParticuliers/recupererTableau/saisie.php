<?php
// 'saisie' c'est le nom de la variable que tu souchaite récupéré mais ca reste une string dans filter input
// donc on ajoute FILTER_DEFAULT tout d'abord
// ensuit FILTER_REQUIRE_ARRAY pour le transformer un tableau
$arrSaisie = filter_input(INPUT_POST, 'saisie',FILTER_DEFAULT, FILTER_REQUIRE_ARRAY);
//$arrSaisie = $_POST['saisie'];
//var_dump($_POST['saisie']);

//La condition permet de vérifier si la variable existe et si elle n’est pas vide.
if (isset($arrSaisie['nom']) && !empty($arrSaisie['nom'])) {
    echo $arrSaisie['nom'];
    echo "<br>";
} else {
    echo 'inconnu';
}

if (isset( $arrSaisie['prenom']) && !empty( $arrSaisie['prenom'])) {
    echo  $arrSaisie['prenom'] ;
    echo "<br>";
} else {
    echo 'inconnu';
}