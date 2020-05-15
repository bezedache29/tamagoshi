<?php

require('classes/Animal.php');
require('classes/Coca.php');
require('classes/Eau.php');
require('classes/Pasteque.php');
require('classes/Hamburger.php');

session_start();

if(!isset($_SESSION['animaux'])) {
    $_SESSION['animaux'] = [];
}

if(!isset($_SESSION['provisions'])) {
    $_SESSION['provisions'] = [];
}

if(!isset($_SESSION['nb_actions'])) {
    $_SESSION['nb_actions'] = 0;
}

if(!isset($_SESSION['messages'])) {
    $_SESSION['messages'] = [];
}

define('NB_ACTIONS_RECHERCHE_PROVISION', 1);
define('NB_ACTIONS_CREATION_ANIMAL', 1);
define('NB_ACTIONS_NOURRIR', 1);
define('NB_ACTIONS_SOIGNER', 3);
define('NB_ACTIONS_CARESSER', 2);
define('NB_ACTIONS_PAR_JOUR', 3);

