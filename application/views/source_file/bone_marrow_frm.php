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
<style type="text/css">
<!--
.style20 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style21 {font-size: 12px}
-->
</style>
<style type="text/css">
<!--
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 10;
}
.style5 {font-size: 10}
.style6 {font-family: Arial, Helvetica, sans-serif; font-size: 10; }
.style8 {font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
.style9 {font-size: 12px}
-->
</style>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style2 {font-size: 12px}
-->
</style>
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
<script>
        $(document).ready(function () {
            $('.nav-toggle').click(function () {
                //get collapse content selector
                var collapse_content_selector = $(this).attr('href');

                //make the collapse content to be shown or hide
                var toggle_switch = $(this);
                $(collapse_content_selector).toggle(function () {
                    if ($(this).css('display') == 'none') {
                        //change the button label to be 'Show'
                        toggle_switch.html('Show Bone Marrow');
                    } else {
                        //change the button label to be 'Hide'
                        toggle_switch.html('Hide Bone Marrow');
                    }
                });
            });

        });
    </script>
    </head>
    <br><br><br>
    <body>
      
        
       
        <div class="container">
            
            <div class="row">
                <div class="col-md-1"></div>
               
                <div class="col-md-10">
                       <div align="right">
                
 <button href="#collapse1"  class="nav-toggle btn btn-primary">Bone Marrow</button>
<a href="<?php echo base_url();?>welcome/redirect_edit_form_bonemarrow.html"><button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</button></a>
<br><br>
            </div>
                    
                </div>
                
            </div>
  
 
          
  <?php
  // save function name: save_bone_marrow_info
  
  ?>
            <?php
            
            if($BonemarrowInfo!=null)
            {
            ?>
  <form action="<?php echo base_url();?>data_record/update_bone_marrow_info.html" method="post">
   <input type="hidden" name="bone_maro_id" class="form-control" value="<?php if(isset($BonemarrowInfo))
        {echo $BonemarrowInfo->bone_maro_id;}
        
        ?>"/> 
  <div class="form-group has-success">
      <div class="container row" style="margin-left: 10px;">
                
  
<table width="1081" border="0">
  <tr>
    <td width="102" valign="top">Test ID </td>
    <td width="159" valign="top"><input type="text" name="test_id" class="form-control" value="<?php if(isset($BonemarrowInfo))
        {echo $BonemarrowInfo->test_id;}
        
        ?>"/></td>
    <td width="83" valign="top"><center>Rec. Date</center> </td>
    <td width="144" valign="top"><input type="text" name="reciv_date" id="reciv_date" class="form-control" value="<?php if(isset($BonemarrowInfo))
        {echo $BonemarrowInfo->reciv_date;}
        
        ?>"/>    </td>
    <td width="79" valign="top"><center>Deli. Date </center></td>
    <td width="144" valign="top"><input type="text" name="deli_date" id="deli_date" class="form-control" value="<?php if(isset($BonemarrowInfo))
        {echo $BonemarrowInfo->deli_date;}
        
        ?>"/></td>
    <td width="48" valign="top"><center>Age</center></td>
    <td width="144" valign="top"> <input type="text" name="age" class="form-control" value="<?php if(isset($BonemarrowInfo))
        {echo $BonemarrowInfo->age;}
        
        ?>"/></td>
    <td width="56" valign="top"><center>Sex</center></td>
    <td width="80" valign="top"><select name="sex" class="form-control">
  <option>
  <?php if(isset($BonemarrowInfo))
        {echo $BonemarrowInfo->sex;}
        
        ?>
  </option>
  <option>Male</option>
  <option>Female</option>
</select></td>
  </tr>
   
  <tr>
    <td valign="top">Patient Name </td>
    <td colspan="9" valign="top"><input type="text" name="patient_name" class="form-control" value="<?php if(isset($BonemarrowInfo))
        {echo $BonemarrowInfo->patient_name;}
        
        ?>"/></td>
  </tr>
  <tr>
    <td valign="top">Doctor Name </td>
    <td colspan="9" valign="top"><input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="" /></td>
  </tr>
  <tr>
    <td valign="top">Hospital Name </td>
    <td colspan="9" valign="top"><input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="" /></td>
  </tr>
</table>
          <br> 
           
</div>
     
     
      <!-- Start CBC-->
   
      <!-- Start CBC-->
   
        <div class="container row" style="margin-left: 60px;">
             <div class="col-md-1">
             C/F:
          </div>
             <div class="col-md-9">
             <input type="text" name="ce" id="ce" class="form-control" placeholder="Clinical Finding" value=""><br>
          </div>
          
      </div>
       <div class="container row" style="margin-left: 60px;">
            <div class="col-md-1">
              Hb%
          </div>
          <div class="col-md-1">
          <input type="text" name="hb" class="form-control" placeholder="HB">
          </div>
            <div class="col-md-1">
             ESR
          </div>
          <div class="col-md-1">
          <input type="text" name="esr" class="form-control" placeholder="ESR">
          </div>
          
          <div class="col-md-1">
           WBC
          </div>
          <div class="col-md-1">
        <input type="text" name="wbc" class="form-control" placeholder="WBC">
          </div>
          
             <div class="col-md-1">
        PC
          </div>
          <div class="col-md-1">
       <input type="text" name="pc" class="form-control" placeholder="PC">
          </div>
          
          
               <div class="col-md-1">
     RBC
          </div>
          <div class="col-md-1">
    <input type="text" name="rbc" class="form-control" placeholder="RBC">
          </div>
      </div>
      <strong style="margin-left: 90px;"><u>DIFFERTIAL COUNT</u></strong><br><br>
      
        <div class="container row" style="margin-left: 60px;">
        
          
               <div class="col-md-1">
     Neutrophil
          </div>
          <div class="col-md-1">
  <input type="text" name="neutro" class="form-control" placeholder="">
          </div>
          
          
               <div class="col-md-1">
   Lymphocytes
          </div>
          <div class="col-md-1">
 <input type="text" name="lymphocytes" class="form-control" placeholder="">
          </div>
          
          
               <div class="col-md-1">
     Eosinophil
          </div>
          <div class="col-md-1">
  <input type="text" name="eosinophil" class="form-control" placeholder="">
          </div>
          
          
           <div class="col-md-1">
     Eosinophil
          </div>
          <div class="col-md-1">
  <input type="text" name="eosinophil" class="form-control" placeholder="">
          </div>
          
           <div class="col-md-1">
 Monocyte
          </div>
          <div class="col-md-1">
  <input type="text" name="monnocyte" class="form-control" placeholder="">
          </div>
          <br><br>
      </div>
       <br>
        <div class="container row" style="margin-left: 60px;">
         
           <div class="col-md-2">
<input name="blank_parameter_one" type="text" class="form-control " placeholder="">
          </div>
          <div class="col-md-2">
  <input type="text" name="blank_one_result" class="form-control" placeholder="Result">
          </div>
          
           <div class="col-md-2">
<input name="blank_parameter_two" type="text" class="form-control " placeholder="">
          </div>
          <div class="col-md-2">
 <input type="text" name="blank_two_result" class="form-control" placeholder="Result">
          </div>
          
          <br><br>
          <div class="col-md-2">
<input name="blank_parameter_three" type="text" class="form-control " placeholder="">
          </div>
          <div class="col-md-2">
<input type="text" name="blank_three_result" class="form-control" placeholder="Result">
          </div>
          
          
          <div class="col-md-2">
<input name="blank_parameter_four" type="text" class="form-control " placeholder="">
          </div>
          <div class="col-md-2">
<input type="text" name="blank_four_result" class="form-control" placeholder="Result">
          </div>
          
      </div>
       <strong style="margin-left: 90px;"><u>ABSOULETE VALUE</u></strong>
       <div class="container row" style="margin-left: 60px;">
           
            <div class="col-md-1">
HCT/PCV
          </div>
          <div class="col-md-1">
<input name="hct" type="text" class="form-control " placeholder="HCT">
          </div>
           
            <div class="col-md-1">
MCV
          </div>
          <div class="col-md-1">
 <input name="mcv" type="text" class="form-control " placeholder="MCV">
          </div>
           
            <div class="col-md-1">
MCH
          </div>
          <div class="col-md-1">
<input name="mch" type="text" class="form-control " placeholder="MCH">
          </div>
           
           <div class="col-md-1">
MCHC
          </div>
          <div class="col-md-1">
<input name="mchc" type="text" class="form-control " placeholder="MCHC">
          </div>
           
             <div class="col-md-1">
RDW
          </div>
          <div class="col-md-1">
<input name="rdw" type="text" class="form-control " placeholder="RDW">
          </div>
       </div>
          <strong style="margin-left: 90px;"><u>PBF</u></strong>
            <div class="container row" style="margin-left: 60px;">
         
          <div class="col-md-10">
   <textarea class="jqte-test form-control" name="pbf" placeholder="PBF"></textarea>
          </div>     
              
          </div>
       
       
       
      <!-- End CBC-->
         

<div id="collapse1" style="display:none">
         <strong style="margin-left: 90px;"><u>BONE MARROW ASPIRATION REPORT</u></strong>
         <br><br>
         <div class="row" style="margin-left: 75px;">
              <div class="col-md-2">
Cellularity  
          </div>
          <div class="col-md-5">
<input type="text" name="cellularity_info" id="cellularity_info" class="form-control" placeholder="Cellularity">
          </div>
             
             
             <div class="col-md-1">
M:E 
          </div>
          <div class="col-md-1">
<input type="text" name="me" class="form-control" placeholder="ME">
          </div>
             <br><br>
             
         </div>
         
         <div class="row" style="margin-left: 75px;">
             <div class="col-md-2">
Granulopoiesis 
          </div>
          <div class="col-md-8">
<input type="text" name="granulopoiesis" class="form-control" placeholder="Granulopoiesis">
          </div>
             
             <br><br>
         </div>
             
             
             
             
              
         <div class="row" style="margin-left: 75px;">
             
             <div class="col-md-1">
Neutrophils
          </div>
          <div class="col-md-1">
  <input type="text" name="neutrophil_bn" class="form-control" placeholder="">
          </div>
             
             
             
             <div class="col-md-1">
Eosinophils
          </div>
          <div class="col-md-1">
  <input type="text" name="eosinophil_bm" class="form-control" placeholder="">
          </div>
          
             
       <div class="col-md-1">
Monocytes
          </div>
          <div class="col-md-1">
  <input type="text" name="monocyte_bn" class="form-control" placeholder="Monocyte">
          </div>       
             
   <div class="col-md-1">
Basophils
          </div>
          <div class="col-md-1">
  <input type="text" name="basophil_bn" class="form-control" placeholder="">
          </div>           
             
             
   <div class="col-md-1">
Matamyeloyte
          </div>
          <div class="col-md-1">
  <input type="text" name="matayle_bn" class="form-control" placeholder="">
          </div>  <br><br>        
         </div>
             <div class="row" style="margin-left: 75px;">
                 
           <div class="col-md-2">
<input type="text" name="blank_one_bn_para" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
  <input type="text" name="blank_one_bn_result" class="form-control" placeholder="Result">
          </div>       
                 
             
                 
                 <div class="col-md-2">
<input type="text" name="blank_two_bn_para" class="form-control" placeholder="">
          </div>
          <div class="col-md-2">
  <input type="text" name="blank_two_bn_result" class="form-control" placeholder="Result">
          </div>       
                 
                 
                 
       <div class="col-md-2">
<input type="text" name="blank_three_bn_para" class="form-control" placeholder="">
          </div><br><br>
          <div class="col-md-2">
  <input type="text" name="blank_three_bn_result" class="form-control" placeholder="Result">
          </div>    
           
           <div class="col-md-2">
Lymphopoiesis 
          </div>
          <div class="col-md-6">
  <input type="text" name="lymphopoiesis_info" id="lymphopoiesis_info" value="<?php echo ".";?>" class="form-control" placeholder="Lymphopoiesis">
          </div> 
          
             
         </div>
         
             
                    
           <br> 
        <div class="row" style="margin-left: 75px;">
                 
           <div class="col-md-2">
Lymphocyte 
          </div>
          <div class="col-md-2">
  <input type="text" name="lympho_bn" class="form-control" placeholder="">
          </div>  
             <br>    <br>
            
            <div class="col-md-2">
Plasma Cells
          </div>
          <div class="col-md-2">
     <input type="text"  name="plas_cell" class="form-control" placeholder="">
          </div>
        
               <div class="col-md-1">
Lymphoblast
          </div>
          <div class="col-md-2">
         <input type="text" name="lymphoblast_bm" class="form-control" placeholder="">
          </div>
            
                  <div class="col-md-1">
Blast
          </div>
          <div class="col-md-2">
          <input type="text" name="blank_bm" class="form-control" placeholder="">
          </div>
            
            </div>   
             
         <br> 
         <div class="row" style="margin-left: 75px;">
             
             <div class="col-md-2">
                 Erythropoiesis  
          </div>
          <div class="col-md-7">
           <input type="text" name="erythropoesis" id="erythropoesis" class="form-control" placeholder="">
          </div>      
             
             
         </div>      
             
             
            
           <br> 
         <div class="row" style="margin-left: 75px;">
             
             <div class="col-md-2">
            Megakaryopoiesis 
          </div>
          <div class="col-md-7">
<input type="text" name="megakaryopoiesis" id="megakaryopoiesis" class="form-control" placeholder="">
          </div>      
             
             
         </div> 
           <br> 
         <div class="row" style="margin-left: 75px;">
          
          <div class="col-md-10">
       <textarea class="jqte-test form-control" cols="2" name="comments"><?php echo "Comments:";?></textarea>
          </div>      
             
             
         </div> 
         <div class="row" style="margin-left: 75px;">
          
          <div class="col-md-10">
             CUSTOMIZED
       <textarea class="jqte-test form-control" cols="2" name="custom_bn"></textarea>
          </div>      
             
             
         </div> 
         </div>
      
          </div>
     
 
        <center>
            <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button>
          <button class="btn btn-primary btnPrint"><span class="glyphicon glyphicon-print"></span>&nbsp;Print</button>
<button class="btn bm btn btn-primary"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp;Preview</button>
  
         </center>
   
       <?php
            }else{
       ?>
   <hr>
   <strong><h4>Sorry Invalid Test Id, Please Try Again.</h4></strong>
      <!-- End CBC-->
         

 
     <?php
     };
     ?> 
           
            
       
      
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