<?php
session_start();

if(empty(isset($_SESSION['user']))){
  header('location:login.php');
}
session_destroy();
header('location:login.php');


?>