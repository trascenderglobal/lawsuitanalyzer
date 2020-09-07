<?php
    require($_SERVER['DOCUMENT_ROOT'].'/wordpress/obsequiosespeciales.com/wp-load.php');
    //require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
    session_start();
    if(empty(isset($_SESSION['user']))){
      header('location:login.php');
    }
    if(isset($_SESSION['user'])){
        if ($_SESSION['user'] == 'admin') {
            header('location:login.php');
        }
    }
?>