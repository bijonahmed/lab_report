<!DOCTYPE html>

<html lang="en">
<head>

<title>Twitter Bootstrap Data Table</title>

<link href="<?php echo base_url();?>bootstrap_datatable.css" rel="stylesheet" media="screen">
<link href="<?php echo base_url();?>css/bootstrap.css" rel="stylesheet" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css"


</head>


<body>
    <div class="">
<div class="row-fluid">





<div class="container">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table table-hover" id="example">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong><i class="icon-user icon-large"></i>&nbsp;Search User</strong>                            </div>
<thead>
<tr>
<th>Name of Person</th>
<th>User Name</th>
<th>Mobile Number</th>
<th>Type</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php

foreach($admin_permission_info as $UiInfo) {
?>
<tr>
<td><?php echo $UiInfo->full_name;?></td>
<td><?php echo $UiInfo->user_name;?></td>
<td><?php echo $UiInfo->mobile_number;?></td>
<td><font color="red"><strong><?php echo $UiInfo->type;?></strong></font></td>
<td>
<a class="btn btn-success" href="<?php echo base_url();?>registration_controller/update_admin_permission_form/<?php echo $UiInfo->user_id;?>" onClick="return update_admin_permission();"><i class="icon-edit icon-white"></i>Edit</a>

<?php
/*<a class="btn btn-danger" href="<?php echo base_url();?>registration_controller/delete_admin_permission/<?php echo $UiInfo->user_id;?>" onClick="return delete_admin_permisson();"><i class="icon-trash icon-white"></i>Delete</a>
*/
?>

</td>
</td>
</tr>
<?php }?>
</tbody>
</table>



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

