<?php

/* 
 * Zeige und speichere die Daten des Aufrufenden
 * @author Mainboarder.de
 * @date 01.04.2014
 */
// Nimm dir was du brauchst
require 'libs/Smarty.class.php';
require 'libs/R.class.php';
require 'config/Datenbank.php';

// Eine Runde Instanziieren
$smarty = new Smarty();
R::setup('mysql:host=' . HOST . ';dbname=' . DATENBANK, NUTZER, PASSWORT);
//R::nuke();
R::freeze(true);

// Eigene Daten
if(!isset($_GET['browser'])){
	$userAgent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT',
			FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	$ip = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_SANITIZE_STRING);
	$host = gethostbyaddr($ip);
	$browserId = substr(sha1($ip.time()), 0, 4);
	
	// Datenbankaktionen
	$db = R::dispense('browser');
	$db->useragent = $userAgent;
	$db->ip = $ip;
	$db->host = $host;
	$db->browserid = $browserId;
	R::store($db);
	
	$smarty->assign('link', $browserId);
	
// Fremde Daten
}else{
	$browser = R::findLast('browser', 'browserid = ?',
			array(filter_input(INPUT_GET, 'browser', FILTER_SANITIZE_STRING)));
	
	// Kamen Daten zurück?
	if(is_object($browser)){
		// mach aus dem Objekt ein Array
		$browser = $browser->export();

		$userAgent = $browser['useragent'];
		$ip = $browser['ip'];
		$host = $browser['host'];
		$smarty->assign('cache', 'cached');
	}else{
		$smarty->assign('cache', 'unknown');
	}
}

$smarty->assign('ip', $ip);
$smarty->assign('useragent', $userAgent);
$smarty->assign('host', $host);

// Auf auf ins Verderben!
$smarty->display('templates/index.tpl');
