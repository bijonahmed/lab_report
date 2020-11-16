<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>admin_panel/bone_marrow/jquery-te-1.4.0.min.js"></script>


<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

 <script language="javascript" src="<?php echo base_url();?>resource/modal.popup.js"></script>
 <script language="javascript" src="<?php echo base_url();?>resource/jquery.printPage.js"></script>

        <script>
            $(document).ready(function() {
                $("#test_id").focus();
                $(":focus").css("background-color", "Beige");
            });
        </script>
        <script>
            $(function() {
<?php
foreach ($doctor_info as $row):
    $doctor_info[] = $row->ref_by;
endforeach;

echo "var javascript_array =" . json_encode($doctor_info);
?>

                $( "#ref_by" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
         
        <script>
            $(function() {
<?php
foreach ($hospital_info as $row):
    $hospital_info[] = $row->hospital_name;
endforeach;

echo "var javascript_array =" . json_encode($hospital_info);
?>

                $( "#hospital_name" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>

            <script>
            $(function() {
<?php
foreach ($specimen_info as $row):
    $specimen_info[] = $row->specimen_name;
endforeach;

echo "var javascript_array =" . json_encode($specimen_info);
?>

                $( "#specimen_name" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>

       
      <style>
    .ui-autocomplete {
            max-height: 500px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            padding-right: 20px;
    }
    /* IE 6 doesn't support max-height
     * we use height instead, but this forces the menu to always be this tall
     */
    * html .ui-autocomplete {
        height: 100px;
    }
</style>

    </head>
    <br><br><br>
    <body>
      
        <div class="container">
            
        <div align="right">
                <a href="<?php echo base_url();?>welcome/redirect_edit_form_mt.html"> <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Edit</button>       </a>
             
            </div>

   
            
            <br>
             <font color="white"  size="">
  <?php
                        $message=$this->session->userdata('save_message');
                        //echo $message;
                        if(isset($message))
                        {
                            echo $message;
                            $this->session->unset_userdata('save_message');
                        }
                        
                    ?>
  </font>
  <form action="<?php echo base_url();?>data_record/update_mt_test_rpt.html" method="post">
 
  <div class="form-group has-success">
            <div class="row">
                
   <div class="col-xs-2">
      <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_mt_rpt->test_id;?>">
      <input type="hidden" name="mt_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_mt_rpt->mt_id;?>">
  </div>
                 <div class="col-xs-2">
                     <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" required="1" value="<?php echo $search_mt_rpt->reciv_date;?>">
  </div>
                 <div class="col-xs-2">
                     <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date" value="<?php echo $search_mt_rpt->deli_date;?>">
  </div>
                            <div class="col-xs-3">
                                <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" value="<?php echo $search_mt_rpt->patient_name;?>">
  </div>
  <div class="col-xs-1">
      <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $search_mt_rpt->age;?>">
  </div>
                <div class="col-xs-2">
                     <select name="sex" class="form-control">
                         <option><?php echo $search_mt_rpt->sex;?></option>
                         <option>Male</option>
                         <option>Female</option>
                         
                     </select>
  </div>
</div>
      <br>
      <div class="row">         
<div class="col-xs-4">
    <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name"  value="<?php echo $search_mt_rpt->ref_by;?>">
  </div>
<div class="col-xs-4">

    <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name"  value="<?php echo $search_mt_rpt->hospital_name;?>">
 
  </div> 
          <div class="col-xs-4">
              <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Material" disabled="1">
  </div> 
          <?php
          
          /*
           * 
    <div class="col-xs-4">
        <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name">
  </div>            */
          ?>
     
          
      </div>
     
   
       <div class="row"> 
         
            
<div class="col-xs-12">

  
   
    
               
           <div class="row">
               <br>
    
</div>
    <div class="col-xs-12 alert alert-success">
    <div align="left">
                      
        <strong><u><center>MANTOUX TEST</center></u></strong>
          </div>
        </div>      
              <div class="row">
               
         
                <div class="col-xs-2">
Date of Inoculation 
                </div>
  <div class="col-xs-2">
      <input type="text" name="date_of_inoculation" id="date_of_inoculation" class="form-control" value="<?php echo $search_mt_rpt->date_of_inoculation;?>">
  </div>
                <div class="col-xs-2">
 	 Date of Reporting 
  </div>
  <div class="col-xs-2">
      <input type="text" name="date_of_reporting" id="date_of_reporting" class="form-control" value="<?php echo $search_mt_rpt->date_of_reporting;?>">
  </div>
  <div class="col-xs-1">
 Induration: 
  </div>
  <div class="col-xs-3">
      <input type="text" name="induration" class="form-control" value="<?php echo $search_mt_rpt->induration;?>">
  </div>
                
</div>
       
          <br>
       <div class="row">
                <div class="col-xs-2">
  Comments
  </div>
  <div class="col-xs-2">
      <input type="text" name="comments" class="form-control" value="<?php echo $search_mt_rpt->comments;?>">
  </div>
              
  
</div>
        <br>
              <div class="row">
                <div class="col-xs-12">
 <input type="text" name="note" class="form-control" value="<?php echo $search_mt_rpt->note;?>">
  </div>
  
  
</div>
        <br>
   
        
     
        <div class="col-xs-5"></div>
        <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>&nbsp;UPDATE</button>  <br> 
        <br>
        <div class="col-xs-12 alert alert-danger">
            <center> MT Note</center><hr>
            Note : After 72 hours.<br>
The patient reported 12 hours later than the scheduled date and time of reporting. 
            
        </div>
        
            </div>
        
        
        
        
    </div>

</div>
    

       
</div>
       </div>  
 
      
</div>
  </form> 
         
        </div>
    </body>


    <script>
            function save()
            {
                chk = confirm("Are You Sure");
                if (chk)
                {
                    return true;
                }
                else {
                    return false;
                }
            }
    </script>

    <!-- HER-2 Data Modal -->

</div>

   <script>
            function save()
            {
                chk = confirm("Are You Sure");
                if (chk)
                {
                    return true;
                }
                else {
                    return false;
                }
            }
    </script>
<script type="text/javascript">
    $('#reciv_date').datepicker()
</script>
<script type="text/javascript">
    $('#deli_date').datepicker()
</script>
<script type="text/javascript">
    $('#date_of_reporting').datepicker()
</script>
<script type="text/javascript">
    $('#date_of_inoculation').datepicker()
</script>
<script>
        $('[data-toggle="tooltip"]').tooltip({
            'placement': 'top'
        });
        $('[data-toggle="popover"]').popover({
            trigger: 'hover',
            'placement': 'top'
        });

        $('#userNameField').tooltip({
            'show': true,
            'placement': 'bottom',
            'title': ""
        });

        $('#userNameField').tooltip('show');
    </script>
