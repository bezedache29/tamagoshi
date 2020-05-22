<?php
include('inc/init.php');

/**
 * Ecrire le code
 */
$id_animal = $_GET['id'];
$animal = $_SESSION['animaux'][$id_animal];
$points = random_int(0, 30);

$animal->caresser($points);

$_SESSION['animaux'][$id_animal] = $animal;
$_SESSION['nb_actions'] += NB_ACTIONS_SOIGNER;
$_SESSION['messages'][] = $animal->getNom() . ' vient de gagner ' . $points . ' points d\'humeur';

header('Location: action_verif_changement_jour.php');