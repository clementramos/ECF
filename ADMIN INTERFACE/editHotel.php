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
            if(isset($hotelInfos)){
                ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Titre de l'Hôtel</label>
                        <input type="text" class="form-control" name="etablissement_id" value="<?= $hotel_title; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Description de l'hôtel</label>
                        <textarea name="etablissement_description" class="form-control"><?= $hotel_description; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Adresse</label>
                        <textarea type="text" name="etablissement_adress" class="form-control"><?= $hotel_adress; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Ville</label>
                        <textarea type="text" name="etablissement_city" class="form-control"><?= $hotel_city; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="validate">Modifier l'établissement</button>
                </form>
                <?php
            }
        ?>
    </div>
</body>
<?php include('includes/footer.php'); ?>

</html>