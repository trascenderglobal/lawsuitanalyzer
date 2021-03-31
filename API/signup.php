<?php
    require 'cnt.php';

    try {
        if((!empty($_POST['usn']) || !empty($_POST['email'])) && !empty($_POST['password']) && !empty($_POST['password1'])){
            $usn  = $mysqli->real_escape_string($_POST['usn']);
            $email= $mysqli->real_escape_string($_POST['email']);
            $password=$_POST['password'];
            $password1=$_POST['password'];
            $password2=$_POST['password1'];
            $password= password_hash($password , PASSWORD_DEFAULT, array("cost" => 15));
            //Change bit to 1
            $bit=0;
            $confirmation=md5(uniqid(rand()));
            $subject="Your confirmation link from Lawsuit Analyzer";
            $header= array("From: affiliates@lawsuitanalysis.com","Content-type: text/html");
            $message='
            
                <html>
                <head>
                <title>Lawsuit Analyzer</title>
                </head>
    
                <body>
    
                <div  style=" border:1px solid grey; padding:20px;">
                        <div style="font-size: 28px; margin: 30px;color:#C0392B; text-align: center;">
                            <strong>Hello, Welcome to Lawsuit Analyzer<sup>©</sup>!</strong> 
                        </div>
                        <p> Dear User,<br><br>
                                We really appreciate you signing up to LawSuit Analyzer<sup>©</sup>.
                        </p>
                        <br>
                        <p>Here is your login details : </p>
                        <hr style="color:grey; text-align: center;">
    
                        <span  style="color:#C0392B;">Name:</span> '.$usn.' <br>
                        <span  style="color:#C0392B;">Email:</span> '.$email.' <br>
                        <span  style="color:#C0392B;">Password:</span> Your Nominated Password <br>
    
                        <hr style="color:grey; text-align: center;"><br>
                        <div style="width:100%;background-color:#C0392B;line-height:40px;margin:0px auto;border-radius: .25rem;" >
                            <a href="https://lawsuitanalysis.com/analyzer/cfrm.php?usn='.$usn.'&passkey='.$confirmation.'&email='.$email.'" style="color:white;text-align:center;text-decoration:none;display:block;"> Activate My Account </a>
                        </div>       
                        <br><br>
                        <div>
                            Self-help services may not be permitted in all states. The information provided on this site is not legal advice, does not constitute a lawyer referral service, and no attorney-client or confidential relationship is or will be formed by use of the site. The attorney listings on this site are paid attorney advertising. In some states, the information on this website may be considered a lawyer referral service. Please reference the Terms of Use and the Supplemental Terms for specific information related to your state. Your use of this website constitutes acceptance of the Terms of Use, Disclaimer, Supplemental Terms, Privacy Policy and Cookie Policy.
                        </div>
    
                </div>
    
                </body>
                </html>	
                        
                
            
            ';
            
            if($password1!=$password2){
                $_SESSION['msg2']="<span style=\"color:red\"><b>Passwords do not match.</b></span><br><br><br>";
                echo json_encode(array("success" => false, "message" => 'Passwords do not match'));
            } else {
                if ($PreResultado = $mysqli->prepare("SELECT * FROM users where user_email = ?")){
                    $PreResultado->bind_param('s', $email);
                    $PreResultado->execute();
                    $resultado = $PreResultado->get_result();
                    $num_rows = mysqli_num_rows($resultado);
                    if ($num_rows == 1){
                        $_SESSION['msg2']="<span style=\"color:red\"><b>Your account already exists.</b></span><br><br><br>";
                        echo json_encode(array("success" => false, "message" => 'Your account already exists. Check your email.'));
                    } else {
                        $status = 'NEW' ;
                        $rol = 'CLIENT';
                        $PreResultado = $mysqli->prepare("INSERT INTO users (user_login,user_pass,user_nicename,user_email,user_status,user_confirmation,user_rol) 
                                                            VALUES (?,?,?,?,?,?,?)");
                        $PreResultado->bind_param('sssssss', $email,$password,$usn,$email,$status,$confirmation,$rol);
                        $PreResultado->execute();
                        $num_rows = $mysqli->affected_rows;
                        if ($num_rows > 0) {
                            $to=$email;
                            $sentmail = mail($to,$subject,$message,implode("\r\n",$header)) 
                                or die(json_encode(array("success" => false, "message" => 'Error sending email. "https://lawsuitanalysis.com/analyzer/cfrm.php?usn='.$usn.'&passkey='.$confirmation.'&email='.$email.'"')));
                            $_SESSION['msg2']="<div style=\"color:green\"><b>A confirmation link has been sent to $to.<br>Please click on it to activate your account.</b></div><br>";    
                            echo json_encode(array("success" => true, "message" => "A confirmation link has been sent to $to. Please click on it to activate your account."));
                        
                        } else {
                            die(json_encode(array("success" => false, "message" => 'Error creating user.')));
                        }               
                    };
                } else {
                    die(json_encode(array("success" => false, "message" => 'Error reading data.')));
                }
            }
        }
        else{
            $_SESSION['msg2']="<div style=\"color:red\"><b>Please fill all the details.</b></div><br><br>";
            echo json_encode(array("success" => false, "message" => 'Please fill all the details'));
            return;
        }
    } catch (\Throwable $th) {
        echo json_encode(array("success" => false, "message" => $th->getMessage() . $th));
    }




?>