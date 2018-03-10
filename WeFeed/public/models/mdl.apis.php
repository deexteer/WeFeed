<?php

$req = $bdd->prepare("SELECT * FROM sources");
$req->execute();

$result = $req->fetchAll(PDO::FETCH_ASSOC);

?>
