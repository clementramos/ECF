<?php

require('actions/database.php');

//Récupérer les managers par défaut sans recherche
$getAllManagers = $bdd->query('SELECT manager_id, manager_name, manager_surname, manager_password, manager_mail FROM manager ORDER BY manager_id DESC LIMIT 0,5');

//Vérifier si une recherche a été rentrée par l'utlisateur
if(isset($_GET['search']) AND !empty($_GET['search'])){

    //La recherche
    $usersSearch = $_GET['search'];

    //Récupérer tous les Managers qui correspondent à la recherche (en fonction du titre)
    $getAllManagers = $bdd->query('SELECT manager_id, manager_name, manager_surname, manager_password, manager_mail FROM manager WHERE manager_id LIKE "%'.$usersSearch.'%" ORDER BY etablissement_id DESC');

}