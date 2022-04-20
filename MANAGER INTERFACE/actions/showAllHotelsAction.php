<?php

require('actions/database.php');

//Récupérer les hotels par défaut sans recherche
$getAllHotels = $bdd->query('SELECT etablissement_id, etablissement_title, etablissement_city, etablissement_adress, etablissement_description, etablissement_date FROM etablissements ORDER BY etablissement_id DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utlisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //La recherche
    $usersSearch = $_GET['search'];

    //Récupérer tous les hotels qui correspondent à la recherche (en fonction du titre)
    $getAllHotels = $bdd->query('SELECT etablissement_id, etablissement_title, etablissement_city, etablissement_adress, etablissement_description, etablissement_date FROM etablissements WHERE etablissement_id LIKE "%'.$usersSearch.'%" ORDER BY etablissement_id DESC');

}