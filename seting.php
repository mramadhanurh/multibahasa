<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING)); 
session_start();
header('Cache-control: private');
// IE 6 FIX
if (isSet($_GET['lang'])) {
	$lang = $_GET['lang'];

	// register the session and set the cookie
	$_SESSION['lang'] = $lang;

	setcookie("lang", $lang, time() + (3600 * 24 * 30));
} else if (isSet($_SESSION['lang'])) {
	$lang = $_SESSION['lang'];
} else if (isSet($_COOKIE['lang'])) {
	$lang = $_COOKIE['lang'];
} else {
	$lang = 'id';
}

switch ($lang) {
	case 'jp' :
		$lang_file = 'lang.jp.php';
		break;
		case 'ar' :
		$lang_file = 'lang.ar.php';
		break;
	case 'id' :
		$lang_file = 'lang.id.php';
		break;

	default :
		$lang_file = 'lang.id.php';
}

include_once 'bahasa/' . $lang_file;
?>