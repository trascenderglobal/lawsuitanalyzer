<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    if (!isset($_SESSION)) { 
        session_start(); 
    } 
    
    if(empty(isset($_SESSION['user']))){
        header('location: ../login.php');
    }
    
    require 'cnt.php';

    if (isset($_GET['user_id']) ){
        $_SESSION['wck'] = 'ck_0b3b4ac24f2fadd6811260e7b04f7841feaee86f';
        $_SESSION['wcs'] = 'cs_c1170ee6621d8a5a02087f26f875ed3ecc91c878';
        $user_id = $mysqli->real_escape_string($_GET['user_id']);
        $status = $mysqli->real_escape_string('In Process');
        $status2 = $mysqli->real_escape_string('Paid');
        
        if($PreResultado = $mysqli->prepare("SELECT * FROM form_responses where users_id = ? and (status = ? OR status = ?) ORDER BY start_date DESC")){
            $PreResultado->bind_param('iss', $user_id, $status,$status2);
            $PreResultado->execute();
            $resultado = $PreResultado->get_result();
            $num_rows = mysqli_num_rows($resultado);
            if ($num_rows > 1){
                $data = $resultado->fetch_all();
                $_SESSION['user_lr'] = $data[0][0];
                $_SESSION['user_ls'] = $data[0][2];
                $_SESSION['user_st'] = $data[0][5];
                $lr = $_SESSION['user_lr'];
                for ($i=0; $i < $num_rows; $i++) { 
                    # code...
                    if ($data[$i][5] == 'Paid'){
                        $_SESSION['user_lr'] = $data[$i][0];
                        $_SESSION['user_ls'] = $data[$i][2];
                        $_SESSION['user_st'] = $data[$i][5];
                        $lr = $_SESSION['user_lr'];
                        break;
                    }
                }
                echo  json_encode(array("lr" => $lr, "st" => $_SESSION['user_st']));
            }else if ($num_rows = 1){
                $data = $resultado->fetch_assoc();
                $_SESSION['user_lr'] = $data['id'];
                $_SESSION['user_ls'] = $data['last_step'];
                $_SESSION['user_st'] = $data['status'];
                echo json_encode(array("lr" => $_SESSION['user_lr'], "st" => $_SESSION['user_st']));
            } else {
                $step = 1;
                $status = 'In Process';
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
                    echo json_encode(array("lr" => $_SESSION['user_lr'], "st" => $_SESSION['user_st']));;
                }
            };
        }
    } else {
        echo 'error';
    }
}

?>