# nvDomainSettings-AddOn für REDAXO 5

Redaxo 5 Addon zum Verwalten von zusätzlichen Informationen je Domain

Das Addon installiert die YFORM-Tabelle "nv_domainsettings". 
In dieser Tabelle kann eine Domain verknüpft werden. 
Die Tabelle kann um beliebige Felder ergänzt werden.

Aufruf im Frontend: 

<code>
nvDomainSettings::getValue($key)
</code>

$key = Spaltenname in der Tabelle