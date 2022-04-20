<?php

require('actions/database.php');

//Vérifier si l'id de l'hotel' est rentrée dans l'URL 
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //Récupérer l'identifiant de l'hotel
    $idOfTheReservation = $_GET['id'];

    //Vérifier si l'Reservation existe
    $checkIfReservationExists = $bdd->prepare('SELECT * FROM reservation WHERE reservation_id = ?');
    $checkIfReservationExists->execute(array($idOfTheReservation));

    if($checkIfReservationExists->rowCount() > 0){

        //Récupérer tous les datas de l'hotel
        $reservationsInfos = $checkIfReservationExists->fetch();

        //Stocker les datas de l'hotel dans des variables propres.
        $reservation_title = $reservationsInfos['reservation_id'];
        $reservation_arrival = $reservationsInfos['reservation_arrival'];
        $reservation_departure = $reservationsInfos['reservation_departure'];
        $reservation_first_name = $reservationsInfos['reservation_first_name'];
        $reservation_last_name = $reservationsInfos['reservation_last_name'];
        $reservation_email = $reservationsInfos['reservation_email'];
        $reservation_hotel = $reservationsInfos['reservation_hotel_pref'];
        
    }else{
        $errorMsg1 = "Aucune réservation n'a été trouvé";
    }

}else{
    $errorMsg1 = "Aucune réservation n'a été trouvée";
}