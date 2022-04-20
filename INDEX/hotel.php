<?php
    session_start();
    require('actions/showAllHotelsAction.php');
    require('actions/showHotelContentAction.php');
    require('actions/showAllRoomsAction.php');
    require('actions/showRoomContentAction.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('includes/head.php')?>
    <title>EDIT HOTEL</title>
</head>
<body>
    <?php include('includes/navbar.php'); ?>
    <br>
    <div class="container">
        <?php
            if(isset($errorMsg1)){ echo '<h2>' . $errorMsg1 . '</h2>'; }

            if(isset($hotel_title)){
                ?>
                <section class="show-content">
                    <h2>Bienvenue sur la page de votre hôtel.</h2>
                    <br>
                    <h3><?= $hotel_title; ?></h3>
                    <hr>
                    <h2>Description :</h2>
                    <h3><?= $hotel_content; ?></h3>
                    <hr>
                    <h2>Images :</h2>
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
                    <hr>
                    <h2>Adresse :</h2>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11567.70899084217!2d3.9715946882460056!3d43.54555841600027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b6bb4323d2abcd%3A0x2f1cdecb734b927b!2sCarnon%2C%20Mauguio!5e0!3m2!1sfr!2sfr!4v1650437970832!5m2!1sfr!2sfr" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </section>
                <br>
                <?php
            }
        ?>
    </div>
    <br>
    <div class="container">
        <?php
            if(isset($errorMsg)){ echo '<h2>' . $errorMsg . '</h2>'; }

            if(isset($room_title)){
                ?>
                <section class="show-content">
                <h2>Les suites proposées dans votre hôtel :</h2>
                    <br>
                    <h3><?= $room_title; ?></h3>
                    <hr>
                    <h3><?= $room_content; ?></h3>
                    <hr>
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
                    <hr>
                    <h3>Prix : <?= $room_price; ?></h3>
                    <hr>
                    <h3><a href="https://booking.com" class="btn btn-primary btn-block">Réserver sur un site partenaire</a></h3>
                    <hr>
                    <a href="bookingForm.php" class="btn btn-warning btn-block">Demande de réservation</a>
                    <hr>
                    <a href="etablissements.php" class="btn btn-success">Retour</a>
                </section>
                <br>
                <?php
            }
        ?>
    </div>
    <?php include ('includes/footer.php'); ?>
</body>
</html>