<?php

require('actions/database.php');

//Récupérer les hotels par défaut sans recherche
$getAllReservations = $bdd->query('SELECT reservation_id, reservation_arrival, reservation_departure, reservation_first_name, reservation_last_name, reservation_email, reservation_adults, reservation_children, reservation_hotel_pref FROM reservation ORDER BY reservation_id DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utlisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //La recherche
    $usersSearch = $_GET['search'];

    //Récupérer tous les hotels qui correspondent à la recherche (en fonction du titre)
    $getAllReservations = $bdd->query('SELECT reservation_id, reservation_arrival, reservation_departure, reservation_first_name, reservation_last_name, reservation_email, reservation_adults, reservation_children, reservation_hotel_pref FROM reservation WHERE reservation_id LIKE "%'.$usersSearch.'%" ORDER BY etablissement_id DESC');

}