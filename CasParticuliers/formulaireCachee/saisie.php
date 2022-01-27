<?php
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