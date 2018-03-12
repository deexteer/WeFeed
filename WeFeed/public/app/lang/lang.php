<?php

if(isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];

}else {
    $lang = 'fr';
	$expire = 365*24*3600;
	//Puis on créé le cookie
	setcookie("lang", $lang, time() + $expire);

}

switch($lang) {
    //Si lang=fr on inclut le fichier de langue française
    case 'fr':
        include('app/lang/fr-lang.php');
    break;
    //Si lang=en on inclut le fichier de langue anglaise
    case 'en':
        include('app/lang/en-lang.php');
    break;
}


/*---------------------------*/
if(isset($_POST['lang'])) {

   $lang = $_POST['lang'];

   //même système que tout à l'heure :
   //On définit la durée du cookie (avant son expiration)
   $expire = 365*24*3600;

   //Puis on créé le cookie
   setcookie("lang", $lang, time() + $expire);
   //Puis on redirige vers l'accueil
   header('Location: index.php');

}

// if($lang){
// 	switch($lang) {
// 	    //Si lang=fr on inclut le fichier de langue française
// 	    case 'fr':
// 	        require('fr-lang.php');
// 	    break;
// 	    //Si lang=en on inclut le fichier de langue anglaise
// 	    case 'en':
// 	        require('en-lang.php');
// 	    break;
// 	}
// }
//
// //On vérifie si le cookie existe déjà
// if(isset($HTTP_COOKIE_VARS['lang'])) {
//
//     //Si oui, on créer une variable $lang avec pour valeur celle du cookie.
//     $lang = $HTTP_COOKIE_VARS['lang'];
//
// } else {
//     // si le cookie n'existe pas on tente de reconnaitre la langue par défaut du navigateur utilisé
//     $lang = "fr";
// }









 ?>
