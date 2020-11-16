 <!DOCTYPE HTML><head>

<script src="<?php echo base_url();?>jquery-1.7.2.js"></script>
<script src="<?php echo base_url();?>jquery.printPage.js"></script>
<script language="javascript" src="<?php echo base_url();?>jquery.js"></script>
<script language="javascript" src="<?php echo base_url();?>modal.popup.js"></script>
<script src="<?php echo base_url();?>js/assets/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>js/assets/js/jquery-ui.js"></script>

<link rel="stylesheet" href="<?php echo base_url()?>css/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo base_url();?>themes/base/jquery.ui.all.css">

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css">

</head>


<body>
 <div class="control-group info">
             <div class="controls">
<div class="row-fluid">

<div class="alert alert-info">

<strong><i class="icon-user icon-large"></i>&nbsp;All Speciment List</strong>

</div>
<div class="container">
<table cellpadding="0" cellspacing="0" border="0" class="" id="">

<thead>
<tr>
<th>SL NO</th>
<th>Specimen Name</th>
</tr>
</thead>
<tbody>
      <?php
        $x=1;
  {

          ?>
<?php

foreach($specimen_info as $UiInfo) {
?>
<tr>


<td><?php echo $x;?></td>
<td><?php echo $UiInfo->specimen_name;?></td>
 <?php
     $x++; }


?>
<td>


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

