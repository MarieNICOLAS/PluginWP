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
    register_activation_hook(__FILE__, 'wpmn_activation_plugin');
    
    //Vérifier que les valeurs ont été soumises
    if(isset($_POST['nom']) && isset($_POST['mail'])){
        //Récupérer valeurs soumises
        $nom = sanitize_text_field($_POST['nom']);
        $mail = sanitize_email($_POST['mail']);

        //Ajout valeurs au tableau
        $data_table[] = array(
            'nom' => $nom,
            'mail'=> $mail
        );
    }

    //Afficher le formulaire
    wpmn_activ_plugin();

    //Vérifier que les données ont été soumises
    if(isset($data_table)){
        echo "Données soumises <br>";
        echo '<ul>';
        foreach($data_table as $record){
            echo '<li>Nom : ' . $record['nom'] . '<br>Mail : ' . $record['mail'] . '</li>'; 
        }
        echo '</ul>';
    } else {
        echo "Aucune donnée soumise.";
    }
    
    
    exit;
    


    

?> 