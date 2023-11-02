<?php

/**
 * @package Plugin Formulaire
 * @version 1.0.0
 */
/*
    Plugin Name: Plugin Formulaire
    Plugin URI: http://wordpress_6_3_1.acme.com
    Description: Formulaire de contact
    Author: Myo
    Author URI: http://wordpress_6_3_1.acme.com
*/

    defined("WPMN_DIR") or define("WPMN_DIR", ABSPATH."wp-content/plugins/pluginform/");

    //activation plugin
    require_once(WPMN_DIR."includes/utils/wpmn_activ_plug.php");
    register_activation_hook(__FILE__, 'wpmn_activ_plugin');

    echo "Plugin activé";

    // require_once(WPMN_DIR. "includes\utils\wpmn_new_page.php");
    // wpmn_create_new_page();
    // echo "Nouvelle page créée";
    // exit;
    //Afficher le formulaire
    require_once(WPMN_DIR."includes/utils/wpmn_form.php");
    wpmn_formulaire();

    
    
    
?> 