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
    $subject = "Merci pour votre réservation";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    $toEmail = $email;
	$message = "<div  style='text-align: center;'><h1>Merci ! Votre réservation est confirmée.</h1></div><br><img src='https://ibb.co/59zqTSp'><br><div style='text-align: center;'><h3>Bonjour  " . $first_name . " votre arrivee est prévue le " . $arrival . ", pour un départ le " . $departure . "</h3></div>\r\n <br> <div style='text-align: center;'><h5>Nous vous remercions de votre confiance et esperons vous retrouver rapidement sur notre site.</h5></div><br><div style='text-align: center;'><h6>Cordialement, <br> <a href='http://hypnoshotels.online/'>Hôtels Hypnos.</a></h6></div>";
	if(mail($toEmail, $subject, $message, $headers)) {
	    $mail_msg = "<h3 style='color: green;'>La réservation à été effectuée avec succès. Vous recevrez un mail de confirmation sous peu.</h3>";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "<h3 style='color: red;'>Erreur lors de la réservation. Merci de réessayer plus tard ou de nous contacter via notre page de contact</h3>";
		$type_mail_msg = "error";
	}
}


?>
