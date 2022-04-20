<?php
    require('actions/securityAction.php');
    require('actions/getInfoOfEditedHotelAction.php');
    require('actions/editHotelAction.php');
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
        <?php if(isset($errorMsg)){ echo '<p>' .$errorMsg. '</p>'; } ?>

        <?php
            if(isset($roomInfos)){
                ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Titre de la suite</label>
                        <input type="text" class="form-control" name="chambre_title" value="<?= $room_title; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Description</label>
                        <textarea name="chambre_description" class="form-control"><?= $room_description; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Images</label>
                        <input type="file" name="chambre_images" class="form-control"><?= $room_adress; ?></textarea>
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                        <form method="POST" action="upload.php" enctype="multipart/form-data">
                        <!-- On limite le fichier à 100Ko -->
                        <input type="hidden" name="MAX_FILE_SIZE" value="100000">
                        Fichier : <input type="file" name="avatar">
                        <input type="submit" name="envoyer" value="Envoyer le fichier">
                        </form>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Image de mise en avant</label>
                        <input type="file" name="chambre_front_image" class="form-control"><?= $room_adress; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Prix</label>
                        <textarea type="text" name="chambre_price" class="form-control"><?= $room_price; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Lien vers la réservation Booking</label>
                        <textarea type="text" name="chambre_link" class="form-control"><?= $room_link; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="validate">Modifier la suite</button>
                </form>
                <?php
            }
        ?>
    </div>
</body>
</html>