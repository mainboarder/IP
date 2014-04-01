<?php

/* 
 * Zeige und speichere die Daten des Aufrufenden
 * @author Mainboarder.de
 * @date 01.04.2014
 */
// Nimm dir was du brauchst
spl_autoload_register(function ($class){
	include 'libs/' . $class . '.class.php';
});

// Eine Runde Instanziieren
$smarty = new Smarty();

$userAgent = filter_input(INPUT_SERVER, 'HTTP_USER_AGENT',
		FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$ip = filter_input(INPUT_SERVER, 'REMOTE_ADDR', FILTER_SANITIZE_STRING);
$host = gethostbyaddr($ip);

$smarty->assign('ip', $ip);
$smarty->assign('useragent', $userAgent);
$smarty->assign('host', $host);

// Auf auf ins Verderben!
$smarty->display('templates/index.tpl');
