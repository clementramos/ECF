<?php

require('actions/database.php');

//Valider le formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs ne sont pas vides
    if(!empty($_POST['etablissement_title']) AND !empty($_POST['etablissement_description']) AND !empty($_POST['etablissement_city'])){
        
        //Les données de l'hôtel
        $hotel_title = htmlspecialchars($_POST['etablissement_title']);
        $hotel_description = nl2br(htmlspecialchars($_POST['etablissement_description']));
        $hotel_content = nl2br(htmlspecialchars($_POST['etablissement_city']));
        //$hotel_date = date('d/m/Y');
        //$hotel_id_author = $_SESSION['id'];
        //$hotel_pseudo_author = $_SESSION['pseudo'];

        //Insérer l'hotel dans l'hotel
        $insertHotelOnWebsite = $bdd->prepare('INSERT INTO etablissements(etablissement_title, etablissement_description, etablissement_city)VALUES(?, ?, ?)');
        $insertHotelOnWebsite->execute(
            array(
                $hotel_title, 
                $hotel_description, 
                $hotel_content, 
            )
        );
        
        $successMsg = "Votre Hôtel a bien été publié sur le site, cliquez <a href='#'> ici </a> pour y accèder.";
        
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}