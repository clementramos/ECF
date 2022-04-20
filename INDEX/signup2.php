<?php require('signupAction.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://i.ibb.co/LPq4Scj/logonobg.png" type="image/x-icon">
    <title>Hôtels Hypnos - Register</title>
    <link rel="stylesheet" href="style-login.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <script src="script1.js"></script>
    <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
    <style>
        @media only screen {
            body {
                font-size: 12px;
                background-color: rgb(204, 201, 220);
            }
        }
    </style>
    <style type="text/css">
        .site-link {
            padding: 5px 15px;
            position: fixed;
            z-index: 99999;
            background: #fff;
            box-shadow: 0 0 4px rgba(0, 0, 0, .14), 0 4px 8px rgba(0, 0, 0, .28);
            right: 30px;
            bottom: 30px;
            border-radius: 10px;
        }
        
        .site-link img {
            width: 30px;
            height: 30px;
        }
    </style>

    <script>
        document.querySelector('#contact-form').addEventListener('submit', (e) => {
            e.preventDefault();
            e.target.elements.name.value = '';
            e.target.elements.email.value = '';
            e.target.elements.message.value = '';
        });
    </script>
</head>

<body>
    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="index.php">
            <img src="https://i.ibb.co/LPq4Scj/logonobg.png" alt="logo" loading="lazy" class="nav_logo_img">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="bookingForm.php">Réservation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="etablissements.php">Nos hôtels</a>
                </li>
                <li>
                    <a href="login.html"><img src="https://i.ibb.co/WPv9TY1/user.png" alt="compte" loading="lazy" class="nav_logo_account" href="login.html"></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="body">
        <div class="veen">
            <div class="login-btn splits">
                <p>Déja un compte ?</p>
                <button class="active">Se connecter</button>
            </div>
            <div class="rgstr-btn splits">
                <p>Déja un compte ?</p>
                <a href="login2.php"><button>Se connecter</button></a>
            </div>
            <div class="wrapper">
                
                <form id="login" tabindex="502" method="post">
                <?php if(isset($errorMsg)) { echo '<p>'.$errorMsg. '</p>' ; } ?>
                    <h3>S'inscrire</h3>
                    <div class="name">
                        <input type="text" name="lastname">
                        <label>Nom complet</label>
                    </div>
                    <div class="uid">
                        <input type="text" name="firstname">
                        <label>Prénom</label>
                    </div>
                    <div class="mail">
                        <input type="mail" name="mail">
                        <label>E-mail</label>
                    </div>
                    
                    <div class="passwd">
                        <input type="password" name="password">
                        <label>Mot de passe</label>
                    </div>
                    <div class="submit">
                        <button class="dark" name="validate" type="submit">S'inscrire</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <section>
        <!--footer-->
        <?php include('includes/footer.php'); ?>

    </section>



</body>