<?php
include('inc/init.php');

$id_animal = $_GET['id'];
$animal = $_SESSION['animaux'][$id_animal];

$id_provision = array_rand($_SESSION['provisions']);
$provision = $_SESSION['provisions'][$id_provision];
unset($_SESSION['provisions'][$id_provision]);

$animal->nourrir($provision);

$_SESSION['animaux'][$id_animal] = $animal;

$_SESSION['nb_actions'] += NB_ACTIONS_NOURRIR;
$_SESSION['messages'][] = $animal->getNom() . ' vient de se nourrir avec : ' . $provision->getNom();

header('Location: action_verif_changement_jour.php');