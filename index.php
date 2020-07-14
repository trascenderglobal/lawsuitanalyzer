<?php
use phpformbuilder\Form;
use phpformbuilder\Validator\Validator;

/* =============================================
    start session and include form class
============================================= */

session_start();
include_once rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . '/analyzer/phpformbuilder/Form.php';

/* == STEP 1 == */
    if ($_SERVER["REQUEST_METHOD"] == "POST" && Form::testToken('fg-form') === true) {
        // create validator & auto-validate required fields
        $validator = Form::validate('fg-form');

        // check for errors
        if ($validator->hasErrors()) {
            $_SESSION['errors']['fg-form'] = $validator->getAllErrors();
        } else {
            // clear the form
            Form::clear('fg-form');
        }
    }

    $form = new Form('fg-form', 'vertical', 'novalidate, data-fv-no-icon=true', 'bs4');
    // $form->setMode('development');
    $form->addTextarea('textarea-1-1', '', 'What obligations did your adversary owe you?', 'required=required');
    $form->addOption('select-1-2', 'yes', 'Yes', '', '');
    $form->addOption('select-1-2', 'no', 'No', '', 'selected');
    $form->addSelect('select-1-2', 'Did your adversary perform these obligations in a satisfactory manner?', 'required=required');
    $form->startDependentFields('select-1-2', 'no');
    $form->addOption('select-1-3', 'yes', 'Yes', '', '');
    $form->addOption('select-1-3', 'no', 'No', '', '');
    $form->addSelect('select-1-3', 'Have you sustained legally recognized damages as a direct result of your adversary\'s conduct?', 'required=required');
    $form->startDependentFields('select-1-3', 'yes');
    $form->addOption('select-1-4', 'yes', 'Yes', '', '');
    $form->addOption('select-1-4', 'no', 'No', '', '');
    $form->addSelect('select-1-4', 'Did you have a prior obligation to your adversary?', 'required=required');
    $form->startDependentFields('select-1-4', 'yes');
    $form->setCols(0, 12);
    $form->addTextarea('textarea-1-4-1', '', '', 'required=required');
    $form->setCols(4, 8);
    $form->addOption('select-1-5', 'yes', 'Yes', '', '');
    $form->addOption('select-1-5', 'no', 'No', '', '');
    $form->addSelect('select-1-5', 'Did you perform your obligation in a satisfactory manner?', 'required=required');
    $form->endDependentFields();
    $form->endDependentFields();
    $form->endDependentFields();
    $form->startDependentFields('select-1-2', 'yes');
    $form->endDependentFields();
    $form->startDependentFields('select-1-3', 'no');
    $form->endDependentFields();
    $form->startDependentFields('select-1-4', 'no');
    $form->endDependentFields();
    $form->centerButtons(true);
    $form->addBtn('button', 'button-evaluate-step-1', '', '<i class="fas fa-angle-double-right" aria-hidden="true"></i> Evaluate', 'id=button-evaluate-step-1,class=btn btn-success,class=ladda-button,data-style=zoom-in', 'btn-group-1');
    //$form->addBtn('button', 'button-next-step-1', '', 'Next', 'id=button-next-step-1,class=btn btn-primary', 'btn-group-1');
    $form->printBtnGroup('btn-group-1');
    $form->addPlugin('formvalidation', '#fg-form');

/* == STEP 2 == */
    if ($_SERVER["REQUEST_METHOD"] == "POST" && Form::testToken('fg-form-2') === true) {
        // create validator & auto-validate required fields
        $validator = Form::validate('fg-form-2');

        // check for errors
        if ($validator->hasErrors()) {
            $_SESSION['errors']['fg-form-2'] = $validator->getAllErrors();
        } else {
            // clear the form
            Form::clear('fg-form-2');
        }
    }

    /* ==================================================
        The Form
    ================================================== */

    $form2 = new Form('fg-form-2', 'vertical', 'novalidate, data-fv-no-icon=true', 'bs4');
    // $form->setMode('development');
    $form2->addInput('text', 'input-2-1', '', 'What is the amount of your damages?', 'placeholder=Enter amount,required=required');
    $form2->addHelper('If Yes: Click on Help and enter the $ amount your conduct contributed to your damages (use half of your damages if unsure). Then Continue', 'select-2-2');
    $form2->addOption('select-2-2', 'yes', 'Yes', '', '');
    $form2->addOption('select-2-2', 'no', 'No', '', 'selected');
    $form2->addSelect('select-2-2', 'Were you a cause of the situation that caused your damages?', 'required=required');
    $form2->startDependentFields('select-2-2', 'yes');
    $form2->addHelper('Enter here the amount your conduct contributed to your damages (use half of your damages if unsure) and enter here.', 'input-2-2-1');
    $form2->addInput('text', 'input-2-2-1', '', 'Amount to be Deducted Based on your answers', 'placeholder=Enter amount,required=required');
    $form2->endDependentFields();
    $form2->addOption('select-2-3', 'yes', 'Yes', '', '');
    $form2->addOption('select-2-3', 'no', 'No', '', 'selected');
    $form2->addSelect('select-2-3', 'Did you receive a substantial benefit from the situation?', 'required=required');
    $form2->startDependentFields('select-2-3', 'yes');
    $form2->addInput('text', 'input-2-3-1', '', 'Amount to be Deducted Based on your answers', 'placeholder=Enter amount,required=required');
    $form2->endDependentFields();
    $form2->addHelper('There are two types of damage defining provisions – liquidated damages and limitation on damages.', 'select-2-4');
    $form2->addOption('select-2-4', 'yes', 'Yes', '', '');
    $form2->addOption('select-2-4', 'no', 'No', '', 'selected');
    $form2->addSelect('select-2-4', 'Is there a damage defining provision in a written contract that pertains to this dispute?', 'required=required');
    $form2->startDependentFields('select-2-4', 'yes');
    $form2->addHelper('A liquidated damages provision is an agreement that specifies the amount of damages the innocent party will receive in the event of breach. A provision limiting damages is different. It does not fix damages – it limits them. You still have to prove your dam- ages, but they cannot go above the limit set. These provisions are always in writing. Chapter 12, Loss Prevention, describes these damage definition provisions in more depth. Review your written agreement to determine if one of these provisions exists. In some states, this type of provision must be separately initialed immediately below the provision and set forth in a clear and obvious format.', 'select-2-4-1');
    $form2->addOption('select-2-4-1', 'Liquidated-Damages', 'Liquidated Damages', '', '');
    $form2->addOption('select-2-4-1', 'Damage-Limit', 'Damage Limit', '', '');
    $form2->addSelect('select-2-4-1', 'Liquidated Damages or Damage Limit ?', '');
    $form2->addHelper('Enter liquidated damages amount, from your Contract, Or if there is a Damage Limit instead in your Contract enter it hear, but there should only be one or the other.', 'input-2-4-2');
    $form2->addInput('text', 'input-2-4-2', '', 'Amount', 'required=required');
    $form2->endDependentFields();
    $form2->addOption('select-2-5', 'yes', 'Yes', '', '');
    $form2->addOption('select-2-5', 'no', 'No', '', 'selected');
    $form2->addSelect('select-2-5', 'Will you be represented by an attorney? ', 'required=required');
    $form2->startDependentFields('select-2-5', 'yes');
    $form2->addRadio('radio-2-5-1', 'Does the agreement signed by you and your adversary contain both an attorneys’ fee and binding arbitration provision?', 'value-1', '');
    $form2->addRadio('radio-2-5-1', 'Does the agreement signed by you and your adversary contain an attorneys’ fee provision, but no binding arbitration provision? (this results in a 10% case value reduction)', 'value-2', '');
    $form2->addRadio('radio-2-5-1', 'Does the agreement signed by you and your adversary contain a binding arbitration provision, but no attorneys’ fee provision? (this results in a 15% case value reduction)', 'value-3', '');
    $form2->addRadio('radio-2-5-1', 'There is no attorneys’ fee or binding arbitration provision in a written agreement between you and your adversary. (this results in a 35% case value reduction)', 'value-4', '');
    $form2->addRadio('radio-2-5-1', 'There is no written agreement between you and your adversary. (this results in a 35% case value reduction)', 'value-5', '');
    $form2->printRadioGroup('radio-2-5-1', 'Select ONE of the following options', true, 'required=required');
    $form2->endDependentFields();
    $form2->addOption('select-2-6', 'yes', 'Yes', '', '');
    $form2->addOption('select-2-6', 'no', 'No', '', '');
    $form2->addSelect('select-2-6', 'Will you be putting substantial time into your case?', 'required=required');
    $form2->startDependentFields('select-2-6', 'yes');
    $form2->addInput('text', 'input-2-7', '', 'What is the approximate value of the time you will put in? ', 'required=required,placeholder=Enter amount');
    $form2->endDependentFields();
    $form2->setCols(0, 12);
    $form2->centerButtons(true);
    $form2->addBtn('button', 'button-evaluate-step-2', '', 'Evaluate', 'id=button-evaluate-step-2,class=btn btn-success', 'btn-group-1');
    //$form2->addBtn('button', 'button-next-step-2', '', 'Next', 'id=button-next-step-2,class=btn btn-primary', 'btn-group-1');
    $form2->printBtnGroup('btn-group-1');
    $form2->addPlugin('formvalidation', '#fg-form-2');

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
        <link rel="shortcut icon" type="image/png" href="../assets/Lawsuit-Analysis-Logo.png" >
        <script src="lib/modernizr-2.6.2.min.js"></script>
        <script src="lib/jquery-3.5.1.min.js"></script>
        <script src="lib/jquery.cookie-1.3.1.js"></script>
        <script src="js/bootstrap.js"  > </script>
        <script src="build/jquery.steps.js"></script>   
        <!-- jQuery -->
        <?php $form->printIncludes('css'); ?>
        <?php $form2->printIncludes('css'); ?>

    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

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
                            <?php $form->render(); ?>
                            <?php
                                $form->printIncludes('js');
                                $form->printJsCode();
                            ?>
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
                                <?php $form2->render(); ?>
                                <?php
                                    $form2->printIncludes('js');
                                    $form2->printJsCode();
                                ?>
                               
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col" > 
                            <h4 style="text-align: left;" id="StepResultText1" ></h4>
                            <h4 style="text-align: left;" id="StepResultText2" ></h4>
                            <h6 style="text-align: left; margin-top: 15px;" id="StepResultDetailsHeader"> </h6>
                            <p style="text-align: left;" id="StepResultDetailsText"> </p>
                        </div> 
                    </div>
                </div>          
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btn-next-step-modal" >Continue</button>
                </div>
                </div>
            </div>
        </div>    
    
    
    
    </body>
</html>

<script>

$(document).ready(function () {
    var DataForm;

    function CheckStep1(){
        GetStepsData();
        var result = ''
        console.log(DataForm);
        if(DataForm['Val_2'] == 'yes' || 
            (DataForm['Val_2'] == 'no' && DataForm['Val_3'] == 'no') || 
            (DataForm['Val_2'] == 'no' && DataForm['Val_3'] == 'no' && DataForm['Val_4'] == 'no') ||
            (DataForm['Val_2'] == 'no' && DataForm['Val_3'] == 'yes' && DataForm['Val_4'] == 'yes' && DataForm['Val_5'] == 'no' ) ){
            result = 'Your Case is Weak';
            $('#StepResult').modal('toggle');
            $('#StepResultTitle').text('This is Your Legal Evaluation');
            $('#StepResultText1').text(result);
        }else {
            result = 'Your Case is Feasible!';
            $('#StepResult').modal('toggle');
            $('#StepResultTitle').text('This is Your Legal Evaluation');
            $('#StepResultText1').text(result);
        };
    }

    function CheckStep2(){
        GetStepsData();
        var result = '';
        console.log(DataForm);
        
        $('#StepResult').modal('toggle');
        $('#StepResultTitle').text('Case Value Assessment.');
        if (isNaN(DataForm['Val_11'])) {
            var Result1 = 0
        } else {
            var Result1 = DataForm['Val_11']
        }
        if (isNaN(DataForm['Val_15'])) {
            var Result2 = 0
        } else {
            var Result2 = DataForm['Val_15']
        }        
        $('#StepResultText1').text(SeparadorMiles(Result1) + ' of Recoverable Damages.');
        $('#StepResultText2').text(SeparadorMiles(Result2) + ' of Case Value Assessment Based your responses above.');
    }

    $('#button-evaluate-step-1').click(function (e) { 
        CheckStep1();
    });

    $('#button-evaluate-step-2').click(function (e) { 
        CheckStep2();
    });

    function GetStepsData() {
        var Value_8
        if (isNaN(parseInt($('#input-2-2-1').val().replace(",",""),10))){
            Value_8 = 0
        } else {
            Value_8 = parseInt($('#input-2-2-1').val().replace(",",""),10)
        }
        var Value_9
        if (isNaN(parseInt($('#input-2-3-1').val().replace(",",""),10))){
            Value_9 = 0
        } else {
            Value_9 = parseInt($('#input-2-3-1').val().replace(",",""),10)
        }        
        var Value_8_plus_9 = Value_8 +  Value_9
        var Value_11 = 0
        if ($('#select-2-4').val() == 'yes') {
            Value_11 = parseInt($('#input-2-4-2').val().replace(",","")  ,10);
        } else {
            Value_11 = Value_8_plus_9
        }
        var selectedVal = "";
        var selected = $("input[type='radio'][name='radio-2-5-1']:checked");
        if (selected.length > 0) {
            selectedVal = selected.val();
        }
        var Value_13_2 = 0
        if ($('#select-2-5').val() == 'yes'){
            if (selectedVal == 'value-1'){Value_13_2 = Value_11 };
            if (selectedVal == 'value-2'){Value_13_2 = Value_11 * 0.9};
            if (selectedVal == 'value-3'){Value_13_2 = Value_11 * 0.85};
            if (selectedVal == 'value-4'){Value_13_2 = Value_11 * 0.65};
            if (selectedVal == 'value-5'){Value_13_2 = Value_11 * 0.65};
        }else {
            Value_13_2 = Value_11 * 0,8 ;
        };
        if ($('#select-2-5').val() == 'yes'){
            if ($('#select-2-6').val() == 'yes'){

            }else{
                
            }
        }else {
            if ($('#select-2-6').val() == 'yes'){

            }else{
                
            }
        }
        
        var Value_15 = Value_13_2

        DataForm = {
            //Step1
            Val_1 : $('#textarea-1-1').val(),
            Val_2 : $('#select-1-2').val(),
            Val_3 : $('#select-1-3').val(),
            Val_4 : $('#select-1-4').val(),
            Val_5 : $('#select-1-5').val(),
            Val_6 : '',
            Val_7 :  parseInt($('#input-2-1').val().replace(",","")  ,10),
            //Step2
            Val_8 :  $('#select-2-2').val(),
            Val_8_1 :  parseInt($('#input-2-2-1').val().replace(",","")  ,10),
            Val_9 :  $('#select-2-3').val(),
            Val_9_1 :  parseInt($('#input-2-3-1').val().replace(",","")  ,10),
            Val_8_plus_9 :  Value_8_plus_9,
            Val_10 :  $('#select-2-4').val(),
            Val_10_1 :  $('#select-2-4-1').val(),
            Val_10_2 :  parseInt($('#input-2-4-2').val().replace(",","")  ,10),
            Val_11 :  Value_11,
            Val_12 :  $('#select-2-5').val(),
            Val_13_1 :  selectedVal,
            Val_13_2 :  Value_13_2,
            Val_14 :  $('#select-2-6').val(),
            Val_14_1 :  parseInt($('#input-2-7').val().replace(",","")  ,10),
            Val_15 :  Value_15,

        }
    }


    $('#btn-next-step-modal').click(function (e) { 
        $("#wizard").steps('next');
        $('#StepResult').modal('toggle');
    });


    $("#input-2-1").on({
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

    $("#input-2-2-1").on({
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

    $("#input-2-3-1").on({
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
    
    $("#input-2-4-2").on({
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

    function SeparadorMiles(valor){
        if (Number.isInteger(valor)){
        var texto = valor.toString();
        var textoabs = texto.replace("-", "");
        }
        else {
        var texto = valor ;
        var textoabs = texto ;
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

});

</script>