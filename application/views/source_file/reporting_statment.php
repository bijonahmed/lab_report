<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>

        <style>
            .topinfor{
                margin-top: 110px;
            }
            </style>
            <style>
                #example1 {
	-webkit-box-shadow: 0 8px 6px -6px black;
	   -moz-box-shadow: 0 8px 6px -6px black;
	        box-shadow: 0 8px 6px -6px black;
}
            </style>
          
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        
    <body>
       
        <div class="form-group has-success">
            <div class="container">
            
        <div class="topinfor">
            <div class="fontstyleinfo"><center><font size="15"><u>Reporting Statment</u></font></center><br></div>
            
                <form name="patient_revisit" method="post" action="<?php echo base_url();?>welcome/patient_data_statment_information_group_wise.html">
             <div class="container example1">
            <div class="row">
                <div class="col-xs-1"></div>
                <div class="col-xs-2">
                    <select name="value" class="form-control">
                        <option>Negative</option>
                        <option>Positive</option>
                         <option>Borderline</option>
                    </select>
                    
                </div>
                <div class="col-xs-2">
                            <input type="text" name="starting_date" id="starting_date" class="form-control" placeholder="Starting Date" required="1">
                        </div>
                <div class="col-xs-2">
                            <input type="text" name="ending_date" id="endining_date" class="form-control" placeholder="Ending Date" required="1">
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
    </body>
    <script type="text/javascript">
    $('#starting_date').datepicker()
</script>
<script type="text/javascript">
    $('#endining_date').datepicker()
</script>