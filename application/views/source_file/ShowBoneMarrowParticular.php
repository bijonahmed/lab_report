<?php
if($BoneMarrowParticularPtInfo!=null)
{
?>
<head>
<link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
 
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

</head>


<table width="1000" border="0" style="background-color: greenyellow; border-radius: 8px;">
  <tr>
    <td width="120"><span class="style20">Rec. Date </span></td>
    <td width="119"> <span class="style20"><strong>: </strong><?php echo $BoneMarrowParticularPtInfo->reciv_date;?></span></td>
    <td width="163"><span class="style20">Deli. Date </span></td>
    <td width="110"><span class="style20"><strong>:</strong> <?php echo $BoneMarrowParticularPtInfo->deli_date;?></span></td>
    <td width="45"><span class="style21"></span></td>
    <td width="103"><span class="style21"></span></td>
    <td width="64"><span class="style21"></span></td>
  </tr>
  <tr>
    <td width="120"><span class="style20">Patient Name </span></td>
    <td colspan="3"><span class="style20"><strong>: <?php echo $BoneMarrowParticularPtInfo->patient_name;?> </strong></span></td>
    <td><span class="style20">Age</span></td>
    <td><span class="style21"><strong>: <?php echo $BoneMarrowParticularPtInfo->age;?></strong></span></td>
    <td width="64"><span class="style20">Sex <strong>:</strong></span><span class="style21"><strong> <?php echo $BoneMarrowParticularPtInfo->sex;?></strong></span></td>
  </tr>
  <tr>
    <td><span class="style20">Ref. By </span></td>
    <td colspan="6"><span class="style20"><strong>:</strong>  <?php echo $BoneMarrowParticularPtInfo->ref_by;?></span></td>
  </tr>
  <tr>
    <td><span class="style20">Hospital Name </span></td>
    <td colspan="6"><span class="style20"><strong>: </strong><?php echo $BoneMarrowParticularPtInfo->hospital_name;?></span></td>
  </tr>
</table>
 
<br>
      
</div>
<?php
}else{
?>
<strong>Searching...</strong>

<?php } ?>
