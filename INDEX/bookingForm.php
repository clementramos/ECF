<?php
require('loginAction.php');
require('securityAction.php');
require('bookingFormAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,minimum-scale=1">
	<title>Hotel Reservation Form</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	<link rel="stylesheet" href="style-reservation.css">
	<link rel="icon" href="https://i.ibb.co/LPq4Scj/logonobg.png" type="image/x-icon">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</head>
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
					<a class="nav-link" href="etablissements.php">Nos hôtels</a>
				</li>
				<li>
					<a href="login2.php"><img src="https://i.ibb.co/WPv9TY1/user.png" alt="compte" loading="lazy" class="nav_logo_account" href="login.html"></a>
				</li>
			</ul>
		</div>
	</nav>
	<section id="contact">
		<div class="container_contact">
			<form class="form-horizontal" role="form" entype="multipart/form-data" onsubmit="return validate()" method="post" action="">
				<h1 class="section-header">
					<i class="far fa-calendar-alt"></i>
					<br>
					Formulaire de réservation
				</h1>
				<div class="contact-wrapper">
					<!-- Input Elements -->
					<div class="form-group">
						<div class="col-sm-12">
							<label for="arrival">Arrivée</label>
							<div class="field">
								<input id="arrival" type="date" name="arrival" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label for="departure">Départ</label>
							<div class="field">
								<input id="departure" type="date" name="departure" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label for="first_name">Prénom</label>
							<div class="field">
								<i class="fas fa-user"></i>
								<input id="first_name" type="text" name="first_name" placeholder="Prénom" required>
							</div>
						</div>
						<div class="col-sm-12">
							<label for="last_name">Nom</label>
							<div class="field">
								<i class="fas fa-user"></i>
								<input id="last_name" type="text" name="last_name" placeholder="Nom de famille" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label for="email">Email</label>
							<div class="field">
								<i class="fas fa-envelope"></i>
								<input id="email" type="email" name="email" placeholder="Votre mail" required>
							</div>
							<label for="hotel_pref">Etablissement</label>
							<div class="field">
								<select id="hotel_pref" name="hotel_pref" required>
									<option disabled selected value="">--</option>
									<option value="Hypnos_1">Hypnos 1</option>
									<option value="Hypnos_2">Hypnos 2</option>
									<option value="Hypnos-_3">Hypnos 3</option>
								</select>
							</div>
						</div>
						<div class="col-sm-12">
							<div>
								<label for="adults">Adultes</label>
								<div class="field">
									<select id="adults" name="adults" required>
										<option disabled selected value="">--</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>
							<div class="gap"></div>
							<div>
								<label for="children">Enfants</label>
								<div class="field">
									<select id="children" name="children" required>
										<option disabled selected value="">--</option>
										<option value="0">0</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
									</select>
								</div>
							</div>
						</div>
						<div class="col-sm-12">
							<label for="room_pref">Chambre</label>
							<div class="field">
								<select id="room_pref" name="room_pref" required>
									<option disabled selected value="">--</option>
									<option value="Standard">Standard</option>
									<option value="Deluxe">Deluxe</option>
									<option value="Suite">Suite</option>
								</select>
							</div>
							<div id="statusMessage">
								<?php if (!empty($db_msg)) { ?>
									<p class='<?php echo $type_db_msg; ?>Message'><?php echo $db_msg; ?></p>
								<?php } ?>
								<?php if (!empty($mail_msg)) { ?>
									<p class='<?php echo $type_mail_msg; ?>Message'><?php echo $mail_msg; ?></p>
								<?php } ?>
							</div>
							<button class="btn-primary btn-block" id="submit" type="submit" name="send" value="SEND">Envoyer</button>
							<br>
							<a href="etablissements.php" class="btn btn-success">Retour</a>
						</div>
					</div>
				</div>
			</form>
		</div>
	</section>
</body>
</html>
