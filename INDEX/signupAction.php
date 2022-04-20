<?php
session_start();
require('database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['mail']) AND !empty($_POST['lastname']) AND !empty($_POST['firstname']) AND !empty($_POST['password'])){
        
        //Les données de l'user
        $client_mail = htmlspecialchars($_POST['mail']);
        $client_lastname = htmlspecialchars($_POST['lastname']);
        $client_firstname = htmlspecialchars($_POST['firstname']);
        $client_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //Vérifier si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT client_email FROM clients WHERE client_email = ?');
        $checkIfUserAlreadyExists->execute(array($client_mail));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            
            //Insérer l'utilisateur dans la bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO clients(client_email, client_lastname, client_firstname, client_password)VALUES(?, ?, ?, ?)');
            $insertUserOnWebsite->execute(array($client_mail, $client_lastname, $client_firstname, $client_password));

            //Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT client_email, client_lastname, client_firstname FROM clients WHERE client_firstname = ? AND client_lastname = ? AND client_email = ?');
            $getInfosOfThisUserReq->execute(array($client_mail, $client_lastname, $client_firstname));

            $usersInfos = $getInfosOfThisUserReq->fetch();

            //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['lastname'] = $usersInfos['nom'];
            $_SESSION['firstname'] = $usersInfos['prenom'];
            $_SESSION['mail'] = $usersInfos['mail'];

            //Rediriger l'utilisateur vers la page d'accueil
            header('Location: indexAccount.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}