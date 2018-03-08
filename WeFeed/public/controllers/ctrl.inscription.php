<?php

if(isset($_POST['form_inscription'])) {
  $pseudo = htmlspecialchars($_POST['pseudo']);
  $mail1 = htmlspecialchars($_POST['mail1']);
  $mail2 = htmlspecialchars($_POST['mail2']);
  $mdp1 = sha1($_POST['mdp1']);
  $mdp2 = sha1($_POST['mdp2']);

  if( !empty($_POST['pseudo']) AND !empty($_POST['mail1']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp1']) AND !empty($_POST['mdp2'])) {
    $pseudolength = strlen($pseudo);
    if($pseudolength <= 255) {
      if($mail1 == $mail2) {
        if(filter_var($mail1, FILTER_VALIDATE_EMAIL)) {

          $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
          $reqmail->execute(array($mail1));
          $mailexist = $reqmail->rowCount();

          if($mailexist == 0 ) {
            if($mdp1 == $mdp2) {

              $inserttmbr = $bdd->prepare('INSERT INTO users(pseudo, mail, mdp) VALUES(?,?,?)');
              $inserttmbr->bindParam(1, $pseudo);
              $inserttmbr->bindParam(2, $mail1);
							$inserttmbr->bindParam(3, $mdp1);

              $inserttmbr->execute();

              header('Location: index.php?req=dashboard');
            } else {
              $message = "Vos mdp ne correspondent pas" ;
            }
          } else {
            $message = "Ce mail est déjà utilisé" ;
          }
        } else {
          $message = "Votre adresse mail n'est pas valide" ;
        }
      } else {
        $message = "Les mails ne correspondent pas" ;
      }
    } else {
      $message = "Le pseudo ne doit pas dépasser les 255 caarctères" ;
    }
  } else {
    $message = "Tous les champs doivent être complétés" ;
  }
}

require "views/view.inscription.php";

?>
