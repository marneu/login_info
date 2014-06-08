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

    private $login_info = '';
    private $bottomline = '';
    private $addstr = '';
                        
        function init()
        {
                $this->add_texts ('localization', false);
                $this->add_hook('template_object_loginform', array($this, 'add_login_info'));
        }

        public function add_login_info($arg)
        {
                $rcmail = rcube::get_instance();
                $this->load_config();

                // order: 1st config.inc.php then localization
                if ( $rcmail->config->get('custom_login_info') ) 
                        $login_info = $rcmail->config->get('custom_login_info');
                elseif ( $this->gettext('custom_login_info') ) {
                        $login_info = $this->gettext('custom_login_info');
                }

                // order: 1st config.inc.php then localization
                if ( $rcmail->config->get('custom_login_bottomline') ) 
                        $bottomline = $rcmail->config->get('custom_login_bottomline');
                elseif ( $this->gettext('custom_login_bottomline') ) {
                        $bottomline = $this->gettext('custom_login_bottomline');
                }
                
                // use exitings id's message and bottomline
                if ( !empty($login_info) || !empty($bottomline) ) {
                    $addstr = '<script type="text/javascript">';
                    if (!empty($login_info) ) $addstr .= 'document.getElementById("message").innerHTML = \''.$login_info.'\';';
                        
                    if (!empty($bottomline) ) $addstr .= 'document.getElementById("bottomline").innerHTML = \''.$bottomline.'\';';
                    $addstr .= '</script>';
                    $rcmail->output->add_footer( $addstr );
                }

                return $arg;
        }
}

?>
