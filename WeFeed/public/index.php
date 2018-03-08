<?php
session_start();

// session_destroy();
//
// $_SESSION['id'] = 1;
// $_SESSION['name'] = "Thomas";

require "models/mdl.bdd.php";

//Récupère le haut du document html, avec le head et donc les styles
require "views/view.htmlheader.php";

if (isset($_SESSION['id'])) {

	if (isset($_GET['req'])) {

		/* Si l'utilisateur est authetifié et qu'il existe un parametre get */
		switch ($_GET['req']) {
			case 'publichome':
				require "controllers/ctrl.publichome.php";
				break;

			case 'userhome':
				require "controllers/ctrl.userhome.php";
				break;

			case 'connexion':
				header('Location: index.php?req=userhome');
				exit;
				break;

			case 'inscription':
				require "controllers/ctrl.inscription.php";
				break;session_destroy();

			case 'disconnect':
				session_destroy();
				header('Location: index.php');
				exit;
				break;

			default:
				header('Location: index.php?req=userhome');
				exit;
				break;
		}

	} else {

		/* Si l'utilisateur est connecté mais qu'il n'y a pas de paramètre get */
		header('Location: index.php?req=publicuser');
		exit;
	}

} else {

	/* Si l'utilisateur n'est pas connecté et qu'il existe un paramètre get */

	if (isset($_GET['req'])) {

		switch ($_GET['req']) {
			case 'publichome':
				require "controllers/ctrl.publichome.php";
				break;

			case 'userhome':
				require "controllers/ctrl.connexion.php";
				break;

			case 'connexion':
				require "controllers/ctrl.connexion.php";
				break;

			case 'inscription':
				require "controllers/ctrl.inscription.php";
				break;

			default:
				header('Location: index.php?req=publichome');
				exit;
				break;
		}

	} else {

		/* Si l'utilisateur n'est pas connecté et qu'il n'existe pas de paramètre get */
		header('Location: index.php?req=publicuser');
		exit;
	}
}

//Récupère le bas du document html, avec le footer et des scripts
require "views/view.htmlfooter.php";

?>