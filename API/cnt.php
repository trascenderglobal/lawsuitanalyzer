<?php
    //$mysqli = new mysqli( 'localhost','ofeliac2_adminbl', 'Happy2Day.,','ofeliac2_ordenes_oc');
    $mysqli = new mysqli( 'localhost','root', '','lawsuit_analyzer_form');
    $mysqli->set_charset('utf8');
    
    if($mysqli -> connect_errno ):
        echo 'Error al conectarse con MySQL: ' .$mysqli->connect_error ;
    endif;
?>