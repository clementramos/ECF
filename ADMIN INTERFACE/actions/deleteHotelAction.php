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
    $idOfTheHotel = $_GET['id'];

    //Vérifier si l'hotel existe
    $checkIfHotelExists = $bdd->prepare('SELECT etablissement_id FROM etablissements WHERE etablissement_id = ?');
    $checkIfHotelExists->execute(array($idOfTheHotel));

    if($checkIfHotelExists->rowCount() > 0){

        //Récupérer les infos de l'hotel
        $hotelsInfos = $checkIfHotelExists->fetch();
        if($hotelsInfos['etablissement_id'] == $_SESSION['auth']){

            //Supprimer l'Hotel en fonction de son id rentré en paramètre
            $deleteThisHotel = $bdd->prepare('DELETE FROM etablissements WHERE etablissement_id = ?');
            $deleteThisHotel->execute(array($idOfTheHotel));

            //Rediriger l'utilisateur vers ses questions
            header('Location: ../indexHotels.php');

        }else{
            echo "Vous n'avez pas le droit de supprimer un hôtel qui ne vous appartient pas !";
        }

    }else{
        echo "Aucun hôtel n'a été trouvée";
    }


}else{
    echo "Aucun hôtel n'a été trouvée";
}