<?php

require('actions/database.php');

//Vérifier si l'id de l'hotel' est rentrée dans l'URL 
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //Récupérer l'identifiant de l'hotel
    $idOfTheHotel = $_GET['id'];

    //Vérifier si l'hotel existe
    $checkIfHotelExists = $bdd->prepare('SELECT * FROM etablissements WHERE etablissement_id = ?');
    $checkIfHotelExists->execute(array($idOfTheHotel));

    if($checkIfHotelExists->rowCount() > 0){

        //Récupérer tous les datas de l'hotel
        $hotelsInfos = $checkIfHotelExists->fetch();

        //Stocker les datas de l'hotel dans des variables propres.
        $hotel_title = $hotelsInfos['etablissement_title'];
        $hotel_content = $hotelsInfos['etablissement_description'];
        $hotel_date = $hotelsInfos['etablissement_date'];
        //$hotel_adress = $hotelsInfos['etablissement_adress'];
        $hotel_city = $hotelsInfos['etablissement_city'];
        
    }else{
        $errorMsg1 = "Aucun hôtel n'a été trouvé";
    }

}else{
    $errorMsg1 = "Aucun hôtel n'a été trouvé";
}