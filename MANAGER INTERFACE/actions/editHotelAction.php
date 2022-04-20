<?php

require('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs sont remplis
    if(!empty($_POST['chambre_title']) AND !empty($_POST['chambre_description']) AND !empty($_POST['chambre_price']) AND !empty($_POST['chambre_link'])){

        //Les données à faire passer dans la requête
        $new_room_title = htmlspecialchars($_POST['chambre_title']);
        $new_room_description = nl2br(htmlspecialchars($_POST['chambre_description']));
        $new_room_price =nl2br(htmlspecialchars($_POST['chambre_price']));
        $new_room_link = nl2br(htmlspecialchars($_POST['chambre_link']));
        
        //Modifier les informations de la suite qui possède l'id rentré en paramètre dans l'URL
        $editRoomOnWebsite = $bdd->prepare('UPDATE chambre SET chambre_title = ?, chambre_description = ?, chambre_price = ?, chambre_link = ?');
        $editRoomOnWebsite->execute(array($new_room_title, $new_room_description, $new_room_price, $new_room_link, $idOfRoom));

        //Redirection vers la page d'affichage des hotels de l'utilisateur
        header('Location: indexHotels.php');

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}