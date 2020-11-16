<!DOCTYPE html>
<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">
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
