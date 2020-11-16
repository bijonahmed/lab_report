<!DOCTYPE html>

<html lang="en">
<head>

<title>Twitter Bootstrap Data Table</title>


<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">

<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css"

</head>


<body>

       <div class="control-group info">
             <div class="controls">

 
<div class="row-fluid">

<div class="container">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table table-hover" id="example">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong><i class="icon-user icon-large"></i>&nbsp;Special Score ER PR HER-2 </strong>                            </div>
<thead>
<tr>
<th>SL NO </th>

<th>Score</th>

<th>Action</th>

</tr>
</thead>
<tbody>
<?php

foreach($her_two_info as $UiInfo) {
?>
<tr >
<td><?php echo $UiInfo->sl_no;?></td>
<td><?php echo $UiInfo->her_two_score;?></td>


<td>
  <a class="btn btn-primary" href="<?php echo base_url();?>pathology_reporting_controller/update_her_two/<?php echo $UiInfo->her_two_id;?>" onclick="return update_her_two();"><i class="icon-edit icon-white"></i>&nbsp;Edit</a>
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

