<?php

$req = $bdd->prepare("SELECT * FROM sources");
$req->execute();
$result_sources = $req->fetchAll(PDO::FETCH_ASSOC);

echo "
<script>
	var all_apis = ".json_encode($result_sources)."
</script>
";


//

//
if(isset($_POST["search"])){
	echo "
	<script>
		var search_request = '".$_POST["search"]."'
	</script>
	";
} else {
	echo "
	<script>
		var search_request = 0 ;
	</script>
	";
}

?>
