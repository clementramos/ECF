<?php
if(!isset($_SESSION['auth'])){
    header('Location: login2.php');
}