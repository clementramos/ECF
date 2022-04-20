<?php

require('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs sont remplis
    if(!empty($_POST['manager_name']) AND !empty($_POST['manager_surname']) AND !empty($_POST['manager_mail']) AND!empty($_POST['manager_password'])){

        //Les données à faire passer dans la requête
        $new_manager_name = htmlspecialchars($_POST['manager_name']);
        $new_manager_surname = nl2br(htmlspecialchars($_POST['manager_surname']));
        $new_manager_mail =nl2br(htmlspecialchars($_POST['manager_mail']));
        $new_manager_password = nl2br(htmlspecialchars($_POST['manager_password']));
        
        //Modifier les informations du manager qui possède l'id rentré en paramètre dans l'URL
        $editManagerOnWebsite = $bdd->prepare('UPDATE manager SET manager_name = ?, manager_surname = ?, manager_mail = ?, manager_password = ? WHERE manager_ID = ?');
        $editManagerOnWebsite->execute(array($new_manager_name, $new_manager_surname, $new_manager_mail, $new_manager_password, $idOfManager));

        //Redirection vers la page d'affichage des hotels de l'utilisateur
        header('Location: indexManager.php');

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}