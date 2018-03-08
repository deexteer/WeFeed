<?php

if(isset($_POST['form_connexion'])) {
  $mailconnect = htmlspecialchars($_POST['mailconnect']);
  $mdpconnect = sha1($_POST['mdpconnect']);

  if( !(count(array_filter($_POST))!=count($_POST))) {

    $requser = $bdd->prepare("SELECT * FROM users WHERE mail = ? AND mdp = ?");
    $requser->execute(array($mailconnect, $mdpconnect));
    $userexist = $requser->rowCount();
    if($userexist == 1) {
      $_SESSION = $requser->fetch();
      header("Location: userhome");
    } else {
      $message = "Mail ou Mot de passe incorrect";
    }
  } else {
    $message = "Tous les champs doivent être complétés !" ;
  }
}

require "views/view.connexion.php";
require 'views/view.footer.php';

?>
