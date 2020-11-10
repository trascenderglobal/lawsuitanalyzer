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
    
    if($PreResultado = $mysqli->prepare("SELECT id,user_nicename,user_email,user_status,user_rol FROM users")){
        $PreResultado->execute();
        $resultado = $PreResultado->get_result();
        /*
        $data = array();
        while($row = mysqli_fetch_array($resultado)){
            $sub_array = array();
            $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="user_nicename">' . $row["user_nicename"] . '</div>';
            $sub_array[] = '<div contenteditable class="update" data-id="'.$row["id"].'" data-column="user_email">' . $row["user_email"] . '</div>';
            $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["id"].'">Delete</button>';
            $data[] = $sub_array;
        };

        $output = array(
            "recordsTotal"  =>  mysqli_num_rows($resultado),
            "data"    => $data
           );
           
        echo json_encode($output);
        */
        
        $num_rows = mysqli_num_rows($resultado);
        if ($num_rows >= 1){
            echo json_encode($resultado->fetch_all(MYSQLI_ASSOC));
        };

    }
    
}

?>