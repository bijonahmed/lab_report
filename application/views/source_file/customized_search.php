<!DOCTYPE html>
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
<link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
<br><br>

<div class="container">
    <br><br>

    <ul class="nav nav-tabs">
        <li class="active"><a href="#home"><strong>ER PR HER-2 (Conditional Report)</strong></a></li>
    </ul>

    <div class="tab-content">
        <div id="home" class="tab-pane fade in active">

            <div class="row">

                <br>

                <div class="panel panel-primary"
                     <div class="list-group">

                        <a href="#" class="list-group-item" data-toggle="modal" data-target="#ERPRHER_2Date_Range">1. ER PR HER-2 Date Range </a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target="#ERPRHER_2genderDate_Range">2. Gender & Date Range</a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target="#ERDate_Range">3. ER & Date Range</a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target="#PRDate_Range">4. PR & Date Range</a>
                        <a href="#" class="list-group-item" data-toggle="modal" data-target="#her2Date_Range">5. HER-2 & Date Range</a>
                    </div>
                </div>      


                <div class="row"> 
                    <strong>&nbsp;&nbsp;&nbsp;Single Line (Detail Report)</strong>

                    <br><br>
                    <div class="panel panel-primary"
                         <div class="list-group">

                            <a href="#" class="list-group-item" data-toggle="modal" data-target="#singlineDate_Range">1. Single Line Date Range </a>
                            <!--                            <a href="#" class="list-group-item" data-toggle="modal" data-target="#singline_genderDate_Range">2. Single Line Gender & Date Range</a>-->
                            <a href="#" class="list-group-item" data-toggle="modal" data-target="#singline_testnameDate_Range">2. Single Line Test Name Wise & Date Range</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>



    <!-- ERPRHER_2Date_Range -->

    <div class="modal fade" id="ERPRHER_2Date_Range" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ER PR HER-2 Date Range</h4>
                </div>
                <div class="modal-body">
                    <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/patient_data_statment_informationerprhertwo.html" target="_blank">
                        <div class="">
                            <div class="row">

                                <div class="col-xs-3"></div>
                                <div class="col-xs-2">
                                    <input type="text" name="starting_date" id="starting_date_erprher2daterange" class="form-control" placeholder="Starting Date" required="1">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="ending_date" id="endining_date_erprher2daterange" class="form-control" placeholder="Ending Date" required="1">
                                </div>

                                <div class="col-xs-2">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
                                        Search</button>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>



    <!-- ERPRHER_2 Gender Date_Range -->

    <div class="modal fade" id="ERPRHER_2genderDate_Range" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ER PR HER-2 Gender & Date Range</h4>
                </div>
                <div class="modal-body">

                    <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/by_Gender_and_date_range_conditional_searching_er_pr_hertwo.html" target="_blank">
                        <div class="">
                            <div class="row">


                                <div class="col-xs-2"></div>
                                <div class="col-xs-2">
                                    <input type="text" name="starting_date" id="startinggender_date_erprher2daterange" class="form-control" placeholder="Starting Date" required="1">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="ending_date" id="endininggender_date_erprher2daterange" class="form-control" placeholder="Ending Date" required="1">
                                </div>
                                <div class="col-xs-2">

                                    <select name="value" class="form-control">

                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
                                        Search</button>
                                </div>
                            </div> 
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- ER_ Gender Date_Range -->

    <div class="modal fade" id="ERDate_Range" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">ER Date Range</h4>
                </div>
                <div class="modal-body">
                    <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/er_date_range_conditional_searching.html" target="_blank">
                        <div class="">
                            <div class="row">


                                <div class="col-xs-2"></div>
                                <div class="col-xs-2">
                                    <input type="text" name="starting_date" id="startinger_date_erdaterange" class="form-control" placeholder="Starting Date" required="1">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="ending_date" id="endininger_date_erdaterange" class="form-control" placeholder="Ending Date" required="1">
                                </div>
                                <div class="col-xs-2">

                                    <select name="value" class="form-control">
                                        <option value="">All</option>
                                        <option value="Negative.">Negative</option>
                                        <option value="Positive.">Positive</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
                                        Search</button>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- PR Gender Date_Range -->

    <div class="modal fade" id="PRDate_Range" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">PR Date Range</h4>
                </div>
                <div class="modal-body">
                    <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/pr_date_range_conditional_searching.html" target="_blank">
                        <div class="">
                            <div class="row">

                                <div class="col-xs-2"></div>
                                <div class="col-xs-2">
                                    <input type="text" name="starting_date" id="startinger_date_prdaterange" class="form-control" placeholder="Starting Date" required="1">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="ending_date" id="endininger_date_prdaterange" class="form-control" placeholder="Ending Date" required="1">
                                </div>
                                <div class="col-xs-2">

                                    <select name="value" class="form-control">
                                        <option value="">All</option>
                                        <option value="Negative.">Negative</option>
                                        <option value="Positive.">Positive</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
                                        Search</button>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>

    <!-- PR Gender Date_Range -->

    <div class="modal fade" id="her2Date_Range" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">HER-2 Date Range</h4>
                </div>
                <div class="modal-body">
                    <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/hertwo_date_range_conditional_searching.html" target="_blank">
                        <div class="">
                            <div class="row">


                                <div class="col-xs-2"></div>
                                <div class="col-xs-2">
                                    <input type="text" name="starting_date" id="startinger_date_her2daterange" class="form-control" placeholder="Starting Date" required="1">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="ending_date" id="endininger_date_her2daterange" class="form-control" placeholder="Ending Date" required="1">
                                </div>
                                <div class="col-xs-2">

                                    <select name="value" class="form-control">
                                        <option value="">All</option>
                                        <option value="Borderline.">Borderline</option>
                                        <option value="Negative.">Negative</option>
                                        <option value="Positive.">Positive</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
                                        Search</button>
                                </div>
                            </div> 
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- singlineDate_Range Date_Range -->

    <div class="modal fade" id="singlineDate_Range" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Single Line  Date Range</h4>
                </div>
                <div class="modal-body">
                    <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/patient_data_statment_information_single_line.html" target="_blank">
                        <div class="">
                            <div class="row">

                                <div class="col-xs-3"></div>
                                <div class="col-xs-2">
                                    <input type="text" name="starting_date_single_line" id="startinger_date_singlinedaterange" class="form-control" placeholder="Starting Date" required="1">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="ending_date_single_line" id="endininger_date_singlinedaterange" class="form-control" placeholder="Ending Date" required="1">
                                </div>

                                <div class="col-xs-2">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
                                        Search</button>
                                </div>
                            </div> 
                        </div>
                    </form>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- singline_genderDate_Range Date_Range -->

    <div class="modal fade" id="singline_genderDate_Range" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Single Line Gender Date Range</h4>
                </div>
                <div class="modal-body">
                    <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/by_Gender_and_date_range_conditional_searching_singleLine.html" target="_blank">
                        <div class="">
                            <div class="row">

                                <div class="col-xs-2"></div>
                                <div class="col-xs-2">
                                    <input type="text" name="starting_date" id="startinger_date_gendersinglinedaterange" class="form-control" placeholder="Starting Date" required="1">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="ending_date" id="endininger_date_gendersinglinedaterange" class="form-control" placeholder="Ending Date" required="1">
                                </div>
                                <div class="col-xs-2">

                                    <select name="value" class="form-control">

                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
                                        Search</button>
                                </div>
                            </div> 
                        </div>
                    </form>



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <!-- singline_testnameDate_Range Date_Range -->

    <div class="modal fade" id="singline_testnameDate_Range" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Single Line Test Name & Date Range</h4>
                </div>
                <div class="modal-body">
                    <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/singleLine_date_range_conditional_searching.html" target="_blank">
                        <div class="">
                            <div class="row">

                                <div class="col-xs-2"></div>
                                <div class="col-xs-2">
                                    <input type="text" name="starting_date" id="startinger_date_testnamesinglinedaterange" class="form-control" placeholder="Starting Date" required="1">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="ending_date" id="endininger_date_testnamesinglinedaterange" class="form-control" placeholder="Ending Date" required="1">
                                </div>
                                <div class="col-xs-3">

                                    <select name="value" class="form-control">
                                        <option selected="selected">Select</option>
                                        <option>CD15</option>
                                        <option>CD117</option>
                                        <option>CD30</option>
                                        <option>CD20</option>
                                        <option>CD-99</option>
                                        <option>S100</option>
                                        <option>LCA</option>
                                        <option>CK</option>
                                        <option>Vimentin </option>
                                        <option>HMB45</option>
                                        <option>Desmin</option>
                                        <option>Kappa</option>
                                        <option>Lambda</option>
                                        <option>GFAF</option>
                                        <option>EMA</option>
                                        <option>T.T.F1</option>
                                        <option>EMA</option>
                                    </select>
                                </div>
                                <div class="col-xs-2">
                                    <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>
                                        Search</button>
                                </div>
                            </div> 
                        </div>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>


    <script type="text/javascript">

        $('#starting_date_erprher2daterange').datepicker();
        $('#endining_date_erprher2daterange').datepicker();

        $('#startinggender_date_erprher2daterange').datepicker();
        $('#endininggender_date_erprher2daterange').datepicker();

        $('#startinger_date_erdaterange').datepicker();
        $('#endininger_date_erdaterange').datepicker();

        $('#startinger_date_prdaterange').datepicker();
        $('#endininger_date_prdaterange').datepicker();

        $('#startinger_date_her2daterange').datepicker();
        $('#endininger_date_her2daterange').datepicker();

        $('#startinger_date_singlinedaterange').datepicker();
        $('#endininger_date_singlinedaterange').datepicker();

        $('#startinger_date_gendersinglinedaterange').datepicker();
        $('#endininger_date_gendersinglinedaterange').datepicker();

        $('#startinger_date_testnamesinglinedaterange').datepicker();
        $('#endininger_date_testnamesinglinedaterange').datepicker();

    </script>

