<?php
session_start();
require('actions/database.php');

//Validation du formulaire
if(isset($_POST['validate'])){

    //Vérifier si l'user a bien complété tous les champs
    if(!empty($_POST['id']) AND !empty($_POST['name']) AND !empty($_POST['password'])){
        
        //Les données de l'user
        $admin_id = htmlspecialchars($_POST['id']);
        $admin_name = htmlspecialchars($_POST['lastname']);
        $admin_password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        //Vérifier si l'utilisateur existe déjà sur le site
        $checkIfUserAlreadyExists = $bdd->prepare('SELECT admin_id FROM administrateur WHERE admin_id = ?');
        $checkIfUserAlreadyExists->execute(array($admin_id));

        if($checkIfUserAlreadyExists->rowCount() == 0){
            
            //Insérer l'utilisateur dans la bdd
            $insertUserOnWebsite = $bdd->prepare('INSERT INTO administrateur(admin_id, admin_name, admin_password)VALUES(?, ?, ?)');
            $insertUserOnWebsite->execute(array($admin_id, $admin_name, $admin_password));

            //Récupérer les informations de l'utilisateur
            $getInfosOfThisUserReq = $bdd->prepare('SELECT admin_id, admin_name, admin_password FROM administrateur WHERE admin_id = ? AND admin_name = ? AND admin_password = ?');
            $getInfosOfThisUserReq->execute(array($admin_id, $admin_name, $admin_password));

            $usersInfos = $getInfosOfThisUserReq->fetch();

            //Authentifier l'utilisateur sur le site et récupérer ses données dans des variables globales sessions
            $_SESSION['auth'] = true;
            $_SESSION['id'] = $usersInfos['id'];
            $_SESSION['lastname'] = $usersInfos['nom'];
            $_SESSION['firstname'] = $usersInfos['prenom'];
            $_SESSION['mail'] = $usersInfos['mail'];

            //Rediriger l'utilisateur vers la page d'accueil
            header('Location: loginAdmin.php');

        }else{
            $errorMsg = "L'utilisateur existe déjà sur le site";
        }

    }else{
        $errorMsg = "Veuillez compléter tous les champs...";
    }

}
