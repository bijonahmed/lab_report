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
                <form name="cancel" method="post" action="<?php echo base_url();?>welcome/redirect_edit_form_erprhertwo.html">
  <button class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit</button>
                    
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
  <form action="<?php echo base_url();?>data_record/update_bone_marrow_info.html" method="post">
 
  <div class="form-group has-success">
            <div class="row">
                
   <div class="col-xs-2">
       <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_bonemarrow->test_id;?>">
       <input type="hidden" name="bone_maro_id" id="bone_maro_id" class="form-control" placeholder="Test ID" value="<?php echo $search_bonemarrow->bone_maro_id;?>">
  </div>
                 <div class="col-xs-2">
                     <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" required="1" value="<?php echo $search_bonemarrow->reciv_date;?>">
  </div>
                 <div class="col-xs-2">
                     <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date"  value="<?php echo $search_bonemarrow->deli_date;?>">
  </div>
                            <div class="col-xs-3">
                                <input type="text" name="patient_name" class="form-control" placeholder="Patient Name"  value="<?php echo $search_bonemarrow->patient_name;?>">
  </div>
  <div class="col-xs-1">
      <input type="text" name="age" class="form-control" placeholder="Age"  value="<?php echo $search_bonemarrow->age;?>">
  </div>
                <div class="col-xs-2">
                     <select name="sex" class="form-control">
                         <option><?php echo $search_bonemarrow->sex;?></option>
                         <option>Male</option>
                         <option>Female</option>
                         
                     </select>
  </div>
</div>
      <br>
      <div class="row">         
<div class="col-xs-4">
    <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name"  value="<?php echo $search_bonemarrow->ref_by;?>">
  </div>
<div class="col-xs-4">
    <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name"  value="<?php echo $search_bonemarrow->hospital_name;?>">
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
  <li><a href="#profile" data-toggle="tab">BONE MARROW REPORT</a></li>
  <li><a href="#messages" data-toggle="tab">PBF , CUSTOM REPORT</a></li>

</ul>

<!-- Tab panes -->
<div class="tab-content">
    <div class="tab-pane active" id="home">
          <div class="row"> 
              <div class="col-md-12"><br>
                      <input type="text" name="ce" id="specimen_name" class="form-control" placeholder="Clinical Finding"  value="<?php echo $search_bonemarrow->ce;?>"> 
              </div>
          </div> <br>
        <div class="row">
  <div class="col-xs-2">
      <input type="text" name="hb" class="form-control" placeholder="HB"  value="<?php echo $search_bonemarrow->hb;?>">
  </div>
  <div class="col-xs-2">
      <input type="text" name="esr" class="form-control" placeholder="ESR"  value="<?php echo $search_bonemarrow->esr;?>">
  </div>
  <div class="col-xs-2">
      <input type="text" name="wbc" class="form-control" placeholder="WBC"  value="<?php echo $search_bonemarrow->wbc;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="pc" class="form-control" placeholder="PC"  value="<?php echo $search_bonemarrow->pc;?>">
  </div>
 <div class="col-xs-2">
     <input type="text" name="rbc" class="form-control" placeholder="RBC"  value="<?php echo $search_bonemarrow->rbc;?>">
  </div>
</div>
          <br>
             <div class="row">
  <div class="col-xs-2">
      <input type="text" name="neutro" class="form-control" placeholder="Neutrophil"  value="<?php echo $search_bonemarrow->neutro;?>">
  </div>
  <div class="col-xs-2">
      <input type="text" name="lymphocytes" class="form-control" placeholder="Lymphocytes"  value="<?php echo $search_bonemarrow->lymphocytes;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="eosinophil" class="form-control" placeholder="Eosinophil"  value="<?php echo $search_bonemarrow->eosinophil;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="monnocyte" class="form-control" placeholder="Monocyte"  value="<?php echo $search_bonemarrow->monnocyte;?>">
  </div>

             </div><br>
         <div class="row">
  <div class="col-xs-2">
    <input type="text" name="blank_parameter_one" class="form-control" placeholder="BLANK"  value="<?php echo $search_bonemarrow->blank_parameter_one;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="blank_one_result" class="form-control" placeholder="RESULT" value="<?php echo $search_bonemarrow->blank_one_result;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="blank_parameter_two" class="form-control" placeholder="BLANK"  value="<?php echo $search_bonemarrow->blank_parameter_two;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="blank_two_result" class="form-control" placeholder="RESULT" value="<?php echo $search_bonemarrow->blank_two_result;?>">
  </div>
 <div class="col-xs-2">
    <input type="text" name="blank_parameter_three" class="form-control" placeholder="BLANK" value="<?php echo $search_bonemarrow->blank_parameter_three;?>">
  </div>
              <div class="col-xs-2">
    <input type="text" name="blank_three_result" class="form-control" placeholder="RESULT" value="<?php echo $search_bonemarrow->blank_three_result;?>">
              </div><br><br><br>
              <div class="col-xs-2">
    <input type="text" name="blank_parameter_four" class="form-control" placeholder="BLANK" value="<?php echo $search_bonemarrow->blank_parameter_four;?>">
  </div>
              <div class="col-xs-2">
    <input type="text" name="blank_four_result" class="form-control" placeholder="RESULT" value="<?php echo $search_bonemarrow->blank_four_result;?>">
  </div>
             
         </div> <br>
             <div class="row">
  <div class="col-xs-2">
    <input type="text" name="hct" class="form-control" placeholder="HCT" value="<?php echo $search_bonemarrow->hct;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="mcv" class="form-control" placeholder="MCV" value="<?php echo $search_bonemarrow->mcv;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="mch" class="form-control" placeholder="MCH" value="<?php echo $search_bonemarrow->mch;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="mchc" class="form-control" placeholder="MCHC" value="<?php echo $search_bonemarrow->mchc;?>">
  </div>
 <div class="col-xs-2">
    <input type="text" name="rdw" class="form-control" placeholder="RDW" value="<?php echo $search_bonemarrow->rdw;?>">
  </div>
</div><br><br>
          
    </div>
  
    
    
    <div class="tab-pane" id="profile">
        
        <div class="row"><br>
  <div class="col-xs-12">
    <input type="text" name="cellularity_info" class="form-control" placeholder="Cellularity" value="<?php echo $search_bonemarrow->cellularity_info;?>">
  </div><br><br>
  <div class="col-xs-2">
    <input type="text" name="me" class="form-control" placeholder="ME" value="<?php echo $search_bonemarrow->me;?>">
  </div>
  <div class="col-xs-10">
    <input type="text" name="granulopoiesis" class="form-control" placeholder="Granulopoiesis" value="<?php echo $search_bonemarrow->granulopoiesis;?>">
  </div><br><br>
<div class="col-xs-2">
    <input type="text" name="neutrophil_bn" class="form-control" placeholder="Neutrophil" value="<?php echo $search_bonemarrow->neutrophil_bn;?>">
  </div>
 <div class="col-xs-2">
    <input type="text" name="eosinophil_bm" class="form-control" placeholder="Eosinophil" value="<?php echo $search_bonemarrow->eosinophil_bm;?>">
  </div>
   <div class="col-xs-2">
    <input type="text" name="monocyte_bn" class="form-control" placeholder="Monocyte" value="<?php echo $search_bonemarrow->monocyte_bn;?>">
  </div>
   <div class="col-xs-2">
    <input type="text" name="basophil_bn" class="form-control" placeholder="Basophil" value="<?php echo $search_bonemarrow->basophil_bn;?>">
  </div>
   <div class="col-xs-2">
    <input type="text" name="matayle_bn" class="form-control" placeholder="Matamyeloyte" value="<?php echo $search_bonemarrow->matayle_bn;?>">
   </div><br><br>
     <div class="col-xs-2">
    <input type="text" name="blank_one_bn_para" class="form-control" placeholder="BLANK" value="<?php echo $search_bonemarrow->blank_one_bn_para;?>">
   </div>
   <div class="col-xs-2">
    <input type="text" name="blank_one_bn_result" class="form-control" placeholder="RESULT" value="<?php echo $search_bonemarrow->blank_one_bn_result;?>">
   </div>
    <div class="col-xs-2">
    <input type="text" name="blank_two_bn_para" class="form-control" placeholder="BLANK" value="<?php echo $search_bonemarrow->blank_two_bn_para;?>">
   </div>
   <div class="col-xs-2">
    <input type="text" name="blank_two_bn_result" class="form-control" placeholder="RESULT" value="<?php echo $search_bonemarrow->blank_two_bn_result;?>">
   </div>
    <div class="col-xs-2">
    <input type="text" name="blank_three_bn_para" class="form-control" placeholder="BLANK" value="<?php echo $search_bonemarrow->blank_three_bn_para;?>">
   </div>
   <div class="col-xs-2">
    <input type="text" name="blank_three_bn_result" class="form-control" placeholder="RESULT" value="<?php echo $search_bonemarrow->blank_three_bn_result;?>">
   </div>
   <br><br>
   
   <div class="col-xs-10">
    <input type="text" name="lymphopoiesis_info" class="form-control" placeholder="Lymphopoiesis" value="<?php echo $search_bonemarrow->lymphopoiesis_info;?>">
  </div>   <br><br>
        </div>
        
                <div class="row">
  <div class="col-xs-2">
    <input type="text" name="lympho_bn" class="form-control" placeholder="Lymphocytes"  value="<?php echo $search_bonemarrow->lympho_bn;?>">
  </div>
  <div class="col-xs-2">
    <input type="text"  name="plas_cell" class="form-control" placeholder="Plasma Cell"  value="<?php echo $search_bonemarrow->plas_cell;?>">
  </div>
  <div class="col-xs-2">
    <input type="text" name="lymphoblast_bm" class="form-control" placeholder=" Lymphoblast"  value="<?php echo $search_bonemarrow->lymphoblast_bm;?>">
  </div>
<div class="col-xs-2">
    <input type="text" name="blank_bm" class="form-control" placeholder="Blast"  value="<?php echo $search_bonemarrow->blank_bm;?>">
  </div>

                </div><br>
                  <div class="row">
  <div class="col-xs-4">
    <input type="text" name="erythropoesis" class="form-control" placeholder="Erythropoiesis"  value="<?php echo $search_bonemarrow->erythropoesis;?>">
  </div>
  <div class="col-xs-4">
    <input type="text" name="megakaryopoiesis" class="form-control" placeholder="Megakaryopoiesis" value="<?php echo $search_bonemarrow->megakaryopoiesis;?>"> 
 
  </div><br><br>
   
   <div class="col-xs-10">
       <textarea class="form-control" cols="2" name="comments"><?php echo $search_bonemarrow->comments;?></textarea>
  </div>
  <br><br><br><br>
</div> 
        
        
        
        
        
        
        
        
        
    </div>



    <div class="tab-pane" id="messages">
        
                <div class="row">
                   
                    <div class="col-xs-12">
                     
                        <textarea class="jqte-test form-control" name="pbf" placeholder="PBF"><?php echo $search_bonemarrow->pbf;?></textarea>
                    </div>
                    <center><strong>CUSTOM REPORT</strong></center>
                      <div class="col-xs-12">
                              <textarea class="jqte-test form-control" name="custom_bn"><?php echo $search_bonemarrow->custom_bn;?></textarea>
                    </div>
            
            </div>
        
        
        
        
    </div>

</div>
    

       
</div>
       </div>  
    
 
        <center>
            <button class="btn btn-primary" onClick="return save_()"><span class="glyphicon glyphicon-edit"></span>&nbsp;UPDATE</button>
          
  
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
        <h4 class="modal-title" id="myModalLabel">SEARCH BONE MARROW </h4>
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
                            foreach ($view_data_bonemarrow_rpt as $data) {
                                ?>

                                <tr class="">
                                    <td><?php echo $data->test_id; ?></span></td>
                                        <td><?php echo $data->patient_name; ?></span></td>

                                    <td>
                                        <a class="link" href="<?php echo base_url(); ?>data_record/edit_bonemarrow_rpt/<?php echo $data->bone_maro_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
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
