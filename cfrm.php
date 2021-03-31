<?php

    require 'API/cnt.php';
	
	if((!empty($_GET['usn']) || !empty($_GET['email']) ) && !empty($_GET['passkey']))
	{
		$usn = $mysqli-> real_escape_string($_GET['usn']);
		$passkey = $mysqli-> real_escape_string($_GET['passkey']);
		$email = $mysqli->real_escape_string($_GET['email']);
        if($PreResultado = $mysqli->prepare("SELECT * FROM users where user_login = ? and user_email = ? and user_confirmation = ?")){
            //$status = 'NEW';
            $PreResultado->bind_param('sss', $usn,$email,$passkey);
            $PreResultado->execute();
            $resultado = $PreResultado->get_result();
            $num_rows = mysqli_num_rows($resultado);
            $data = $resultado->fetch_assoc();
            if ($num_rows  >= 1 && $data['user_status'] == 'NEW'){
                $usid = $data['id'];
                $status = 'ACTIVE';
                $PreResultado = $mysqli->prepare("UPDATE users SET user_status = ? WHERE id = ?");
                $PreResultado->bind_param('si', $status,$usid);
                $PreResultado->execute();
                $resultado = $PreResultado->get_result();
                if ($num_rows > 0) {
                    $_SESSION['msg1']="<div style=\"color:green\">Your account <b>has been activated</b> successfully. You can login <a href = 'https://lawsuitanalysis.com/analyzer/login.php'>here</a></div><br><br>";                    
                } else {
                    $_SESSION['msg1']="<div style=\"color:red\"><b>Error activating account. Please contact support.</b></div><br><br>";                    
                }
            } else {
                $_SESSION['msg1']="<div style=\"color:black\">Your account <b>has already been activated.</b> You can login <a href = 'https://lawsuitanalysis.com/analyzer/login.php'>here</a></div><br><br>";                    
            };
        } else {
            $_SESSION['msg1']= "error";
            echo 'error';
        }
	}
	echo $_SESSION['msg1'];
?>