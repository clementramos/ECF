<?php
    session_start();
    require('actions/showAllHotelsAction.php');
    require('securityAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('includes/head.php')?>
    
    <title>INDEX HOTEL</title>
</head>
<body>
    
    <?php include('includes/navbar.php'); ?>
    
    <br>
    <h1 style="text-align: center;">Les hôtels</h1>
    <hr>
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
            while($hotel = $getAllHotels->fetch()) {
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="hotel.php?id=<?= $hotel['etablissement_id']; ?>">
                            <?= $hotel['etablissement_title']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <p>Description</p>
                        <?= $hotel['etablissement_description']; ?>
                    </div>
                    <div class="card-body">
                        <p>Adresse</p>
                        <?= $hotel['etablissement_adress']; ?>
                    </div>
                    <div class="card-body">
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
                    <div class="card-footer">
                        Publié le <?= $hotel['etablissement_date']; ?>
                        <br>
                        <a href="hotel.php?id=<?= $hotel['etablissement_id']; ?>" class="btn btn-primary">Accèder à l'Hôtel</a>
                        <a href="editHotel.php?id=<?= $hotel['etablissement_id']; ?>" class="btn btn-warning">Modifier l'Hôtel</a>
                        <a href="actions/deleteHotelAction.php?id=<?= $hotel['etablissement_id']; ?>" class="btn btn-danger">Supprimer l'Hôtel</a>
                    </div>
                </div>
                
                <br>
                <?php
            }
        ?>
    </div>
    <hr>
                <a href="adminIndex.php" class="btn btn-success">Retour</a>
    <?php include('includes/footer.php'); ?>

</body>
</html>