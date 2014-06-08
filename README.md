login_info
==========

Roundcube Webmail Login Info

Plugin to show additional text/info on the login screen.

Download and install via http://plugins.roundcube.net

Configuration Options
---------------------

Set the following options directly in Roundcube's main config file or via 
[host-specific](http://trac.roundcube.net/wiki/Howto_Config/Multidomains) configurations:


Configuration in config.inc.php
```php
$rcmail_config['custom_login_info'] = '<img style="align:center;" src="plugins/login_info/images/plugin_login_info.png" />';

// used as bottom line below message
// set to false if not used
$rcmail_config['custom_login_bottomline'] = '<a style="color:grey;" href="http://www.your-dmain.world">This service is managed by YOU</a>';

```

If you are using localization support remove config.inc.php and do your changes in

localization/your_LANG.inc    # see examples as de_DE.inc.dist
