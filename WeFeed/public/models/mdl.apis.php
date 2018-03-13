<?php

$req = $bdd->prepare("SELECT * FROM sources");
$req->execute();
$result = $req->fetchAll(PDO::FETCH_ASSOC);

echo "
<script>
	var all_apis = ".json_encode($result)."
</script>
";

if(isset($_POST["search"])){
	echo "
	<script>
		var search_request = '".$_POST["search"]."'
	</script>
	";
}

?>
