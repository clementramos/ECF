<?php
session_start();
require('actions/showAllHotelsAction.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include('includes/head.php') ?>

    <title>EDIT HOTEL</title>
</head>

<body>
    <?php include('includes/navbar.php'); ?>
    <h1 style="text-align: center;">Bienvenue sur notre site</h1>
    <hr>
    <br>
    <div class="container">
        <form method="get">
            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="search" class="form-control" placeholder="Rechercher un hôtel">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </div>
            </div>
        </form>
        <br>
        <?php
        while ($hotel = $getAllHotels->fetch()) {
        ?>

            <div class="card">
                <div class="card-header">
                    <a href="hotel.php?id=<?= $hotel['etablissement_id']; ?>">
                        <?= $hotel['etablissement_title']; ?>
                    </a>
                </div>
                <div class="card-body">
                    <p>Images :</p>
                    <!--<?= $hotel['etablissement_images']; ?>-->
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="https://i.ibb.co/qMKycsR/grans-hotel-four-seasons-cap-ferra-Club-Dauphin-0.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://i.ibb.co/Krd6MV5/236729.webp" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="https://i.ibb.co/Krd6MV5/236729.webp" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <?= $hotel['etablissement_description']; ?>
                </div>
                <div class="card-body">
                    <p>Adresse :</p>
                    <?= $hotel['etablissement_adress']; ?>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11567.70899084217!2d3.9715946882460056!3d43.54555841600027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6bb4323d2abcd%3A0x2f1cdecb734b927b!2sCarnon%2C%20Mauguio!5e0!3m2!1sfr!2sfr!4v1650437970832!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="card-body">
                    <p>Réservation :</p>
                    <a href="https://booking.com" class="btn btn-primary">Booking.com</a>
                </div>
                <div class="card-footer">
                    <a href="hotel.php?id=<?= $hotel['etablissement_id']; ?>" class="btn btn-success btn-block">En savoir plus</a>
                </div>
            </div>
            <br>
            <hr>
        <?php
        }
        ?>
    </div>
    <?php include('includes/footer.php'); ?>

</body>

</html>