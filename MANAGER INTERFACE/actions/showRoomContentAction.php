<?php

require('actions/database.php');

//Vérifier si l'id de la chambre est rentrée dans l'URL 
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //Récupérer l'identifiant de la chambre
    $idOfTheRoom = $_GET['id'];

    //Vérifier si la chambre existe
    $checkIfRoomExists = $bdd->prepare('SELECT * FROM chambre WHERE chambre_id = ?');
    $checkIfRoomExists->execute(array($idOfTheRoom));

    if($checkIfRoomExists->rowCount() > 0){

        //Récupérer tous les datas de la chambre
        $roomsInfos = $checkIfRoomExists->fetch();

        //Stocker les datas de la chambre dans des variables propres.
        $room_title = $roomsInfos['chambre_title'];
        $room_content = $roomsInfos['chambre_description'];
        $room_price = $roomsInfos['chambre_price'];
        $room_link = $roomsInfos['chambre_lien'];
        
    }else{
        $errorMsg = "Aucune suite n'a été trouvé";
    }

}else{
    $errorMsg = "Aucune suite n'a été trouvé 2";
}