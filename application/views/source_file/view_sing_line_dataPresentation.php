<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap -->
        
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/bootstrap.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>resource/js/bootstrap.js"></script>

  <script src="<?php echo base_url(); ?>resource/home_chart/highcharts.js"></script>
      <script src="<?php echo base_url(); ?>resource/home_chart/jquery.highchartTable-min.js"></script>
      
      
 <script src="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/PieChart.js"></script>
<link href="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/PieChart.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>resource/Simple-jQuery-Plugin-To-Draw-A-SVG-Pie-Chart/jquerysctipttop.css" rel="stylesheet">

   
        <link href="<?php echo base_url(); ?>resource/css/bootstrap.min.css" rel="stylesheet">

        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>resource/img/doctor.ico" />
         <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
    <br>

    
        <style type="text/css">
		#target {
		width: 250px;
			height: 350px;
		}
	</style>
         <!-- ER Data Search -->
    <br><br>   <div class="container">
            <div align="left">
                <center>    <h3>Single Line Report Graphical Presentation and Year Change Dynamically Graph Change</h3></center>
                 <hr>
                <div align="right"><button type="button" class="btn btn-success" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span> Printing</button></div>
               
                
            </div>
   </div>
    <div class="col-md-1"></div>
           <div class="col-md-3">
         <div class="panel panel-primary" style="">
      <div class="panel-heading">
        <h3 class="panel-title">Single Line [Total Patient] </h3>
      </div>
      <div class="panel-body">
          <strong>  Male  : <?php echo $singline_data_male;?></strong>,
          <strong>  Female : <?php echo $singline_data_data_female;?></strong><br>
          Total :  <?php echo $singline_total_patient_count;?>
      </div>
    </div>
        
      
        
        <ul id="source">
		<li class="pieChart" value="<?php echo $singline_data_male;?>"><strong><font color="red">Red: - Male</font></strong></li>
		<li class="pieChart" value="<?php echo $singline_data_data_female;?>"><strong><font color="blue">Blue: -Female</font></strong></li>
		
	</ul>
          <div id="target">
           
	</div>
      </div>
    
    <div class="col-md-7" style="">
   

      <script src="<?php echo base_url(); ?>resource/home_chart/highcharts.js"></script>
      <script src="<?php echo base_url(); ?>resource/home_chart/jquery.highchartTable-min.js"></script>
 <?php

$starting_year  = 2009;
$ending_year    = 2050;

for($starting_year; $starting_year <= $ending_year; $starting_year++) {
    $years[] = '<option value="'.$starting_year.'">'.$starting_year.'</option>';
}

?>
   
      <form id="someform" action="<?php echo base_url();?>welcome/singline_graphical_data.html" method="post">
      <div class="row">
          <div class="col-md-2">
              <div class="form-group has-success" style="">
          <select class="form-control" name="year">
              <option selected="selected" value="<?php
              $cyear=$this->session->userdata('cyear');
              
              if($cyear!=null){
                  echo $cyear;
              }else{
                echo date("Y",strtotime(date("Y-m-d")));  
              };?>"><?php
              $cyear=$this->session->userdata('year');
              
              if($cyear!=null){
                  echo $cyear;
              }else{
                echo date("Y",strtotime(date("Y-m-d")));  
              };?></option>
    <?php echo implode("\n\r", $years);  ?>
</select> 
        
</div>
          </div>
          <div class="col-md-2">
          <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
          </div>
      </div>
      
       
           </form> 
      
      
      
<table class="highchart" data-graph-container-before="1" data-graph-type="column" style="display:none">
    <caption>Month wise patient</caption>
    <thead>
        <tr>                                  
            <th>Month</th>
            <th>Patient</th>
        </tr>
     </thead>
     <tbody>
        <tr>
            <td>Jan</td>
            <td><?php echo $jan;?></td>
        </tr>
        <tr>
            <td>Feb</td>
            <td><?php echo $Feb?></td>
        </tr>
        <tr>
            <td>Mar</td>
            <td><?php echo $Mar;?></td>
        </tr>
        <tr>
            <td>Apr</td>
            <td><?php echo $apr;?></td>
        </tr>
        <tr>
            <td>May</td>
            <td><?php echo $may;?></td>
        </tr>
        <tr>
            <td>Jun</td>
            <td><?php echo $june;?></td>
        </tr>
        <tr>
            <td>Jul</td>
            <td><?php echo $july?></td>
        </tr>
        <tr>
            <td>Aug</td>
            <td><?php echo $aug;?></td>
        </tr>
        <tr>
            <td>Sep</td>
            <td><?php echo $sep;?></td>
        </tr>
        <tr>
            <td>Oct</td>
            <td><?php echo $octo;?></td>
        </tr>
        <tr>
            <td>Nov</td>
            <td><?php echo $nov?></td>
        </tr>
        <tr>
            <td>Dec</td>
            <td><?php echo $decem;?></td>
        </tr>
        
    </tbody>
</table>
</div>
      <script>
    $(document).ready(function() {
  $('table.highchart').highchartTable();
});
</script>
<script type="text/javascript">
	$(function() {
		$('#source').pieChart('#target');
	});
</script>
 