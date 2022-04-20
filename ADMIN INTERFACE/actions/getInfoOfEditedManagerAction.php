<?php

require('actions/database.php');

//Vérifier si l'id du manager est bien passé en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfManager = $_GET['id'];

    //Vérifier si l'hotel' existe
    $checkIfManagerExists = $bdd->prepare('SELECT * FROM manager WHERE manager_id = ?');
    $checkIfManagerExists->execute(array($idOfManager));

    if($checkIfManagerExists->rowCount() > 0){

        //Récupérer les données du manager
        $managerInfos = $checkIfManagerExists->fetch();
        if($managerInfos['manager_id'] == $_SESSION['auth']){
            
            $manager_id = $managerInfos['manager_id'];
            $manager_name = $managerInfos['manager_name'];
            $manager_surname = $managerInfos['manager_surname'];
            $manager_password = $managerInfos['manager_password'];
            $manager_mail = $managerInfos['manager_mail'];

            $manager_name = str_replace('<br />', '', $manager_name);
            $manager_surname = str_replace('<br />', '', $manager_surname);
            $manager_mail = str_replace('<br />', '', $manager_mail);
            $manager_password = str_replace('<br />', '', $manager_password);

        }else{
            $errorMsg = "Vous n'êtes pas l'auteur de ce manager";
        }

    }else{
        $errorMsg = "Aucun manager n'a été trouvée";
    }

}else{
    $errorMsg = "Aucun manager n'a été trouvée 2";
}