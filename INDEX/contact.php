<?php
// Output messages
//$responses = [];
// Check if the form was submitted
/*if (isset($_POST['email'], $_POST['subject'], $_POST['name'], $_POST['msg'])) {
	// Validate email adress
	if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
		$responses[] = 'Email is not valid!';
	}
	// Make sure the form fields are not empty
	if (empty($_POST['email']) || empty($_POST['subject']) || empty($_POST['name']) || empty($_POST['msg'])) {
		$responses[] = 'Please complete all fields!';
	} 
	// If there are no errors
	if (!$responses) {
		// Where to send the mail?
		$to      = 'ramos.clement@outlook.fr';
		// Send mail from which email address?
		$from = 'noreply@example.com';
		// Mail subject
		$subject = $_POST['subject'];
		// Mail message
		$message = $_POST['msg'];
		// Mail headers
		$headers = 'From: ' . $from . "\r\n" . 'Reply-To: ' . $_POST['email'] . "\r\n" . 'X-Mailer: PHP/' . phpversion();
		// Try to send the mail
		if (mail($to, $subject, $message, $headers)) {
			// Success
			$responses[] = 'Message sent!';		
		} else {
			// Fail
			$responses[] = 'Message could not be sent! Please check your mail server settings!';
		}
	}
}
?>*/
//Base de donnée
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$connexion = mysqli_connect("localhost", "root", "", "contact") or die("Erreur de connexion: " . mysqli_error($connexion));
	$result = mysqli_query($connexion, "INSERT INTO contact (name, email, subject, message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
	if($result){
		$db_msg = "<h3>Vos informations de contact sont enregistrées avec succés.</h3>";
		$type_db_msg = "success";
	}else{
		$db_msg = "<h3>Erreur lors de la tentative d'enregistrement de contact.</h3>";
		$type_db_msg = "error";
	}
	
}
//l'envoi du mail
if(!empty($_POST["send"])) {
	$name = $_POST["name"];
	$email = $_POST["email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$toEmail = "ramos.clementjoseph@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $message, $mailHeaders)) {
	    $mail_msg = "<h3>Vos informations de contact ont été reçues avec succés.</h3>";
		$type_mail_msg = "success";
	}else{
		$mail_msg = "<h3>Erreur lors de l'envoi de l'e-mail.</h3>";
		$type_mail_msg = "error";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.ibb.co/LPq4Scj/logonobg.png" type="image/x-icon">
    <title>Hôtels Hypnos - Contact</title>
    <link rel="stylesheet" href="style-contact.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        @media only screen {
            body {
                font-size: 12px;
                background-color: rgb(204, 201, 220);
            }
        }
    </style>
    <script>
        document.querySelector('#contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            e.target.elements.name.value = '';
            e.target.elements.email.value = '';
            e.target.elements.message.value = '';
        });
    </script>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="index.php">
            <img src="https://i.ibb.co/LPq4Scj/logonobg.png" alt="logo" loading="lazy" class="nav_logo_img">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="bookingForm.php">Réservation
              </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="etablissements.php">Les hôtels</a>
                </li>
                <li>
                    <a href="login.html"><img src="https://i.ibb.co/WPv9TY1/user.png" alt="compte" loading="lazy" class="nav_logo_account" href="login.html"></a>
                </li>
            </ul>
        </div>
    </nav>
    <section id="contact">
        <div class="container_contact">
            <h1 class="section-header">Contact</h1>
            <div class="contact-wrapper">
                <!-- Left contact page -->
                <form id="contact-form" class="form-horizontal" role="form" entype="multipart/form-data" onsubmit="return validate()" method="post">
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="text" class="form-control" id="name" placeholder="NOM" name="name" value="" required style="width:432px">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required style="width:432px">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <label for="subject"></label>
                            <select placeholder="sujet" name="subject" id="subject" required class="form-control">
                          <option disabled hidden selected>Sujet</option>
                          <option>Je souhaite poser une réclamation</option>
                          <option>Je souhaite commander un service supplémentaire</option>
                          <option>Je souhaite en savoir plus sur une suite</option>
                          <option>J’ai un souci avec cette application</option>
                        </select>
                        </div>
                    </div>
                    <textarea class="form-control" rows="10" placeholder="MESSAGE" name="message" id="message" required></textarea>
                    <button class="btn-primary send-button" id="submit" type="submit" name="send" value="SEND">Envoyer</button>
              <!--<div class="alt-send-button">
                <i class="fa fa-paper-plane"></i><span class="send-text">Envoyer</span>-->
            <!--Adding the responses variable tothe form-->
                </form>
                <div id="statusMessage">
            <?php if(! empty($db_msg)) { ?>
                <p class='<?php echo $type_db_msg;?>Message'><?php echo $db_msg;?></p>
                <?php } ?>
                <?php if(! empty($mail_msg)) { ?>
                    <p class='<?php echo $type_mail_msg;?>Message'><?php echo $mail_msg; ?></p>
                    <?php } ?>
            </div>
        </div>
    </section>
    <section>
        <!--footer-->
        <?php include('includes/footer.php'); ?>

    </section>
</body>
