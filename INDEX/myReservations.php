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
    <?php include ('includes/head.php')?>
    <title>Mes réservations</title>
</head>
<body>
    <?php include('includes/navbar.php'); ?>
    <br>
    <div class="container">
    <?php
            while($reservation = $getAllReservations->fetch()) {
                ?>
               
                <div class="card">
                    <div class="card-header">
                        <a href="myReservationsDetails.php?id=<?= $reservation['reservation_id']; ?>">
                            Numéro de réservation : <?= $reservation['reservation_id']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <p>Date d'arrivée :</p>
                        <?= $reservation['reservation_arrival']; ?>
                        <p>Date de départ :</p>
                        <?= $reservation['reservation_departure']; ?>
                    </div>
                    <div class="card-body">
                        <p>Réservation de :</p>
                        <?= $reservation['reservation_first_name']; ?> , <?= $reservation['reservation_last_name']; ?>
                    </div>
                    <hr>
                    <div class="card-body">
                        <p>Attention, toute annulation doit être faite au minimum 3 jours avant.</p>
                    </div>
                    <div class="card-footer">
                    <a href="myReservationsDetails.php?id=<?= $reservation['reservation_id']; ?>" class="btn btn-success btn-block">Voir ma réservation</a>
                    </div>
                </div>
                <br>
                <hr>
                <?php
            }
        ?>
        <a href="indexAccount.php" class="btn btn-warning btn-block">Retour</a>
        <hr>
    </div>
    <?php include ('includes/footer.php'); ?>

</body>