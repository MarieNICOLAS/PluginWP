<?php
/*
    Plugin Name: Plugin Formulaire
    Plugin URI: http://wordpress_6_3_1.acme.com
    Description: Formulaire de contact
    Author: Myo
    Author URI: http://wordpress_6_3_1.acme.com
    @package Plugin Formulaire
    @version 1.0.0
*/

    defined("WPMN_DIR") or define("WPMN_DIR", ABSPATH."wp-content/plugins/pluginform/");

    //activation plugin
    require_once(WPMN_DIR."includes/utils/wpmn_activ_plug.php");
    register_activation_hook(__FILE__, 'wpmn_activ_plugin');


    //Afficher le formulaire
    require_once(WPMN_DIR."includes/utils/wpmn_form.php");
    wpmn_formulaire();

    require_once(WPMN_DIR."includes/utils/wpmn_desactiv_plug.php");
    register_deactivation_hook(__FILE__, 'wpmn_desactiv_plugin');
    
    
?> 