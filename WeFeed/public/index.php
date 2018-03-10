<?php
session_start(); // ????

// session_destroy();
//
// $_SESSION['id'] = 1;
// $_SESSION['name'] = "Thomas";

require "config/config.php"; // ======= Abdellah SAQ - Ajout du fichier config.php
require "helpers/session_helper.php"; // ======= Abdellah SAQ - Ajout du fichier helper.php
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
				header('Location: userhome');
				exit;
				break;

			case 'inscription':
				require "controllers/ctrl.inscription.php";
				break;

			case 'settings':
				require "controllers/ctrl.settings.php";
				break;

			case 'disconnect':
				session_destroy();
				header('Location: inscription');
				exit;
				break;

			default:
				header('Location: userhome');
				exit;
				break;
		}

	} else {

		/* Si l'utilisateur est connecté mais qu'il n'y a pas de paramètre get */
		header('Location: publicuser');
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
				header('Location: publichome'); // ======= Abdellah SAQ - Modification lien
				exit;
				break;
		}

	} else {

		/* Si l'utilisateur n'est pas connecté et qu'il n'existe pas de paramètre get */
		header('Location: publicuser'); // ======= Abdellah SAQ - Modification lien
		exit;
	}
}

//Récupère le bas du document html, avec le footer et des scripts
require "views/view.htmlfooter.php";

?>
