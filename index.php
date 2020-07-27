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
        <script src="lib/modernizr-2.6.2.min.js"></script>
        <script src="lib/jquery-3.5.1.min.js"></script>
        <script src="lib/jquery.cookie-1.3.1.js"></script>
        <script src="js/bootstrap.js"  > </script>
        <script src="build/jquery.steps.js"></script> 
    </head>
    <body style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">

    <style>
        /* Style the form */
        #Step1,#Step2,#Step3 {
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
        label { color: #345B99;}

        @media (min-width: 576px) {
            html { font-size: 0.75rem; }
            .wizard > .content {min-height: 45em }
        }
        @media (min-width: 768px) {
            html { font-size: 1rem; }
            .wizard > .content {min-height: 45em }
        }
        @media (min-width: 992px) {
            html { font-size: 1.25rem; }
            .wizard > .content {min-height: 25em }
        }
        @media (min-width: 1200px) {
            html { font-size: 1.25rem; }
            .wizard > .content {min-height: 25em }
        }
    </style>


        <header>
            <h1 style="text-align: center;">Lawsuit Analyzer</h1>
            <h2 style="text-align: center;"> Receive a professional legal analysis of your dispute</h2>
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
                    <h2 style="text-align: center !important;">Legal Evaluation</h2>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h3>Legal Evaluation</h3>
                                            <h6>What is your likelihood of prevailing?</h6>
                                        </div>
                                        <div class="col-lg-4 sm-6" style="text-align: right;">
                                            <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                <img src="assets/helpimage.png" alt="Help Image" width="100" height="100">
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
                                                            <sup class="text-danger">* </sup>
                                                        </label>

                                                        <a href="https://drive.google.com/open?id=14zQvoL58mLD5Kj-QguRaNx0qErjD4ClW" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>

                                                        <textarea id="textarea-1-1" name="textarea-1-1" required="required" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                                <div id="Q2" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-1-2">2. Did your adversary perform these obligations in a satisfactory manner?
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <a href="https://drive.google.com/open?id=1wfzBxuEvHaH4vFGfT5Ekjwn59TgULOlL" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>
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
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <a href="https://drive.google.com/open?id=1YP037pam859jpZEyXO8bJ309iXCi1FfD" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>                                                
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
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <a href="https://drive.google.com/open?id=1H9U8wvC0hZtWdrrcqp9H4ZGpXu-7iKao" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>                                                                                                
                                                        <select id="select-1-4" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id = "PriorObligation_yes" class="form-group">
                                                        <label id="label-1-4-1" for="textarea-1-4-1">Please describe
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <textarea id="textarea-1-4-1" class="form-control" name="" rows="3"></textarea>
                                                    </div>                                            
                                                </div>
                                                <div id="Q5" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-1-5">5. Did you perform your obligation in a satisfactory manner?
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>                                                                                                                                                
                                                        <select id="select-1-5" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="PerformSatisfactory_yes" class="form-group">
                                                        <label id="label-1-5-1" for="textarea-1-4-1">Please describe
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <textarea id="textarea-1-5-1" class="form-control" name="" rows="3"></textarea>
                                                    </div>                                                   
                                                </div>
                                                <div style="overflow:auto; margin-top: 15px;">
                                                    <div style="float:right;">
                                                    <button type="button" id="prevBtn" class="btn btn-secondary" onclick="nextPrev(-1,'Step1')">Previous</button>
                                                    <button type="button" id="nextBtn" class="btn btn-success" onclick="nextPrev(1,'Step1')">Next</button>
                                                    </div>
                                                </div>

                                            </form>
                                            <div id="ResultStep1">
                                                <h4 id="ResultStep1Text1"></h6>    
                                                <button class="btn btn-info" type="button" onclick="showTab(0,'Step1')">Edit answers</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Case Value Assesment</h2>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h3>Case Value Assessment</h3>
                                            <h6>How much are you likely to recover?</h6>
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
                                                        <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a> 
                                                        <input id="input-2-7" class="form-control" type="text" name="" placeholder="Enter $ amount">
                                                    </div>
                                                </div>
                                                <div id ="Q8" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-2-8">8. Were you a cause of the situation that caused your damages?
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>
                                                        <select id="select-2-8" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="CauseOfSituation_yes" class="form-group">
                                                        <label id="label-2-8-1" for="input-2-8-1">Amount to be deducted from your damages
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <input id="input-2-8-1" class="form-control" type= "text" ></input>
                                                    </div>                                            
                                                </div>
                                                <div id ="Q9" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-2-9">9. Did you receive a substantial benefit from the situation?
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>
                                                        <select id="select-2-9" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="RecieveBenefit_yes" class="form-group">
                                                        <label id="label-2-9-1" for="input-2-9-1">Enter the $ amount your conduct contributed to your damages (use half of your damages if unsure)
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <input id="input-2-9-1" class="form-control" type= "text" ></input>
                                                    </div>     
                                                </div>
                                                <div id ="Q10" class="tab">
                                                    <div class="form-group">
                                                        <label for="select-2-10">10. Is there a damage defining provision in a written agreement that pertains to this dispute?
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <a href="https://drive.google.com/open?id=1BHMKEMDuHqm6pxDn23UFILuJ6WDMO8wV" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>
                                                        <select id="select-2-10" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="DamageProvision_yes" class="form-group">
                                                        <label id="label-2-10-1" for="select-2-10-1">Liquidated Damages or Damage Limit ?
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <select id="select-2-10-1" class="form-control" name="">
                                                            <option value="default" >Please choose an option</option>
                                                            <option value="Liquidated-Damages">Liquidated Damages</option>
                                                            <option value="Damage-Limit">Damage Limit</option>
                                                        </select>
                                                        <label id="label-2-10-2" for="input-2-10-2">Enter the Liquidated Damages amount from your Agreement.
                                                            <sup class="text-danger">* </sup>
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
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <a href="https://drive.google.com/open?id=1YP037pam859jpZEyXO8bJ309iXCi1FfD" target="_blank">
                                                            <img placement="top" src="assets/help-icon.png" alt="Help" style="height: 20px; width: 20px; position: relative; left: 8px;">
                                                        </a>                                                
                                                        <select id="select-2-12" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>   
                                                </div>
                                                <div id ="Q13" class="tab">
                                                    <div id="attorney_yes" class="form-group" style="text-align: justify;">
                                                        <h6 style="text-align: center;" >13A. Select ONE of the following options:</h6>
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
                                                        <label id="label-2-13" for="input-2-13">13B. Because you will not be represent by an Attorney we have deduct 20% as a margin of error from your Recoverable Damages.
                                                        </label>
                                                        <input id="input-2-13" class="form-control" type= "text"  value="0"  disabled></input>
                                                    </div>
                                                </div>
                                                <div id ="Q14" class="tab">
                                                    <div class="form-group">
                                                        <label id="label-2-14" for="select-2-14">14. Will you invest substantial time into your case?
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <select id="select-2-14" class="form-control" name="">
                                                            <option value="" >Please choose an option</option>
                                                            <option value="yes">Yes</option>
                                                            <option value="no">No</option>
                                                        </select>
                                                    </div>
                                                    <div id="moneytime_yes" class="form-group">
                                                        <label id="label-2-14-1" for="input-2-14-1">What is the approximate value of the time you will invest?
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <input id="input-2-14-1" class="form-control" type= "text" ></input>
                                                        
                                                        <label id="label-2-14-2" for="input-2-14-2">This amount is divided by two to reflect that this is time not money you are losing.
                                                            <sup class="text-danger">* </sup>
                                                        </label>
                                                        <input id="input-2-14-2" class="form-control" type= "text" value="0" disabled></input>
                                                    </div>
                                                </div>
                                                <div style="overflow:auto; margin-top: 15px;">
                                                    <div style="float:right;">
                                                    <button type="button" id="prevBtn2" class="btn btn-secondary" onclick="nextPrev(-1,'Step2')">Previous</button>
                                                    <button type="button" id="nextBtn2" class="btn btn-success" onclick="nextPrev(1,'Step2')">Next</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div id="ResultStep2">
                                                <h4 id="ResultStep2Text1"></h6>
                                                <h4 id="ResultStep2Text2"></h6>
                                                <h4 id="ResultStep2Text3"></h6>
                                                <button class="btn btn-info" type="button" onclick="showTab(0,'Step2')">Edit answers</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Collectability</h2>
                    <section>
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="row" style="align-items: flex-end;">
                                        <div class="col-lg-8 sm-6"> 
                                            <h3>Legal Options Assessment</h3>
                                            <h6>What are your legal options?</h6>
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
                                                            <sup class="text-danger">* </sup>
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
                                                                <sup class="text-danger">* </sup>
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
                                                            <label for="select-3-16-3">16. Do you have a binding arbitration provision in a written agreement with your adversary?</label>
                                                            <sup class="text-danger">* </sup>
                                                            </label>
                                                            <select id="select-3-16-3" class="form-control" name="">
                                                                <option value="" >Please choose an option</option>
                                                                <option value="yes">Yes</option>
                                                                <option value="no">No</option>
                                                            </select>
                                                        </div>                                
                                                        <div id="ExcludeSmallClaims" class="form-group">
                                                            <label for="select-3-16-4">Does it exclude Small Claims?</label>                                                            
                                                            <sup class="text-danger">* </sup>
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
                                                <div style="overflow:auto; margin-top: 15px;">
                                                    <div style="float:right;">
                                                    <button type="button" id="prevBtn3" class="btn btn-secondary" onclick="nextPrev(-1,'Step3')">Previous</button>
                                                    <button type="button" id="nextBtn3" class="btn btn-success" onclick="nextPrev(1,'Step3')">Next</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div id="ResultStep3">
                                                <h4 id="ResultStep3Text1"></h6> 
                                                <h4 id="ResultStep3Text2"></h6>
                                                <h4 id="ResultStep3Text3"></h6>                                            
                                                <button class="btn btn-info" type="button" onclick="showTab(0,'Step3')">Edit answers</button>
                                            </div>                                    
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
                                    

                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Case Feasibility Assesment Chart</h2>
                    <section>
                        <div class="container-fluid">                            
                            <div class="row">
                                <div class="col">
                                    

                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Forth Step</h2>
                    <section>
                        <div class="container-fluid">                            
                            <div class="row">
                                <div class="col">
                                    

                                </div>
                            </div>
                        </div>
                    </section>

                    <h2>Forum Assessment</h2>
                    <section>
                        <div class="container-fluid">                            
                            <div class="row">
                                <div class="col">
                                    

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
                            <h4 style="text-align: left;" id="StepResultText1" ></h4>
                            <h4 style="text-align: left;" id="StepResultText2" ></h4>
                            <h4 style="text-align: left;" id="StepResultText3" ></h4>
                            <h6 style="text-align: left; margin-top: 15px;" id="StepResultDetailsHeader"> </h6>
                            <p style="text-align: left;" id="StepResultDetailsText"> </p>
                        </div> 
                    </div>
                </div>          
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btn-next-step-modal" >Continue</button>
                </div>
                </div>
            </div>
        </div>    


    </body>

</html>

<script>
   
$(document).ready(function () {
    //Hide results Text
    $('#ResultStep1,#ResultStep2').hide();
    //Hide Dependency Question
    //**Step2 */
    $('#PriorObligation_yes,#PerformSatisfactory_yes,#CauseOfSituation_yes,#RecieveBenefit_yes').hide();
    $('#DamageProvision_yes,#attorney_yes,#attorney_no,#moneytime_yes').hide();
    //** Step 3 */
    $('#AboveLimit,#BellowLimit,#ExcludeSmallClaims').hide();
    //HidePreviousButton
    $("#prevBtn,#prevBtn2,#prevBtn3").hide();

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
        }else {
            $('#CauseOfSituation_yes').hide();
            $('#input-2-8-1').val(0);
        };
    });

    $('#select-2-9').change(function () { 
        if ($(this).val() == 'yes'){
            $('#RecieveBenefit_yes').show();        
        }else {
            $('#RecieveBenefit_yes').hide();
            $('#input-2-9-1').val(0);
        };
    });

    $('#select-2-10').change(function () { 
        if ($(this).val() == 'yes'){
            $('#DamageProvision_yes').show();        
        }else {
            $('#DamageProvision_yes').hide();
            $('#select-2-10-1').val('default');
            $('#input-2-10-2').val(0); 
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
        };
    });

    $('#select-3-16-2').change(function () { 
        if ($(this).val() == 'yes'){
            $('#BellowLimit').show();
            $('#select-3-16-4').hide();
            $('#select-3-16-3').val('');
            $('#select-3-16-4').val('');         
        }else {
            $('#BellowLimit').hide();
            $('#select-3-16-3').val('no');
            $('#select-3-16-4').val('no');
        };
    });

    $('#select-3-16-3').change(function () { 
        if ($(this).val() == 'yes'){
            $('#ExcludeSmallClaims').show();
            $('#select-3-16-2').val('no');
            $('#select-3-16-4').val('');
        }else {
            $('#ExcludeSmallClaims').hide();
            $('#select-3-16-2').val('no');
            $('#select-3-16-4').val('no');
        };
    });

/*
    $("#input-2-7").on({
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
*/
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
        validateForm('Step1')
        nextPrev(1,'Step1');
    });

    //Easy advance behaviour Step2
    $('#select-2-8,#select-2-9,#select-2-10,#select-2-10-1,#select-2-12,#select-2-14').change(function () { 
        validateForm('Step2')
        nextPrev(1,'Step2');
    });

    $('#input-2-7,#input-2-8-1,#input-2-9-1,#input-2-10-2,#input-2-13,#input-2-14-1').keypress(function (e) { 
        var keycode = (e.keyCode ? e.keyCode : e.which);
        if(keycode == '13'){
            validateForm('Step2')
            nextPrev(1,'Step2');  
        }        
    });

    //Easy advance behaviour Step3
    $('#select-3-17,#select-3-18,#select-3-19').change(function () { 
        validateForm('Step3')
        nextPrev(1,'Step3');
    });


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
//Script For Step Behaviour
var currentTab = 0; 
var previousTab = 0;
showTab(currentTab,'Step1'); 
showTab(currentTab,'Step2'); 
showTab(currentTab,'Step3');

var DataForm;
var result = '';

function CheckStep1(){
    GetStepsData(); 
    console.log(DataForm);
    if(DataForm[0]['Values']['Val_2'] == 'yes' || 
        (DataForm[0]['Values']['Val_2'] == 'no' && DataForm[0]['Values']['Val_3'] == 'no') || 
        (DataForm[0]['Values']['Val_2'] == 'no' && DataForm[0]['Values']['Val_3'] == 'no' && DataForm[0]['Values']['Val_4'] == 'no') ||
        (DataForm[0]['Values']['Val_2'] == 'no' && DataForm[0]['Values']['Val_3'] == 'yes' && DataForm[0]['Values']['Val_4'] == 'yes' && DataForm[0]['Values']['Val_5'] == 'no' ) ){
        result = 'Your Case is Weak';
        $('#StepResult').modal({backdrop: 'static', keyboard: false});
        $('#StepResultTitle').text('This is Your Legal Evaluation');
        $('#StepResultText1').text(result);
    }else {
        result = 'Your Case is Feasible!';
        $('#StepResult').modal({backdrop: 'static', keyboard: false});
        $('#StepResultTitle').text('This is Your Legal Evaluation');
        $('#StepResultText1').text(result);
    };
}
var Result1, Result2, Result3;

function CheckStep2(){
    GetStepsData();
    console.log(DataForm);  
    $('#StepResult').modal({backdrop: 'static', keyboard: false});
    $('#StepResultTitle').text('Case Value Assessment.');
    Result1 = parseInt($('#input-2-7').val().replace(",","")  ,10)
    if (!isNaN(DataForm[1]['Values']['Val_11'])) {
        var Result2 = DataForm[1]['Values']['Val_11']
    }
    if (!isNaN(DataForm[1]['Values']['Val_15'])) {
        var Result3 = DataForm[1]['Values']['Val_15']
    }        
    $('#StepResultText1').text(SeparadorMiles(Result1) + ' is your Total Damages.');
    $('#StepResultText2').text(SeparadorMiles(Result2) + '  is your Recoverable Damages based on answers above.');
    $('#StepResultText3').text(SeparadorMiles(Result3) + ' is your Overall Case Value Assessment which includes answers to Questions above.');
    $('#StepResultDetailsHeader').text('Whats does mean that amount?');
    $('#StepResultDetailsText').text('This is the amount you are likely to recover.');
}

function  CheckStep3 () {
    GetStepsData();
    console.log(DataForm);
    $('#StepResult').modal({backdrop: 'static', keyboard: false});
    $('#StepResultTitle').text('This is your Legal Options Assessment');
    $('#StepResultText1').text( DataForm[2]['Values']['Val_20'])
    $('#StepResultText2').text('')
    $('#StepResultText3').text('')
    //ResultStep3Text1
}


var Value_8, Value_9, Value_8_plus_9, 
    Value_11, selectedVal, Value_13_2, Value_14_2, Value_15, 
    Value_16_1, Value_16_Value, Value_17_Value, Value_18_Value, Value_19_Value ;

function GetStepsData() {
//** Step2Calculations**/
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
            console.log(diff)
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
        selectedVal = selected.val();
    }
    if ($('#select-2-12').val() == 'yes'){
        if (selectedVal == 'value-1'){Value_13_2 = Value_11 };
        if (selectedVal == 'value-2'){Value_13_2 = Value_11 * 0.9};
        if (selectedVal == 'value-3'){Value_13_2 = Value_11 * 0.85};
        if (selectedVal == 'value-4'){Value_13_2 = Value_11 * 0.65};
        if (selectedVal == 'value-5'){Value_13_2 = Value_11 * 0.65};
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
    var Value_15 = Value_13_2 - Value_14_2
//** Step 2 End **/

//** Step 3 Calculations*/
    $('#SmallClaimLimitResult').val();
    $('#select-3-16-2').val();
    $('#select-3-16-3').val();
    $('#select-3-16-4').val();
    
    $('#select-3-17').val();
    $('#select-3-18').val();
    $('#select-3-19').val();


    var diff = $('#SmallClaimLimitResult').text().replace(",","") - Value_11
    var Step3_16_Val_1 = 0 , Step3_16_Val_2 = 0;
    if (diff <= 0) {
        Value_16_1 = 'Are Not Within'
        if ($('#select-3-16-2').val() == 'yes') {
            if ($('#select-3-16-3').val() == 'yes' &&  $('#select-3-16-4').val() == 'no') {
                Step3_16_Val_1 = 85
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
    DataForm = [
        {id: "Step1",
            Values: {
                //Step1
                Val_1 : $('#textarea-1-1').val(),
                Val_2 : $('#select-1-2').val(),
                Val_3 : $('#select-1-3').val(),
                Val_4 : $('#select-1-4').val(),
                Val_4_2: $('#textarea-1-4-1').val(),
                Val_5 : $('#select-1-5').val(),
                Val_6 : ''
            }
        },
        {id: "Step2",
            Values: {
                //Step2
                Val_7 :  parseInt($('#input-2-7').val().replace(",","")  ,10),
                Val_8 :  $('#select-2-8').val(),
                Val_8_1 :  parseInt($('#input-2-8-1').val().replace(",","")  ,10),
                Val_9 :  $('#select-2-9').val(),
                Val_9_1 :  parseInt($('#input-2-9-1').val().replace(",","")  ,10),
                Val_9_plus_8 :  Value_8_plus_9,
                Val_10 :  $('#select-2-10').val(),
                Val_10_1 :  $('#select-2-10-1').val(),
                Val_10_2 :  parseInt($('#input-2-10-2').val().replace(",","")  ,10),
                Val_11 :  Value_11,
                Val_12 :  $('#select-2-12').val(),
                Val_13_1 :  selectedVal,
                Val_13_2 :  Value_13_2,
                Val_14 :  $('#select-2-14').val(),
                Val_14_1 :  parseInt($('#input-2-14-1').val().replace(",","")  ,10),
                Val_14_2: Value_14_2,
                Val_15 :  Value_15
            }           
        },
        {id:"Step3",
            Values: {
                //Step3
                Val_16: $('#SmallClaimLimitResult').val().replace(",",""),
                Val_16_1: Value_16_1,
                Val_16_2: $('#select-3-16-2').val(),
                Val_16_3: $('#select-3-16-3').val(),
                Val_16_4: $('#select-3-16-4').val(),
                Val_16_Value: Value_16_Value,
                Val_17: $('#select-3-17').val(),
                Val_17_Value: Value_17_Value,
                Val_18: $('#select-3-18').val(),
                Val_18_Value: Value_18_Value,
                Val_19: $('#select-3-19').val(),
                Val_19_Value: Value_19_Value,
                Val_20: Value_16_Value + Value_17_Value + Value_18_Value + Value_19_Value 
            }

        }
    ]
    console.log(DataForm);
}


$('#btn-next-step-modal').click(function (e) { 
    $("#wizard").steps('next');
    $('#StepResult').modal('toggle');
});


///*****SCRIPTS TO GET SEPARATE QUESTIONS */

function showTab(n,step) {
    // This function will display the specified tab of the form...
    console.log(n + '  -  ' + step)
    if (step == 'Step1'){var stp = document.getElementById("Step1") }
    if (step == 'Step2'){var stp = document.getElementById("Step2") }
    if (step == 'Step3'){var stp = document.getElementById("Step3") }
    var x = stp.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        currentTab = 0
        previousTab = 0
        if (step == 'Step1'){
            $('#prevBtn').hide();
            $('#nextBtn').show();
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
        };    } else {
        if (step == 'Step1'){$('#prevBtn').show()};
        if (step == 'Step2'){$('#prevBtn2').show()};
        if (step == 'Step3'){$('#prevBtn3').show()};
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
            $('#attorney_yes').show();
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n; 
        } else {
            $('#attorney_no').show();
            $('#input-2-13').val(SeparadorMiles(Math.round(Value_11 * 0.8)));
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n;             
        }
    }

    if (step == 'Step3' && n == 1){
        if (x[currentTab].id == 'Q16-Prev') {
            $('#input-3-16-1').val(SeparadorMiles(Value_11));
            var diff = $('#SmallClaimLimitResult').text().replace(",","") - Value_11
            if (diff <= 0) {
                $('#WhitinEvaluation').html('<h5>Your Recoverable Damages <span class="badge badge-primary">Are Not Within</span> your state&#39s small claim limit.</h5>');
                $('#BellowLimit').hide();
                $('#AboveLimit').show();
            }else{
                $('#WhitinEvaluation').html('<h5>Your Recoverable Damages <span class="badge badge-primary">Are Within</span> your state&#39s small claim limit.</h5>');                
                $('#AboveLimit').hide();
                $('#BellowLimit').show();
            }
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n;                  
        } else if (x[currentTab].id == 'Q17' &&  $('#select-3-16-2').val() == 'yes') {
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n + 1;             
        }else {
            x[currentTab].style.display = "none";
            previousTab = currentTab
            currentTab = currentTab + n;  
        } 
    }
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        if (step == 'Step1'){ 
            $('#prevBtn').hide();
            $("#nextBtn").hide();
            CheckStep1();
            //StepResults StepView
            $('#ResultStep1Text1').text(result);
            $('#ResultStep1').show();
        }
        if (step == 'Step2'){ 
            CheckStep2();
            $("#prevBtn2").hide();
            $("#nextBtn2").hide();
            //StepResults StepView
            $('#ResultStep2Text1').text($('#StepResultText1').text());
            $('#ResultStep2Text2').text($('#StepResultText2').text());
            $('#ResultStep2Text3').text($('#StepResultText3').text());
            $('#ResultStep2').show();
        }  
        if (step == 'Step3') {
            CheckStep3();
            $("#prevBtn3").hide();
            $("#nextBtn3").hide();
            //StepResults StepView
            $('#ResultStep3Text1').text($('#StepResultText1').text());
            $('#ResultStep3Text2').text($('#StepResultText2').text());
            $('#ResultStep3Text3').text($('#StepResultText3').text());
            $('#ResultStep3').show();            
        }      
        previousTab = 0
        currentTab = 0//Reset Ordinal
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
/*
function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}
*/

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