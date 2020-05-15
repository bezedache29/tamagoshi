<?php
include('inc/init.php');

$animal = new Animal($_POST['nom']);
$_SESSION['animaux'][] = $animal;

$_SESSION['nb_actions'] += NB_ACTIONS_CREATION_ANIMAL;

header('Location: action_verif_changement_jour.php');