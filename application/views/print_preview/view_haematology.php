<!DOCTYPE html>

<html lang="en">
<head>

<title>Twitter Bootstrap Data Table</title>

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css"

</head>
<script src="<?php echo base_url();?>js/assets/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>js/assets/js/jquery-ui.js"></script>
<script language="javascript" src="<?php echo base_url(); ?>jquery.js"></script>
<body>
 
<div class="row-fluid">




       <div class="control-group info">
             <div class="controls">


<div class="container">
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table table-hover bijon" id="example">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong><i class="icon-user icon-large"></i>&nbsp;Haematology Report Search and update</strong>                            </div>
<thead>
<tr>
<th>Test ID</th>
<th>Patient Name</th>
<th>Age</th>
<th>Sex</th>
<th>Reciv.Day</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php

foreach($haematology_info as $UiInfo) {
?>
<tr >
<td ><?php echo $UiInfo->test_id;?></td>
<td><?php echo $UiInfo->patient_name;?></td>
<td><?php echo $UiInfo->age;?></td>
<td><?php echo $UiInfo->sex;?></td>
<td><?php echo $UiInfo->reciv_date;?></td>
<td>
    <a class="btn btn-primary" href="<?php echo base_url();?>pathology_reporting_controller/update_haematology_form/<?php echo $UiInfo->haematology_id;?>" onClick="return update_haematology();"><i class="icon-edit icon-white"></i>&nbsp;Edit</a>
<a class="delete deleteUser btn btn-danger" href="#" onClick="//return delete_haematology();"><i class="icon-trash icon-white"></i>&nbsp;Delete</a>
</td>
</td>
</tr>
<?php }?>
</tbody>
</table>

</div></div>

</div>


</div>
        </div>
</div>



</body>
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

</html>
 <script type='text/javascript'>

        $(document).ready(function(){
            $(".delete").click(function(e){
                $this  = $(this);
                e.preventDefault();
                var url = $(this).attr("href");
                $.get(url, function(r){
                    if(r.success){
                        $this.closest("tr").remove();

                    }
                })

            });

        });

    </script>


    <script>
        $(document).ready(function()
        {
            $('.deleteUser').click(function()
            {
                if (confirm("Are you sure you want to delete this row?"))
                {
                    var id = $(this).parent().parent().attr('id');
                    var data = 'id=' + id ;
                    var parent = $(this).parent().parent();

                    $.ajax(
                    {
                        type: "POST",
                        url: "<?php echo base_url();?>pathology_reporting_controller/delete_haematology_report>",
                        data: data,
                        cache: false,

                        success: function()
                        {

                            parent.fadeOut('slow', function() {$(this).remove();});

                        }
                    });
                }
            });

            // style the table with alternate colors
            // sets specified color for every odd row

        });
    </script>

