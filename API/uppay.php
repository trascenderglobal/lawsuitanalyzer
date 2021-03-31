<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    if (!isset($_SESSION)) { 
        session_start(); 
    } 

    if(empty(isset($_SESSION['user']))){
        header('location:login.php');
    }
    
    require 'cnt.php';

    if (isset($_GET['uslr'])){$uslr= $_GET['uslr'];}
    if (isset($_GET['usid'])){$usid= $_GET['usid'];}
    
    $arr = $_POST['data'];

    //Udpate status Paid
    $index = 0;
    $ans = "Paid";
    foreach ($arr as $answer) {
        $PreResultado = $mysqli->prepare("UPDATE form_responses SET status=?,Order_Number=?,Order_Status=?  WHERE id = ?");
        $PreResultado-> bind_param('sisi',$ans,$answer['ord'],$answer['sts'],$uslr);
        $PreResultado->execute();
        $num_rows =  $mysqli->affected_rows;
        if ($num_rows > 0) {
            $index =  $index + 1 ;
        };   
    }

    
    //Update Status CUSTOMER
    $index2 = 0;
    $ans = "CUSTOMER";
    $PreResultado = $mysqli->prepare("UPDATE users SET user_rol = ? WHERE id = ?");
    $PreResultado-> bind_param('si',$ans, $usid);
    $PreResultado->execute();
    $num_rows =  $mysqli->affected_rows;
    if ($num_rows > 0) {
        $index =  $index + 1 ;
    };

    echo ('Updated: '  . $index . ' Rows.');
}

?>
