<?php

require('actions/database.php');
//Valider le formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs ne sont pas vides
    if(!empty($_POST['chambre_title']) AND !empty($_POST['chambre_description']) AND !empty($_POST['chambre_price'])){
        
        //Les données de l'hôtel
        $room_title = htmlspecialchars($_POST['chambre_title']);
        $room_description = nl2br(htmlspecialchars($_POST['chambre_description']));
        $room_price = nl2br(htmlspecialchars($_POST['chambre_price']));
        $room_link = nl2br(htmlspecialchars($_POST['chambre_lien']));


        //Insérer dans l'hotel
        $insertRoomOnWebsite = $bdd->prepare('INSERT INTO chambre(chambre_title, chambre_description, chambre_price, chambre_lien) VALUES(?, ?, ?, ?)');
        $insertRoomOnWebsite->execute(
            array(
                $room_title, 
                $room_description, 
                $room_price,
                $room_link,
            )
        );
        
        $successMsg = "Votre suite a bien été publié sur le site.";
        
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}
