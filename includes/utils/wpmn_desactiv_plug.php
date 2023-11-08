<?php
    require_once(WPMN_DIR . "includes/utils/wpmn_new_page.php");
    //Fonction Désactivation Hook
    function wpmn_desactiv_plugin(){
        //ID page à supprimer
        $page_id = get_option('plugin_formulaire_page_id');

        //Supprimer si ID valid
        if($page_id){
            wp_delete_post($page_id, true);
        }

        //Surprimer option plugin
        delete_option('plugin_formulaire_page_id');
    }
?>