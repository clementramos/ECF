<?php 
    require('loginAdminAction.php');
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
<?php include('includes/navbar.php') ?>

<section class="admin">
    <div class="sucess">
    <h1>Bienvenue <?php echo $_SESSION['auth']; ?>! <br> <p>C'est votre espace admin.</p></h1>
    <div class="actions">
        Voici une liste des actions possibles :
        <ol style="list-style: none">
        <li class="nav-item">
          <a class="nav-link" href="indexHotels.php">Voir les hôtels</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publishHotel.php">Ajouter un hôtel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indexManager.php">Voir les gérants</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publishManager.php">Ajouter un gérant</a>
        </li>
        <?php 
          if(isset($_SESSION['auth'])){
            ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Déconnexion</a>
            </li>
            <?php
          }
        ?>
        </ol>
    </div>
        </section>
</body>
<?php include('includes/footer.php'); ?>
