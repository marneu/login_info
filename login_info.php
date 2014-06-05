<?php

/**
 * login_info.php 
 *
 * Plugin to add a customized info to the login screen
 *
 * @version 1.3
 * @author Markus Neubauer
 * @http://www.std-soft.com/index.php/hm-service/81-c-std-service-code/2-text-auf-der-login-seite-einblenden
 * @example: https://www.std-soft.de/webmail (in production)
 */
class login_info extends rcube_plugin
{
    // only task 'login'
    public $task = 'login';
    // we've got no ajax handlers
    public $noajax = true;
    // skip frames
    public $noframe = true;
    private $rcmail;
                        
        function init()
        {
                $this->rcmail = rcube::get_instance();
                $this->load_config();
                $this->add_texts ('localization', false);
                $this->add_hook('template_object_loginform', array($this, 'add_login_info'));
        }

        public function add_login_info($arg)
        {
                if ( $this->gettext('custom_login_info') )
                        $rcmail->output->add_footer( $this->gettext('custom_login_info') )
                elseif ( $rcmail->config->get('login_info') ) 
                        $rcmail->output->add_footer( $rcmail->config->get('login_info') );

                return $arg;
        }
}

?>
