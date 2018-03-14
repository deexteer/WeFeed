<?php

if(isset($_COOKIE['lang'])) {
    $lang = $_COOKIE['lang'];
} else {
    $lang = 'fr';
	$expire = 365*24*3600;
	setcookie("lang", $lang, time() + $expire);
}

switch($lang) {
    case 'fr':
        include('app/lang/fr-lang.php');
    break;
    case 'en':
        include('app/lang/en-lang.php');
    break;
    case 'bl':
        include('app/lang/bl-lang.php');
    break;
}

if(isset($_POST['lang'])) {
   $lang = $_POST['lang'];
   $expire = 365*24*3600;
   setcookie("lang", $lang, time() + $expire);
}
