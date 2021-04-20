<?php
    require 'cnt.php';

    try {
        //code...
        $arr = $_POST['data'];
        $email = $_POST['email'];
        //Identify URL
        if (strpos($arr[5]['Values'][51],'91% and above') === 0){$hp = '24';}
        if (strpos($arr[5]['Values'][51],'81% to 90%') === 0){$hp = '24-1';}
        if (strpos($arr[5]['Values'][51],'71% to 80%') === 0){$hp = '24-2';}
        if (strpos($arr[5]['Values'][51],'61% to 70%') === 0){$hp = '24-3';}
        if (strpos($arr[5]['Values'][51],'51% to 60%') === 0){$hp = '24-4';}
        if (strpos($arr[5]['Values'][51],'50% and below') === 0){$hp = '24-5';}
        $URL_Step6 = "https://lawsuitanalysis.com/p6-hp" . $hp;

        if (strpos($arr[6]['Values'][57],'Small Claims') === 0){$hp = '25';}
        if (strpos($arr[6]['Values'][57],'Binding Arbitration') === 0){$hp = '25-1';}
        if (strpos($arr[6]['Values'][57],'Upper Civil Court') === 0){$hp = '25-2';}
        if (strpos($arr[6]['Values'][57],'Mediation') === 0){
            if(strpos($arr[6]['Values'][53],'Small Claims') === 0){$hp = '25-3';}
            if(strpos($arr[6]['Values'][53],'Binding Arbitration') === 0){$hp = '25-4';}
            if(strpos($arr[6]['Values'][53],'Upper Civil Court') === 0){$hp = '25-5';}
        };
        $URL_Step7 = "https://lawsuitanalysis.com/p7-hp" . $hp;


        $subject="Your results from Lawsuit Analyzer";
        $header= array("From: affiliates@lawsuitanalysis.com","Content-type: text/html","Bcc: paulrclarkjr@gmail.com");
        $message='
        
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
                    You have completed Lawsuit Analyzer©. We hope you have found the process helpful. You will find in this email the following:.
                    </p>
                    <br>
                    <hr style="color:grey; text-align: center;">
                    <p><strong>Your Phase 5 results "Compressive Case Analysis"</strong></p>
                    <table>
                        <thead style="color: #345B99;">
                            <tr>
                                <th colspan="2" scope="col">Results Carried Forward:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Phase 1, Legal Evaluation [Range: 0 or 350]</td>
                                <td id="tbl-row-1">'.$arr[4]['Values'][41].'</td>   
                            </tr>
                            <tr>
                                <td>Phase 2, Damage Assessment [Range: 5-50]</td>
                                <td id="tbl-row-3">'.$arr[4]['Values'][43].'</td>   
                            </tr>
                            <tr>
                                <td>Phase 3, Legal Options Assessment [Range: 0-190]</td>
                                <td id="tbl-row-4">'.$arr[4]['Values'][44].'</td>   
                            </tr>
                            <tr>
                                <td>Phase 4, Collectability Assessment [Range 20-150]</td>
                                <td id="tbl-row-5">'.$arr[4]['Values'][45].'</td>
                            </tr>
                        </tbody>
                        <thead style="color: #345B99;">                         
                            <tr>
                                <th colspan="2" scope="col">Comprehensive Case Assessment:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Case Feasibility Assessment [Range 20-100%]</td>
                                <td id="tbl-row-6">'. round (($arr[4]['Values'][50] * 100),0) .'%</td>   
                            </tr>                                                            
                            <tr>
                                <td>Gross Damages</td>
                                <td id="tbl-row-7">$'.$arr[4]['Values'][47].'</td>   
                            </tr>
                            <tr>
                                <td>Recoverable Damages</td>
                                <td id="tbl-row-8">$'.$arr[4]['Values'][48].'</td>   
                            </tr>
                            <tr>
                                <td>Net Damages</td>
                                <td id="tbl-row-9">$'.$arr[4]['Values'][42].'</td>   
                            </tr>
                            <tr>
                                <td>Pre-Litigation Settlement Amount</td>
                                <td id="tbl-row-10">$'. round ($arr[4]['Values'][49],0).'</td>
                            </tr>
                        </tbody>
                    </table>
                    <p><a href="https://lawsuitanalysis.com/p5-hp23/" target = "_blank">Click Here</a> to get more info.</p>
                    <br>
                    <hr style="color:grey; text-align: center;">
                    <p><strong>Your Phase 6 Feasibility Assessment</strong></p>
                    <p>'.$arr[5]['Values'][51].'</p>
                    <p><a href= "'. $URL_Step6 .'" target = "_blank">Click Here</a> to get more info.</p>
                    <br>
                    <hr style="color:grey; text-align: center;">
                    <p><strong>Your Phase 7 Forum Assessment</strong></p>
                    <p>Your answers indicate the Forum in which you will pursue your dispute will be:</p>
                    <p><strong>'.$arr[6]['Values'][57].'</strong></p>
                    <p>However, If your dispute is unsuccessful, your next step is the Forum Below:</p>
                    <p><strong>'.$arr[6]['Values'][53].'</strong></p>
                    <p><a href= "'. $URL_Step7 .'" target = "_blank">Click Here</a> to get more info.</p>
                    <hr style="color:grey; text-align: center;">
                    <br><br>
                    <div>
                        Self-help services may not be permitted in all states. The information provided on this site is not legal advice, does not constitute a lawyer referral service, and no attorney-client or confidential relationship is or will be formed by use of the site. The attorney listings on this site are paid attorney advertising. In some states, the information on this website may be considered a lawyer referral service. Please reference the Terms of Use and the Supplemental Terms for specific information related to your state. Your use of this website constitutes acceptance of the Terms of Use, Disclaimer, Supplemental Terms, Privacy Policy and Cookie Policy.
                    </div>

            </div>

            </body>
            </html>	
        ';

        $to=$email;
        $sentmail = mail($to,$subject,$message,implode("\r\n",$header)) 
            or die(json_encode(array("success" => false, "message" => 'Error sending results email.')));    
        echo json_encode(array("success" => true, "message" => "The results has been sent to $to."));

    } catch (\Throwable $th) {
        //throw $th;
        echo json_encode(array("success" => false, "message" => 'Error sending results email.', "Details" => $th->getMessage()));
    }


?>