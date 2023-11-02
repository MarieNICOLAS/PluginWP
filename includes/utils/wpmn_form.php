<?php
    //Fonction qui affiche le formulaire
    function wpmn_formulaire() {
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
        echo $formulaire;
    }

?>