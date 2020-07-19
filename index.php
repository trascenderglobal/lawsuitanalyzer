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
        #Step1,#Step2 {
            /*text-align: ;background-color: #ffffff;*/
            margin: auto;
            padding-top: 15px;
            width: 80%;
            min-width: 300px;
        }

        /* Style the input fields */
        input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            border: 1px solid #aaaaaa;
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

            <div id="wizard">
                <h2 style="text-align: center !important;">Legal Evaluation</h2>
                <section>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <h2>Case Value Assesment</h2>
                <section>
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
                                            <div id="attorney_yes" class="form-group">
                                                <h6>13A. Select ONE of the following options:</h6>
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
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <h2>Collectability</h2>
                <section>
                    <div class="row">
                        <div class="col">
                            

                        </div>
                    </div>
                </section>

                <h2>Comprehensive Case Analysis</h2>
                <section>
                    <div class="row">
                        <div class="col">
                            

                        </div>
                    </div>
                </section>

                <h2>Case Feasibility Assesment Chart</h2>
                <section>
                    <div class="row">
                        <div class="col">
                            

                        </div>
                    </div>
                </section>

                <h2>Forth Step</h2>
                <section>
                    <div class="row">
                        <div class="col">
                            

                        </div>
                    </div>
                </section>

                <h2>Forum Assessment</h2>
                <section>
                    <div class="row">
                        <div class="col">
                            

                        </div>
                    </div>
                </section>
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
    $('#ResultStep1').hide();
    $('#ResultStep2').hide();
    $('#PriorObligation_yes').hide();
    $('#PerformSatisfactory_yes').hide();
    $('#CauseOfSituation_yes').hide();
    $('#RecieveBenefit_yes').hide();
    $('#DamageProvision_yes').hide();
    $('#attorney_yes').hide();
    $('#attorney_no').hide();
    $('#moneytime_yes').hide();
    $("#prevBtn").hide();
    $("#prevBtn2").hide();

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

});
//Script For Step Behaviour
var currentTab = 0; 
showTab(currentTab,'Step1'); 
showTab(currentTab,'Step2'); 

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

var Value_8, Value_9, Value_8_plus_9, 
    Value_11, selectedVal, Value_13_2, Value_14_2, Value_15 ;

function GetStepsData() {
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
    var x = stp.getElementsByClassName("tab");
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "none";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Evaluate";
    } else {
        document.getElementById("nextBtn").innerHTML = "Next";
    }
    //... and run a function that will display the correct step indicator:
    //fixStepIndicator(n)
}

function nextPrev(n,step) {
    // This function will figure out which tab to display
    if (step == 'Step1'){
        var stp = document.getElementById("Step1");
        var IsValid = validateForm('Step1')
    }
    if (step == 'Step2'){
        var stp = document.getElementById("Step2");
        var IsValid = validateForm('Step2')
    }
    var x = stp.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !IsValid) return false;
    //Check Especial Cases for Steps
    if (step == 'Step1'){
        if ( (x[currentTab].id == 'Q2' &&  $('#select-1-2').val() == 'yes')
            || (x[currentTab].id == 'Q3' &&  $('#select-1-3').val() == 'no') 
            || (x[currentTab].id == 'Q4' &&  $('#select-1-4').val() == 'no') ){
            x[currentTab].style.display = "none";
            currentTab = x.length; //Skip to End       
        }else{
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;
        }
    }
    if (step == 'Step2'){
        GetStepsData();
        $('#input-2-11').val(SeparadorMiles(Value_11));     
        if (x[currentTab].id == 'Q10' &&  $('#select-2-10').val() == 'no') {
            x[currentTab].style.display = "none";
            currentTab = 5; //Skip to Q12
        }else if (x[currentTab].id == 'Q12' &&  $('#select-2-12').val() == 'yes'){
            $('#attorney_yes').show();
            x[currentTab].style.display = "none";
            currentTab = currentTab + n; 
        } else {
            $('#attorney_no').show();
            $('#input-2-13').val(SeparadorMiles(Value_11 * 0.8));
            x[currentTab].style.display = "none";
            currentTab = currentTab + n;             
        }
    }

    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        if (step == 'Step1'){ 
            $("#nextBtn").hide();
            CheckStep1();
            //StepResults StepView
            $('#ResultStep1Text1').text(result);
            $('#ResultStep1').show();
        }
        if (step == 'Step2'){ 
            CheckStep2();
            $("#nextBtn2").hide();
            //StepResults StepView
            $('#ResultStep2Text1').text($('#StepResultText1').text());
            $('#ResultStep2Text2').text($('#StepResultText2').text());
            $('#ResultStep2Text3').text($('#StepResultText3').text());
            $('#ResultStep2').show();
        }        
        currentTab = 0//Reset Ordinal
        return false;
    }
    // Otherwise, display the correct tab:
    if (step == 'Step1'){showTab(currentTab,'Step1');}
    if (step == 'Step2'){showTab(currentTab,'Step2');}
    
}

function validateForm(step) {
    // This function deals with validation of the form fields
    if (step == 'Step1'){var stp = document.getElementById("Step1") }
    if (step == 'Step2'){var stp = document.getElementById("Step2") }
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

</script>