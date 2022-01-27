<?php

$nomSaisi1 = filter_input(INPUT_POST, 'nom1');
$nomSaisi2 = filter_input(INPUT_POST, 'nom2');
$okSaisi1 = filter_input(INPUT_POST, 'ok1');
$okSaisi2 = filter_input(INPUT_POST, 'ok2');

//La condition permet de vérifier si la variable existe et si elle n’est pas vide.
if (isset($nomSaisi1) && !empty($nomSaisi1)) {
    echo $nomSaisi1;
} else {
    echo 'Nom inconnu';
}

if (isset($nomSaisi2) && !empty($nomSaisi2)) {
    echo $nomSaisi2;
} else {
    echo 'Nom inconnu';
}

if (isset($okSaisi1) && !empty($okSaisi1)) {
    echo $okSaisi1;
} else {
    echo 'pas fini saisi';
}

if (isset($okSaisi2) && !empty($okSaisi2)) {
    echo $okSaisi2;
} else {
    echo 'pas fini saisi';
}
