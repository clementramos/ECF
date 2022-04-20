<?php
session_start();
require('securityAction.php');
require('actions/showAllReservationsAction.php');
require('actions/showReservationContentAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('includes/head.php') ?>
    <title>Mes réservations</title>
</head>

<body>
    <?php include('includes/navbar.php'); ?>
    <?php
    if (isset($errorMsg1)) {
        echo '<h2>' . $errorMsg1 . '</h2>';
    }

    if (isset($reservation_title)) {
    ?>
        <div class="container">
            <h1>Détails de votre réservation</h1>
            <hr>
            <div class="card">
                <div class="card-header">
                    <p>Votre réservation numéro : <?= $reservation_title; ?></p>
                </div>
                <div class="card-body">
                    <p>Vous arrivez dans votre hôtel "<?= $reservation_hotel; ?>" le <?= $reservation_arrival; ?> et repartez le <?= $reservation_departure; ?>.</p>
                    <p>La réservation à été effectuée au nom de Mr/Mme <?= $reservation_first_name; ?> <?= $reservation_last_name; ?>.</p>
                    <hr>
                    <p>Carte :</p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11567.70899084217!2d3.9715946882460056!3d43.54555841600027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6bb4323d2abcd%3A0x2f1cdecb734b927b!2sCarnon%2C%20Mauguio!5e0!3m2!1sfr!2sfr!4v1650386540243!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                </div>
                <div class="card-footer">
                    <p>Vous pouvez annuler à tout moment si c'est au minimum 3 jours avant le <?= $reservation_arrival; ?>. <br> Sinon, un remboursement ne pourra malheureusement pas être effectué.</p>
                    <a href="actions/deleteReservationAction.php?id=<?= $reservation_title; ?>" class="btn btn-danger btn-block">Annulation</a>
                </div>
                <div class="card-footer">
                    <a href="contact.php" class="btn btn-primary btn-block">Contact<a>
                        <hr>
        <a href="myReservations.php" class="btn btn-warning btn-block">Retour</a>
                    
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <?php
    }
        ?>
        <?php include ('includes/footer.php'); ?>
</body>