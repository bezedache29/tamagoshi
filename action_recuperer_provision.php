<?php
include('inc/init.php');

$random = random_int(1, 100);

if($random >= 1 && $random < 30) {
    $provision = new Pasteque();
    $_SESSION['provisions'][] = $provision;
    $_SESSION['messages'][] = 'Vous avez trouvé une pastèque';
}
elseif($random >= 30 && $random < 50) {
    $provision = new Hamburger();
    $_SESSION['provisions'][] = $provision;
    $_SESSION['messages'][] = 'Vous avez trouvé un hamburger !!!';
}
elseif($random >= 50 && $random < 80) {
    $provision = new Coca();
    $_SESSION['provisions'][] = $provision;
    $_SESSION['messages'][] = 'Vous avez trouvé un Coca';
}
elseif($random >= 80 && $random < 90) {
    $provision = new Eau();
    $_SESSION['provisions'][] = $provision;
    $_SESSION['messages'][] = 'Vous avez trouvé de l\'eau';
}
else {
    $_SESSION['messages'][] = 'Pas de bol, le supermarché était vide !';
}

$_SESSION['nb_actions'] = $_SESSION['nb_actions'] + NB_ACTIONS_RECHERCHE_PROVISION;

header('Location: action_verif_changement_jour.php');