<?php
session_start();
require('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['name']) AND !empty($_POST['password'])){
        
        //Les données de l'user
        $user_id = htmlspecialchars($_POST['name']);
        $user_password = htmlspecialchars($_POST['password']);
        
        //$password = $_POST['password'];
        //$user_password = password_hash($password, PASSWORD_DEFAULT);
        
        //$user_password = htmlspecialchars($_POST['password']);

        //Vérifier si l'utilisateur existe (si l'id est correct)
        $checkIfUserExists = $bdd->prepare('SELECT * FROM manager WHERE manager_name = ?');
        $checkIfUserExists->execute(array($user_id));

        if($checkIfUserExists->rowCount() > 0){
            
            //Récupérer les données de l'utilisateur
            $usersInfos = $checkIfUserExists->fetch();

            //Vérifier si le mot de passe est correct
            if(password_verify($user_password, $usersInfos['manager_password'])){
            
                //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
                $_SESSION['auth'] = true;
                $_SESSION['id'] = $usersInfos['id'];
                $_SESSION['lastname'] = $usersInfos['nom'];
                $_SESSION['firstname'] = $usersInfos['prenom'];
                $_SESSION['mail'] = $usersInfos['mail'];

                //Rediriger l'utilisateur vers la page d'accueil
                header('Location: managerIndex.php');
    
            }else{
                $errorMsg = "Votre mot de passe est incorrect...";
            }

        }else{
            $errorMsg = "Votre ID est incorrect...";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}