<?php

require('actions/database.php');

//Récupérer les hotels par défaut sans recherche
$getAllRooms = $bdd->query('SELECT chambre_id, chambre_title, chambre_description, chambre_price, chambre_lien FROM chambre ORDER BY chambre_title DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utlisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //La recherche
    $usersSearch = $_GET['search'];

    //Récupérer tous les hotels qui correspondent à la recherche (en fonction du titre)
    $getAllRooms = $bdd->query('SELECT chambre_id, chambre_title, chambre_description, chambre_price, chambre_lien FROM chambre WHERE chambre_title LIKE "%'.$usersSearch.'%" ORDER BY chambre_title DESC');

}