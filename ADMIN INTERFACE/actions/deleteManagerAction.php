<?php

//Vérifier si l'utilisateur est authentifié au niveau du site
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: loginAdmin.php');
}

require('database.php');

//Vérifier si l'id est rentré en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'id de l'hotel en paramète
    $idOfTheManager = $_GET['id'];

    //Vérifier si l'Manager existe
    $checkIfManagerExists = $bdd->prepare('SELECT manager_id FROM manager WHERE manager_id = ?');
    $checkIfManagerExists->execute(array($idOfTheManager));

    if($checkIfManagerExists->rowCount() > 0){

        //Récupérer les infos de l'hotel
        $managersInfos = $checkIfManagerExists->fetch();
        if($managersInfos['manager_id'] == $_SESSION['auth']){

            //Supprimer l'Hotel en fonction de son id rentré en paramètre
            $deleteThisManager = $bdd->prepare('DELETE FROM manager WHERE manager_id = ?');
            $deleteThisManager->execute(array($idOfTheManager));

            //Rediriger l'utilisateur vers ses questions
            header('Location: ../indexManager.php');

        }else{
            echo "Vous n'avez pas le droit de supprimer un qui ne vous appartient pas !";
        }

    }else{
        echo "Aucun manager n'a été trouvée";
    }


}else{
    echo "Aucun manager n'a été trouvée";
}