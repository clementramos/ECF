<?php
    require('actions/securityAction.php');
    require('actions/getInfoOfEditedManagerAction.php');
    require('actions/editManagerAction.php');
    require('securityAction.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include ('includes/head.php')?>
    <title>EDIT MANAGER</title>
</head>
<body>
    <?php include('includes/navbar.php'); ?>
    <br>
    <div class="container">
        <?php if(isset($errorMsg)){ echo '<p>' .$errorMsg. '</p>'; } ?>

        <?php
            if(isset($managerInfos)){
                ?>
                <form method="post">
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Nom</label>
                        <input type="text" class="form-control" name="manager_name" value="<?= $manager_name; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Prénom</label>
                        <textarea name="manager_surname" class="form-control"><?= $manager_surname; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Mail</label>
                        <textarea type="text" name="manager_mail" class="form-control"><?= $manager_mail; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Mot de passe</label>
                        <textarea type="text" name="manager_password" class="form-control"><?= $manager_password; ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="validate">Modifier le manager</button>
                </form>
                <?php
            }
        ?>
    </div>
</body>
<?php include('includes/footer.php'); ?>

</html>