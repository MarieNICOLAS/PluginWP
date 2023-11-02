<?php
    //Fonction qui affiche le formulaire
    function wpmn_formulaire() {
        //Classe wpdb pour communiquer avec table 
        global $wpdb;

        //Affichage du formulaire de contact
        $formulaire = '
        <form method="post" action="">
            <label for="nom">Nom :</label>
            <input type="text" name="nom"><br>

            <label for="mail">Mail :</label>
            <input type="email" name="mail"><br>

            <input type="submit" value="Valider">
        </form>
        ';

        //Afficher le formulaire
        echo "$formulaire";


        //Méthode POST : vérifier la soumission du formulaire
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $nom = sanitize_text_field($_POST['nom']);
            $mail = sanitize_email($_POST['mail']);

            //Enregistrement des données du formulaire dans la DB 
            $table_name = $wpdb->prefix . 'user_contact';

            $wpdb->insert(
                $table_name,

                //Tableau des valeurs à insérer
                array(
                    'nom'=>$nom,
                    'mail'=>$mail
                )
            );
            echo "Vos informations ont été enregistrées!";

        }
    }
    

?>