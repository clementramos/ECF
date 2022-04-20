<?php
    session_start();
    require('actions/showAllManagersAction.php');
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
    <h1 style="text-align: center;">Les hôtels</h1>
    <hr>
    <div class="container">
        <form method="get">
            <div class="form-group row">
                <div class="col-8">
                    <input type="search" name="search" class="form-control" placeholder="Rechercher un manager">
                </div>
                <div class="col-4">
                    <button class="btn btn-success" type="submit">Rechercher</button>
                </div>
            </div>
        </form>
        <br>
        <?php
            while($manager = $getAllManagers->fetch()) {
                ?>
                <div class="card">
                    <div class="card-header">
                        <a href="manager.php?id=<?= $manager['manager_id']; ?>">
                            <?= $manager['manager_id']; ?>
                        </a>
                    </div>
                    <div class="card-body">
                        <p>Nom</p>
                        <?= $manager['manager_name']; ?>
                    </div>
                    <div class="card-body">
                        <p>Prénom</p>
                        <?= $manager['manager_surname']; ?>
                    </div>
                    <div class="card-body">
                        <p>Mot de passe</p>
                        <?= $manager['manager_password']; ?>
                    </div>
                    <div class="card-body">
                        <p>Mail</p>
                        <?= $manager['manager_mail']; ?>
                    </div>
                    <div class="card-footer">
                        <br>
                        <a href="editManager.php?id=<?= $manager['manager_id']; ?>" class="btn btn-warning">Modifier le manager</a>
                        <a href="actions/deleteManagerAction.php?id=<?= $manager['manager_id']; ?>" class="btn btn-danger">Supprimer le manager</a>
                    </div>
                </div>
                <br>
                <?php
            }
        ?>
    </div>
    <hr>
    <a href="adminIndex.php" class="btn btn-success">Retour</a>
    <br>
    <?php include('includes/footer.php'); ?>
</body>
</html>