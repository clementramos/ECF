<?php

require('actions/database.php');

$getAllMyHotels = $bdd->prepare('SELECT etablissement_id, etablissement_city, etablissement_description FROM etablissements WHERE etablissement_id = ? ORDER BY etablissement_id DESC');
$getAllMyHotels->execute(array($_SESSION['auth']));