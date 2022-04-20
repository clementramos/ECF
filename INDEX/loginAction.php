<?php
session_start();
require('database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['mail']) AND !empty($_POST['password'])){
        
        //Les données de l'user
        $user_mail = htmlspecialchars($_POST['mail']);
        $user_password = htmlspecialchars($_POST['password']);

        //Vérifier si l'utilisateur existe (si le mail est correct)
        $checkIfUserExists = $bdd->prepare('SELECT * FROM clients WHERE client_email = ?');
        $checkIfUserExists->execute(array($user_mail));

        if($checkIfUserExists->rowCount() > 0){
            
            //Récupérer les données de l'utilisateur
            $usersInfos = $checkIfUserExists->fetch();

            //Vérifier si le mot de passe est correct
            if(password_verify($user_password, $usersInfos['client_password'])){
            
                //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['lastname'] = $usersInfos['nom'];
                $_SESSION['firstname'] = $usersInfos['client_firstname'];
                $_SESSION['mail'] = $usersInfos['mail'];

                //Rediriger l'utilisateur vers la page d'accueil
                header('Location: indexAccount.php');
    
            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }

        }else{
            $errorMsg = "Votre mail est incorrect...";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}