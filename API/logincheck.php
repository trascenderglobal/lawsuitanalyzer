<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    sleep(1);
    ini_set("session.cookie_lifetime","1200");
    ini_set("session.gc_maxlifetime","1200");

    if (!isset($_SESSION)) { 
        session_start(); 
    } 

    
    require 'cnt.php';

    if (isset($_POST['user']) && isset($_POST['pass']) ){
        $user = $mysqli->real_escape_string($_POST['user']);
        $pass = $mysqli->real_escape_string($_POST['pass']);
        
        if($PreResultado = $mysqli->prepare("SELECT * FROM users where user_login = ? and user_status = ?")){
            $status = 'ACTIVE';
            $PreResultado->bind_param('ss', $user, $status);
            $PreResultado->execute();
            $resultado = $PreResultado->get_result();
            $num_rows = mysqli_num_rows($resultado);
            if ($num_rows  >= 1){
                $data = $resultado->fetch_all();
                for ($i=0; $i < $num_rows; $i++) { 
                    # code...
                    if ( password_verify($pass,$data[$i][2]) && $data[$i][8] == "admin"  ){
                        $_SESSION['user_id'] = $data[$i][0];
                        $_SESSION['user'] = $data[$i][3];
                        $_SESSION['email'] = $data[$i][4];
                        $_SESSION['user_status'] = $data[$i][6];
                        $_SESSION['user_rol'] = $data[$i][8];
                        $_SESSION['wck'] = 'ck_0b3b4ac24f2fadd6811260e7b04f7841feaee86f';
                        $_SESSION['wcs'] = 'cs_c1170ee6621d8a5a02087f26f875ed3ecc91c878';
                        echo ('true');
                        return;
                    }
                }
            }else {
                echo 'Invalid user or password';
            };
        }
    } else {
        echo 'error';
    }
}

?>