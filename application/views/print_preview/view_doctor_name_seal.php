<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Twitter Bootstrap Data Table</title>

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
                                <strong><i class="icon-user icon-large"></i>&nbsp;Doctor Search</strong>                            </div>
                            <thead>
                                <tr>

                                    <th>Name of Doctor &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                              <?php

foreach($doctorName_info as $UiInfo) {
    ?>
                                    <tr>
                                        <td><?php echo $UiInfo->add_doctor;?></td>
                                        <td><a class="btn btn-success" href="<?php echo base_url();?>pathology_reporting_controller/doctor_designation_update_form/<?php echo $UiInfo->sei_id;?>" onClick="return update_viewInfo();">Update</a>
										<a class="btn btn-danger" href="<?php echo base_url();?>pathology_reporting_controller/delete_doctor_name/<?php echo $UiInfo->sei_id;?>" onClick="return delete_doctorName();">Delete</a>
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