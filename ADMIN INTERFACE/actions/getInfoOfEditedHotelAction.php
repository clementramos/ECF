<?php

require('actions/database.php');

//Vérifier si l'id de l'hotel' est bien passé en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfHotel = $_GET['id'];

    //Vérifier si l'hotel' existe
    $checkIfHotelExists = $bdd->prepare('SELECT * FROM etablissements WHERE etablissement_id = ?');
    $checkIfHotelExists->execute(array($idOfHotel));

    if($checkIfHotelExists->rowCount() > 0){

        //Récupérer les données de l'hotel'
        $hotelInfos = $checkIfHotelExists->fetch();
        if($hotelInfos['etablissement_id'] == $_SESSION['auth']){
            
            $hotel_title = $hotelInfos['etablissement_id'];
            $hotel_description = $hotelInfos['etablissement_description'];
            $hotel_adress = $hotelInfos['etablissement_adress'];
            $hotel_city = $hotelInfos['etablissement_city'];

            $hotel_description = str_replace('<br />', '', $hotel_description);
            $hotel_city = str_replace('<br />', '', $hotel_city);

        }else{
            $errorMsg = "Vous n'êtes pas l'auteur de cet hotel";
        }

    }else{
        $errorMsg = "Aucun hotel n'a été trouvée";
    }

}else{
    $errorMsg = "Aucun hotel n'a été trouvée 2";
}