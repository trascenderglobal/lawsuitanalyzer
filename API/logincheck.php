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
                $data = $resultado->fetch_assoc();
                while ($data) {
                    # code...
                    if ( password_verify($pass,$data['user_pass'])){
                        $_SESSION['user_id'] = $data['id'];
                        $_SESSION['user'] = $data['user_nicename'];
                        $_SESSION['user_status'] = $data['user_status'];
                        $_SESSION['user_rol'] = $data['user_rol'];
                        die ('true');
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