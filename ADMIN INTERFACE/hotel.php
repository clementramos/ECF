<?php
    session_start();
    require('actions/showAllHotelsAction.php');
    require('actions/showHotelContentAction.php');
    require('securityAction.php');

    //require('actions/hotels/postAnswerAction.php');
    //require('actions/hotels/showAllAnswerOfQuestionAction.php');
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
            if(isset($errorMsg)){ echo $errorMsg; }

            if(isset($hotel_title)){
                ?>
                <section class="show-content">
                    <h3><?= $hotel_title; ?></h3>
                    <hr>
                    <h3><?= $hotel_content; ?></h3>
                    <hr>
                    <h3>Publié le <?= $hotel_date; ?></h3>
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
                <a href="indexHotels.php" class="btn btn-success">Retour</a>
                </section>
                <br>
                <?php
            }
        ?>
    </div>
</body>
<?php include('includes/footer.php'); ?>

</html>