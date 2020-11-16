<head>
    <!DOCTYPE html>
<head>

<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>

<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
    <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

    <script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
    <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>
<script>
 $(document).ready(function() {
$(".normal_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_normal_draft.html",
attr: "href",
message:"Your document is being created"
});
});
</script>

<script>
 $(document).ready(function() {
$(".all_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_all.html",
attr: "href",
message:"Your document is being created"
});
});
</script>
    

<script>
 $(document).ready(function() {
$(".aml_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_aml.html",
attr: "href",
message:"Your document is being created"
});
});
</script>


<script>
 $(document).ready(function() {
$(".mm_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_mm.html",
attr: "href",
message:"Your document is being created"
});
});
</script>



<script>
 $(document).ready(function() {
$(".apl_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_apl.html",
attr: "href",
message:"Your document is being created"
});
});
</script>

<script>
 $(document).ready(function() {
$(".cll_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_cll.html",
attr: "href",
message:"Your document is being created"
});
});
</script>
<script>
 $(document).ready(function() {
$(".nhl_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_nhl.html",
attr: "href",
message:"Your document is being created"
});
});
</script>

<script>
 $(document).ready(function() {
$(".aml_notremission_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_aml_not_remission.html",
attr: "href",
message:"Your document is being created"
});
});
</script>


<script>
 $(document).ready(function() {
$(".m_anaemia_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_myeloblastic_anaemia.html",
attr: "href",
message:"Your document is being created"
});
});
</script>

<script>
 $(document).ready(function() {
$(".myeloid_hyperplasia_bm").printPage({
url: "<?php echo base_url(); ?>welcome/bone_marrow_myeloid_hyperplasia.html",
attr: "href",
message:"Your document is being created"
});
});
</script>

<script>
 $(document).ready(function() {
$(".s_reactivemarrow_bm").printPage({
url: "<?php echo base_url(); ?>welcome/s_reactivemarrow_bm.html",
attr: "href",
message:"Your document is being created"
});
});
</script>

<script>
 $(document).ready(function() {
$(".secondary_malignant_deposit_bm").printPage({
url: "<?php echo base_url(); ?>welcome/secondary_malignant_deposit_bm.html",
attr: "href",
message:"Your document is being created"
});
});
</script>
<style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style2 {font-size: 12px}
-->
</style>
</head>
<br><br>
<br><br><div class="container">
    <h2>Draft Print Bone Marrow Format</h2>
    <a href="<?php echo base_url();?>welcome/bone_marrow.html"> <button class="btn btn-success"><span class="glyphicon glyphicon-plus"></span>&nbsp;Final Bone Marrow</button></a> (Ctrl+F)
    <hr>
    <table width="928" border="0" align="center" cellspacing="0" bordercolor="#000000"  class="table table-hover" style="background-color: greenyellow; border-radius: 5px;">
  <tr>
    <td width="190"><span class="style57 style1 style2">Test ID </span></td>
    <td width="7"><span class="style57 style1 style2"><strong>:</strong></span></td>
    <td width="118"><span class="style57 style1 style2"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
    <td width="272"><span class="style57 style1 style2">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
    <td width="331"><span class="style57 style1 style2">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
  </tr>
  <tr>
    <td><span class="style57 style1 style2">Patient Name </span></td>
    <td><span class="style57 style1 style2"><strong>:</strong></span></td>
    <td colspan="2"><span class="style57 style1 style2"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
    <td><span class="style57 style1 style2">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
  </tr>
  <tr>
    <td><span class="style57 style1 style2">Ref. by Prof./ Dr. </span></td>
    <td><span class="style57 style1 style2"><strong>:</strong></span></td>
    <td colspan="3"><span class="style57 style1 style2"><?php echo $this->session->userdata('ref_by')?></span></td>
  </tr>
  <tr>
    <td><span class="style57 style1 style2">Hospital / Clinic </span></td>
    <td><span class="style57 style1 style2"><strong>:</strong></span></td>
    <td colspan="3"><span class="style57 style1 style2"><?php echo $this->session->userdata('hospital_name')?></span></td>
  </tr>
  <tr>
    <td><span class="style57 style1 style2">Material</span></td>
    <td><span class="style57 style1 style2"><strong>:</strong></span></td>
    <td colspan="3"><span class="style57 style1 style2">Blood  and Bone Marrow</span></td>
  </tr>
  <tr>
    <td><span class="style57 style1 style2">Exam.  Required</span></td>
    <td><span class="style57 style1 style2"><strong>:</strong></span></td>
    <td colspan="3"><span class="style57 style1 style2">Bone  Marrow study</span></td>
  </tr>
</table>
    <br>
    <table width="690" border="0" class="table table-hover" style="background-color: springgreen; border-radius: 5px;">
  <tr>
      <td width="250" class="normal_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;<strong>Normal</strong></td>
      <td width="250" class="all_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;ALL</td>
      <td width="295" class="aml_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;AML</td>
  </tr>
  <tr>
      <td class="mm_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;MM</td>
      <td class="apl_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;APL</td>
      <td class="cll_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;CLL</td>
  </tr>
  <tr>
      <td class="nhl_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;Non-Hodgkin's Lymphoma</td>
      <td class="aml_notremission_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;AML Not Remission</td>
      <td class="m_anaemia_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;Myeloblastic Anaemia</td>
  </tr>
  <tr>
      <td class="myeloid_hyperplasia_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;Myeloid Hyperplasia</td>
      <td class="s_reactivemarrow_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;Secendary Reactive Marrow</td>
      <td class="secondary_malignant_deposit_bm"><span class="glyphicon glyphicon-print"></span>&nbsp;Secendary Secondary Malignant Deposit</td>
  </tr>
   
</table>
    
    
</div>

