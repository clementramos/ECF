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
                    <small><?= '<a href="profile.php?id='.$hotel_id_author.'">'.$hotel_pseudo_author . '</a>' . $hotel_date; ?></small>
                    <br>
                        <a href="hotel.php?id=<?= $hotel['etablissement_id']; ?>" class="btn btn-primary">Accèder à l'Hôtel</a>
                        <a href="editHotel.php?id=<?= $hotel['etablissement_id']; ?>" class="btn btn-warning">Modifier l'Hôtel</a>
                        <a href="actions/deleteHotelAction.php?id=<?= $hotel['etablissement_id']; ?>" class="btn btn-danger">Supprimer l'Hôtel</a>
                </section>
                <br>
                <?php
            }
        ?>
    </div>
</body>
<?php include('includes/footer.php'); ?>

</html>