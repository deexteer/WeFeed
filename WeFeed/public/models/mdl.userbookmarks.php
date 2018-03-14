<?php

$req = $bdd->prepare("SELECT * FROM bookmarks WHERE user_id= ?");
$req->bindParam(1, $_SESSION['id']);
$req->execute();
$result_userbookmarks = $req->fetchAll(PDO::FETCH_ASSOC);

echo "
<script>
	var userfavorites_apis = ".json_encode($result_userbookmarks)."
</script>
";

 ?>
