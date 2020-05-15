<?php
include('inc/init.php');

while($_SESSION['nb_actions'] >= NB_ACTIONS_PAR_JOUR) {

    foreach($_SESSION['animaux'] as $index => $animal) {
        $animal->vieillir();
        $_SESSION['animaux'][$index] = $animal;
    }

    $_SESSION['nb_actions'] -= NB_ACTIONS_PAR_JOUR;

    $_SESSION['messages'][] = 'Un nouveau jour se lève !';
}

header('Location: index.php');