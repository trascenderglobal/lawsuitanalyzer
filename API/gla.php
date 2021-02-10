<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    if (!isset($_SESSION)) { 
        session_start(); 
    } 
    
    if(empty(isset($_SESSION['user']))){
        header('location: ../login.php');
    }
    
    require 'cnt.php';

    if (isset($_GET['user_lr']) ){
        $user_lr = $mysqli->real_escape_string($_GET['user_lr']);
        
        if($PreResultado = $mysqli->prepare("SELECT form_questions_id , answer
                                                FROM view_fully_response 
                                                where user_lr = ? ORDER BY form_questions_id ASC")){
            $PreResultado->bind_param('i', $user_lr);
            $PreResultado->execute();
            $resultado = $PreResultado->get_result();
            $num_rows = mysqli_num_rows($resultado);
            if ($num_rows >= 1){
                $data = $resultado->fetch_all();
                echo json_encode($data);
            };
        }
    } else {
        echo 'error';
    }
}

?>