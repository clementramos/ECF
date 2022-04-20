<?php
    session_start();
    require('actions/showAllHotelsAction.php');
    require('actions/showHotelContentAction.php');
    require('actions/showAllRoomsAction.php');
    require('actions/showRoomContentAction.php');
    require('securityAction.php');

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
                    <h2>Titre de l'hôtel :</h2>
                    <h3><?= $hotel_title; ?></h3>
                    <hr>
                    <h2>Description :</h2>
                    <h3><?= $hotel_content; ?></h3>
                    <hr>
                    <h2>Publié le :</h2>
                    <h3>Publié le <?= $hotel_date; ?></h3>
                    <hr>
                    <h2>Image de mise en avant :</h2>
                    <h3><?= $hotel_image_front; ?></h3>
                    <a href="addPhotoFront.php" class="btn btn-warning">Ajouter une photo</a>                
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
                    <br>
                    <a href="addPhotos.php" class="btn btn-warning">Ajouter des photos</a>                
                    <hr>
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
                    <h3><?= $room_title; ?></h3>
                    <hr>
                    <h3><?= $room_content; ?></h3>
                    <hr>
                    <h3>Prix : <?= $room_price; ?></h3>
                    <hr>
                    <h3><a href="https://booking.com" class="btn btn-primary">Lien</a></h3>
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
                </section>
                <br>
                <?php
            }
        ?>
        <br>
        <a href="addRoom.php" class="btn btn-primary">Ajouter une suite</a>
        <hr>
    <a href="indexHotels.php" class="btn btn-success">Retour</a>
<hr>
    </div>
    <?php include ('includes/footer.php'); ?>
</body>
</html>