<?php

if (!isset($_SESSION)) { 
  session_start(); 
} 

if(empty(isset($_SESSION['user']))){
  header('location:login.php');
}
session_destroy();
header('location:login.php');


?>