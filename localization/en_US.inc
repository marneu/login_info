<?php

$labels = array ();
$labels['custom_login_info'] = <<<EOT
<div id="own_email_logo" style="position:absolute;top:7%;margin-left:42%;"><img style="align:center;" src="plugins/custom_logo/images/plugin_login_info.png" /></div><div id="login_info" style="margin-top:3%;margin-left:auto;margin-right:auto;width:380px;border-radius:10px;padding:10px;-moz-border-radius:10px;background-color:lightgrey;text-align:center;color:red;">
THIS IS YOUR ENGLISH MESSAGE HERE, SEE A COMPLEX EXAMPLE at localization/de_DE.inc
PLEASE INSTALL CAcert CLASS 3 CERTIFICATE (see entry 2 below)!
For security reasons only https access is allowed.<br>
and so on ...
Install both certificates from <a title="Root certificate from CAcert" href="http://www.cacert.org/index.php?id=3" target="cacert"><img src="plugins/login_info/CAcert-ssl-security.png" alt="www.cacert.org" style="vertical-align:text-bottom;border-width:0px;" /></a><br>
<ol>
<li><a href="http://www.cacert.org/certs/root.crt" target="cacert" title="get CAcert root Class 1 PKI Key">CAcert Root Zertifikat (Class 1 PKI Key)</a></li>
<li><a href="http://www.cacert.org/certs/class3.crt" target="cacert" title="get CAcert Intermedite Class 3 PKI Key">CAcert Root Zertifikat (Class 3 PKI Key)</a></li>
</ol>
<a style="color:grey;" href="http://www.std-soft.com/Neubauer-short.pdf" title="IT, Consultation, Hosting, Security, Development, Support" target="STD">A service brought to you by Markus Neubauer</a>
</div>
EOT;
?>
