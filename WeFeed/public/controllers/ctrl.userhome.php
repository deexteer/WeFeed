<?php

if (isset($_POST['pseudo']) && $_POST['pseudo'] !== $_SESSION['pseudo']) {
	$_SESSION['pseudo'] = $_POST['pseudo'];
	changeData($bdd, "users", "pseudo", $_POST['pseudo']);
}

if (isset($_POST['mail']) && $_POST['mail'] !== $_SESSION['mail']) {
	$_SESSION['mail'] = $_POST['mail'];
	changeData($bdd, "users", "mail", $_POST['mail']);
}


require 'views/view.header.php';
require 'views/view.userhome.php';

?>
