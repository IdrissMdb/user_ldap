<?php $TRANSLATIONS = array(
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Warnung:</b> Die Apps user_ldap und user_webdavauth sind nicht kompatible. Unerwartetes Verhalten kann auftreten. Bitte Deinen System-Verwalter eine von beiden zu de-aktivieren.",
"Host" => "Host",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Du kannst das Protokoll auslassen, außer wenn Du SSL benötigst. Beginne dann mit ldaps://",
"Base DN" => "Basis-DN",
"You can specify Base DN for users and groups in the Advanced tab" => "Du kannst Basis-DN für Benutzer und Gruppen in dem \"Erweitert\"-Reiter konfigurieren",
"User DN" => "Benutzer-DN",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "Der DN des Benutzers für LDAP-Bind, z.B.: uid=agent,dc=example,dc=com. Für anonymen Zugriff lasse DN und Passwort leer.",
"Password" => "Passwort",
"For anonymous access, leave DN and Password empty." => "Lasse die Felder von DN und Passwort für anonymen Zugang leer.",
"User Login Filter" => "Benutzer-Login-Filter",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Bestimmt den angewendeten Filter, wenn eine Anmeldung versucht wird. %%uid ersetzt den Benutzernamen bei dem Anmeldeversuch.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "verwende %%uid Platzhalter, z. B. \"uid=%%uid\"",
"User List Filter" => "Benutzer-Filter-Liste",
"Defines the filter to apply, when retrieving users." => "Definiert den Filter für die Anfrage der Benutzer.",
"without any placeholder, e.g. \"objectClass=person\"." => "ohne Platzhalter, z.B.: \"objectClass=person\"",
"Group Filter" => "Gruppen-Filter",
"Defines the filter to apply, when retrieving groups." => "Definiert den Filter für die Anfrage der Gruppen.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "ohne Platzhalter, z.B.: \"objectClass=posixGroup\"",
"Port" => "Port",
"Base User Tree" => "Basis-Benutzerbaum",
"Base Group Tree" => "Basis-Gruppenbaum",
"Group-Member association" => "Assoziation zwischen Gruppe und Benutzer",
"Use TLS" => "Nutze TLS",
"Do not use it for SSL connections, it will fail." => "Verwende dies nicht für SSL-Verbindungen, es wird fehlschlagen.",
"Case insensitve LDAP server (Windows)" => "LDAP-Server (Windows: Groß- und Kleinschreibung bleibt unbeachtet)",
"Turn off SSL certificate validation." => "Schalte die SSL-Zertifikatsprüfung aus.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Falls die Verbindung es erfordert, muss das SSL-Zertifikat des LDAP-Server importiert werden.",
"Not recommended, use for testing only." => "Nicht empfohlen, nur zu Testzwecken.",
"User Display Name Field" => "Feld für den Anzeigenamen des Benutzers",
"The LDAP attribute to use to generate the user`s ownCloud name." => "Das LDAP-Attribut für die Generierung des Benutzernamens in ownCloud. ",
"Group Display Name Field" => "Feld für den Anzeigenamen der Gruppe",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "Das LDAP-Attribut für die Generierung des Gruppennamens in ownCloud. ",
"in bytes" => "in Bytes",
"in seconds. A change empties the cache." => "in Sekunden. Eine Änderung leert den Cache.",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Ohne Eingabe wird der Benutzername (Standard) verwendet. Anderenfall trage ein LDAP/AD-Attribut ein.",
"Help" => "Hilfe"
);
