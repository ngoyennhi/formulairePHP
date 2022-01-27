<?php
//var_dump($_POST);

// var_dump(filter_input(INPUT_POST,'nom'));
// var_dump(filter_input(INPUT_POST,'prenom'));
// var_dump(filter_input(INPUT_POST,'ok'));

$nomSaisi = filter_input(INPUT_POST, 'nom');
$prenomSaisi = filter_input(INPUT_POST, 'prenom');
$okSaisi = filter_input(INPUT_POST, 'ok');


//La condition permet de vérifier si la variable existe et si elle n’est pas vide.
if (isset($nomSaisi) && !empty($nomSaisi)) {
    echo $nomSaisi;
} else {
    echo 'Nom inconnu';
}

if (isset($prenomSaisi) && !empty($prenomSaisi)) {
    echo $prenomSaisi;
} else {
    echo 'Prenom inconnu';
}

if (isset($okSaisi) && !empty($okSaisi)) {
    echo $okSaisi;
} else {
    echo 'pas fini saisi';
}
