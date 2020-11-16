 <!DOCTYPE HTML><head>

<script src="<?php echo base_url();?>jquery-1.7.2.js"></script>
<script src="<?php echo base_url();?>jquery.printPage.js"></script>
<script language="javascript" src="<?php echo base_url();?>jquery.js"></script>
<script language="javascript" src="<?php echo base_url();?>modal.popup.js"></script>
<script src="<?php echo base_url();?>js/assets/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>js/assets/js/jquery-ui.js"></script>

<link rel="stylesheet" href="<?php echo base_url()?>css/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo base_url();?>themes/base/jquery.ui.all.css">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>bootstrap_datatable.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css"
</head>
<script>
 $(document).ready(function() {
$(".btnPrint").printPage({
url: "<?php echo base_url(); ?>pathology_reporting_controller/print_vew_hospital_name.html",
attr: "href",
message:"Your document is being created"
});
});
</script>
<style>
.heading_info {
text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
0px 80px 13px rgba(0,0,0,0.1),
0px 18px 23px rgba(0,0,0,0.1);
}

</style>
     <style>
/*MORPH*/
.box-shadow{

    box-shadow: 0px 0px 10px 4px rgba(119, 119, 119, 0.75);
-moz-box-shadow: 0px 0px 10px 4px rgba(119, 119, 119, 0.75);
-webkit-box-shadow: 0px 0px 10px 4px rgba(119, 119, 119, 0.75);
}
.morph {
  -webkit-transition: all 0.5s ease;
     -moz-transition: all 0.5s ease;
       -o-transition: all 0.5s ease;
      -ms-transition: all 0.5s ease;
          transition: all 0.5s ease;


}

.morph:hover {

  border-radius: 50%;
  -webkit-transform: rotate(02.1deg);
     -moz-transform: rotate(02.1deg);
       -o-transform: rotate(02.1deg);
      -ms-transform: rotate(02.1deg);
          transform: rotate(02.1deg);


}

     </style>

<body>
  <div class="control-group info">
             <div class="controls">
<div class="row-fluid">
 
<div class="heading_info container">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table" id="example">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong><i class="icon-user icon-large"></i>&nbsp;All Hospital List</strong> <button type="button" class="btn btnPrint" >Print All Hospital List</button> </div>
<thead>
<tr>

<th>Name of Hospital</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php

foreach($hospital_info as $UiInfo) {
?>
<tr>
<td><?php echo $UiInfo->hospital_name;?></td>

<td>
    <a class="btn btn-primary" href="<?php echo base_url();?>pathology_reporting_controller/hospital_info_form/<?php echo $UiInfo->hospital_id;?>" onClick="return update_viewInfo();"><i class="icon-edit icon-white"></i>&nbsp;Edit</a>
<a class="btn btn-success" href="<?php echo base_url();?>pathology_reporting_controller/pdf_all_hospital_info" onClick="return pdf();"><i class="icon-file"></i> PDF</a>

</td>
</td>
</tr>
<?php }?>
</tbody>
</table>



</div>


</div>
             </div></div>


</body>
</html>

<script type="text/javascript">

$(document).ready(function()
{
    $("#rpt").addClass("text_box_error");

});

</script>
<style>
input[type="text"]
{
    background-color: rgba(0, 255, 0, 0.5);
    border: 1px solid #5B5B5B;

}

input[type="text"]:hover, input[type="text"]:focus
{
    background-color: rgba(0, 255, 0, 1);
    border: 1px solid #5B5B5B;
    font-weight: bold;
}
input[type="text"].text_box_error
{
    background-color: red;
}

input[type="text"].text_box_error:hover
{
    background-color: rgba(255, 0, 0, .5);
}
</style>
<script>
function pdf()
{
 chk=confirm("Are You Sure Want To Create PDF Report...");
            if(chk)
            {
                return true;
            }
            else{
                return false;
            }
}
</script>