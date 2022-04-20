<?php
    require('actions/securityAction.php');
    require('actions/publishRoomAction.php');
    require('securityAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('includes/head.php')?>
    <title>Ajouter une suite</title>
</head>
<body>
    <?php include('includes/navbar.php'); ?>
    <br>
    <div class="container">
                <form method="post">
                <?php 
            if(isset($errorMsg)){ 
                echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label"><h2>Nom de la suite :</h2></label>
                        <input type="text" class="form-control" name="chambre_title">
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label"><h2>Description :</h2></label>
                        <textarea name="chambre_description" class="form-control"></textarea>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label"><h2>Prix :</h2></label>
                        <textarea type="text" name="chambre_price" class="form-control"></textarea>
                    </div>
                    <hr>
                    <div class="mb-3">
                    <form action="upload.php" method="post" enctype="multipart/form-data">
                        <h2>Choisissez les images de la suite : (4 maximum)</h2></h2>
                        <br>
                        <hr>
                        <h2>Image 1 :</h2></h2>
                        <br>
                        <input type="file" name="filesToUpload" id="filesToUpload">
                        <input type="submit" value="Envoyer l'image" name="submit">
                        <hr>
                        <h2>Image 2 :</h2></h2>
                        <br>
                        <input type="file" name="filesToUpload" id="filesToUpload">
                        <input type="submit" value="Envoyer l'image" name="submit">
                        <hr>
                        <h2>Image 3 :</h2></h2>
                        <br>
                        <input type="file" name="filesToUpload" id="filesToUpload">
                        <input type="submit" value="Envoyer l'image" name="submit">
                        <hr>
                        <h2>Image 4 :</h2></h2>
                        <br>
                        <input type="file" name="filesToUpload" id="filesToUpload">
                        <input type="submit" value="Envoyer l'image" name="submit">
                        <hr>
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="validate">Envoyer les photos</button>
                    </form>
                    <hr>
                    </div>
                    <button type="submit" class="btn btn-success btn-lg btn-block" name="validate">Valider</button>
                    <hr>
                    <br>
                </form>
    </div>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
