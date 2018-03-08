<?php

try {
  $bdd = new PDO("mysql:host=localhost;dbname=wefeed", 'root', '');
  $bdd->query("SET NAMES utf8");
  $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("<p> La connexion a échoué.</p>");
}

function changeData ($bdd, $tableToChange, $columnToSet, $dataToChange){
  $changedata = $bdd->prepare('UPDATE '.$tableToChange.' SET '.$columnToSet.' = ? WHERE id = ?');
  $changedata->bindParam(1, $dataToChange);
  $changedata->bindParam(2, $_SESSION['id']);
  $changedata->execute();
}

?>
