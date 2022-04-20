<?php

require('actions/database.php');

//Valider le formulaire
if(isset($_POST['validate'])){

    //Vérifier si les champs ne sont pas vides
    if(!empty($_POST['manager_name']) AND !empty($_POST['manager_surname']) AND !empty($_POST['manager_password']) AND !empty($_POST['manager_mail'])){
        
        //Les données du manager
        $manager_name = htmlspecialchars($_POST['manager_name']);
        $manager_surname = htmlspecialchars($_POST['manager_surname']);
        $manager_mail = htmlspecialchars($_POST['manager_mail']);
        $manager_password = password_hash($_POST['manager_password'], PASSWORD_DEFAULT);

        //Insérer le manager dans la BDD
        $insertManagerOnWebsite = $bdd->prepare('INSERT INTO manager(manager_name, manager_surname, manager_mail, manager_password) VALUES(?, ?, ?, ?)');
        $insertManagerOnWebsite->execute(
            array(
                $manager_name,
                $manager_surname,
                $manager_mail,
                $manager_password,
            )
        );
        
        $successMsg = "Votre manager a bien été publié sur le site.";
        
    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}