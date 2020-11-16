<!DOCTYPE html>

<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?php echo base_url();?>bootstrap_datatable.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css"
</head>
<body>
    <div class="span10">
<div class="row-fluid">





<div class="container span12">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table table-hover" id="example">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong><i class="icon-user icon-large"></i>&nbsp;Patient  Search and update</strong>                            </div>
<thead>
<tr>
<th>Name of Patient</th>
<th>Name of Age</th>
<th>Name of Sex</th>
<th>Date</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php

foreach($patient_information as $UiInfo) {
?>
<tr>
<td><?php echo $UiInfo->patient_name;?></td>
<td><?php echo $UiInfo->age;?></td>
<td><?php echo $UiInfo->sex;?></td>
<td><?php echo $UiInfo->date;?></td>
<td>
<a class="btn btn-success" href="<?php echo base_url();?>pathology_reporting_controller/update_patient_form/<?php echo $UiInfo->patient_id;?>" onClick="return update_patient_info();">Edit</a>
<a class="btn btn-danger" href="<?php echo base_url();?>pathology_reporting_controller/delete_patient_Info/<?php echo $UiInfo->patient_id;?>" onClick="return delete_cytopathology();">Delete</a>

</td>
</td>
</tr>
<?php }?>
</tbody>
</table>

</div>
</div>
 </div>
</div>



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

