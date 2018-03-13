<?php

// On récupère la liste des apis de l'utilisateur
$user_apis = array();
$getuserapi = $bdd->prepare("SELECT api_numbers FROM users WHERE id = ?");
$getuserapi->bindParam(1, $_SESSION['id']);
$getuserapi->execute();
$gettedapis = $getuserapi->fetch();
$gettedapis = unserialize($gettedapis[0]);

// Si l'utilisateur n'a pas d'api enregistrée on affiche un message
if(empty($gettedapis)){
	echo "
	<script>
		var user_apis = 0
	</script>
	";
} else { //S'il a des apis d'enregistrées on construit le tableau $user_apis à partir des donées récupérées
	foreach ($gettedapis as $key => $value) {
		array_push($user_apis, $value);
	}
}

// On regarde si des apis
if(isset($_POST['api']) AND !empty($_POST['api'])){

	$api = $_POST['api'];
	if(is_null($user_apis)){
		$user_apis = array($api);
	} else {
		if (in_array($api, $user_apis)) {
			echo "Vous avez déjà choisi cette source d'information";
		} else {
			array_push($user_apis, $api);
			$user_apis = serialize($user_apis);
			$addapi = $bdd->prepare("UPDATE users SET api_numbers=? WHERE id=?");
			$addapi->bindParam(1, $user_apis);
			$addapi->bindParam(2, $_SESSION['id']);
			$addapi->execute();

			$user_apis = array();
			$getuserapi = $bdd->prepare("SELECT api_numbers FROM users WHERE id = ?");
			$getuserapi->bindParam(1, $_SESSION['id']);
			$getuserapi->execute();
			$gettedapis = $getuserapi->fetch();
			$gettedapis = unserialize($gettedapis[0]);

			// Si l'utilisateur n'a pas d'api enregistrée on affiche un message
			if(empty($gettedapis)){
				echo "
				<script>
					var user_apis = 0
				</script>
				";
			} else { //S'il a des apis d'enregistrées on construit le tableau $user_apis à partir des donées récupérées
				foreach ($gettedapis as $key => $value) {
					array_push($user_apis, $value);
				}
			}
		}
	}
}

if(isset($_POST['coltodel']) AND !empty($_POST['coltodel'])){

	$key = array_search($_POST['coltodel'], $user_apis);
	unset($user_apis[$key]);
	$user_apis = serialize($user_apis);
	$delapi = $bdd->prepare("UPDATE users SET api_numbers=? WHERE id=?");
	$delapi->bindParam(1, $user_apis);
	$delapi->bindParam(2, $_SESSION['id']);
	$delapi->execute();
}

echo "
<script>
	var user_apis = ".json_encode($user_apis)."
</script>
";

$user_apis = array();
$getuserapi = $bdd->prepare("SELECT api_numbers FROM users WHERE id = ?");
$getuserapi->bindParam(1, $_SESSION['id']);
$getuserapi->execute();
$gettedapis = $getuserapi->fetch();
$gettedapis = unserialize($gettedapis[0]);

echo "
<script>
	var user_articles = ".json_encode($user_apis)."
</script>
";
