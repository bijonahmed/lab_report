<br><br>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

   

<link href="<?php echo base_url(); ?>resource/media/css/jquery.dataTables_themeroller.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>resource/media/css/jquery.dataTables.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>          
<script src="<?php echo base_url(); ?>resource/media/js/jquery.dataTables.js"></script>
         
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>



<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
<br><br>
 

<!-- ER Data Search -->
    <br><br>
        <style>
        .search{
            font-size: 22px;
            color: red;
        }
    </style>
    
        <div class="container">
              
          
            <div class="form-group has-success">
            <div class="container">
               <div class="panel-group" id="accordion">
 
  
   
     
                   
                     <div class="panel panel-success" style="height: 456px;">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
            <span class="glyphicon glyphicon-search"></span> Date Wise Single Line Searching....
        </a>
      </h4>
    </div>
    <div id="collapseFive_" class="">
      <div class="panel-body">
      
          <form name="patient_revisit" method="post" action="<?php echo base_url();?>welcome/patient_data_statment_information_single_line.html" target="_blank">
             <div class="container example1">
            <div class="row">
                <div class="col-xs-2"></div>
                <div style="height: 130px;"></div>
                <div class="col-xs-3"></div>
                <div class="col-xs-2">
                            <input type="text" name="starting_date_single_line" id="starting_date" class="form-control" placeholder="Starting Date" required="1">
                        </div>
                <div class="col-xs-2">
                    <input type="text" name="ending_date_single_line" id="endining_date" class="form-control" placeholder="Ending Date" required="1">
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
    $('#starting_date').datepicker()
</script>
<script type="text/javascript">
    $('#endining_date').datepicker()
</script>
 