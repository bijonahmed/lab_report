<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 26px; font-weight: bold; color: #000000; }
.style27 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style28 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style35 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: italic; }
.style38 {font-size: 12px}
.style41 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; color: #000000; }
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style48 {font-size: 16px}
.style49 {font-size: 16px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style50 {color: #000000; font-size: 16px; }
.style52 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 17px; font-style: italic; }
.style53 {font-size: 13px}
.style54 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; }
.style57 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style59 {font-size: 18}
.style6 {	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style9 {color: #000000}
-->
</style>
</head>

<body>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><span class="style56">SL NO: <?php echo $this->session->userdata('sl_no')?></span></p>
<table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td height="23"><div align="center"><span class="style1 style41 style9">IMMUNOHISTOCHEMICAL STUDY </span></div></td>
  </tr>
</table>
<br />
<hr />
<table width="859" border="0" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="145" valign="top"><span class="style52">Test ID </span></td>
    <td width="7" valign="top"><span class="style52"><strong>:</strong></span></td>
    <td width="234" valign="top"><span class="style52"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
    <td width="223" valign="top"><span class="style52">Rec.Date:<?php echo $this->session->userdata('reciv_date')?></span></td>
    <td width="240" valign="top"><span class="style52">&nbsp;Deliv.Date:<?php echo $this->session->userdata('deli_date')?></span></td>
  </tr>
  <tr>
    <td valign="top"><span class="style52">Patient Name </span></td>
    <td valign="top"><span class="style52"><strong>:</strong></span></td>
    <td colspan="2" valign="top"><span class="style52"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
    <td valign="top"><span class="style52">&nbsp;&nbsp;Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
  </tr>
  <tr>
    <td valign="top"><span class="style52">Ref. by Prof. Dr. </span></td>
    <td valign="top"><span class="style52"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style52"><?php echo $this->session->userdata('ref_by')?></span></td>
  </tr>
  <tr>
    <td valign="top"><span class="style52">Hospital Clinic </span></td>
    <td valign="top"><span class="style52"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style52"><?php echo $this->session->userdata('hospital_name')?></span></td>
  </tr>
  <tr>
    <td valign="top"><span class="style52">Specimen</span></td>
    <td valign="top"><span class="style52"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style52"><?php echo $this->session->userdata('specimen_name')?></span></td>
  </tr>
</table>
<hr />
<br />
<div style="height:500px;">
  <table width="859" border="0" align="center" cellspacing="0">
    <?php
            if($this->session->userdata('note'))
             {
       ?>
    <tr>
      <td colspan="3" valign="top" class="style35"><p class="style48"> <strong><?php echo $this->session->userdata('note')?></strong><br />
      </p></td>
    </tr>
    <?php
             }
           if($this->session->userdata('er_rpt'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style49">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style49">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style49"><strong>ER&nbsp; &nbsp;&nbsp; &nbsp;:</strong> <?php echo $this->session->userdata('er_rpt')?></td>
    </tr>
    <?php
             }
           if($this->session->userdata('pr_rpt'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style49">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style49"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Quick Score<strong> :</strong><?php echo $this->session->userdata('er_score')?></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style49">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style49"><strong>PR &nbsp; &nbsp;&nbsp;&nbsp;: </strong><?php echo $this->session->userdata('pr_rpt')?></td>
    </tr>
    <?php
             }
           if($this->session->userdata('pr_score'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style49">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style49"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </strong>Quick Score <strong>:</strong><?php echo $this->session->userdata('pr_score')?></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style49">&nbsp;</td>
    </tr>
    <?php
             }
           if($this->session->userdata('her_two_rpt'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style49"><strong>HER-2 : </strong><?php echo $this->session->userdata('her_two_rpt')?></td>
    </tr>
    <?php
             }
           if($this->session->userdata('her_two_score'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style49"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;</strong></strong>Score&nbsp;&nbsp;<strong>:</strong><?php echo $this->session->userdata('her_two_score')?></td>
    </tr>
    <tr> </tr>
    <tr>
      <td colspan="3" valign="top" class="style49"><br />
        Summary of result:</td>
    </tr>
    <?php
             }
           if($this->session->userdata('er_result'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style50"><strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style49">&nbsp;&nbsp; ER: </span></strong><span class="style49"><?php echo $this->session->userdata('er_result')?></span></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style50"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span class="style59">&nbsp;</span><span class="style49">PR: </span></strong><span class="style49"><?php echo $this->session->userdata('pr_result')?></span></td>
    </tr>
    <?php
             }
           if($this->session->userdata('her_two_result'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style50"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span class="style49">HER-2:</span></strong><span class="style49"> <?php echo $this->session->userdata('her_two_result')?></span></td>
    </tr>
    <?php
             }
           if($this->session->userdata('rpt_noet'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style47"><p>&nbsp;</p>
          <p><span class="style9"><?php echo $this->session->userdata('rpt_noet')?></span></p></td>
    </tr>
    <tr>
      <td colspan="3" valign="top" class="style35"><div align="left"><span class="style9">&nbsp;&nbsp;&nbsp;</span></div>
          <p><br />
        </p></td>
    </tr>
    <?php

	 }else{
	 ?>
    <?php
         }
       ?>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</div>
</table>
</body>
</html>
