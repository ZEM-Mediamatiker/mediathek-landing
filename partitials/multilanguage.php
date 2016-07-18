<?php
session_start();
header('Cache-control: private'); // IE 6 FIX

if(isSet($_GET['lang']))
{
$lang = $_GET['lang'];

//register the session and set the cookie
$_SESSION['lang'] = $lang;

setcookie("lang", $lang, time() + (3600 * 24 * 30));
}
else if(isSet($_SESSION['lang']))
{
$lang = $_SESSION['lang'];
}
else if(isSet($_COOKIE['lang']))
{
$lang = $_COOKIE['lang'];
}
else
{
$lang = 'de';
}

switch ($lang) {
  case 'de':
  $lang_file = 'lang.de.php';
  break;

  case 'fr':
  $lang_file = 'lang.fr.php';
  break;
        
case 'it':
  $lang_file = 'lang.it.php';
  break;
        
    case 'en':
  $lang_file = 'lang.en.php';
  break;

  default:
  $lang_file = 'lang.de.php';

}

include_once 'languages/'.$lang_file;
?>