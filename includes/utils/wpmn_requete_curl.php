<?php
    //Appel requete curl
    require_once('wpmn_form.php');
    //Récupération des données POST du formulaire
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];

    //URL pour envoyer vers un autre environnement
    $url = 'http://wordpress_6_3_1.acme.com/wpmn_curl.html';

    //Données à envoyer
    $data = array(
        'nom' => $nom,
        'mail' => $mail
    );

    var_dump($data);

    //Initialisation de cURL
    $ch = curl_init($url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //variable de la requete stocker ds la variable reponse à affihcier ensuite
                curl_setopt($ch, CURLOPT_POST, true); //iniquer d'effectuer une requette HTTP POST
                curl_setopt($ch, CURLOPT_POSTFIELDS, $data); // Inclure les données définies dans $ata - envoie les données en tant que corps de la requete HTTP POST
    
                $response = curl_exec($ch); //exécuteer la requte et stocker la réponse dans $reponse
                var_dump($reponse);

                if (curl_errno($ch)) {
                    echo 'Erreur cURL : ' . curl_error($ch);
                } else {
                    echo 'Réponse : ' . $response;
                }
                
                curl_close($ch); //fermer la session pour libérer les ressources
    
                // Traitez la réponse de la requête cURL comme nécessaire
    
                echo "Vos informations ont été enregistrées et la requête cURL a été envoyée vers l'autre environnement.";
                

?>