<?php
/*  savingCal.php
 *  saving calculator tool
 *
 *   Revision
 * 	Created by Terence at 11/30/2014
 */

//inital setup for this page, this has to be set before include header
$page_title = "Saving Calculator";
$page_author = "Weiwei Chen";
$page_description = "This page presents a saving calculator";
//put each needed css link as a element in this array
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();
include_once 'includes/header.php';
?>
<link href="css/slider.css" rel="stylesheet" type="text/css" />
<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
<link href="css/savCal.css" rel="stylesheet" type="text/css" />
<div class="container needSpaceBetweenHeader">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Saving Calculator
            <small>Let our environment better</small>
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <div class="col-sm-6">
                            <h3 class="box-title">Can a Hybrid Save Me Money?</h3>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="sel1">Which model do you want to compare with?</label>
                                <select class="form-control" id="chosenCar">
                                    <optgroup label="Hybirds">
                                        <option>Toyota Prius</option>
                                        <option>Ford C-Max</option>
                                        <option>VW Jetta Hybrid</option>
                                    </optgroup>
                                    <optgroup label="Plug in Hybirds">
                                        <option>Toyota Prius Plug in</option>
                                        <option>Chevrolet Volt</option>
                                        <option>Ford C-Max Plug in</option>
                                        <option>BMW i3 REx</option>
                                    </optgroup>
                                    <optgroup label="Electric">
                                        <option>Ford Focus Electric</option>
                                        <option>BMW i3</option>
                                        <option>Nissan Leaf</option>
                                        <option>Telsa Model S 60kWh</option>
                                        <option>Telsa Model S 85kWh</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="row margin">
                            <!-- user input box-->
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label>Distance to Work:  </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input id="disToWorkValue" name="disToWork" type="text" value="0" class = "form-control"/>
                                            <span class="input-group-addon">km</span>
                                        </div>
                                    </div>
                                </div>
                                <input id="sliderDisToWork" type="text" value="" data-slider-value="0" class="slider form-control" data-slider-min="0" data-slider-max="300" data-slider-step="5" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">

                                <div class="row">
                                    <div class="col-sm-8">
                                        <label>Total Driving: </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input id="totalDriveValue" name="totalDrive"  type="text" value="0" class = "form-control"/>
                                            <span class="input-group-addon">km</span>
                                        </div>
                                    </div>
                                </div>
                                <input id="sliderTotalDrive" type="text" value="" data-slider-value="0" class="slider form-control" data-slider-min="0" data-slider-max="80000" data-slider-step="100" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">

                            </div>
                            <div class="col-sm-6">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <label>Price of Gas: </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input id="gasPriceValue" name="gasPrice" type="text" value="1.40" class = "form-control"/>
                                            <span class="input-group-addon">$/L</span>
                                        </div>
                                    </div>
                                </div>
                                <input id="sliderGasPrice" type="text" value="" data-slider-value="1.4" class="slider form-control" data-slider-min="1" data-slider-max="2" data-slider-step="0.05" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">

                                <div class="row">
                                    <div class="col-sm-8">
                                        <label>Price of Electricity:  </label>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="input-group">
                                            <input id="elePriceValue" name="elePrice" type="text" value="0.12" class = "form-control"/>
                                            <span class="input-group-addon">$/kWh</span>
                                        </div>
                                    </div>
                                </div>
                                <input id="sliderElePrice" type="text" value="" data-slider-value="0.12" class="slider form-control" data-slider-min="0.08" data-slider-max="0.2" data-slider-step="0.01" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green">

                            </div><!-- user input box-->

                            <button id="calculateBtn" type="button" class="btn btn-lg btn-primary pull-right">Calculate</button>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <div class="col-xs-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Current</h3>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="sel1">Hybird Mode:</label>
                                    <select class="form-control" id="hybirdMode">
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option selected="selected">8</option>
                                        <option>9</option>
                                        <option>10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label>MSRP:  </label>
                                <div class="input-group">
                                    <span class="input-group-addon">$</span>
                                    <input id="currentMSRP" type="text" value="23850.00" class = "form-control"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <p>Petrol Bill:</p>
                                <p>Total Bill:</p>
                            </div>

                            <div class="col-sm-6">
                                <p class="bills" id="currentPetrolBill"></p>
                                <p class="bills" id="currentTotalBill"></p>
                                <!--needed to justify position of final line p-->
                                <p class="hidden"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-6">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Model Chosen</h3>
                    </div>
                    <div class="box-body">

                        <div class="row">
                            <div class="col-sm-6">
                                <p>Petrol Bill:</p>
                                <p>Electrical Bill:</p>
                                <p>Total Bill:</p>
                                <p>Saving:</p>
                                <p>Additional Cost Payback:</p>
                                <p>Work Compatible:</p>
                            </div>

                            <div class="col-sm-6">
                                <p class="bills" id="petrolBill"></p>
                                <p class="bills" id="eleBill"></p>
                                <p class="bills" id="totalBill"></p>
                                <p class="bills" id="saving"></p>
                                <p class="bills" id="costPayback"></p>
                                <p class="bills" id="workCompa"></p>

                                <!--needed to justify position of final line p-->
                                <p class="hidden"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- /.content -->
</div>
<?php
include_once 'includes/footer.php';
?>

<!-- Bootstrap slider -->
<script src="js/bootstrap-slider.js" type="text/javascript"></script>
<script src="js/savingCalculation.js" type="text/javascript"></script>
<script type="text/javascript">
    function numberOnly(e) {
     //if the letter is not digit then display error and don't type anything
     if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
        //display error message
        $("#errmsg").html("Digits Only").show().fadeOut("slow");
        return false;
    }
   }
    
    $(".number").keypress(numberOnly);
        
    /* BOOTSTRAP SLIDER */
    $('#sliderDisToWork, #sliderTotalDrive').slider({
        formater: function (value) {
            return value + ' km';
        }
    });

    //for input distance to work
    var sliderDisValue = $('#sliderDisToWork').slider().on('slide', function (ev) {
        document.getElementById("disToWorkValue").value = sliderDisValue.getValue();
    }).data('slider');

    var sliderStopValue1 = $('#sliderDisToWork').slider().on('slideStop', function (ev) {
        sliderStopValue1.setValue(sliderStopValue1.getValue());
    }).data('slider');
    $("#disToWorkValue").keypress(numberOnly);

    //for input total drive
    var sliderDriveValue = $('#sliderTotalDrive').slider().on('slide', function (ev) {
        document.getElementById("totalDriveValue").value = sliderDriveValue.getValue();
    }).data('slider');

    var sliderStopValue2 = $('#sliderTotalDrive').slider().on('slideStop', function (ev) {
        sliderStopValue2.setValue(sliderStopValue2.getValue());
    }).data('slider');
    $("#totalDriveValue").keypress(numberOnly);

    //for prices

    $('#sliderGasPrice').slider({
        formater: function (value) {
            return value + ' $/L';
        }
    });
    $('#sliderElePrice').slider({
        formater: function (value) {
            return value + ' $/kWh';
        }
    });
    $("#gasPriceValue").keypress(numberOnly);
    $("#elePriceValue").keypress(numberOnly);

    var sliderGasValue = $('#sliderGasPrice').slider().on('slide', function (ev) {
        document.getElementById("gasPriceValue").value = sliderGasValue.getValue().toFixed(2);
    }).data('slider');

    var sliderStopValue3 = $('#sliderGasPrice').slider().on('slideStop', function (ev) {
        sliderStopValue3.setValue(sliderStopValue3.getValue().toFixed(2));
    }).data('slider');

    //for input total drive
    var sliderEleValue = $('#sliderElePrice').slider().on('slide', function (ev) {
        document.getElementById("elePriceValue").value = sliderEleValue.getValue().toFixed(2);
    }).data('slider');

    var sliderStopValue4 = $('#sliderElePrice').slider().on('slideStop', function (ev) {
        sliderStopValue4.setValue(sliderStopValue4.getValue().toFixed(2));
    }).data('slider');

    $('#calculateBtn').click(function () {
        var disToWork = document.getElementById("disToWorkValue").value;
        var totalDrive = document.getElementById("totalDriveValue").value;
        var gasPrice = document.getElementById("gasPriceValue").value;
        var elePrice = document.getElementById("elePriceValue").value;
        var chosenCar = document.getElementById("chosenCar").value;
        
        var hybirdMode = document.getElementById("hybirdMode").value;
        var currentMSRP = document.getElementById("currentMSRP").value;
        initalValues(totalDrive, disToWork, gasPrice, elePrice, hybirdMode, currentMSRP);
        var currentBill = calculatePetrolBill(1, "Current");
        $("#currentPetrolBill").text('$'+currentBill);
        $("#currentTotalBill").text('$'+currentBill);
        //hybird
        if(chosenCar == "Toyota Prius" || chosenCar == "Ford C-Max" || chosenCar == "VW Jetta Hybrid"){
            var bill = calculatePetrolBill(1, chosenCar);
            $("#petrolBill").text('$'+bill);
            $("#eleBill").text('$0.00');
            $("#totalBill").text('$'+bill);
            $("#saving").text('$'+(currentBill - bill).toFixed(2));
            $("#costPayback").text('$'+calculateAddCostPayback(chosenCar, currentBill - bill).toFixed(2));
            $("#workCompa").text(isWorkCompatible(chosenCar));
        }
        //hybird plugin
        else if(chosenCar == "oyota Prius Plug in" || chosenCar == "Chevrolet Volt" || chosenCar == "Ford C-Max Plug in" || chosenCar == "BMW i3 REx"){
            
        }
        //electric car
        else if(chosenCar == "Ford Focus Electric" || chosenCar == "BMW i3" || chosenCar == "Nissan Leaf" || chosenCar == "Telsa Model S 60kWh" || chosenCar == "Telsa Model S 85kWh"){
            
        }
    });
    
</script>



