<?php
    //Fonction de l'activation du plugin
    function wpmn_activ_plugin(){

        //Vérifier si la page statique existe
        $page_id= get_option('plugin_formulairer_page_id');

        if(!$page_id){
            //Créer une page statique si elle n'existe pas 
            //Ajout de pages statique lors de l'installation du plugin
            require_once(WPMN_DIR. "includes/utils/wpmn_new_page.php");
            wpmn_create_new_page();

        }

        


        //Création de la base de données
        require_once(WPMN_DIR. "includes/utils/wpmn_create_db_form.php");
        wpmn_create_db_form();
        echo "database créée";


        //Afficher le formulaire
        require_once(WPMN_DIR."includes/utils/wpmn_form.php");
        wpmn_formulaire();

        
    }
?>