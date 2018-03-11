<?php

$user_apis = array();
$getuserapi = $bdd->prepare("SELECT api_numbers FROM users WHERE id = ?");
$getuserapi->bindParam(1, $_SESSION['id']);
$getuserapi->execute();
$gettedapis = $getuserapi->fetch();
$gettedapis = unserialize($gettedapis[0]);

if(empty($gettedapis)){
	echo "
	<script>
		var user_apis = 0
	</script>
	";
} else {
	foreach ($gettedapis as $key => $value) {
		array_push($user_apis, $value);
	}
}

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
		}
	}
}

echo "
<script>
	var user_apis = ".json_encode($user_apis)."
</script>
";




?>
