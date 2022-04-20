<?php 
    require('actions/securityAction.php'); 
    require('actions/publishManagerAction.php');
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
        <h1 style="text-align: center;">Créer un nouveau manager</h1>
        <hr>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nom du manager</label>
            <input type="text" class="form-control" name="manager_name">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Prénom du manager</label>
            <textarea class="form-control" name="manager_surname"></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="manager_password"></input>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Mail</label>
            <input type="mail" class="form-control" name="manager_mail"></input>
        </div>
        <button type="submit" class="btn btn-primary" name="validate">Ajouter le manager</button>
   </form>
</body>
<?php include('includes/footer.php'); ?>

</html>