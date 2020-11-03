<?php
    //require($_SERVER['DOCUMENT_ROOT'].'/wordpress/obsequiosespeciales.com/wp-load.php');
    //require($_SERVER['DOCUMENT_ROOT'].'/wp-load.php');
    session_start();
    if(empty(isset($_SESSION['user']))){
      header('location:login.php');
    }

?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
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
    </head>
    <body style="font-family: 'Montserrat';">

    <style>
        /* Style the form */
        #Step1,#Step2,#Step3,#Step4,#Step5,#Step6,#Step7 {
            /*text-align: ;background-color: #ffffff;*/
            margin: auto;
            padding-top: 15px;
            width: 80%;
            min-width: 300px;
            display: contents;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            border: 'none';
            border-bottom: 1px solid #aaaaaa;
        }

        /* Mark form elements that gets an error on validation: */
        input.invalid,textarea.invalid,select.invalid {
            background-color: #ffdddd;
        }
        input.valid,textarea.valid,select.valid {
            background-color: white;
        }
        /* Hide all steps by default: */
        .tab {
            display: none;
        }

        /* Make circles that indicate the steps of the form: */
        .step {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbbbbb;
            border: none;
            border-radius: 50%;
            /*display: inline-block;*/
            opacity: 0.5;
        }

        /* Mark the active step: */
        .step.active {
            opacity: 1;
        }

        /* Mark the steps that are finished and valid: */
        .step.finish {
            background-color: #4CAF50;
        }

        html { font-size: 1rem; }
        h1,h3 { color: #9E2D2D ; }
        label,h4 { color: #345B99;}
        strong {color: #8fc2d1;}

        @media (max-width: 576px) {
            html { font-size: 1rem; }
            h2 {font-size: 1.75rem}
            h3 {font-size: 1.25rem}
            .wizard > .content {min-height: auto/*45em*/ }
            #StepCollapse { display: block; }
            .wizard.vertical > .steps {display: none;}
            .helpimg {
                width: 50px;
            }
        }
        @media (min-width: 768px) {
            html { font-size: 1rem; }
            h2 {font-size: 2rem}
            h3 {font-size: 1.5rem}
            .wizard > .content {min-height: auto/*45em*/ }
            .wizard.vertical > .steps {display: inline;}
            .helpimg {
                width: 80px;
            }
        }
        @media (min-width: 1200px) {
            html { font-size: 1.25rem; }
            .wizard > .content {min-height: auto/*25em*/ }
            .wizard.vertical > .steps {display: inline;}
            .helpimg {
                width: 80px;
            }
        }
    </style>



        <header>
            <?php  
                //define( 'WP_USE_THEMES', false );
                //get_header(); 
            ?>
            <div class="row" style="margin: 0px;">
                <div class="col" style="text-align: end;">
                    <a href="logout.php">
                        Logout
                        <img class="img-fluid" src="assets/close.png" alt="Close"  width="50" height="50"  >
                    </a>
                </div>
            </div>
            <div class="row" style="margin: 0px;">
                <div class="col">
                    <h1 style="text-align: center;">Lawsuit Analyzer</h1>
                    <h4 style="text-align: center;"> Receive a professional legal analysis of your dispute</h4>              
                </div>
            </div>

        </header>

        <div class="content">
            <script>
                stepsWizard = $(function ()
                    {
                        $("#wizard").steps({
                            headerTag: "h2",
                            bodyTag: "section",
                            transitionEffect: "slideLeft",
                            stepsOrientation: "vertical",
                            //enableAllSteps: true,
                            enablePagination: false,
                        });
                    });
            </script>
            <div class="container-fluid">
                <div id="wizard">
                    <div class="row">
                        <button id="StepCollapse" class="btn btn-info w-100" type="button" style="background-color: #9E2D2D;border-color: none; ">
                            <i class="fa fa-align-left"></i>
                            <span id = "ToggleBtnText">Show Steps</span>
                        </button>             
                    </div>

                    
                    <h2>Legal Evaluation</h2>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h2>PHASE 1. LEGAL EVALUATION</h2>
                                            <h3>What is your likelihood of prevailing?</h3>
                                        </div>
                                        <div class="col-lg-4 sm-6" style="text-align: right;">
                                            <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                <img  class = "helpimg" src="assets/helpimage.png" alt="Help Image">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row"  > 
                                        <div class="col" style="text-align: center;" >
                                            <form id="Step1" >
                                                <!-- One "tab" for each step in the form: -->
                                                <div id="Q1" class="tab">
                                                    <div class="form-group">
                                                        <label for="textarea-1-1" class="form-control-label">1. What obligations did your adversary owe you?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <small id="HelpBlock-1-1" class="form-text text-muted">
                                                            Enter below, and remember to access <strong>Help</strong>.
                                                        </small>
                                                        <textarea id="textarea-1-1" name="textarea-1-1" required="required" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div id="Q2" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-1-2">2. Did your adversary perform these obligations in a satisfactory manner?
                                                            <sup class="text-danger"></sup>
                                                        </label>
                                                        <select id="select-1-2" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="Q3" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-1-3">3. Have you sustained legally recognized damages as a direct result of your adversary's conduct?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-1-3" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>                                            
                                                </div>
                                                <div id="Q4" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-1-4">4. Did you have a prior obligation to your adversary?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-1-4" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id = "PriorObligation_yes" class="form-group">
                                                        <label id="label-1-4-1" for="textarea-1-4-1">Please describe
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <textarea id="textarea-1-4-1" class="form-control" name="" rows="3"></textarea>
                                                    </div>                                            
                                                </div>
                                                <div id="Q5" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-1-5">5. Did you perform your obligation in a satisfactory manner?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-1-5" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="PerformSatisfactory_yes" class="form-group">
                                                        <label id="label-1-5-1" for="textarea-1-4-1">Please describe
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <textarea id="textarea-1-5-1" class="form-control" name="" rows="3"></textarea>
                                                    </div>                                                   
                                                </div>
                                                
                                                <div id="ResultStep1" style="display: none;">
                                                    <h4 id="ResultStep1Text1"></h6>    
                                                    <button class="btn btn-info" type="button" onclick="showTab(0,'Step1')">Edit answers</button>
                                                </div>
                                                
                                                <div class="d-flex flex-row justify-content-end">
                                                    <div style="width: 120px; background: #5f615f;" > 
                                                        <p id = "progress_text_Step1" style="color: white; margin-top: 5px;margin-bottom: 7px;font-size: 0.6rem;" ></p>
                                                        <div class="progress" style="background: #D8D9DD; margin:0% 5% 0% 5%; height: 5px;" >
                                                            <div id="progress_Step1" class="progress-bar" style="background: #345B99;"></div>                                                    
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="prevBtn1" class="btn btn-info" onclick="nextPrev(-1,'Step1')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f;" >&uarr;</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="nextBtn1" class="btn btn-info" onclick="nextPrev(1,'Step1')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f">&darr;</button>    
                                                    </div>
                                                </div>

                                            </form>
                                            

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Case Value Assessment</h2>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h2>PHASE 2. CASE VALUE ASSESSMENT</h2>
                                            <h3>How much are you likely to recover?</h3>
                                        </div>
                                        <div class="col-lg-4 sm-6" style="text-align: right;">
                                            <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                <img src="assets/helpimage.png" alt="Help Image" width="100" height="100">
                                            </a>
                                        </div>
                                    </div>                                 
                                    <div class="row">
                                        <div class="col" style="text-align: center;">
                                            <form id="Step2">
                                                <div id ="Q7" class="tab">
                                                    <div class="form-group">
                                                        <label for="input-2-7">7. What is the amount of your damages?</label>
                                                        <input id="input-2-7" class="form-control" type="text" name="" placeholder="Enter $ amount">
                                                        <small id="HelpBlock-2-7-1" class="form-text text-muted">
                                                        Remember to access Help to guide you to your answer.
                                                        </small>
                                                    </div>
                                                </div>
                                                <div id ="Q8" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-2-8">8. Were you a cause of the situation that caused your damages?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-2-8" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="CauseOfSituation_yes" class="form-group">
                                                        <label id="label-2-8-1" for="input-2-8-1">Amount to be deducted from your damages
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <input id="input-2-8-1" class="form-control" type= "text" ></input>
                                                    </div>                                            
                                                </div>
                                                <div id ="Q9" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-2-9">9. Did you receive a substantial benefit from the situation?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-2-9" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="RecieveBenefit_yes" class="form-group">
                                                        <label id="label-2-9-1" for="input-2-9-1">Enter the $ amount your conduct contributed to your damages (use half of your damages if unsure)
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <input id="input-2-9-1" class="form-control" type= "text" ></input>
                                                        <small id="HelpBlock-2-9-1" class="form-text text-muted">
                                                            Click on Help and enter the $ amount your conduct contributed to your damages.
                                                        </small>
                                                    </div>     
                                                </div>
                                                <div id ="Q10" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-2-10">10. Is there a damage defining provision in a written agreement that pertains to this dispute?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-2-10" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                        <small id="HelpBlock-2-10" class="form-text text-muted">
                                                            Click Help for information.
                                                        </small>
                                                    </div>
                                                    <div id="DamageProvision_yes" class="form-group">
                                                        <label id="label-2-10-1" for="select-2-10-1">Liquidated Damages or Damage Limit ?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-2-10-1" class="form-control" name="">
                                                            <option value="default" >Please choose an option</option>
                                                            <option value="Liquidated-Damages">Liquidated Damages</option>
                                                            <option value="Damage-Limit">Damage Limit</option>
                                                        </select>
                                                        <label id="label-2-10-2" for="input-2-10-2">Please choose an option
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <input id="input-2-10-2" class="form-control" type= "text" ></input>
                                                    </div>  
                                                </div>
                                                <div id ="Q11" class="tab">
                                                    <div class="form-group">
                                                        <label id="label-2-11" for="input-2-11">11. This is the amount of your Recoverable Damages.
                                                        </label>
                                                        <p>After deduction for contributing to your damages and any substantial benefit you received, and factoring in your damage defining provision, if applicable</p>
                                                        <input id="input-2-11" class="form-control" type= "text"  value="0"  disabled></input>
                                                    </div>  
                                                </div>
                                                <div id ="Q12" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-2-12">12. Will you be represented by an attorney?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-2-12" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>   
                                                </div>
                                                <div id ="Q13" class="tab">
                                                    <div id="attorney_yes" class="form-group" style="text-align: justify;">
                                                        <h6 style="text-align: center;" >13. Select ONE of the following options:</h6>
                                                        <div class="form-check form-check-inline">
                                                            <input id="radio-2-13-1" class="form-check-input" type="radio" name="attorney" value="value-1" style="width: auto;">
                                                            <label for="radio-2-13-1" class="form-check-label" style="text-align: justify;">Does the agreement signed by you and your adversary contain both an attorneys’ fee and binding arbitration provision?</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input id="radio-2-13-2" class="form-check-input" type="radio" name="attorney" value="value-2" style="width: auto;">
                                                            <label for="radio-2-13-2" class="form-check-label"style="text-align: justify;">Does the agreement signed by you and your adversary contain an attorneys’ fee provision, but no binding arbitration provision? (this results in a 10% case value reduction)</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input id="radio-2-13-3" class="form-check-input" type="radio" name="attorney" value="value-3" style="width: auto;">
                                                            <label for="radio-2-13-3" class="form-check-label"style="text-align: justify;">Does the agreement signed by you and your adversary contain a binding arbitration provision, but no attorneys’ fee provision? (this results in a 15% case value reduction)</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input id="radio-2-13-4" class="form-check-input" type="radio" name="attorney" value="value-4" style="width: auto;">
                                                            <label for="radio-2-13-4" class="form-check-label"style="text-align: justify;">There is no attorneys’ fee or binding arbitration provision in a written agreement between you and your adversary. (this results in a 35% case value reduction)</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input id="radio-2-13-5" class="form-check-input" type="radio" name="attorney" value="value-5" style="width: auto;">
                                                            <label for="radio-2-13-5" class="form-check-label"style="text-align: justify;">There is no written agreement between you and your adversary. (this results in a 35% case value reduction)</label>
                                                        </div>
                                                    </div>
                                                    <div id="attorney_no" class="form-group">
                                                        <label id="label-2-13" for="input-2-13">13. Because you will not be represented by an Attorney, we have deducted 20% as a margin of error from your Recoverable Damages.
                                                        </label>
                                                        <input id="input-2-13" class="form-control" type= "text"  value="0"  disabled></input>
                                                    </div>
                                                </div>
                                                <div id ="Q14" class="tab">
                                                    <div class="form-group">
                                                        <label id="label-2-14" for="select-2-14">14. Will you invest substantial time into your case?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-2-14" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="moneytime_yes" class="form-group">
                                                        <label id="label-2-14-1" for="input-2-14-1">What is the approximate value of the time you will invest?
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <input id="input-2-14-1" class="form-control" type= "text" ></input>
                                                        
                                                        <label id="label-2-14-2" for="input-2-14-2">This amount is divided by two to reflect that this is time not money you are losing.
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <input id="input-2-14-2" class="form-control" type= "text" value="0" disabled></input>
                                                    </div>
                                                </div>

                                                <div id="ResultStep2" style="display: none;">
                                                    <h4 id="ResultStep2Text1"></h6>
                                                    <h4 id="ResultStep2Text2"></h6>
                                                    <h4 id="ResultStep2Text3"></h6>
                                                    <button class="btn btn-info" type="button" onclick="showTab(0,'Step2')">Edit answers</button>
                                                </div>

                                                <div class="d-flex flex-row justify-content-end">
                                                    <div style="width: 120px; background: #5f615f;" > 
                                                        <p id = "progress_text_Step2" style="color: white; margin-top: 5px;margin-bottom: 7px;font-size: 0.6rem;" ></p>
                                                        <div class="progress" style="background: #D8D9DD; margin:0% 5% 0% 5%; height: 5px;" >
                                                            <div id="progress_Step2" class="progress-bar" style="background: #345B99;"></div>                                                    
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="prevBtn2" class="btn btn-info" onclick="nextPrev(-1,'Step2')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f;" >&uarr;</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="nextBtn2" class="btn btn-info" onclick="nextPrev(1,'Step2')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f">&darr;</button>    
                                                    </div>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Legal Options Assessment</h2>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h2>PHASE 3. LEGAL OPTIONS ASSESSMENT</h2>
                                            <h3>What are your legal options?</h3>
                                        </div>
                                        <div class="col-lg-4 sm-6" style="text-align: right;">
                                            <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                <img src="assets/helpimage.png" alt="Help Image" width="100" height="100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align: center;">
                                            <form id="Step3">
                                                <div id="Q16-Prev" class="tab">
                                                    <div class="form-group">
                                                        <label id="label-3-16" for="select-3-16">Select your state to look up your Small Claims Limit
                                                            <sup class="text-danger"> </sup>
                                                        </label>
                                                        <select id="select-3-16" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                        </select>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-sm-12">
                                                            <label for="SmallClaimLimitResult">Small Claims Limit in your State</label>
                                                            <h5> <span id = "SmallClaimLimitResult" class="badge badge-light">0,000</span> </h5>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12">
                                                            <label for="SmallClaimLinkResult">More Information is available for this state</label>
                                                            <h6 id = "SmallClaimLinkResult" ></h6>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div id="Q16" class="tab" >
                                                    <div class="form-group">
                                                        <label for="input-3-16-1">Recoverable Damages</label>
                                                        <input id="input-3-16-1" class="form-control" type="text" disabled>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div id="WhitinEvaluation"></div> 
                                                        </div>
                                                    </div>
                                                    <div id="AboveLimit"  >
                                                        <div class="col-lg-12 col-md-12">
                                                            <div class="form-group">
                                                                <label for="select-3-16-2">16. Are you willing to reduce your claim to fit the Small Claims Limit?</label>
                                                                <sup class="text-danger"> </sup>
                                                                </label>
                                                                <select id="select-3-16-2" class="form-control" name="">
                                                                    <option value="" >Please choose an option</option>
                                                                    <option value="yes">Yes</option>
                                                                    <option value="no">No</option>
                                                                </select>
                                                            </div>
                                                        </div>  
                                                    </div>
                                                    <div id="BellowLimit"  >
                                                        <div class="form-group">
                                                            <label for="select-3-16-3">16sc. Do you have a binding arbitration provision in a written agreement with your adversary?</label>
                                                            <sup class="text-danger"> </sup>
                                                            </label>
                                                            <select id="select-3-16-3" class="form-control" name="">
                                                                <option value="" >Please choose an option</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>                                
                                                        <div id="ExcludeSmallClaims" class="form-group">
                                                            <label for="select-3-16-4">Does it exclude Small Claims?</label>                                                            
                                                            <sup class="text-danger"> </sup>
                                                            </label>
                                                            <select id="select-3-16-4" class="form-control" name="">
                                                                <option value="" >Please choose an option</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>                                                                                
                                                    </div> 
                                                </div>  
                                                <div id="Q17" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-3-17">17. Do you have a written agreement signed by your adversary that contains an attorneys’ fee provision?</label>                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <select id="select-3-17" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="Q18" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-3-18">18. Do you have an agreement signed by you and your adversary that requires binding arbitration?</label>                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <select id="select-3-18" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div id="Q19" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-3-19">19. Do you have an agreement signed by you and your adversary that requires mediation? </label>                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <select id="select-3-19" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                                <div id="ResultStep3">
                                                    <h4 id="ResultStep3Text1"></h6> 
                                                    <h4 id="ResultStep3Text2"></h6>
                                                    <h4 id="ResultStep3Text3"></h6>                                            
                                                    <button class="btn btn-info" type="button" onclick="showTab(0,'Step3')">Edit answers</button>
                                                </div>

                                                <div class="d-flex flex-row justify-content-end">
                                                    <div style="width: 120px; background: #5f615f;" > 
                                                        <p id = "progress_text_Step3" style="color: white; margin-top: 5px;margin-bottom: 7px;font-size: 0.6rem;" ></p>
                                                        <div class="progress" style="background: #D8D9DD; margin:0% 5% 0% 5%; height: 5px;" >
                                                            <div id="progress_Step3" class="progress-bar" style="background: #345B99;"></div>                                                    
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="prevBtn3" class="btn btn-info" onclick="nextPrev(-1,'Step3')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f;" >&uarr;</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="nextBtn3" class="btn btn-info" onclick="nextPrev(1,'Step3')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f">&darr;</button>    
                                                    </div>
                                                </div>                                                
                                            </form>
                                   
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Collectability Assessment</h2>
                    <section>
                        <div class="container-fluid">                            
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h2>PHASE 4. COLLECTABILITY ASSESSMENT</h2>
                                            <h3>What are your chances of collecting on your judgment?</h3>
                                        </div>
                                        <div class="col-lg-4 sm-6" style="text-align: right;">
                                            <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                <img src="assets/helpimage.png" alt="Help Image" width="100" height="100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align: center;">
                                            <form id="Step4">
                                                <div id="Q21" class = "tab">                                        
                                                    <div id = 'adversary_check' class="form-group" style="text-align: justify;">
                                                        <h6 style="text-align: center;" >21. Select the first option that relates to your adversary:</h6>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-1" class="form-check-input" type="radio" name="adversary" value="value-1" style="width: auto;">
                                                            <label for="radio-4-21-1" class="form-check-label" style="text-align: justify;">a corporation</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-2" class="form-check-input" type="radio" name="adversary" value="value-2" style="width: auto;">
                                                            <label for="radio-4-21-2" class="form-check-label"style="text-align: justify;">represented by an insurance company</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-3" class="form-check-input" type="radio" name="adversary" value="value-3" style="width: auto;">
                                                            <label for="radio-4-21-3" class="form-check-label"style="text-align: justify;">an operating business other than a corporation, like an LLC, or Sole Proprietorship</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-4" class="form-check-input" type="radio" name="adversary" value="value-4" style="width: auto;">
                                                            <label for="radio-4-21-4" class="form-check-label"style="text-align: justify;">own real property</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-5" class="form-check-input" type="radio" name="adversary" value="value-5" style="width: auto;">
                                                            <label for="radio-4-21-5" class="form-check-label"style="text-align: justify;">have assets and is salaried</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-6" class="form-check-input" type="radio" name="adversary" value="value-6" style="width: auto;">
                                                            <label for="radio-4-21-6" class="form-check-label"style="text-align: justify;">have assets and works for self as sole proprietor</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-7" class="form-check-input" type="radio" name="adversary" value="value-7" style="width: auto;">
                                                            <label for="radio-4-21-7" class="form-check-label"style="text-align: justify;">have assets and none of above apply</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-8" class="form-check-input" type="radio" name="adversary" value="value-8" style="width: auto;">
                                                            <label for="radio-4-21-8" class="form-check-label"style="text-align: justify;">none of above or below apply</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-9" class="form-check-input" type="radio" name="adversary" value="value-9" style="width: auto;">
                                                            <label for="radio-4-21-9" class="form-check-label"style="text-align: justify;">have judgments against them</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-10" class="form-check-input" type="radio" name="adversary" value="value-10" style="width: auto;">
                                                            <label for="radio-4-21-10" class="form-check-label"style="text-align: justify;">have no assets or means of support</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input id="radio-4-21-11" class="form-check-input" type="radio" name="adversary" value="value-11" style="width: auto;">
                                                            <label for="radio-4-21-11" class="form-check-label"style="text-align: justify;">have bankruptcy proceedings pending</label>
                                                        </div>

                                                    </div>   
                                                </div>

                                                <div id="ResultStep4">
                                                    <h4 id="ResultStep4Text1"></h6> 
                                                    <h4 id="ResultStep4Text2"></h6>
                                                    <h4 id="ResultStep4Text3"></h6>                                            
                                                    <button class="btn btn-info" type="button" onclick="showTab(0,'Step4')">Edit answers</button>
                                                </div>                                              

                                                <div class="d-flex flex-row justify-content-end">
                                                    <div style="width: 120px; background: #5f615f;" > 
                                                        <p id = "progress_text_Step4" style="color: white; margin-top: 5px;margin-bottom: 7px;font-size: 0.6rem;" ></p>
                                                        <div class="progress" style="background: #D8D9DD; margin:0% 5% 0% 5%; height: 5px;" >
                                                            <div id="progress_Step4" class="progress-bar" style="background: #345B99;"></div>                                                    
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="prevBtn4" class="btn btn-info" onclick="nextPrev(-1,'Step4')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f;" >&uarr;</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="nextBtn4" class="btn btn-info" onclick="nextPrev(1,'Step4')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f">&darr;</button>    
                                                    </div>
                                                </div>
                                            
                                            </form>

                                        </div>                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Comprehensive Case Analysis</h2>
                    <section>
                        <div class="container-fluid">                            
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h2>PHASE 5. COMPREHENSIVE CASE ANALYSIS</h2>
                                            <h3>Analysis of Your Legal Evaluation, Case Value Assessment, Legal Options Assessment and Collectability Assessment</h3>
                                        </div>
                                        <div class="col-lg-4 sm-6" style="text-align: right;">
                                            <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                <img src="assets/helpimage.png" alt="Help Image" width="100" height="100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align: center;">
                                            <form id="Step5">
                                                <div id="Q23" class = "tab">                                        
                                                    <div id="ResultStep5" class="table-responsive" style="text-align: initial;">
                                                        <table class="table table-bordered table-sm">
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th colspan="2" scope="col">Results Carried Forward:</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Phase 1, Legal Evaluation [Range: 0 or 350]</td>
                                                                    <td id="tbl-row-1"> 0 </td>   
                                                                </tr>
                                                                <tr>
                                                                    <td>Phase 2, Case Value Assessment [Unique to your case]</td>
                                                                    <td id="tbl-row-2"> 0 </td>   
                                                                </tr>
                                                                <tr>
                                                                    <td>Case Value Assessment Algorithm [Range: 5-50]</td>
                                                                    <td id="tbl-row-3"> 0 </td>   
                                                                </tr>
                                                                <tr>
                                                                    <td>Phase 3, Legal Options Assessment [Range: 0 -190]</td>
                                                                    <td id="tbl-row-4"> 0 </td>   
                                                                </tr>
                                                                <tr>
                                                                    <td>Phase 4, Collectability Assessment [Range 0-150]</td>
                                                                    <td id="tbl-row-5"> 0 </td>   
                                                                </tr>
                                                                <tr>
                                                                    <td></td>
                                                                    <td id="tbl-row-6">  </td>   
                                                                </tr>
                                                            </tbody>
                                                            <thead class="thead-light">
                                                                <tr>
                                                                    <th colspan="2" scope="col">Comprehensive Case Assessment:</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>Recoverable Damages [Differs from Case Value Assessment]</td>
                                                                    <td id="tbl-row-8"> 0 </td>   
                                                                </tr>
                                                                <tr>
                                                                    <td>Suggested Settlement Amount</td>
                                                                    <td id="tbl-row-9"> 0 </td>   
                                                                </tr>

                                                            </tbody>
                                                            <tfoot>
                                                                <tr>
                                                                    <th scope="row">Case Feasibility Assessment [Range 0-106%]</th>
                                                                    <th id="tbl-row-10" scope="row">0</th>
                                                                </tr>
                                                            </tfoot>
                                                        </table>
                                                    </div>
                                                </div>
                                                                                          
                                                <div class="d-flex flex-row justify-content-end">
                                                    <div style="width: 120px; background: #5f615f;" > 
                                                        <p id = "progress_text_Step5" style="color: white; margin-top: 5px;margin-bottom: 7px;font-size: 0.6rem;" ></p>
                                                        <div class="progress" style="background: #D8D9DD; margin:0% 5% 0% 5%; height: 5px;" >
                                                            <div id="progress_Step5" class="progress-bar" style="background: #345B99;"></div>                                                    
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="prevBtn5" class="btn btn-info" onclick="nextPrev(-1,'Step5')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f;" >&uarr;</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="nextBtn5" class="btn btn-info" onclick="nextPrev(1,'Step5')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f">&darr;</button>    
                                                    </div>
                                                </div>                                             
                                                                                       
                                            </form>
                                        </div>                                     
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Case Feasibility Assessment Chart</h2>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h2>PHASE 6. Case Feasibility Assessment Chart</h2>
                                            <h3>How Feasible is your case to pursue?</h3>
                                        </div>
                                        <div class="col-lg-4 sm-6" style="text-align: right;">
                                            <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                <img src="assets/helpimage.png" alt="Help Image" width="100" height="100">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col" style="text-align: center;">
                                            <form id="Step6">
                                                <div id="Q33Chart" class="tab">
                                                    <p id="NoteStep6">Note: Always remember to exhaust all settlement possibilities before pursuing your case through legal channels. Remember also, the case value we’re talking about is the one at row 23 of step five's table.</p>
                                                    <br>
                                                    <div id="ResultStep6"> </div>            
                                                </div>

                                                <p>CONTINUE IF YOU HAVE DECIDED TO MOVE FORWARD WITH YOUR DISPUTE</p>

                                                <div class="d-flex flex-row justify-content-end">
                                                    <div style="width: 120px; background: #5f615f;" > 
                                                        <p id = "progress_text_Step6" style="color: white; margin-top: 5px;margin-bottom: 7px;font-size: 0.6rem;" ></p>
                                                        <div class="progress" style="background: #D8D9DD; margin:0% 5% 0% 5%; height: 5px;" >
                                                            <div id="progress_Step6" class="progress-bar" style="background: #345B99;"></div>                                                    
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="prevBtn6" class="btn btn-info" onclick="nextPrev(-1,'Step6')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f;" >&uarr;</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="nextBtn6" class="btn btn-info" onclick="nextPrev(1,'Step6')" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f">&darr;</button>    
                                                    </div>
                                                </div>                                                  

                                            </form>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Forum Assessment</h2>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h2>PHASE 7. Forum Assessment</h2>
                                            <h3>Where will you pursue your dispute?</h3>
                                        </div>
                                        <div class="col-lg-4 sm-6" style="text-align: right;">
                                            <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                <img src="assets/helpimage.png" alt="Help Image" width="100" height="100">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="text-align: center;">
                                            <form id="Step7">
                                                <div id="Q34Last" class="tab">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-12 d-flex justify-content-center justify-content-md-end" >
                                                            <h4>Forum:</h4>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12 d-flex justify-content-center justify-content-md-center" >
                                                            <p id="ResultStep7_1"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-5 col-sm-12 d-flex justify-content-center justify-content-md-end" >
                                                            <h4>Mediation:</h4>
                                                        </div>
                                                        <div class="col-lg-6 col-sm-12 d-flex justify-content-center justify-content-md-center" >
                                                            <p id="ResultStep7_2"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col d-flex justify-content-start">
                                                            <p style="color: #9E2D2D;" >You are done with the Lawsuit Analyzer©. You can go back and edit your answers and change your outcome. Once you click Forum below, your results will be emailed to you, and you no longer have the ability to edit.</p>
                                                        </div>
                                                    </div>                                                
                                                </div>
                                                <div style="overflow:auto; margin-top: 15px;">
                                                    <div style="float:right;">
                                                        <button type="button" id="prevBtn7" class="btn btn-info" onclick="">Download</button>
                                                        <button type="button" id="nextBtn7" class="btn btn-success" onclick="">Go to Mediation</button>
                                                    </div>
                                                </div>

                                                <div class="d-flex flex-row justify-content-end">
                                                    <div style="width: 120px; background: #5f615f;" > 
                                                        <p id = "progress_text_Step7" style="color: white; margin-top: 5px;margin-bottom: 7px;font-size: 0.6rem;" ></p>
                                                        <div class="progress" style="background: #D8D9DD; margin:0% 5% 0% 5%; height: 5px;" >
                                                            <div id="progress_Step7" class="progress-bar" style="background: #345B99;"></div>                                                    
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="prevBtn7" class="btn btn-info" onclick="" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f;" >&uarr;</button>
                                                    </div>
                                                    <div>
                                                        <button type="button" id="nextBtn7" class="btn btn-info" onclick="" style="border-radius: 0 !important; background-color: #80b5b5;margin: 0px;border-color: #5f615f">&darr;</button>    
                                                    </div>
                                                </div>                                             
                                            
                                            </form>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

        <div class="modal fade" id="StepResult" tabindex="-1" role="dialog" aria-labelledby="StepResultTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="StepResultTitle"></h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col" > 
                            <h6 style="text-align: left;" id="StepResultText1" ></h6>
                            <h6 style="text-align: left;" id="StepResultText2" ></h6>
                            <h6 style="text-align: left;" id="StepResultText3" ></h6>
                            <h6 style="text-align: left; margin-top: 15px;" id="StepResultDetailsHeader"> </h6>
                            <p style="text-align: left;" id="StepResultDetailsText"> </p>
                        </div> 
                    </div>
                </div>          
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Edit answers</button>
                    <button type="button" class="btn btn-primary" id="btn-next-step-modal" >Continue</button>
                </div>
                </div>
            </div>
        </div>    


    </body>

</html>

<script>

$(document).ready(function () {
    localStorage.setItem('user_id',get_session('user_id'))
    localStorage.setItem('user' , get_session('user'))
    get_last_response(get_session('user_id'))
    //Hide results Text
    $('#ResultStep1,#ResultStep2').hide();
    //Hide Dependency Question
    //**Step2 */
    $('#PriorObligation_yes,#PerformSatisfactory_yes,#CauseOfSituation_yes,#RecieveBenefit_yes').hide();
    $('#DamageProvision_yes,#attorney_yes,#attorney_no,#moneytime_yes').hide();
    //** Step 3 */
    $('#AboveLimit,#BellowLimit,#ExcludeSmallClaims').hide();
    //HidePreviousButton
    $("#prevBtn1,#prevBtn2,#prevBtn3,#prevBtn4,#prevBtn5,#prevBtn6,#prevBtn7").hide();
    //Hide Toggle Button
    //$("#StepCollapse").hide();

    $("#select-1-4").change(function(){
        if ($(this).val() == 'yes'){
            $('#PriorObligation_yes').show();
            $('#textarea-1-4-1').text('');
        }else {
            $('#PriorObligation_yes').hide();
            $('#textarea-1-4-1').text('NULL');
        };
    });

    $('#select-1-5').change(function () { 
        if ($(this).val() == 'yes'){
            $('#PerformSatisfactory_yes').show();
            $('#textarea-1-5-1').text('');            
        }else {
            $('#PerformSatisfactory_yes').hide();
            $('#textarea-1-5-1').text('NULL');
        };
    });

    $('#select-2-8').change(function () { 
        if ($(this).val() == 'yes'){
            $('#CauseOfSituation_yes').show();          
        }
        if ($(this).val() == 'no') {
            $('#CauseOfSituation_yes').hide();
            $('#input-2-8-1').val(0);
            validateForm('Step2'); //Easy advance included
            nextPrev(1,'Step2'); //Easy advance included
        };
    });

    $('#select-2-9').change(function () { 
        if ($(this).val() == 'yes'){
            $('#RecieveBenefit_yes').show();        
        }else {
            $('#RecieveBenefit_yes').hide();
            $('#input-2-9-1').val(0);
            validateForm('Step2'); //Easy advance included
            nextPrev(1,'Step2'); //Easy advance included
        };
    });

    $('#select-2-10').change(function () { 
        if ($(this).val() == 'yes'){
            $('#DamageProvision_yes').show();        
        }
        if ($(this).val() == 'no') {
            $('#DamageProvision_yes').hide();
            $('#select-2-10-1').val('default');
            $('#input-2-10-2').val(0); 
            validateForm('Step2'); //Easy advance included
            nextPrev(1,'Step2'); //Easy advance included
        };
    });

    $('#select-2-10-1').change(function () { 
        if ($(this).val() == 'Liquidated-Damages'){
            $('#label-2-10-2').text('Enter the Liquidated Damages amount from your contract.');        
        }
        if ($(this).val() == 'Damage-Limit') {
            $('#label-2-10-2').text('Enter the Damage-Limit amount from your contract.');        
        };
        if ($(this).val() == 'default') {
            $('#label-2-10-2').text('Please choose an option.');        
        };
    });


    $('#select-2-12').change(function () { 
        if ($(this).val() == 'yes'){
            $('#attorney_no').hide();
            $('#attorney_yes').show();
        }else {
            $('#attorney_yes').hide();
            $('#attorney_no').show(); 
            
        };
    });

    $('#select-2-14').change(function () { 
        if ($(this).val() == 'yes'){
            $('#moneytime_yes').show();
        }else {
            $('#moneytime_yes').hide();
            $('#input-2-14-1').val(0);
            validateForm('Step2'); //Easy advance included
            nextPrev(1,'Step2'); //Easy advance included
        };
    });

    $('#select-3-16-2').change(function () { 
        if ($(this).val() == 'yes'){
            $('#BellowLimit').show();
            $('#select-3-16-3').val('');
            $('#select-3-16-4').val('');         
        }else {
            $('#BellowLimit').hide();
            $('#select-3-16-3').val('no');
            $('#select-3-16-4').val('no');
            EasyAdvance('Step3');
        };
    });

    $('#select-3-16-3').change(function () { 
        if ($(this).val() == 'yes'){
            $('#ExcludeSmallClaims').show();
            $('#select-3-16-4').val('');
        }else {
            $('#ExcludeSmallClaims').hide();
            $('#select-3-16-4').val('no');
            EasyAdvance('Step3');
        };
    });

    $('#select-3-16-4').change(function () { 
        if ($(this).val() !== '' && $('#select-3-16-3').val() !== '' && $('#select-3-16-2').val() !== ''){
            EasyAdvance('Step3');
        };
    });

    //Format numbers
    $("#input-2-7,#input-2-8-1,#input-2-9-1,#input-2-10-2,#input-2-14-1").on({
      "focus": function (event) {
          $(event.target).select();
      },
      "keyup": function (event) {
          $(event.target).val(function (index, value ) {
              return value.replace(/\D/g, "")
                          //.replace(/([0-9])([0-9]{2})$/, '$1.$2')
                          .replace(/\B(?=(\d{3})+(?!\d)\.?)/g, ",");
          });
      }
    });   

    $('#input-2-14-1').change(function () { 
        if (!isNaN(parseInt($(this).val().replace(",",""),10))){
            var val = parseInt($(this).val().replace(",",""),10) / 2
            $('#input-2-14-2').val(SeparadorMiles(val));
        }
    });

    //Easy advance behaviour Step1
    $('#select-1-2,#select-1-3,#select-1-4,#select-1-5').change(function () { 
        EasyAdvance('Step1');
    });

    //Easy advance behaviour Step2
    $('#select-2-12').change(function () { 
        EasyAdvance('Step2');
    });

    $('#input-2-7,#input-2-8-1,#input-2-9-1,#input-2-10-2,#input-2-13,#input-2-14-1').keypress(function (e) { 
        var keycode = (e.keyCode ? e.keyCode : e.which);
        if(keycode == '13'){
            EasyAdvance('Step2')
        }        
    });
    
    $("input[type='radio'][name='attorney']").click(function(){
        var selected = $("input[type='radio'][name='attorney']:checked");
        if (selected.length > 0) {
            EasyAdvance('Step2')
        } 
    });
    
    //Easy advance behaviour Step3
    $('#select-3-17,#select-3-18,#select-3-19').change(function () { 
        EasyAdvance('Step3');
    });

    //Easy advance behaviour Step4
    $("input[type='radio'][name='adversary']").click(function(){
        var selected = $("input[type='radio'][name='adversary']:checked");
        if (selected.length > 0) {
            EasyAdvance('Step4')
        } 
    });

    $("#StepCollapse").click(function () { 
        if ( $(".steps").is(":visible")) {
            $(".steps").hide();
        } else {
            $(".steps").show();
            $("#ToggleBtnText").text('Hide Steps');
        }
    });

    function EasyAdvance (step){
        validateForm(step);
        nextPrev(1,step)
    }

    //SmallClaimData
    var SmallClaimsTable = [
        {
            Abrev: "AL",
            State: "Alabama",
            Dollar_Limit: "6,000",
            Link: "http://judicial.alabama.gov/library/SmallClaimsRules"
        },
        {
            Abrev: "AK",
            State: "Alaska",
            Dollar_Limit: "10,000",
            Link: "http://www.state.ak.us/courts/forms/sc-100.pdf"
        },
        {
            Abrev: "AZ",
            State: "Arizona",
            Dollar_Limit: "3,500",
            Link: "https://www.azcourts.gov/selfservicecenter/Small-Claims"
        },
        {
            Abrev: "AR",
            State: "Arkansas",
            Dollar_Limit: "5,000",
            Link: "http://www.arlegalservices.org/smallclaimspacket"
        },
        {
            Abrev: "CA",
            State: "California",
            Dollar_Limit: "10,000",
            "Additional Information": "Limit for Businesses (except sole proprietors) and public entities is $5,000. You can only file 2 claims in a calendar year seeking more than $2,500. See CA Small Claims Court for more exceptions related to actions against guarantors. ",
            Link: "https://www.courts.ca.gov/selfhelp-smallclaims.htm"
        },
        {
            Abrev: "CO",
            State: "Colorado",
            Dollar_Limit: "7,500",
            Link: "https://www.courts.state.co.us/Self_Help/smallclaims/"
        },
        {
            Abrev: "CT",
            State: "Connecticut",
            Dollar_Limit: "5,000",
            "Additional Information": "Except in landlord-tenant security deposit claims",
            Link: "http://www.jud.state.ct.us/faq/smallclaims.html"
        },
        {
            Abrev: "DE",
            State: "Delaware",
            Dollar_Limit: "15,000",
            Link: "http://courts.delaware.gov/jpcourt/"
        },
        {
            Abrev: "DC",
            State: "District of Columbia",
            Dollar_Limit: "10,000",
            Link: "http://www.dccourts.gov/services/civil-matters"
        },
        {
            Abrev: "FL",
            State: "Florida",
            Dollar_Limit: "8,000",
            Link: "http://www.flcourts.org/resources-and-services/family-courts/family-law-self-help-information/small-claims.stml"
        },
        {
            Abrev: "GA",
            State: "Georgia",
            Dollar_Limit: "15,000",
            "Additional Information": "No limit in eviction cases.",
            Link: "http://consumer.georgia.gov/consumer-topics/magistrate-court"
        },
        {
            Abrev: "HI",
            State: "Hawaii",
            Dollar_Limit: "5,000",
            "Additional Information": "No limit on landlord-tenant residential security deposit cases. For the return of leased or rented personal property, the property must not be worth more than $5,000.",
            Link: "http://www.courts.state.hi.us/self-help/small_claims_info"
        },
        {
            Abrev: "ID",
            State: "Idaho",
            Dollar_Limit: "5,000",
            Link: "https://www.isc.idaho.gov/irsca"
        },
        {
            Abrev: "IL",
            State: "Illinois",
            Dollar_Limit: "10,000",
            Link: "http://www.ag.state.il.us/consumers/smlclaims.html"
        },
        {
            Abrev: "IN",
            State: "Indiana",
            Dollar_Limit: "6,000",
            "Additional Information": "$8,000 in Marion County",
            Link: "http://www.in.gov/judiciary/2710.htm"
        },
        {
            Abrev: "IA",
            State: "Iowa",
            Dollar_Limit: "6,500",
            Link: "http://www.iowacourts.gov/Court_Rules__Forms/Small_Claims_Forms/"
        },
        {
            Abrev: "KS",
            State: "Kansas",
            Dollar_Limit: "4,000",
            Link: "http://www.kscourts.org/rules-procedures-forms/small-claims-information/"
        },
        {
            Abrev: "KY",
            State: "Kentucky",
            Dollar_Limit: "2,500",
            Link: "http://courts.ky.gov/resources/publicationsresources/Publications/P6SmallClaimsHandbookweb.pdf"
        },
        {
            Abrev: "LA",
            State: "Louisiana",
            Dollar_Limit: "5,000",
            Link: "http://brgov.com/dept/citycourt/"
        },
        {
            Abrev: "ME",
            State: "Maine",
            Dollar_Limit: "6,000",
            Link: "http://www.courts.state.me.us/maine_courts/specialized/small_claims/index.shtml"
        },
        {
            Abrev: "MD",
            State: "Maryland",
            Dollar_Limit: "5,000",
            Link: "https://www.google.com/url?sa=t&rct=j&q=&esrc=s&source=web&cd=3&cad=rja&uact=8&sqi=2&ved=0CC4QFjAC&url=http%3A%2F%2Fwww.courts.state.md.us%2Flegalhelp%2Fsmallclaims.html&ei=QF69VNDiB_SRsQSlj4GQBA&usg=AFQjCNE5DKWuSxYbgHYG8YWG5_leo5N9yg"
        },
        {
            Abrev: "MA",
            State: "Massachusetts",
            Dollar_Limit: "7,000",
            "Additional Information": "No limit for property damage caused by a motor vehicle.",
            Link: "http://www.mass.gov/ago/consumer-resources/consumer-assistance/small-claims-court.html"
        },
        {
            Abrev: "MI",
            State: "Michigan",
            Dollar_Limit: "6,000",
            Link: "https://michiganlegalhelp.org/self-help-tools/money-and-debt/i-have-small-claims-case"
        },
        {
            Abrev: "MN",
            State: "Minnesota",
            Dollar_Limit: "15,000",
            "Additional Information": "$4,000 for claims involving consumer credit transactions",
            Link: "http://www.mncourts.gov/selfhelp/?page=313"
        },
        {
            Abrev: "MS",
            State: "Mississippi",
            Dollar_Limit: "3,500",
            Link: "https://courts.ms.gov/trialcourts/justicecourt/justicecourt.php"
        },
        {
            Abrev: "MO",
            State: "Missouri",
            Dollar_Limit: "5,000",
            Link: "http://www.mobar.org/uploadedFiles/Home/Publications/Legal_Resources/Brochures_and_Booklets/small claims.pdf"
        },
        {
            Abrev: "MT",
            State: "Montana",
            Dollar_Limit: "7,000",
            Link: "http://dojmt.gov/consumer/guide-to-small-claims-court/"
        },
        {
            Abrev: "NE",
            State: "Nebraska",
            Dollar_Limit: "3,600",
            "Additional Information": "Through June 30, 2020 (adjusted every five years based on the Consumer Price Index",
            Link: "https://supremecourt.nebraska.gov/self-help/small-claims/filing-small-claims-case-nebraska"
        },
        {
            Abrev: "NV",
            State: "Nevada",
            Dollar_Limit: "10,000",
            Link: "https://www.civillawselfhelpcenter.org/self-help/small-claims"
        },
        {
            Abrev: "NH",
            State: "New Hampshire",
            Dollar_Limit: "10,000",
            Link: "http://www.courts.state.nh.us/district/eclaims/"
        },
        {
            Abrev: "NJ",
            State: "New Jersey",
            Dollar_Limit: "3,000",
            "Additional Information": "For claims relating to security deposits; certain landlord-tenant suits cannot be brought",
            Link: "https://njcourts.gov/selfhelp/small_claims.html"
        },
        {
            Abrev: "NM",
            State: "New Mexico",
            Dollar_Limit: "10,000",
            Link: "http://www.nmcourts.gov/Self-Help/self-help-guide.aspx"
        },
        {
            Abrev: "NY",
            State: "New York",
            Dollar_Limit: "10,000",
            Link: "http://www.courts.state.ny.us/courthelp/smallClaims/index.shtml"
        },
        {
            Abrev: "NC",
            State: "North Carolina",
            Dollar_Limit: "10,000",
            Link: "http://www.nccourts.org/Courts/Trial/Sclaims/"
        },
        {
            Abrev: "ND",
            State: "North Dakota",
            Dollar_Limit: "15,000",
            Link: "https://www.ndcourts.gov/legal-self-help/small-claims"
        },
        {
            Abrev: "OH",
            State: "Ohio",
            Dollar_Limit: "6,000",
            Link: "http://www.ohiojudges.org/Document.ashx?DocGuid=932074c6-0f9b-42d9-9979-1864ad693f5b"
        },
        {
            Abrev: "OK",
            State: "Oklahoma",
            Dollar_Limit: "10,000",
            Link: "http://www.oklahomacounty.org/158/Small-Claims"
        },
        {
            Abrev: "OR",
            State: "Oregon",
            Dollar_Limit: "10,000",
            Link: "https://www.courts.oregon.gov/forms/Pages/small-claims.aspx"
        },
        {
            Abrev: "PA",
            State: "Pennsylvania",
            Dollar_Limit: "12,000",
            Link: "http://www.pacourts.us/courts/minor-courts/"
        },
        {
            Abrev: "RI",
            State: "Rhode Island",
            Dollar_Limit: "2,500",
            Link: "https://www.courts.ri.gov/Courts/districtcourt/Pages/smallclaims.aspx"
        },
        {
            Abrev: "SC",
            State: "South Carolina",
            Dollar_Limit: "7,500",
            Link: "http://www.sccourts.org/selfhelp/FAQMagistrate.pdf"
        },
        {
            Abrev: "SD",
            State: "South Dakota",
            Dollar_Limit: "12,000",
            Link: "http://ujs.sd.gov/Small_Claims/"
        },
        {
            Abrev: "TN",
            State: "Tennessee",
            Dollar_Limit: "25,000",
            "Additional Information": "No limit in eviction suits or suits to recover personal property",
            Link: "http://tncourts.gov/programs/self-help-center"
        },
        {
            Abrev: "TX",
            State: "Texas",
            Dollar_Limit: "10,000",
            "Additional Information": "Until August 31, 2020; $20,000 effective September 1, 2020",
            Link: "https://guides.sll.texas.gov/small-claims"
        },
        {
            Abrev: "UT",
            State: "Utah",
            Dollar_Limit: "11,000",
            Link: "http://www.utcourts.gov/howto/smallclaims/"
        },
        {
            Abrev: "VT",
            State: "Vermont",
            Dollar_Limit: "5,000",
            Link: "http://www.vermontjudiciary.org/SRL/smallclaims/default.aspx"
        },
        {
            Abrev: "VA",
            State: "Virginia",
            Dollar_Limit: "5,000",
            Link: "http://www.courts.state.va.us/resources/small_claims_court_procedures.pdf"
        },
        {
            Abrev: "WA",
            State: "Washington",
            Dollar_Limit: "10,000",
            "Additional Information": "If brought by natural person; $5,000 all other cases",
            Link: "http://www.courts.wa.gov/newsinfo/resources/?fa=newsinfo_jury.scc&altMenu=smal"
        },
        {
            Abrev: "WV",
            State: "West Virginia",
            Dollar_Limit: "10,000",
            Link: "http://www.courtswv.gov/lower-courts"
        },
        {
            Abrev: "WI",
            State: "Wisconsin",
            Dollar_Limit: "10,000",
            "Additional Information": "No limit in eviction suits",
            Link: "http://www.wicourts.gov/services/public/selfhelp/smallclaims.htm"
        },
        {
            Abrev: "WY",
            State: "Wyoming",
            Dollar_Limit: "6,000",
            Link: "https://www.courts.state.wy.us/court_rule/rules-and-forms-governing-small-claims-cases/"
        }
    ]

    //Look for Small Claims Limit
    $('#select-3-16').change(function () { 
        if ($('#select-3-16').val() !== "" ) {
            var StateLimitResults = VLookUp(SmallClaimsTable,$(this).val(),'Abrev', 'Dollar_Limit' );
            var StateLinkResults = VLookUp(SmallClaimsTable,$(this).val(),'Abrev', 'Link')
            $('#SmallClaimLimitResult').text(SeparadorMiles(StateLimitResults));
            $('#SmallClaimLinkResult').html('<a href="' + StateLinkResults + '" target="_blank" >  <span class="badge badge-info">Click Here</span> </a>');
        }else{
            $('#SmallClaimLimitResult').text('0')
            $('#SmallClaimLinkResult').text('Please choose an option')
        }
        
    });

    //SmallClaimLoad
    for (var i = 0; i <= SmallClaimsTable.length; i++) {
        $('#select-3-16').append('<option value="' + SmallClaimsTable[i]['Abrev'] + '">' + SmallClaimsTable[i]['State'] + '</option>');
    }


});


//Script functions to DB

function get_last_response(User_Id){
        var usid = User_Id
        $.ajax({
            type: "POST",
            url: "API/glr.php",
            data: {user_id: usid},
            cache: 'false',
            success: function (response) {
                $validacion = response
                if (response) {
                    localStorage.setItem('user_lr', $validacion)
                } else {
                    localStorage.setItem('user_lr', 0)
                }
            }
        });
}

function get_session(key){
    var result = null
    if (key == 'user_id'){
        result = "<?php if(isset($_SESSION['user_id'])){ echo $_SESSION['user_id'] ; }  ?>";
        if (result !== '') {return  result; }
    }    
    if (key == 'user'){
        result = "<?php if(isset($_SESSION['user'])){ echo $_SESSION['user'] ; }  ?>";
        if (result !== '') {return  result }
    } 
    if (key == 'user_status'){
        result = "<?php if(isset($_SESSION['user_status'])){ echo $_SESSION['user_status'] ; }  ?>";
        if (result !== '') {return  result } 
    }    
    if (key == 'user_rol'){
        result = "<?php if(isset($_SESSION['user_rol'])){ echo $_SESSION['user_rol'] ; }  ?>";
        if (result !== '') {return  result } 
    }
    if (key == 'user_lr'){
        result = "<?php if(isset($_SESSION['user_lr'])){ echo $_SESSION['user_lr'] ; } ?>";
        if (result !== '') {return  result; }
    }
    if (key == 'user_ls'){
        result = "<?php if(isset($_SESSION['user_ls'])){ echo $_SESSION['user_ls'] ; } ?>";
        if (result !== '') {return  result }        
    }
    if (key == 'user_st'){
        result = "<?php if(isset($_SESSION['user_st'])){ echo $_SESSION['user_st'] ; } ?>";
        if (result !== '') {return  result } 
    }
    return result  
}

function PutAnswData(Step,DataForm){
    get_last_response(get_session('user_id'))
    var dataPut = [];
    var posit = 0;
    var uslr = get_session('user_lr');
    if (uslr == ''){uslr = localStorage.getItem('user_lr') }
    if (Step == 'Step1') {posit = 0}
    if (Step == 'Step2') {posit = 1}
    if (Step == 'Step3') {posit = 2}
    if (Step == 'Step4') {posit = 3}
    if (Step == 'Step5') {posit = 4}
    if (Step == 'Step6') {posit = 5}
    if (Step == 'Step7') {posit = 6}
    for (let index = 1; index <= 57; index++) {
        dataPut.push({
            "form_questions_id": index,
            "answer": DataForm[posit]['Values'][index]
            } 
        )
    };
    $.ajax({
        type: "POST",
        url: "API/upans.php?act=upt&uslr=" + uslr,
        dataType: 'json',
        data: {data: dataPut }  ,
        cache: 'false',
        success: function (response) {
        }
    });



}


//Script For Step Behaviour
var currentTab = 0; 
var previousTab = 0;
showTab(currentTab,'Step1'); 
showTab(currentTab,'Step2'); 
showTab(currentTab,'Step3');
showTab(currentTab,'Step4');
showTab(currentTab,'Step5');
showTab(currentTab,'Step6');
showTab(currentTab,'Step7');

var DataForm;

//Step6Table
var Step6Table = [
    {
        Range: 6,
        Title: "91% and above",
        Text: "Case feasibility is very good. You should proceed forward with your case."
    },
    {
        Range: 5,
        Title: "81% to 90%",
        Text: "Case feasibility is good. You should proceed forward with your case, but make best attempts to resolve your dispute through Last Chance Exercise and Mediation first."
    },
    {
        Range: 4,
        Title: "71% to 80%",
        Text: "Case feasibility is reasonably good. If binding arbitration is your route, move forward but if there is an attorney fees provision, be aware that if you lose, you must pay your opponent’s attorney fees. If binding arbitration is not your route, you should proceed forward with your case only after proposing a Multi-Step <a href='#'>ADR Agreement </a> or <a href='#'>Binding Arbitration Agreement </a> to your adversary. If your adversary will not agree to these alternative dispute resolution methods, pursue your case only after you have repeatedly attempted settlement. And remember: you may be in this category with a winning case and the best chances of collection, but since you have to travel the court maze, your feasibility is reduced.."
    },
    {
        Range: 3,
        Title: "61% to 70%",
        Text: "Your case feasibility is mid-range. If you have a Binding Arbitration Agreement but no attorney fee provision, proceed forward. The dispute will be determined soon and you won’t be paying your opponent’s attorney fees if you lose. But first, attempt settlement and mediation. If you have a binding arbitration provision and an attorney fees provision: 1. If you are at the high end of this category, you should proceed forward with the reminder that if you lose you will pay your adversary’s attorney fees. 2.  If you are at the low end of this category, you should carefully consider your risk of losing and being hit with your opponent’s attorney fee tab. Do everything you can to settle your case. Proceed cautiously if you must thereafter. If there is an attorney fee provision and no binding arbitration provision, you should lean more in favor of pursuing your dispute only by settlement. It may not be worthwhile to take this case into the expensive court forum, especially considering your exposure with an attorney fee provision. Proceed cautiously if you must. If there is no attorney fee provision or binding arbitration provision, proceed only if you are at the high end of this category. Otherwise, it may not be worthwhile to take this case into the expensive court forum. Proceed cautiously if you must..."
    },
    {
        Range: 2,
        Title: "51% to 60%",
        Text: "Make every attempt to settle your dispute at the suggested settlement figure. Always remember: if there’s an attorney fee provision and you lose, you’ll have to pay your adversary’s attorney fees. If you have slim chances of collecting on a judgment, perhaps it doesn’t make sense to proceed. If your case value is low and you have to travel the demanding court system, you may very well not want to go the long haul. If you are on the low side of this range, your feasibility indicates you should not pursue your case. Otherwise, proceed very cautiously if you must..."
    },
    {
        Range: 1,
        Title: "50% and below",
        Text: "You are discouraged from pursuing your case to judgment, but don’t let your opponent know that or you’ll never reach settlement. Encourage settlement again and again. After that, one mediation session is warranted. In view of mediation’s 85% success rate and your realistic attitude (given your low feasibility rating), the chances of success at mediated settlement are very high..."
    },
    {
        Range: 0,
        Title: "Default Title",
        Text: "Default Text"
    }
]

var Result1, Result2, Result3;

//Check for current Step. Advance to the final step (Edit case)
function CheckStep(Step,FirstTime){
    if ( Step == 'Step1') {
        GetStepsData(); 
        if (FirstTime){$('#StepResult').modal({backdrop: 'static', keyboard: false})};
        $('#StepResultTitle').text('This is Your Legal Evaluation');
        $('#StepResultText1').text(DataForm[0]['Values'][7]);
        $('#StepResultText2').text('')
        $('#StepResultText3').text('')
        $('#StepResultDetailsHeader').text('')
        $('#StepResultDetailsText').text('')
    };
    if ( Step == 'Step2') {
        GetStepsData();
        if (FirstTime){$('#StepResult').modal({backdrop: 'static', keyboard: false})};
        $('#StepResultTitle').text('Case Value Assessment.');
        Result1 = parseInt($('#input-2-7').val().replace(",","")  ,10)
        if (!isNaN(DataForm[1]['Values'][17])) {
            var Result2 = DataForm[1]['Values'][17]
        }
        if (!isNaN(DataForm[1]['Values'][24])) {
            var Result3 = DataForm[1]['Values'][24]
        }        
        $('#StepResultText1').text('$ ' + SeparadorMiles(Result1) + ' is your TOTAL DAMAGES.');
        $('#StepResultText2').text('$ ' + SeparadorMiles(Result2) + ' is your RECOVERABLE DAMAGES, the amount of your claim [after apportionment of fault, whether you received a substantial benefit, and if there is a damage defining provision].');
        $('#StepResultText3').text('$ ' + SeparadorMiles(Result3) + ' is your CASE VALUE ASSESSMENT, the amount you are likely to net depending on whether you hire an attorney and have a right to attorneys fee reimbursement,  whether you will go to arbitration, if you will invest substantial time of your own.');
        //$('#StepResultDetailsHeader').text('Whats does mean that amount?');
        //$('#StepResultDetailsText').text('This is the amount you are likely to recover.');
    };
    if ( Step == 'Step3') {
        GetStepsData();
        if (FirstTime){$('#StepResult').modal({backdrop: 'static', keyboard: false})};
        $('#StepResultTitle').text('This is your Legal Options Assessment');
        $('#StepResultText1').text( DataForm[2]['Values'][37])
        $('#StepResultText2').text('[Range: 0-190]')
        $('#StepResultText3').text('This result is part of an algorithm that will be factored into your Comprehensive Case Analysis in Phase 5')
        $('#StepResultDetailsHeader').text('')
        $('#StepResultDetailsText').text('')
        //ResultStep3Text1
    };
    if ( Step == 'Step4') {
        GetStepsData();
        if (FirstTime){$('#StepResult').modal({backdrop: 'static', keyboard: false})};
        $('#StepResultTitle').text('This is your Collectability Assessment.');
        $('#StepResultText1').text( DataForm[3]['Values'][40])
        $('#StepResultText2').text('[Range: 0-150]')
        $('#StepResultText3').text('This result is part of an algorithm that will be factored into your Comprehensive Case Analysis in Phase 5.')
        $('#StepResultDetailsHeader').text('')
        $('#StepResultDetailsText').text('')
    };
    if ( Step == 'Step5') {
        GetStepsData();
        //LoadTable Step5
        $('#tbl-row-1').text(DataForm[4]['Values'][41]);
        $('#tbl-row-2').text('$' + SeparadorMiles(DataForm[4]['Values'][42]));
        $('#tbl-row-3').text(DataForm[4]['Values'][43]);
        $('#tbl-row-4').text(DataForm[4]['Values'][44]);
        $('#tbl-row-5').text(DataForm[4]['Values'][45]);
        $('#tbl-row-6').text(''); //Blank Space
        $('#tbl-row-7').text('');
        $('#tbl-row-8').text('$' + SeparadorMiles(DataForm[4]['Values'][48]));
        $('#tbl-row-9').text('$' + SeparadorMiles(Math.round(DataForm[4]['Values'][49])) );
        var num = DataForm[4]['Values'][50]
        $('#tbl-row-10').text( (Math.round((num + Number.EPSILON) * 100)) + ' %' );         
    };
    if ( Step == 'Step6') {
        GetStepsData();
        //Refresh Results
        $('#ResultStep6').html('<p> '+  DataForm[5]['Values'][51] + '</p> <p style="text-align: justify;" >' + DataForm[5]['Values'][52] + '</p>')
        $('#ResultStep7_1').text( DataForm[6]['Values'][57] );
        $('#ResultStep7_2').text( DataForm[6]['Values'][53] );

    };
    PutAnswData(Step,DataForm);   
}

var Value_6,
    Value_8, Value_9, Value_8_plus_9, 
    Value_11, selectedVal_Step2, selectedVal_Step2_text, Value_13_2, Value_14_2, Value_15, 
    Value_16_1, Value_16_Value, Value_17_Value, Value_18_Value, Value_19_Value, 
    selectedVal_Step4 , Value_21_Value , Value_22_Value,
    Value_24, Value_25,Value_26,Value_28,Value_29,Value_31,
    Value_33_Chart_Title,Value_33_Chart_Text,
    Value_34_Text, Value_38_Text
;

function GetStepsData() {
    //** Step 1 Calculations */
        if($('#select-1-2').val() == 'yes' || 
            ($('#select-1-2').val() == 'no' && $('#select-1-3').val() == 'no') || 
            ($('#select-1-2').val() == 'no' && $('#select-1-3').val() == 'no' && $('#select-1-4').val() == 'no') ||
            ($('#select-1-2').val() == 'no' && $('#select-1-3').val() == 'yes' && $('#select-1-4').val() == 'yes' && $('#select-1-5').val() == 'no' ) ){
            Value_6 = 'Your Case is Weak';
        }else {
            Value_6 = 'Your Case is Feasible!';
        };
    //** Step 1 End */

    //** Step2 Calculations**/
        if (isNaN(parseInt($('#input-2-8-1').val().replace(",",""),10))){
            Value_8 = 0
        } else {
            Value_8 = parseInt($('#input-2-8-1').val().replace(",",""),10)
        }

        if (isNaN(parseInt($('#input-2-9-1').val().replace(",",""),10))){
            Value_9 = 0
        } else {
            Value_9 = parseInt($('#input-2-9-1').val().replace(",",""),10)
        }        
        var Value_8_plus_9 = Value_8 +  Value_9
        if ($('#select-2-10').val() == 'yes') {
            //damageLimits
            if ($('#select-2-10-1').val() == 'Liquidated-Damages') {
                Value_11 = parseInt($('#input-2-10-2').val().replace(",","")  ,10);
            };
            if ($('#select-2-10-1').val() == 'Damage-Limit') {
                var initialdamage = parseInt($('#input-2-7').val().replace(",","")  ,10) - Value_8_plus_9
                var diff =  parseInt($('#input-2-10-2').val().replace(",","")  ,10) - initialdamage
                if (diff >= 0){
                    Value_11 = initialdamage
                } else {
                    Value_11 = parseInt($('#input-2-10-2').val().replace(",","")  ,10);
                }
            };
        } else {
            Value_11 = parseInt($('#input-2-7').val().replace(",","")  ,10) - Value_8_plus_9
        }

        var selected = $("input[type='radio'][name='attorney']:checked");
        if (selected.length > 0) {
            selectedVal_Step2 = selected.val();
            selectedVal_Step2_text = selected.next('label').text();
        }
        if ($('#select-2-12').val() == 'yes'){
            if (selectedVal_Step2 == 'value-1'){Value_13_2 = Value_11 };
            if (selectedVal_Step2 == 'value-2'){Value_13_2 = Value_11 * 0.9};
            if (selectedVal_Step2 == 'value-3'){Value_13_2 = Value_11 * 0.85};
            if (selectedVal_Step2 == 'value-4'){Value_13_2 = Value_11 * 0.65};
            if (selectedVal_Step2 == 'value-5'){Value_13_2 = Value_11 * 0.65};
        }else {
            Value_13_2 = Value_11 * 0.8 ;
        };
        Value_13_2 = Math.round(Value_13_2)
        if (isNaN(parseInt($('#input-2-14-1').val().replace(",","")  ,10))) {
            Value_14_2 = 0
        }else {
            Value_14_2 = parseInt($('#input-2-14-1').val().replace(",","")  ,10) / 2
        }
        Value_14_2 = Math.round(Value_14_2)
        Value_15 = Value_13_2 - Value_14_2
    //** Step 2 End **/

    //** Step 3 Calculations*/
        var diff = $('#SmallClaimLimitResult').text().replace(",","") - Value_11
        var Step3_16_Val_1 = 0 , Step3_16_Val_2 = 0;
        if (diff < 0) {
            Value_16_1 = 'Are Not Within'
            if ($('#select-3-16-2').val() == 'yes') {
                if ($('#select-3-16-3').val() == 'yes' &&  $('#select-3-16-4').val() == 'no') {
                    Step3_16_Val_1 = 85
                }
                if ($('#select-3-16-3').val() == 'yes' &&  $('#select-3-16-4').val() == 'yes') {
                    Step3_16_Val_1 = 125
                }
                if ($('#select-3-16-3').val() == 'no'){
                    Step3_16_Val_1 = 125
                }                
            }
        }else{
            Value_16_1 = 'Are Within'
            if ($('#select-3-16-3').val() == 'no') {
                Step3_16_Val_2 = 125
            } else if ($('#select-3-16-4').val() == 'yes') {
                Step3_16_Val_2 = 125
            } else {
                Step3_16_Val_1 = 85
            }
        }
        Value_16_Value =  Step3_16_Val_1 + Step3_16_Val_2
        Value_17_Value = 0
        if ($('#select-3-17').val() == 'yes') {
            if ($('#select-2-12').val() == 'yes') {
                Value_17_Value = 50
            } else {
                Value_17_Value = 25
            }
        } else {
            if ($('#select-2-12').val() == 'yes') {
                Value_17_Value = 0
            } else {
                Value_17_Value = 25
            }       
        }
        Value_18_Value = 0
        if ($('#select-3-16-3').val() == 'no') {
            if ( $('#select-3-18').val() == 'yes' ) { Value_18_Value = 85 }
        }
        Value_19_Value = 0
        if (  $('#select-3-19').val() == 'yes' ) { Value_19_Value = 15}



    //** Step 3 End */
    
    //** Step 4 Calculations*/
        var adversary_value = [
            {name: 'value-1',value: 150,description: 'a corporation'},
            {name: 'value-2',value: 150,description: 'represented by an insurance company'},
            {name: 'value-3',value: 140,description: 'an operating business other than a corporation, like an LLC, or Sole Proprietorship'},
            {name: 'value-4',value: 130,description: 'own real property'},
            {name: 'value-5',value: 120,description: 'have assets and is salaried'},
            {name: 'value-6',value: 110,description: 'have assets and works for self as sole proprietor'},
            {name: 'value-7',value: 90,description: 'have assets and none of above apply'},
            {name: 'value-8',value: 75,description: 'none of above or below apply'},
            {name: 'value-9',value: 50,description: 'have judgments against them'},
            {name: 'value-10',value: 40,description: 'have no assets or means of support'},
            {name: 'value-11',value: 20,description: 'have bankruptcy proceedings pending'}
        ]

        var selected = $("input[type='radio'][name='adversary']:checked");
        if (selected.length > 0) {
            selectedVal_Step4 = selected.val();
            Value_21_Value = VLookUp(adversary_value, selectedVal_Step4,'name','description')
            Value_22_Value = VLookUp(adversary_value, selectedVal_Step4,'name','value')
        }

    

    //** Step 4 End*/

    //** Step 5 Calculations */
        if (diff >= 0 || $('#select-3-16-2').val() == 'yes' ){
            Value_24 = 50
        } else if (Value_15 >= 0 && Value_15 <= 10000 ){ Value_24 = 5 
        } else if (Value_15 >= 10001 && Value_15 <= 15000 ){ Value_24 = 10 
        } else if (Value_15 >= 15001 && Value_15 <= 20000 ){ Value_24 = 15 
        } else if (Value_15 >= 20001 && Value_15 <= 25000 ){ Value_24 = 20 
        } else if (Value_15 >= 25001 && Value_15 <= 30000 ){ Value_24 = 25 
        } else if (Value_15 >= 30001 && Value_15 <= 35000 ){ Value_24 = 30 
        } else if (Value_15 >= 35000 && Value_15 <= 40000 ){ Value_24 = 35 
        } else if (Value_15 >= 40001 && Value_15 <= 45000 ){ Value_24 = 40 
        } else if (Value_15 >= 45001 && Value_15 <= 50000 ){ Value_24 = 45 
        } else if (Value_15 >= 50001 ){ Value_24 = 50 
        } else {Value_15 = 0}

        if (Value_6 == 'Your Case is Weak') {
            Value_25 = 0
        } else { Value_25 = 350 }

        Value_26 = Value_16_Value + Value_17_Value + Value_18_Value + Value_19_Value
        Value_28 = Value_24 + Value_25 + Value_16_Value + Value_17_Value + Value_18_Value + Value_19_Value + Value_22_Value
        Value_29 = (Value_24 + Value_25 + Value_16_Value + Value_17_Value + Value_18_Value + Value_19_Value + Value_22_Value) / 700

        if (Value_29 < 0.92){
            Value_31 = Value_11 * Value_29
        } else {
            Value_31 = Value_11 * 0.92
        }
        

    //** Step 5 End */

    //** Step 6 Calculations */
        var range = 0;
        var temp = Math.round(Value_29,2)
        if (Value_29 <= 0.5 ) {range = 1}
        if (Value_29 > 0.5 && Value_29 <= 0.6 ) {range = 2}
        if (Value_29 > 0.6 && Value_29 <= 0.7 ) {range = 3}
        if (Value_29 > 0.7 && Value_29 <= 0.8 ) {range = 4}
        if (Value_29 > 0.8 && Value_29 <= 0.9 ) {range = 5}
        if (Value_29 > 0.9) {range = 6}
        Value_33_Chart_Title = VLookUp( Step6Table,range,'Range','Title' )
        Value_33_Chart_Text = VLookUp( Step6Table,range,'Range','Text' )
    //** Step 6 End */

    //** Step 7 Calculations */
        if (  $('#select-3-19').val() == 'yes' ) { 
            Value_34_Text = 'Your Contract requires you to complete mediation'
        } else {
            Value_34_Text = 'Your Contract does not require mediation but your local court system or Judge may require it'
        };
        var TempVal1,TempVal2,TempVal3,TempVal4 = 'N';
        if ( $('#select-3-18').val() == 'yes') {
            TempVal1 = 'Y'
        } else {
            TempVal1 = 'N'
        };
        if (diff >= 0 || $('#select-3-16-2').val() == 'yes') {
            TempVal2 = 'Y'
        } else {
            TempVal2 = 'N'
        };
        if ($('#select-3-16-3').val() == 'yes') {
            TempVal3 = 'Y'
        } else {
            TempVal3 = 'N'
        };
        if ($('#select-3-16-4').val() == 'yes') {
            TempVal4 = 'Y'
        } else {
            TempVal4 = 'N'
        };
        var concat =  TempVal1 + TempVal2 + TempVal3 + TempVal4 ;
        Value_38_Text = 'Your Forum'
        if (concat == 'YNNN') {Value_38_Text = 'Binding Arbitration'};
        if (concat == 'NYNN') {Value_38_Text = 'Small Claims'};
        if (concat == 'NNNN') {Value_38_Text = 'General Civil Court System'};
        if (concat == 'NYYN') {Value_38_Text = 'Binding Arbitration'};
        if (concat == 'NYYY') {Value_38_Text = 'Small Claims'};
        console.log(concat)

    //** Step 7 End */
    DataForm = [
        {id: "Step1",
            Values: {
                //Step1
                1: $('#textarea-1-1').val(),
                2: $('#select-1-2').val(),
                3: $('#select-1-3').val(),
                4: $('#select-1-4').val(),
                5: $('#textarea-1-4-1').val(),
                6: $('#select-1-5').val(),
                7: Value_6
            }
        },
        {id: "Step2",
            Values: {
                //Step2
                8: parseInt($('#input-2-7').val().replace(",","")  ,10),
                9: $('#select-2-8').val(),
                10: parseInt($('#input-2-8-1').val().replace(",","")  ,10),
                11: $('#select-2-9').val(),
                12: parseInt($('#input-2-9-1').val().replace(",","")  ,10),
                13: Value_8_plus_9,
                14: $('#select-2-10').val(),
                15: $('#select-2-10-1').val(),
                16: parseInt($('#input-2-10-2').val().replace(",","")  ,10),
                17: Value_11,
                18: $('#select-2-12').val(),
                19: selectedVal_Step2 + ' - ' + selectedVal_Step2_text,
                20: Value_13_2,
                21: $('#select-2-14').val(),
                22: parseInt($('#input-2-14-1').val().replace(",","")  ,10),
                23: Value_14_2,
                24: Value_15
            }           
        },
        {id: "Step3",
            Values: {
                //Step3
                25: $('#SmallClaimLimitResult').text().replace(",",""),
                26: Value_16_1,
                27: $('#select-3-16-2').val(),
                28: $('#select-3-16-3').val(),
                29: $('#select-3-16-4').val(),
                30: Value_16_Value,
                31: $('#select-3-17').val(),
                32: Value_17_Value,
                33: $('#select-3-18').val(),
                34: Value_18_Value,
                35: $('#select-3-19').val(),
                36: Value_19_Value,
                37: Value_16_Value + Value_17_Value + Value_18_Value + Value_19_Value 
            }

        },
        {id: "Step4",
            Values: {
                //Step4
                38: selectedVal_Step4,
                39: Value_21_Value,
                40: Value_22_Value
            }

        },
        {id: "Step5",
            Values: {
                41: Value_25,
                42: Value_15,
                43: Value_24,
                44: Value_26,
                45: Value_22_Value,
                46: '',
                47: '',
                48: Value_11,
                49: Value_31,
                50: Value_29
            }
        },
        {id: "Step6",
            Values: {
                51: Value_33_Chart_Title,
                52: Value_33_Chart_Text
            }
        },
        {id: "Step7",
            Values: {
                53: Value_34_Text,
                54: '',
                55: '',
                56: '',
                57: Value_38_Text
            }
        }
    ]
}

$('#btn-next-step-modal').click(function (e) { 
    GetStepsData();
    //var LastStep = $("#wizard").steps('getCurrentIndex')
    var tablist = document.querySelector('[role="tablist"]');
    var tabs = tablist.getElementsByTagName('li');
    var ActiveTab = 0;
    var lastdone = 0;
    for (let index = 0; index < tabs.length; index++) {
        if (tabs[index].className.includes('current')) { ActiveTab =  index  } ;
        if (tabs[index].className.includes('done')) {lastdone = index } ; 
    }
    if (lastdone != 0 && ActiveTab < lastdone  ){  
        //Advance to last Step
        for (let index = 0; index < (lastdone - ActiveTab); index++) {
            $("#wizard").steps('next');
        }
        //recalculate
        for (let index = 0; index <= lastdone; index++) {
            var localstep = 'Step' + (index + 1)
            CheckStep(localstep,false)
        }
    } else {
        $("#wizard").steps('next'); //Show the Next Step.
    }

    //Evaluate if the first tab from next step must be showed
    /*
    if ( $('#ResultStep1').is(':visible') ){ showTab(0,'Step2') };
    if ( $('#ResultStep2').is(':visible') ){ showTab(0,'Step3') };
    if ( $('#ResultStep3').is(':visible') ){ showTab(0,'Step4') };
    if ( $('#ResultStep4').is(':visible') ){ showTab(0,'Step5') };
    */
    $('#StepResult').modal('toggle');
});


///*****SCRIPTS TO GET SEPARATE QUESTIONS */

function showTab(n,step) {
    // This function will display the specified tab of the form...
    var stp = document.getElementById(step)
    var x = stp.getElementsByClassName("tab");
    //Progress BAR
    var progr = ( (n+1) / x.length) * 100
    if (progr == 100 ){progr = 95}
    $('#progress_' + step).css('width', progr.toString() + '%');
    $('#progress_text_' + step).text(progr.toString() + '% complete');
    $('#progress_' + step).removeClass('bg-success');
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        //Hide others TAB
        for (let index = 0; index < x.length; index++) {
            if (index > 0 ){ x[index].style.display = 'none'  };
        }
        currentTab = 0
        previousTab = 0
        if (step == 'Step1'){
            $('#prevBtn1').hide();
            $('#nextBtn1').show();
            $('#ResultStep1').hide();
        };
        if (step == 'Step2'){
            $('#prevBtn2').hide();
            $('#nextBtn2').show();
            $('#ResultStep2').hide();
        };
        if (step == 'Step3'){
            $('#prevBtn3').hide();
            $('#nextBtn3').show();
            $('#ResultStep3').hide();
        };    
        if (step == 'Step4'){
            $('#prevBtn4').hide();
            $('#nextBtn4').show();
            $('#ResultStep4').hide();
        };    
        if (step == 'Step5'){
            $('#prevBtn5').hide();
            $('#nextBtn5').show();
        }; 
        if (step == 'Step6'){
            $('#prevBtn6').hide();
            $('#nextBtn6').show();
        };        
        } else {
        if (step == 'Step1'){$('#prevBtn1').show()};
        if (step == 'Step2'){$('#prevBtn2').show()};
        if (step == 'Step3'){$('#prevBtn3').show()};
        if (step == 'Step4'){$('#prevBtn4').show()};
        if (step == 'Step5'){$('#prevBtn5').show()};
        if (step == 'Step6'){$('#prevBtn6').show()};
    }
    /*
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Evaluate";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    */
    //... and run a function that will display the correct step indicator:
    //fixStepIndicator(n)
}

function nextPrev(n,step) {
    // This function will figure out which tab to display
    var stp = document.getElementById(step);
    var x = stp.getElementsByClassName("tab");
    if (n == -1) { 
        x[currentTab].style.display = "none"
        if (x[currentTab].id == 'Q14' &&  $('#select-2-12').val() == 'yes'){
            $('#attorney_yes').show();
            $('#attorney_no').hide();
        } else {            
            $('#attorney_yes').hide();
            $('#attorney_no').show();
        }
        if (previousTab < (currentTab -1) ) {
            currentTab = previousTab
        } else {
            previousTab = currentTab
            currentTab = currentTab + n;
        }
        showTab(currentTab,step)  
        return true
    }
    var IsValid = validateForm(step)
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !IsValid) return false;    
    
    //Check Especial Cases for Steps
    if (step == 'Step1' && n == 1){
        if ( (x[currentTab].id == 'Q2' &&  $('#select-1-2').val() == 'yes')
            || (x[currentTab].id == 'Q3' &&  $('#select-1-3').val() == 'no') 
            || (x[currentTab].id == 'Q4' &&  $('#select-1-4').val() == 'no') ){
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = x.length; //Skip to End       
        }else{
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n;
        }
    }
    if (step == 'Step2' && n == 1){
        GetStepsData();
        $('#input-2-11').val(SeparadorMiles(Value_11));     
        if (x[currentTab].id == 'Q10' &&  $('#select-2-10').val() == 'no') {
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = 5; //Skip to Q12
        }else if (x[currentTab].id == 'Q12' &&  $('#select-2-12').val() == 'yes'){
            $('#attorney_no').hide();
            $('#attorney_yes').show();
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n; 
        } else {
            $('#attorney_yes').hide();
            $('#attorney_no').show();
            $('#input-2-13').val(SeparadorMiles(Math.round(Value_11 * 0.8)));
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n;             
        }
    }
    if (step == 'Step3' && n == 1){
        var diff = $('#SmallClaimLimitResult').text().replace(",","") - Value_11
        if (x[currentTab].id == 'Q16-Prev') {
            $('#input-3-16-1').val(SeparadorMiles(Value_11));
            if (diff <= 0) {
                $('#WhitinEvaluation').html('<h5>Your Recoverable Damages <span class="badge badge-primary">Are Not Within</span> your state&#39s small claim limit.</h5>');
                $('#BellowLimit').hide();
                $('#AboveLimit').show();
            }else{
                $('#WhitinEvaluation').html('<h5>Your Recoverable Damages <span class="badge badge-primary">Are Within</span> your state&#39s small claim limit.</h5>');                
                $('#AboveLimit').hide();
                $('#BellowLimit').show();
            }
            if ($('#select-3-16-2').val() == 'yes' ){
                $('#BellowLimit').show();        
            }else {
                if (diff <= 0 ) { $('#BellowLimit').hide() };
                $('#select-3-16-3').val('no');
                $('#select-3-16-4').val('no');
            };
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n;                  
        } else if (x[currentTab].id == 'Q17' &&  ($('#select-3-16-2').val() == 'yes' || diff > 0)) {
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n + 1;
            $('#select-3-18').val('no');           
        }else {
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n;  
        } 
    }
    if (step == 'Step4' && n == 1) {
        x[currentTab].style.display = "none";
        previousTab = currentTab
        currentTab = currentTab + n;         
    }
    if (step == 'Step5' && n == 1) {
        //x[currentTab].style.display = "none";
        previousTab = currentTab
        currentTab = currentTab + n;         
    }
    if (step == 'Step6' && n == 1) {
        //x[currentTab].style.display = "none";
        previousTab = currentTab
        currentTab = currentTab + n;         
    }
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        if (step == 'Step1'){ 
            CheckStep(step,true);
            $('#prevBtn1').hide();
            $("#nextBtn1").hide();
            //StepResults StepView
            $('#ResultStep1Text1').text($('#StepResultText1').text());
            $('#ResultStep1').show();
        }
        if (step == 'Step2'){ 
            CheckStep(step,true);
            $("#prevBtn2").hide();
            $("#nextBtn2").hide();
            //StepResults StepView
            $('#ResultStep2Text1').text($('#StepResultText1').text());
            $('#ResultStep2Text2').text($('#StepResultText2').text());
            $('#ResultStep2Text3').text($('#StepResultText3').text());
            $('#ResultStep2').show();
        }  
        if (step == 'Step3') {
            CheckStep(step,true);
            $("#prevBtn3").hide();
            $("#nextBtn3").hide();
            //StepResults StepView
            $('#ResultStep3Text1').text($('#StepResultText1').text());
            $('#ResultStep3Text2').text($('#StepResultText2').text());
            $('#ResultStep3Text3').text($('#StepResultText3').text());
            $('#ResultStep3').show();            
        }
        if (step == 'Step4'){
            CheckStep(step,true);
            $("#prevBtn4").hide();
            $("#nextBtn4").hide();
            //StepResults StepView
            $('#ResultStep4Text1').text($('#StepResultText1').text());
            $('#ResultStep4Text2').text($('#StepResultText2').text());
            $('#ResultStep4Text3').text($('#StepResultText3').text());
            $('#ResultStep4').show();
            //LoadTable Step5
            $('#tbl-row-1').text(DataForm[4]['Values'][41]);
            $('#tbl-row-2').text('$' + SeparadorMiles(DataForm[4]['Values'][42]));
            $('#tbl-row-3').text(DataForm[4]['Values'][43]);
            $('#tbl-row-4').text(DataForm[4]['Values'][44]);
            $('#tbl-row-5').text(DataForm[4]['Values'][45]);
            $('#tbl-row-6').text(''); //Blank Space
            $('#tbl-row-7').text('');
            $('#tbl-row-8').text('$' + SeparadorMiles(DataForm[4]['Values'][48]));
            $('#tbl-row-9').text('$' + SeparadorMiles(Math.round(DataForm[4]['Values'][49])) );
            var num = DataForm[4]['Values'][50]
            $('#tbl-row-10').text( (Math.round((num + Number.EPSILON) * 100)) + ' %' );         
        }        
        if (step == 'Step5'){
            CheckStep(step,true);
            $("#prevBtn5").hide();
            $("#nextBtn5").hide();
            $('#ResultStep6').html('<p> '+  DataForm[5]['Values'][51] + '</p> <p style="text-align: justify;" >' + DataForm[5]['Values'][52] + '</p>')
            $("#wizard").steps('next');
        }
        if (step == 'Step6'){
            CheckStep(step,true);
            $("#prevBtn6").hide();
            $("#nextBtn6").hide();
            $("#wizard").steps('next');
        }
        
        previousTab = 0
        currentTab = 0//Reset Ordinal
        //PROGRESS BAR
        $('#progress_' + step).css('width', '100%');
        $('#progress_' + step).addClass('bg-success');
        $('#progress_text_' + step).text('100% complete');

        return false;
    }
    // Otherwise, display the correct tab:
    if (n == 1){showTab(currentTab,step);}
    /*
    if (step == 'Step1' && n == 1){showTab(currentTab,'Step1');}
    if (step == 'Step2' && n == 1){showTab(currentTab,'Step2');}
    */
}

function validateForm(step) {
    // This function deals with validation of the form fields
    var stp = document.getElementById(step)
    var x, y, i, j, valid = true;
    x = stp.getElementsByClassName("tab");
    try {
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            } else {
                y[i].className += " valid";
            }
        }
    }catch(err){
        valid = true
    }
    try {
        if (step == 'Step2' && x[currentTab].id == 'Q13' && $('#select-2-12').val() == 'yes'){
            var selected = $("input[type='radio'][name='attorney']:checked");
            if (selected.length == 0) {
                $('#attorney_yes').css('background-color', '#ffdddd');;
                valid = false;
            }
        }
        if (step == 'Step4' && x[currentTab].id == 'Q21' ){
            var selected = $("input[type='radio'][name='adversary']:checked");
            if (selected.length == 0) {
                $('#adversary_check').css('background-color', '#ffdddd');
                valid = false;
            }
        }
    } catch (error) {
        valid = true
    }
    try {
        z = x[currentTab].getElementsByTagName("textarea");
        // A loop that checks every textarea field in the current tab:
        for (i = 0; i < z.length; i++) {
            // If a field is empty...
            if (z[i].value == "") {
                // add an "invalid" class to the field:
                z[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            } else {
                z[i].className += " valid";
            }
        }   
    }catch (err){
        valid = true
    }

    try {
        s = x[currentTab].getElementsByTagName("select");
        // A loop that checks every select field in the current tab:
        for (i = 0; i < s.length; i++) {
            // If a field is empty...
            if (s[i].value == "") {
                // add an "invalid" class to the field:
                s[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
                if (step == 'Step3' && x[currentTab].id == 'Q16'){
                    if ($('#select-3-16-3').val() != '' && $('#select-3-16-4').val() != '' && $('#select-3-16-2').is(':hidden') ) {
                        s[i].className += " valid";
                        valid = true        
                    }
                }
            } else {
                s[i].className += " valid";
            }
        }        
    }catch (err){
        valid = true
    }
    // If the valid status is true, mark the step as finished and valid:
    /*
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    */
    return valid; // return the valid status
}

function SeparadorMiles(valor){
    if (Number.isInteger(valor)){
        var texto = valor.toString();
        var textoabs = texto.replace("-", "");
    }
    else {
        var texto = valor ;
        var textoabs = Math.round(valor);
    };
    if ( textoabs.length > 6 ){
    var textoFinal = texto.substr(0,texto.length - 6) + ',' + texto.substr(texto.length - 6,3) + ',' + texto.substr(texto.length - 3,3)  ;
    }
    else if (textoabs.length <= 6 && textoabs.length > 3) {
    var textoFinal =  texto.substr(0,texto.length - 3) + ',' + texto.substr(texto.length - 3,3)  ;
    } else {
    var textoFinal = texto ;
    };
    return textoFinal ;
};

function VLookUp(object,value,attSearch,attResult){
    var TempArray = object
    var result = 'Not Found'
    for (var i = 0; i <= TempArray.length; i++) {
        if (TempArray[i][attSearch] == value ) {
            result = TempArray[i][attResult]
            return result
        }
    }
            
}

</script>