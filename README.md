IP
==

Speichere IP, Host, User-Agent mit einem Link zum Wiederaufruf

Installation
===

Hochladen und /config/Datenbank_Beispiel.php öffnen.
Datenbankzugangsdaten eintragen und die Datei umbenennen in Datenbank.php

Zum Datenbankstruktur anlegen in der index.php nach
"R::freeze(true);" suchen und auf "R::freeze(false);" ändern, danach die Datei ausführen. RedbeanPHP kümmert sich darum.
Danach für eine bessere Performance wieder zurückändern.

Zum Datenbank löschen in der Zeile darüber das "//R::nuke();" durch Entfernen der // entkommentieren. Datei ausführen.

Das war es schon.

Macht damit was ihr wollt, solange ihr die Lizenzen der benutzten Softwares nicht verletzt (Boilerplate, Bootstrap, Smarty, RedbeanPHP) und das Impressum auf eures ändert.
