<?php

//Vérifier si l'utilisateur est authentifié au niveau du site
session_start();
if(!isset($_SESSION['auth'])){
    header('Location: login2.php');
}

require('database.php');

//Vérifier si l'id est rentré en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //L'id de l'hotel en paramète
    $idOfTheReservation = $_GET['id'];

    //Vérifier si la reservation existe
    $checkIfReservationExists = $bdd->prepare('SELECT reservation_id FROM reservation WHERE reservation_id = ?');
    $checkIfReservationExists->execute(array($idOfTheReservation));

    if($checkIfReservationExists->rowCount() > 0){

        //Récupérer les infos de la reservation
        $reservationsInfos = $checkIfReservationExists->fetch();
        if($reservationsInfos['reservation_id'] == $_SESSION['auth']){

            //Supprimer la reservation en fonction de son id rentré en paramètre
            $deleteThisReservation = $bdd->prepare('DELETE FROM reservation WHERE reservation_id = ?');
            $deleteThisReservation->execute(array($idOfTheReservation));

            //Rediriger l'utilisateur vers ses reservations
            header('Location: ../myreservations.php');

        }else{
            echo "Vous n'avez pas le droit de supprimer cette reservation !";
        }

    }else{
        echo "Aucune réservation n'a été trouvée";
    }


}else{
    echo "Aucune réservation n'a été trouvée";
}