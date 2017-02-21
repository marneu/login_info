login_info
==========

Roundcube Webmail Login Info 1.5.1

Plugin to show additional text/info on the login screen.

Download and install via http://plugins.roundcube.net

1.5.1: Fixed undefined vars in js

Configuration Options
---------------------

Set the following options directly in Roundcube's main config file or via 
[host-specific](http://trac.roundcube.net/wiki/Howto_Config/Multidomains) configurations:


Configuration in config.inc.php
```php

// use localization ? true/false => see examples in dir localization
$rcmail_config['custom_login_info_localization'] = false;

// put your message before and/or after the login form
// set to false if not used
$rcmail_config['custom_login_info_before'] = '<img style="display:block;margin-left:auto;margin-right:auto;" src="plugins/login_info/media/plugin_login_info.png" />';
$rcmail_config['custom_login_info_after'] = false;

// used as bottom line below message
// set to false if not used
//$rcmail_config['custom_login_bottomline'] = '<a style="color:grey;" href="http://www.your-dmain.world">This service is managed by YOU</a>';
$rcmail_config['custom_login_bottomline'] = false;
```

If you are using localization support remove config.inc.php and do your changes only in

localization/your_LANG.inc    # see examples as de_DE.inc.dist
