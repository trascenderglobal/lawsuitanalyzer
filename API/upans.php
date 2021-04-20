<?php

if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
    sleep(1);
    if (!isset($_SESSION)) { 
        session_start(); 
    } 

    if(empty(isset($_SESSION['user']))){
        header('location:login.php');
    }
    
    require 'cnt.php';

    if (isset($_GET['act'])){$act= $_GET['act'];}
    if (isset($_GET['uslr'])){$uslr= $_GET['uslr'];}
    if (isset($_GET['usls'])){$usls= $_GET['usls'];}

    switch ($act) {
        case 'end':
            # code...
            $index = 0;
            $ans = $mysqli->real_escape_string('Completed');
            $PreResultado = $mysqli->prepare("UPDATE form_responses SET status = ? WHERE id = ?");
            $PreResultado-> bind_param('si',$ans,$uslr);
            $PreResultado->execute();
            $num_rows =  $mysqli->affected_rows;
            if ($num_rows > 0) {
                $index =  $index + 1 ;
            };
            echo ('Updated: '  . $index . ' Rows.');
            break;
        case 'upt':
            # code...
            $values = "";
            $arr = $_POST['data'];
            $index = 0;
            $updatedfields = '';
            foreach ($arr as $answer) {
                if (isset($answer['answer'])){
                    $ans = $mysqli->real_escape_string($answer['answer']);
                    $PreResultado = $mysqli->prepare("UPDATE form_answers SET answer = ? WHERE form_responses_id = ? AND form_questions_id = ?");
                    $PreResultado-> bind_param('sii',$ans, $uslr,$answer['form_questions_id']);
                    $PreResultado->execute();
                    $num_rows =  $mysqli->affected_rows;
                    if ($num_rows > 0) {
                        $index =  $index + 1 ;
                        $updatedfields = $updatedfields . ' | ' . $answer['form_questions_id'] . '' . $ans ;                    
                    };
                }
            } 
            $stps = 0;    
            if (isset($_GET['usls']) && isset($_GET['uslr']) ){
                $PreResultado = $mysqli->prepare("UPDATE form_responses SET last_step = ? WHERE id = ? ");
                $PreResultado-> bind_param('ii',$usls,$uslr);
                $PreResultado->execute();
                $num_rows =  $mysqli->affected_rows;
                if ($num_rows > 0) {
                    $stps = $num_rows;
                }           
            }             
            echo ('Updated: '  . $index . ' Rows and ' . $num_rows . ' Step.');
            break;
        case 'res':
                # code...
                $values = "";
                $arr = $_POST['data'];
                $index = 0;
                $updatedfields = '';
                foreach ($arr as $answer) {
                    if (isset($answer['answer'])){
                        $ans = $mysqli->real_escape_string($answer['answer']);
                        $PreResultado = $mysqli->prepare("UPDATE form_answers SET answer = ? WHERE form_responses_id = ? AND form_questions_id = ?");
                        $PreResultado-> bind_param('sii',$ans, $uslr,$answer['form_questions_id']);
                        $PreResultado->execute();
                        $num_rows =  $mysqli->affected_rows;
                        if ($num_rows > 0) {
                            $index =  $index + 1 ;
                            $updatedfields = $updatedfields . ' | ' . $answer['form_questions_id'] . '' . $ans ;                    
                        };
                    }
                } 
                $stps = 0;    
                if (isset($_GET['usls']) && isset($_GET['uslr']) ){
                    $PreResultado = $mysqli->prepare("UPDATE form_responses SET last_step = ? WHERE id = ? ");
                    $PreResultado-> bind_param('ii',$usls,$uslr);
                    $PreResultado->execute();
                    $num_rows =  $mysqli->affected_rows;
                    if ($num_rows > 0) {
                        $stps = $num_rows;
                    }           
                }             
                echo ('Updated: '  . $index . ' Rows and ' . $num_rows . ' Step.');
                break;
        }
}

?>