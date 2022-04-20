<?php

require('actions/database.php');

//Vérifier si l'id de l'hotel' est bien passé en paramètre dans l'URL
if(isset($_GET['id']) AND !empty($_GET['id'])){

    $idOfRoom = $_GET['id'];

    //Vérifier si l'hotel' existe
    $checkIfRoomExists = $bdd->prepare('SELECT * FROM chambre WHERE chambre_number = ?');
    $checkIfRoomExists->execute(array($idOfRoom));

    if($checkIfRoomExists->rowCount() > 0){

        //Récupérer les données de l'hotel'
        $roomInfos = $checkIfRoomExists->fetch();
        if($roomInfos['chambre_number'] == $_SESSION['auth']){
            
            $room_title = $roomInfos['chambre_title'];
            $room_description = $roomInfos['chambre_description'];
            $room_price = $roomInfos['chambre_price'];
            $room_link = $roomInfos['chambre_lien'];

            $room_description = str_replace('<br />', '', $room_description);
            $room_link = str_replace('<br />', '', $room_link);

        }else{
            $errorMsg = "Vous n'êtes pas l'auteur de cet hotel";
        }

    }else{
        $errorMsg = "Aucun hotel n'a été trouvée";
    }

}else{
    $errorMsg = "Aucun hotel n'a été trouvée 2";
}