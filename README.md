login_info
==========

Roundcube Webmail Login Info

Plugin to show additional text/info on the login screen.

Download and install via http://plugins.roundcube.net

Configuration Options
---------------------

Set the following options directly in Roundcube's main config file or via 
[host-specific](http://trac.roundcube.net/wiki/Howto_Config/Multidomains) configurations:

```php
Put your message between the two EOT TAGS:
$config['login_info'] = <<<EOT
Your message here
EOT;

--
Cpmplex example:
$config['login_info'] = <<<EOT
<div id="own_email_logo" style="position:absolute;top:7%;margin-left:42%;"><img style="align:center;" src="plugins/custom_logo/images/plugin_login_info.png" /></div><div id="login_info" style="margin-top:3%;margin-left:auto;margin-right:auto;width:380px;border-radius:10px;padding:10px;-moz-border-radius:10px;background-color:lightgrey;text-align:center;color:red;">
BITTE INSTALLIEREN SIE DAS NEUE CLASS 3 ZERTIFIKAT (siehe Punkt 2 unten) in Vertrauenswürdige Stammzertifikatstellen!
Aus Sicherheitsgründen ist ab hier nur noch der https (gesicherter) Zugang möglich.<br>
Sollte Ihr Browser <b>vorher</b> einen Fehler oder eine Warnung vor dieser Seite angezeigt 
haben, klicken Sie bitte einmalig vor dem Einloggen auf die zwei folgenden Links und 
installieren die beiden Zertifikate von <a title="Root Zertifikate von CAcert" href="http://www.cacert.org/index.php?id=3" target="cacert"><img src="plugins/login_info/CAcert-ssl-security.png" alt="www.cacert.org" style="vertical-align:text-bottom;border-width:0px;" /></a><br>
<ol>
<li><a href="http://www.cacert.org/certs/root.crt" target="cacert" title="get CAcert root Class 1 PKI Key">CAcert Root Zertifikat (Class 1 PKI Key)</a></li>
<li><a href="http://www.cacert.org/certs/class3.crt" target="cacert" title="get CAcert Intermedite Class 3 PKI Key">CAcert Root Zertifikat (Class 3 PKI Key)</a></li>
</ol>
Für Mailclients, z.B. Thunderbird, speichern Sie die Zertifikate hier (rechte Maustaste -> Ziel speichern unter...) und importieren Sie diese bei Einstellungen -> Erweitert -> Zertifikate -> Zertifikate -> Zertifizierungsstellen.<br>
<a style="color:grey;" href="http://www.std-soft.com/Neubauer-short.pdf" title="IT, Consultation, Hosting, Security, Development, Support" target="STD">A service brought to you by Markus Neubauer</a>
</div>
EOT;
