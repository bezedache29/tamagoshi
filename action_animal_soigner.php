<?php
include('inc/init.php');

/**
 * Ecrire le code
 */
$id_animal = $_GET['id'];
$animal = $_SESSION['animaux'][$id_animal];
$points = random_int(20, 100);

$animal->soigner($points);

$_SESSION['animaux'][$id_animal] = $animal;
$_SESSION['nb_actions'] += NB_ACTIONS_CARESSER;
$_SESSION['messages'][] = $animal->getNom() . ' vient de se faire soigner de ' . $points . ' points de vie';

header('Location: action_verif_changement_jour.php');