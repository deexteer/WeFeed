<?php

require '../mdl.bdd.php';
session_start();

// Ajouter aux favoris
try {
    $addart = $bdd->prepare("INSERT INTO bookmarks(user_id, art_url, art_urlToImage, art_title, art_preview) VALUES (?,?,?,?,?)");
	$addart->bindParam(1, $_SESSION['id']);
	$addart->bindParam(2, $_POST['art_url']);
	$addart->bindParam(3, $_POST['art_urlToImage']);
	$addart->bindParam(4, $_POST['art_title']);
	$addart->bindParam(5, $_POST['art_preview']);
	$addart->execute();

	header('Location: userhome');
} catch (Exception $e) {
    echo 'Exception reçue : ',  $e->getMessage(), "\n";
}
