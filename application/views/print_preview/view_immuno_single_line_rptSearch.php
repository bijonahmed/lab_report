<!DOCTYPE html>

<html lang="en">
<head>

<title>Twitter Bootstrap Data Table</title>


<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">

<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css"


</head>


<body>
 
<div class="row-fluid">




       <div class="control-group info">
             <div class="controls">


<div class="container">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table table-hover" id="example">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong><i class="icon-user icon-large"></i>&nbsp;Immunohistorchemistry Single Line Report Search</strong>                            </div>
<thead>
<tr>
<th>Doctor name </th>
<th>Del.Date</th>


<th>Action</th>

</tr>
</thead>
<tbody>
<?php

foreach($immnu_info as $UiInfo) {
?>
<tr>
<td><?php echo $UiInfo->ref_by;?></td>
<td><?php echo $UiInfo->deli_date;?></td>


<td>
    <a class="btn btn-primary" href="<?php echo base_url();?>pathology_reporting_controller/update_immunu_single_line_form/<?php echo $UiInfo->immu_id;?>" onclick="return update_viewInfo();"><i class="icon-edit icon-white"></i>&nbsp;Edit</a>


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
