<?php

require('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs sont remplis
    if(!empty($_POST['etablissement_id']) AND !empty($_POST['etablissement_description']) AND !empty($_POST['etablissement_city'])){

        //Les données à faire passer dans la requête
        $new_hotel_title = htmlspecialchars($_POST['etablissement_id']);
        $new_hotel_description = nl2br(htmlspecialchars($_POST['etablissement_description']));
        $new_hotel_adress =nl2br(htmlspecialchars($_POST['etablissement_adress']));
        $new_hotel_city = nl2br(htmlspecialchars($_POST['etablissement_city']));
        
        //Modifier les informations de l hotel qui possède l'id rentré en paramètre dans l'URL
        $editHotelOnWebsite = $bdd->prepare('UPDATE etablissements SET etablissement_id = ?, etablissement_description = ?, etablissement_adress = ?, etablissement_city = ? WHERE etablissement_id = ?');
        $editHotelOnWebsite->execute(array($new_hotel_title, $new_hotel_description, $new_hotel_adress, $new_hotel_city, $idOfHotel));

        //Redirection vers la page d'affichage des hotels de l'utilisateur
        header('Location: indexHotels.php');

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}