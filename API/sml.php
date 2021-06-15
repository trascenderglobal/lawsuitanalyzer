<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'cnt.php';
    session_start();  
    try {
        //code...
        $pdf_file = $_POST['file'];
        $mailTo = $_POST['mailTo'];
        $license = $_SESSION['lk'];
        require '../vendor/autoload.php';     
        $mpdf = new \Mpdf\Mpdf();
        $mpdf->WriteHTML($pdf_file);
        $pdf = $mpdf->Output("../results/TestResults-" . $license . ".pdf", \Mpdf\Output\Destination::FILE);

        $mail = new PHPMailer(true);

        //Recipients
        $mail->setFrom('affiliates@lawsuitanalysis.com', 'Lawsuit Analyzer');
        $mail->addAddress($mailTo);               //Name is optional
        $mail->addBCC('diegoveloza@trascenderglobal.com');

        //Attachments
        $mail->addAttachment("../results/TestResults-" . $license . ".pdf");         //Add attachments

        //Content
        $mail->isHTML(true);                                //Set email format to HTML
        $mail->Subject = 'Your results from Lawsuit Analyzer';
        $mail->Body    = '
                <html>
                <head>
                    <meta charset="utf-8">
                    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
                    <title>Lawsuit Analyzer</title>
                </head>

                <body>

                <div  style=" border:1px solid grey; padding:20px;">
                        <div style="font-size: 28px; margin: 30px;color:#C0392B; text-align: center;">
                            <p><strong>Lawsuit Analyzer<sup>©</sup>!</strong></p> 
                        </div>
                        <p> Dear User,<br><br>
                        You have completed Lawsuit Analyzer©. We hope you have found the process helpful.
                        </p>
                        <br>
                        <br><br>
                        <div>
                            Self-help services may not be permitted in all states. The information provided on this site is not legal advice, does not constitute a lawyer referral service, and no attorney-client or confidential relationship is or will be formed by use of the site. The attorney listings on this site are paid attorney advertising. In some states, the information on this website may be considered a lawyer referral service. Please reference the Terms of Use and the Supplemental Terms for specific information related to your state. Your use of this website constitutes acceptance of the Terms of Use, Disclaimer, Supplemental Terms, Privacy Policy and Cookie Policy.
                        </div>

                </div>

                </body>
                </html>';
        $mail->send();

    } catch (\Throwable $th) {
        //throw $th;
        echo json_encode(array("success" => false, "message" => 'Error sending results email. ', "Details" => $th->getMessage()));
    }

?>