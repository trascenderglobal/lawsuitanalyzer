<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    sleep(1);
    session_start();

    if(empty(isset($_SESSION['user']))){
        header('location: ../login.php');
    }
    
    require 'cnt.php';

    if (isset($_POST['user_id']) ){
        $user_id = $mysqli->real_escape_string($_POST['user_id']);
        $status = $mysqli->real_escape_string('On Process');
        
        if($PreResultado = $mysqli->prepare("SELECT * FROM form_responses where users_id = ? and status = ? ORDER BY start_date DESC")){
            $PreResultado->bind_param('is', $user_id, $status);
            $PreResultado->execute();
            $resultado = $PreResultado->get_result();
            $num_rows = mysqli_num_rows($resultado);
            if ($num_rows >= 1){
                $data = $resultado->fetch_assoc();
                $_SESSION['user_lr'] = $data['id'];
                $_SESSION['user_ls'] = $data['last_step'];
                $_SESSION['user_st'] = $data['status'];
                echo $data['id'];
            }else {
                $step = 1;
                $status = 'On Process';
                $PreResultado = $mysqli->prepare("INSERT INTO form_responses (users_id,last_step,status) VALUES (?, ?, ? )");
                $PreResultado->bind_param('iss', $user_id, $step,$status);
                $PreResultado->execute();
                $resultado = $PreResultado->get_result();
                sleep(3);
                $PreResultado = $mysqli->prepare("SELECT * FROM form_responses where users_id = ? and status = ? ORDER BY start_date DESC");
                $PreResultado->bind_param('is', $user_id, $status);
                $PreResultado->execute();
                $resultado = $PreResultado->get_result();
                $num_rows = mysqli_num_rows($resultado);
                if ($num_rows >= 1){
                    $data = $resultado->fetch_assoc();
                    $_SESSION['user_lr'] = $data['id'];
                    $_SESSION['user_ls'] = $data['last_step'];
                    $_SESSION['user_st'] = $data['status'];
                    echo $data['id'];
                }
            };
        }
    } else {
        echo 'error';
    }
}

?>