<?php

$req = $bdd->prepare("SELECT * FROM bookmarks");
$req->execute();
$result_bookmarks = $req->fetchAll(PDO::FETCH_ASSOC);

echo "
<script>
	var favorites_apis = ".json_encode($result_bookmarks)."
</script>
";

 ?>
