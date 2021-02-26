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

    switch ($act) {
        case 'ins':
            # code...
            /*
            $values = "";
            $arr = $_POST['data'];
            $index = 0;
            foreach ($arr as $answer) {
                if (isset($answer['answer'])){ 
                    $values = $values . "(" . $uslr . "," . $answer['form_questions_id'] . ",'" . $answer['answer'] . "')";
                } else {
                    $values = $values . "(" . $uslr . "," . $answer['form_questions_id'] . ",'')";
                }
                $index =  $index + 1;
                if (count($arr) > 1 & $index != count($arr)) { $values = $values . "," ;}
            }
            $insercion = "INSERT INTO form_answers (form_responses_id, form_questions_id,answer)
                                VALUES $values ";
            //$resultado = $mysqli->query($insercion);
            //echo json_encode($resultado);
            print_r ($insercion);
            break;
            */
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
            echo ('Updated: '  . $index . ' Rows ');
            break;
    }
}

?>