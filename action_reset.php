<?php
include('inc/init.php');

unset($_SESSION['animaux']);
unset($_SESSION['nb_actions']);
unset($_SESSION['provisions']);
unset($_SESSION['messages']);

header('Location: index.php');