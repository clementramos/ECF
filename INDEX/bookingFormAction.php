<?php 

if(!empty($_POST["send"])){
    $arrival = $_POST["arrival"];
    $departure = $_POST["departure"];
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $etablissement = $_POST["hotel_pref"];
    $adults = $_POST["adults"];
    $childs = $_POST["children"];
    $room = $_POST["room_pref"];

    $connexion = mysqli_connect("localhost", "root", "P^r6p4w~P", "hypnos") or die("Erreur de connexion: " . mysqli_error($connexion));
    $result = mysqli_query($connexion, "INSERT INTO reservation (reservation_arrival, reservation_departure, reservation_first_name, reservation_last_name, reservation_email, reservation_hotel_pref, reservation_adults, reservation_children, reservation_room_pref) VALUES ('" . $arrival. "' , '" . $departure. "' , '" . $first_name."' , '" . $last_name."' , '" . $email."' , '" . $etablissement. "' , '" . $adults. "' , '" . $childs. "' , '" .$room."')");
    if($result) {
        $db_msg = "<h3 style='color: green;'>Vos préferences sont enregistrées avec succés.</h3>";
		$type_db_msg = "success";
	}else{
		$db_msg = "<h3 style='color: red;'>Erreur lors de la tentative d'enregistrement de vos préferences.</h3>";
		$type_db_msg = "error";
	}
}

if(!empty($_POST["send"])){
    $arrival = $_POST["arrival"];
    $departure = $_POST["departure"];
    $first_name = $_POST["first_name"];
    $email = $_POST["email"];

    $toEmail = "ramos.clementjoseph@gmail.com";
	$mailHeaders = "Nouvelle réservation de : " . $first_name . "<". $email .">\r\n";
	if(mail($toEmail, $first_name, $mailHeaders)) {
	    $mail_msg = "<h3 style='color: green;'>Vos informations de contact ont été reçues avec succés.</h3>";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "<h3 style='color: red;'>Erreur lors de l'envoi de l'e-mail.</h3>";
		$type_mail_msg = "error";
	}
}
?>
