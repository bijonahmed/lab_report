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

       <script>
            $(function() {
<?php
foreach ($view_bonemarrow as $row):
    $view_bonemarrow[] = $row->ce;
endforeach;

echo "var javascript_array =" . json_encode($view_bonemarrow);
?>

                $( "#ce" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
             <script>
            $(function() {
<?php
foreach ($view_CellINfo as $row):
    $view_CellINfo[] = $row->cellularity_info;
endforeach;

echo "var javascript_array =" . json_encode($view_CellINfo);
?>

                $( "#cellularity_info" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
           <script>
            $(function() {
<?php
foreach ($view_Lymphopohosis as $row):
    $view_Lymphopohosis[] = $row->lymphopoiesis_info;
endforeach;

echo "var javascript_array =" . json_encode($view_Lymphopohosis);
?>

                $( "#lymphopoiesis_info" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
        
             <script>
            $(function() {
<?php
foreach ($view_erythropohosis as $row):
    $view_erythropohosis[] = $row->erythropoesis;
endforeach;

echo "var javascript_array =" . json_encode($view_erythropohosis);
?>

                $( "#erythropoesis" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
           <script>
            $(function() {
<?php
foreach ($view_megakarioposis as $row):
    $view_megakarioposis[] = $row->megakaryopoiesis;
endforeach;

echo "var javascript_array =" . json_encode($view_megakarioposis);
?>

                $( "#megakaryopoiesis" ).autocomplete({
                    source: javascript_array
                });

            });
        </script>
     <script>
  $(document).ready(function() {

		//Change these values to style your modal popup
		var align = 'center';									//Valid values; left, right, center
		var top = 10; 											//Use an integer (in pixels)
		var width = 800; 										//Use an integer (in pixels)
		var padding = 10;										//Use an integer (in pixels)
		var backgroundColor = '#FFFFFF'; 						//Use any hex code
		var source = '<?php echo base_url();?>data_record/bone_marrow_report'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
		var borderColor = '#333333'; 							//Use any hex code
		var borderWeight = 4; 									//Use an integer (in pixels)
		var borderRadius = 5; 									//Use an integer (in pixels)
		var fadeOutTime = 300; 									//Use any integer, 0 = no fade
		var disableColor = '#666666'; 							//Use any hex code
		var disableOpacity = 40; 								//Valid range 0-100
		var loadingImage = '<?php echo base_url();?>loading.gif';		//Use relative path from this page

		//This method initialises the modal popup
        $(".bm").click(function() {
            modalPopup(align, top, width, padding, disableColor, disableOpacity, backgroundColor, borderColor, borderWeight, borderRadius, fadeOutTime, source, loadingImage);
        });

		//This method hides the popup when the escape key is pressed
		$(document).keyup(function(e) {
			if (e.keyCode == 27) {
				closePopup(fadeOutTime);
			}
		});

    });
</script>

<script>
 $(document).ready(function() {
$(".btnPrint").printPage({
url: "<?php echo base_url(); ?>data_record/bone_marrow_report.html",
attr: "href",
message:"Your document is being created"
});
});
</script>

<script>
 $(document).ready(function() {
$(".dfaft_print").printPage({
url: "<?php echo base_url(); ?>data_record/bone_marrow_report.html",
attr: "href",
message:"Your document is being created"
});
});
</script>
    <style>
    .ui-autocomplete {
        max-width: 900px;
            max-height: 300px;
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
<button class="btn btn-primary btnPrint"><span class="glyphicon glyphicon-print"></span>&nbsp;Print</button>
<button class="btn bm btn btn-primary"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp;Preview</button>
<a href="<?php echo base_url();?>welcome/redirect_edit_form_bonemarrow.html"><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Edit</button></a>
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
  <form action="<?php echo base_url();?>data_record/save_bone_marrow_info.html" method="post">
 
  <div class="form-group has-success">
            <div class="row">
                
   <div class="col-xs-2">
      <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo "MB15:";?>">
  </div>
                 <div class="col-xs-2">
                     <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" required="1">
  </div>
                 <div class="col-xs-2">
                     <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date">
  </div>
                            <div class="col-xs-3">
                                <input type="text" name="patient_name" class="form-control" placeholder="Patient Name">
  </div>
  <div class="col-xs-1">
      <input type="text" name="age" class="form-control" placeholder="Age">
  </div>
                <div class="col-xs-2">
                     <select name="sex" class="form-control">
                         
                         <option>Male</option>
                         <option>Female</option>
                         
                     </select>
  </div>
</div>
      <br>
      <div class="row">         
<div class="col-xs-4">
    <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name">
  </div>
<div class="col-xs-4">
    <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name">
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
                      <input type="text" name="ce" id="ce" class="form-control" placeholder="Clinical Finding"> 
              </div>
          </div> <br>
        <div class="row">
  <div class="col-xs-2">
      <input type="text" name="hb" class="form-control" placeholder="HB">
  </div>
  <div class="col-xs-2">
      <input type="text" name="esr" class="form-control" placeholder="ESR">
  </div>
  <div class="col-xs-2">
      <input type="text" name="wbc" class="form-control" placeholder="WBC">
  </div>
<div class="col-xs-2">
    <input type="text" name="pc" class="form-control" placeholder="PC">
  </div>
 <div class="col-xs-2">
     <input type="text" name="rbc" class="form-control" placeholder="RBC">
  </div>
</div>
          <br>
             <div class="row">
  <div class="col-xs-2">
      <input type="text" name="neutro" class="form-control" placeholder="Neutrophil">
  </div>
  <div class="col-xs-2">
      <input type="text" name="lymphocytes" class="form-control" placeholder="Lymphocytes">
  </div>
  <div class="col-xs-2">
    <input type="text" name="eosinophil" class="form-control" placeholder="Eosinophil">
  </div>
<div class="col-xs-2">
    <input type="text" name="monnocyte" class="form-control" placeholder="Monocyte">
  </div>

             </div><br>
         <div class="row">
  <div class="col-xs-2">
    <input type="text" name="blank_parameter_one" class="form-control" placeholder="BLANK">
  </div>
  <div class="col-xs-2">
    <input type="text" name="blank_one_result" class="form-control" placeholder="RESULT">
  </div>
  <div class="col-xs-2">
    <input type="text" name="blank_parameter_two" class="form-control" placeholder="BLANK">
  </div>
<div class="col-xs-2">
    <input type="text" name="blank_two_result" class="form-control" placeholder="RESULT">
  </div>
 <div class="col-xs-2">
    <input type="text" name="blank_parameter_three" class="form-control" placeholder="BLANK">
  </div>
              <div class="col-xs-2">
    <input type="text" name="blank_three_result" class="form-control" placeholder="RESULT">
              </div><br><br><br>
              <div class="col-xs-2">
    <input type="text" name="blank_parameter_four" class="form-control" placeholder="BLANK">
  </div>
              <div class="col-xs-2">
    <input type="text" name="blank_four_result" class="form-control" placeholder="RESULT">
  </div>
             
         </div> <br>
             <div class="row">
  <div class="col-xs-2">
    <input type="text" name="hct" class="form-control" placeholder="HCT">
  </div>
  <div class="col-xs-2">
    <input type="text" name="mcv" class="form-control" placeholder="MCV">
  </div>
  <div class="col-xs-2">
    <input type="text" name="mch" class="form-control" placeholder="MCH">
  </div>
<div class="col-xs-2">
    <input type="text" name="mchc" class="form-control" placeholder="MCHC">
  </div>
 <div class="col-xs-2">
    <input type="text" name="rdw" class="form-control" placeholder="RDW">
  </div>
</div><br><br>
          
    </div>
  
    
    
    <div class="tab-pane" id="profile">
        
        <div class="row"><br>
  <div class="col-xs-12">
    <input type="text" name="cellularity_info" id="cellularity_info" class="form-control" placeholder="Cellularity">
  </div><br><br>
  <div class="col-xs-2">
    <input type="text" name="me" class="form-control" placeholder="ME">
  </div>
  <div class="col-xs-10">
    <input type="text" name="granulopoiesis" class="form-control" placeholder="Granulopoiesis">
  </div><br><br>
<div class="col-xs-2">
    <input type="text" name="neutrophil_bn" class="form-control" placeholder="Neutrophil">
  </div>
 <div class="col-xs-2">
    <input type="text" name="eosinophil_bm" class="form-control" placeholder="Eosinophil">
  </div>
   <div class="col-xs-2">
    <input type="text" name="monocyte_bn" class="form-control" placeholder="Monocyte">
  </div>
   <div class="col-xs-2">
    <input type="text" name="basophil_bn" class="form-control" placeholder="Basophil">
  </div>
   <div class="col-xs-2">
    <input type="text" name="matayle_bn" class="form-control" placeholder="Matamyeloyte">
   </div><br><br>
     <div class="col-xs-2">
    <input type="text" name="blank_one_bn_para" class="form-control" placeholder="BLANK">
   </div>
   <div class="col-xs-2">
    <input type="text" name="blank_one_bn_result" class="form-control" placeholder="RESULT">
   </div>
    <div class="col-xs-2">
    <input type="text" name="blank_two_bn_para" class="form-control" placeholder="BLANK">
   </div>
   <div class="col-xs-2">
    <input type="text" name="blank_two_bn_result" class="form-control" placeholder="RESULT">
   </div>
    <div class="col-xs-2">
    <input type="text" name="blank_three_bn_para" class="form-control" placeholder="BLANK">
   </div>
   <div class="col-xs-2">
    <input type="text" name="blank_three_bn_result" class="form-control" placeholder="RESULT">
   </div>
   <br><br>
   
   <div class="col-xs-10">
    Lymphopoiesis<input type="text" name="lymphopoiesis_info" id="lymphopoiesis_info" value="<?php echo ".";?>" class="form-control" placeholder="Lymphopoiesis">
  </div>   <br><br><br>
        </div>
        
                <div class="row">
  <div class="col-xs-2">
    <input type="text" name="lympho_bn" class="form-control" placeholder="Lymphocytes">
  </div>
  <div class="col-xs-2">
    <input type="text"  name="plas_cell" class="form-control" placeholder="Plasma Cell">
  </div>
  <div class="col-xs-2">
    <input type="text" name="lymphoblast_bm" class="form-control" placeholder=" Lymphoblast">
  </div>
<div class="col-xs-2">
    <input type="text" name="blank_bm" class="form-control" placeholder="Blast">
  </div>

                </div><br>
                  <div class="row">
  <div class="col-xs-4">
    <input type="text" name="erythropoesis" id="erythropoesis" class="form-control" placeholder="Erythropoiesis">
  </div>
  <div class="col-xs-4">
    <input type="text" name="megakaryopoiesis" id="megakaryopoiesis" class="form-control" placeholder="Megakaryopoiesis">
 
  </div><br><br>
   
   <div class="col-xs-10">
       <textarea class="form-control" cols="2" name="comments"><?php echo "Comments: ";?></textarea>
  </div>
  <br><br><br><br>
</div> 
        
        
        
        
        
        
        
        
        
    </div>



    <div class="tab-pane" id="messages">
        
                <div class="row">
                   
                    <div class="col-xs-12">
                     
                        <textarea class="jqte-test form-control" name="pbf" placeholder="PBF"></textarea>
                    </div>
                    <center><strong>CUSTOM REPORT</strong></center>
                      <div class="col-xs-12">
                              <textarea class="jqte-test form-control" name="custom_bn"></textarea>
                    </div>
            
            </div>
        
        
        
        
    </div>

</div>
    

       
</div>
       </div>  
    
 
        <center>
            <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button>
          
  
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
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="bone_marrow_rpt">

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
                                        <a class="link" data-toggle="tooltip" data-placement="left" title="EDIT BONE MARROW REPORT " href="<?php echo base_url(); ?>data_record/edit_bonemarrow_rpt/<?php echo $data->bone_maro_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
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