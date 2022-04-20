<?php 
    require('actions/securityAction.php'); 
    require('actions/publishHotelAction.php');
    require('securityAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<?php include ('includes/head.php')?>
    <title>EDIT HOTEL</title>
</head>
<body>
    <?php include('includes/navbar.php'); ?>

    <br><br>
    <form class="container" method="POST">

        <?php 
            if(isset($errorMsg)){ 
                echo '<p>'.$errorMsg.'</p>'; 
            }elseif(isset($successMsg)){ 
                echo '<p>'.$successMsg.'</p>'; 
            }
        ?>
        <?php
        $month = date('m');
        $day = date('d');
        $year = date('Y');
        $today = $year . '-' . $month . '-' . $day;
        ?>
        <h1 style="text-align: center;">Publier un nouvel hôtel</h1>
            <hr>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Titre de l'Hôtel</label>
            <input type="text" class="form-control" name="etablissement_title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description de l'Hôtel</label>
            <textarea class="form-control" name="etablissement_description"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Vile de l'Hôtel</label>
            <textarea type="text" class="form-control" name="etablissement_city"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Date de publication</label>
            <input type="date" value="<?php echo $today; ?>" class="form-control" name="etablissement_date">
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Publier l'Hôtel</button>
   </form>
</body>
<?php include('includes/footer.php'); ?>

</html>