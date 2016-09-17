<?php

/**
 * login_info.php 
 *
 * Plugin to add a customized info to the login screen
 *
 * @version 1.5
 * @author Markus Neubauer
 * @http://www.std-soft.com/index.php/hm-service/81-c-std-service-code/2-text-auf-der-login-seite-einblenden
 * @example: https://www.std-soft.de/webmail (in production)
 * @Merged: 2 pull requests from Adam Daniels (2016-09-17)
 */
class login_info extends rcube_plugin
{
    // only task 'login'
    public $task = 'login';
    // we've got no ajax handlers
    public $noajax = true;
    // skip frames
    public $noframe = true;

    private $login_info_before = false;
    private $login_info_after = false;
    private $bottomline = false;
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

                if ( $rcmail->config->get('custom_login_info_localization') ) {
                        $login_info_before = $this->gettext('custom_login_info_before');
                        $login_info_after = $this->gettext('custom_login_info_after');
                        $bottomline = $this->gettext('custom_login_bottomline');

                } else {
                    if ( $rcmail->config->get('custom_login_info_before') ) 
                        $login_info_before = $rcmail->config->get('custom_login_info_before');
                    if ( $rcmail->config->get('custom_login_info_after') ) 
                        $login_info_after = $rcmail->config->get('custom_login_info_after');
                    if ( $rcmail->config->get('custom_login_bottomline') ) 
                        $bottomline = $rcmail->config->get('custom_login_bottomline');
                }
                
                // use exitings id's message and bottomline
                if ( !empty($login_info_before) || !empty($login_info_after) || !empty($bottomline) ) {
                    $addstr  = '<script type="text/javascript">';
                    $addstr .= "\n".'/* <![CDATA[ */'."\n";
                    if (!empty($login_info_before) ) $addstr .= 'var login_info_before='.json_encode($login_info_before).';';
                    if (!empty($login_info_after) ) $addstr .= 'var login_info_after='.json_encode($login_info_after).';';
                    if (!empty($bottomline) ) $addstr .= 'var bottomline='.json_encode($bottomline).';';
                    $addstr .= "\n".'/* ]]> */'."\n";
                    $addstr .= '</script>'."\n".'<script type="text/javascript" src="plugins/login_info/login_info.js"></script>';
                    $rcmail->output->add_footer( $addstr );
                }

                return $arg;
        }
}

?>
