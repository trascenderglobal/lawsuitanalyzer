<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    if (!isset($_SESSION)) { 
        session_start(); 
    } 

    if(empty(isset($_SESSION['user']))){
        header('location: ../login.php');
    }
    
    header('Content-Type: application/json');

    require 'cnt.php';

    if (isset($_GET['act'])){$act= $_GET['act'];}
    if (isset($_GET['rid'])){$rid= $_GET['rid'];}
    

    switch ($act) {
        case 'users':
            if($PreResultado = $mysqli->prepare("SELECT * FROM view_users")){
                $PreResultado->execute();
                $resultado = $PreResultado->get_result();
                $num_rows = mysqli_num_rows($resultado);
                if ($num_rows >= 1){
                    echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));
                };
            };
            break;
        case 'resp' :
            if($PreResultado = $mysqli->prepare("SELECT * FROM view_responses")){
                $PreResultado->execute();
                $resultado = $PreResultado->get_result();
                $num_rows = mysqli_num_rows($resultado);
                if ($num_rows >= 1){
                    echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));
                };
            };
            break;
        case 'answ' :
            if($PreResultado = $mysqli->prepare("SELECT * FROM view_answers WHERE id = $rid")){
                $PreResultado->execute();
                $resultado = $PreResultado->get_result();
                $num_rows = mysqli_num_rows($resultado);
                if ($num_rows >= 1){
                    echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));
                };
            };
            break;        
        
        }
    
}

?>