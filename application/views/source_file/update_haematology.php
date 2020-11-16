<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
<link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>

<link href="<?php echo base_url(); ?>admin_panel/bone_marrow/job_ jquery-te-1.4.0.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>admin_panel/bone_marrow/jquery-te-1.4.0.min.js"></script>

<script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>
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
                <form name="cancel" method="post" action="<?php echo base_url();?>welcome/cancel_haematology.html">
<button class="btn btn-danger"><span class="glyphicon glyphicon-backward"></span> CLOSE  </button>  
                    
                </form>
             
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
  <form action="<?php echo base_url();?>data_record/update_haematology_info.html" method="post">
 
  <div class="form-group has-success">
            <div class="row">
                
   <div class="col-xs-2">
       <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_haematology->test_id;?>">
       <input type="hidden" name="haematology_id" id="haematology_id" class="form-control" placeholder="Test ID" value="<?php echo $search_haematology->haematology_id;?>">
  </div>
                 <div class="col-xs-2">
                     <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" required="1" value="<?php echo $search_haematology->reciv_date;?>">
  </div>
                 <div class="col-xs-2">
                     <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date" value="<?php echo $search_haematology->deli_date;?>">
  </div>
                            <div class="col-xs-3">
                                <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" value="<?php echo $search_haematology->patient_name;?>">
  </div>
  <div class="col-xs-1">
      <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $search_haematology->age;?>">
  </div>
                <div class="col-xs-2">
                     <select name="sex" class="form-control">
                         <option><?php echo $search_haematology->sex;?></option>
                         <option>Male</option>
                         <option>Female</option>
                         
                     </select>
  </div>
</div>
      <br>
      <div class="row">         
<div class="col-xs-4">
    <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name" value="<?php echo $search_haematology->ref_by;?>">
  </div>
<div class="col-xs-4">
    <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name" value="<?php echo $search_haematology->hospital_name;?>">
  </div> 
          <?php
          
          /*
           * 
    <div class="col-xs-4">
        <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name">
  </div>            */
          ?>
     
          
      </div>
      <br>
       <div class="row">         
<div class="col-xs-12">
<!-- Nav tabs -->
<ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab">CBC REPORT</a></li>
  <li><a href="#messages" data-toggle="tab">PBF</a></li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="home">
        <br>
        <div class="row">
  <div class="col-xs-2">
      <input type="text" name="hb" class="form-control" placeholder="HB" value="<?php echo $search_haematology->hb;?>">
  </div>
  <div class="col-xs-2">
      <input type="text" name="esr" class="form-control" placeholder="ESR" value="<?php echo $search_haematology->esr;?>">
  </div>
  <div class="col-xs-2">
      <input type="text" name="rbc" class="form-control" placeholder="RBC" value="<?php echo $search_haematology->rbc;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="platelete" class="form-control" placeholder="PLT." value="<?php echo $search_haematology->platelete;?>">
  </div>
 <div class="col-xs-2">
     <input type="text" name="wbc" class="form-control" placeholder="WBC" value="<?php echo $search_haematology->wbc;?>">
  </div>
</div>
          <br>
             <div class="row">
  <div class="col-xs-2">
      <input type="text" name="ce" class="form-control" placeholder="TCE" value="<?php echo $search_haematology->ce;?>">
  </div>
  <div class="col-xs-2">
      <input type="text" name="rc" class="form-control" placeholder="RC" value="<?php echo $search_haematology->rc;?>">
  </div>


             </div><br>
         <div class="row">
  <div class="col-xs-2">
    <input type="text" name="neutrophils" class="form-control" placeholder="NEUTROPHIL" value="<?php echo $search_haematology->neutrophils;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="lymphocytes" class="form-control" placeholder="LYMPHOCYTES" value="<?php echo $search_haematology->lymphocytes;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="monocytes" class="form-control" placeholder="MONOCYTES" value="<?php echo $search_haematology->monocytes;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="eosinophils" class="form-control" placeholder="EOSINOPHIL" value="<?php echo $search_haematology->eosinophils;?>">
  </div>
 <div class="col-xs-2">
    <input type="text" name="basophil" class="form-control" placeholder="BASOPHIL" value="<?php echo $search_haematology->basophil;?>">
  </div>
           <br><br><br>
              <div class="col-xs-2">
    <input type="text" name="parameter_one" class="form-control" placeholder="BLANK" value="<?php echo $search_haematology->parameter_one;?>">
  </div>
              <div class="col-xs-2">
    <input type="text" name="para_one_rpt" class="form-control" placeholder="RESULT" value="<?php echo $search_haematology->para_one_rpt;?>">
  </div>
                       <div class="col-xs-2">
    <input type="text" name="parameter_two" class="form-control" placeholder="BLANK" value="<?php echo $search_haematology->parameter_two;?>">
  </div>
              <div class="col-xs-2">
    <input type="text" name="para_two_rpt" class="form-control" placeholder="RESULT" value="<?php echo $search_haematology->para_two_rpt;?>">
  </div>
                       <div class="col-xs-2">
    <input type="text" name="parameter_three" class="form-control" placeholder="BLANK" value="<?php echo $search_haematology->parameter_three;?>">
  </div>
              <div class="col-xs-2">
    <input type="text" name="para_three_rpt" class="form-control" placeholder="RESULT" value="<?php echo $search_haematology->para_three_rpt;?>">
              </div><br><br><br>
                       <div class="col-xs-2">
    <input type="text" name="parameter_four" class="form-control" placeholder="BLANK" value="<?php echo $search_haematology->parameter_four;?>">
  </div>
              <div class="col-xs-2">
    <input type="text" name="para_four_rpt" class="form-control" placeholder="RESULT" value="<?php echo $search_haematology->para_four_rpt;?>">
  </div>
                       <div class="col-xs-2">
    <input type="text" name="parameter_five" class="form-control" placeholder="BLANK" value="<?php echo $search_haematology->parameter_five;?>">
  </div>
              <div class="col-xs-2">
    <input type="text" name="para_five_rpt" class="form-control" placeholder="RESULT" value="<?php echo $search_haematology->para_five_rpt;?>">
  </div>
               <div class="col-xs-2">
    <input type="text" name="mp" class="form-control" placeholder="MP" value="<?php echo $search_haematology->mp;?>">
  </div>
              
           
             
         </div> <br>
             <div class="row">
  <div class="col-xs-2">
    <input type="text" name="hct" class="form-control" placeholder="HCT/PCV" value="<?php echo $search_haematology->hct;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="mcv" class="form-control" placeholder="MCV" value="<?php echo $search_haematology->mcv;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="mch" class="form-control" placeholder="MCH" value="<?php echo $search_haematology->mch;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="mchc" class="form-control" placeholder="MCHC" value="<?php echo $search_haematology->mchc;?>">
  </div>
 <div class="col-xs-2">
    <input type="text" name="rdw" class="form-control" placeholder="RDW" value="<?php echo $search_haematology->rdw;?>">
  </div>
</div><br>
       <div class="row">
  <div class="col-xs-2">
    <input type="text" name="bt_min" class="form-control" placeholder="BT MIN" value="<?php echo $search_haematology->bt_min;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="bt_sec" class="form-control" placeholder="BT SEC." value="<?php echo $search_haematology->bt_sec;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="ct_min" class="form-control" placeholder="CT MIN." value="<?php echo $search_haematology->ct_min;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="ct_sec" class="form-control" placeholder="CT SEC." value="<?php echo $search_haematology->ct_sec;?>">
  </div>

</div>
        <br>  
    </div>
  
 



    <div class="tab-pane" id="messages">
        
                <div class="row">
                   
                    <div class="col-xs-12">
                     
                        <textarea class="jqte-test form-control" name="pbf" placeholder="PBF"><?php echo $search_haematology->pbf;?></textarea>
                    </div>
                  
            
            </div>
        
        
        
        
    </div>

</div>
    

       
</div>
       </div>  
    
 
        <center>
            <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>&nbsp;UPDATE</button>
          
  
         </center>
           
            
       
      
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
    
    
      <!-- HER-2 Data Search -->
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">SEARCH HAEMATOLOGY REPORT </h4>
      </div>
     <div class="modal-body">
                <div class="form-group has-success">
                    <br><br>
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

                        <thead>
                            <tr class="success">
                                <th width="200">Test ID</th>
                                <th width="420">Patient. Name</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($view_data_haematology as $data) {
                                ?>

                                <tr class="">
                                    <td><?php echo $data->test_id; ?></span></td>
                                        <td><?php echo $data->patient_name; ?></span></td>

                                    <td>
                                        <a class="link" href="<?php echo base_url(); ?>data_record/edit_haematology_rpt/<?php echo $data->haematology_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <?php
                                        /*
                                          <a class="link" href="<?php echo base_url();?>data_record/delete_dose_schedule/<?php echo $data->patient_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                         */
                                        ?>


                                    </td>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>



                </div> 
            </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
     
      </div>
    </div>
  </div>
</div>
<script>
                                $('.jqte-test').jqte();

                                // settings of status
                                var jqteStatus = true;
                                $(".status").click(function()
                                {
                                    jqteStatus = jqteStatus ? false : true;
                                    $('.jqte-test').jqte({"status": jqteStatus})
                                });
</script>
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
