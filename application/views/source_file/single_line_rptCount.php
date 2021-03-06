<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>


        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>



        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css"> 
        <!-- ER Data Search -->
    <br><br>
    <style>
        .search{
            font-size: 22px;
            color: red;
        }
    </style><br><br><br><br>

    <div class="container">


        <div class="form-group has-success">
            <div class="container">
                <div class="panel-group" id="accordion">

                    <div class="panel panel-success" style="height: 456px;">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                                    <span class="glyphicon glyphicon-search"></span> Single Line Conditional Searching....
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive_" class="">
                            <div class="panel-body">

                                <form name="patient_revisit" method="post" action="<?php echo base_url(); ?>welcome/singleLine_date_range_conditional_searching.html" target="_blank">
                                    <div class="container example1">
                                        <div class="row">
                                            <div class="col-xs-2"></div>
                                            <div style="height: 130px;"></div>
                                            <div class="col-xs-2"></div>
                                            <div class="col-xs-2">
                                                <input type="text" name="starting_date" id="starting_date_hertwo" class="form-control" placeholder="Starting Date" required="1">
                                            </div>
                                            <div class="col-xs-2">
                                                <input type="text" name="ending_date" id="endining_date_hertwo" class="form-control" placeholder="Ending Date" required="1">
                                            </div>
                                            <div class="col-xs-3">

                                                <select name="value" class="form-control">
                                                    <option value="">All</option>
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
                        </div>
                    </div>




                </div>


            </div>
        </div>

    </div>
    <script type="text/javascript">
        $('#starting_date_hertwo').datepicker()
    </script>
    <script type="text/javascript">
        $('#endining_date_hertwo').datepicker()
    </script>
