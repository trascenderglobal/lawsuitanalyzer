<?php
    //require($_SERVER['DOCUMENT_ROOT'].'/wordpress/obsequiosespeciales.com/wp-load.php');
    //require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');

?>

<!DOCTYPE html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Lawsuit Analyzer</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/jquery.steps.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="shortcut icon" type="image/png" href="../analyzer/assets/Lawsuit-Analysis-Logo.png" >
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <script src="lib/modernizr-2.6.2.min.js"></script>
        <script src="lib/jquery-3.5.1.min.js"></script>
        <script src="lib/jquery.cookie-1.3.1.js"></script>
        <script src="js/bootstrap.js"  > </script>
        <script src="build/jquery.steps.js"></script> 
        <style>

            form {border: 3px solid #f1f1f1;}

            input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            }

            button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
            }

            button:hover {
            opacity: 0.8;
            }

            .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
            }

            .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            }

            img.avatar {
            width: 40%;
            border-radius: 50%;
            }

            .container {
            padding: 16px;
            }

            span.psw {
            float: right;
            padding-top: 16px;
            }

            html { font-size: 1rem; }
            h1,h3 { color: #9E2D2D ; }
            label { color: #345B99;}
            
            @media screen and (max-width: 300px) {
                span.psw {
                    display: block;
                    float: none;
                }
                .cancelbtn {
                    width: 100%;
                }
            }

            @media (max-width: 576px) {
                html { font-size: 1rem; }
                h2 {font-size: 1.75rem}
                h3 {font-size: 1.25rem}
                .wizard > .content {min-height: auto/*45em*/ }
                #StepCollapse { display: block; }
                .wizard.vertical > .steps {display: none;}
            }
            @media (min-width: 768px) {
                html { font-size: 1rem; }
                h2 {font-size: 2rem}
                h3 {font-size: 1.5rem}
                .wizard > .content {min-height: auto/*45em*/ }
                .wizard.vertical > .steps {display: inline;}
            }
            @media (min-width: 1200px) {
                html { font-size: 1.25rem; }
                .wizard > .content {min-height: auto/*25em*/ }
                .wizard.vertical > .steps {display: inline;}
            }

        </style>
    </head>
    <body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">

        <header>
            <?php  
                //define( 'WP_USE_THEMES', false );
                //get_header(); 
            ?>

            <h1 style="text-align: center;">Lawsuit Analyzer</h1>
            <h4 style="text-align: center;"> Receive a professional legal analysis of your dispute</h4>
        </header>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 sm-12">
                        
                    </div>
                    <div class="col-lg-4 sm-12">
                        <form action="" id = "formlogin" method="post">
                            <div class="imgcontainer">
                                <img src="../analyzer/assets/Lawsuit-Analysis-Logo.png" alt="Avatar" class="avatar"  width="519" height="173">
                            </div>

                            <div class="container">
                                <label for="usuariolg"><b>Username</b></label>
                                <input id = "usuariolg" type="text" placeholder="Enter Username" name="usuariolg" required>

                                <label for="passlg"><b>Password</b></label>
                                <input id = "passlg" type="password" placeholder="Enter Password" name="passlg" required>
                                    
                                <button type="submit" id="login">Login</button>
                                <!-- 
                                <label>
                                    <input type="checkbox" checked="checked" name="remember"> Remember me
                                </label>
                                -->
                            </div>
                            <!--
                            <div class="container" style="background-color:#f1f1f1">
                                <button type="button" class="cancelbtn">Cancel</button>
                                <span class="psw">Forgot <a href="#">password?</a></span>
                            </div>
                            -->
                        </form>                     
                    </div>
                    <div class="col-lg-4 sm-12">
                        
                    </div>                
                </div>
            </div>
           
        </div>

    </body>

</html>

<script>
    $(document).ready(function(){
        $('#login').click(function(){
            event.preventDefault();
            validar_login();
        });

        function validar_login(){
            var user = $('#usuariolg').val();
            var pass = $('#passlg').val();
            if($.trim(user).length > 0 && $.trim(pass).length > 0){
                $('#login').text('Please Wait...');
                console.log('Ejecutando.')
                $.ajax({
                    url: 'API/logincheck.php',
                    type: 'POST',
                    data: {user: user, pass: pass},
                    cache: 'false',
                    beforesend:function(){
                        $('#login').text('Please Wait...');
                    },
                    success:function(data){                    
                        $validacion = data
                        if($validacion == 'true'){
                            $('#login').text('Login Successful');
                            $(location).attr('href','index.php');
                            console.log('Entro..');
                        } else {
                            $('#login').css('background-color', '#ffdddd');
                            $('#login').css('color', 'black');
                            $('#login').text('Try Again');
                            setTimeout(() => { 
                                $('#login').css('background-color', '');
                                $('#login').css('color', '');
                                $('#login').text('Login');
                            },2000);
                            console.log('No Entro..');
                        }
                    }
                }) ;
            };
        };
    });

</script>