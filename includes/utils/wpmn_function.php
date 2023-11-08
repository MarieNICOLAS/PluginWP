<?php
    //Fonction d'action
    function wpmn_send_mail($nom, $mail){
        $user_mail = '$mail';
        mail($user_mail, $nom);
    }

?>