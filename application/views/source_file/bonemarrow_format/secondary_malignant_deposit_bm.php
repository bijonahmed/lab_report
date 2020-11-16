<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style2 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 22px;
	font-weight: bold;
	color: #000000;
}
.style38 {font-size: 12px}
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style57 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style63 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style9 {color: #000000}
-->
</style>
</head>

<body>
<table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td height="23"><div align="center"><span class="style1 style2 style9">DUPLICATE COPY </span></div></td>
  </tr>
</table>
<br />
<table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td height="23"><div align="center"><span class="style1 style2 style9">BONE MARROW REPORT</span></div></td>
  </tr>
</table>
<br />
<hr />
<table width="928" border="0" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="190"><span class="style57">Test ID </span></td>
    <td width="7"><span class="style57"><strong>:</strong></span></td>
    <td width="118"><span class="style57"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
    <td width="272"><span class="style57">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
    <td width="331"><span class="style57">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
  </tr>
  <tr>
    <td><span class="style57">Patient Name </span></td>
    <td><span class="style57"><strong>:</strong></span></td>
    <td colspan="2"><span class="style57"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
    <td><span class="style57">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
  </tr>
  <tr>
    <td><span class="style57">Ref. by Prof./ Dr. </span></td>
    <td><span class="style57"><strong>:</strong></span></td>
    <td colspan="3"><span class="style57"><?php echo $this->session->userdata('ref_by')?></span></td>
  </tr>
  <tr>
    <td><span class="style57">Hospital / Clinic </span></td>
    <td><span class="style57"><strong>:</strong></span></td>
    <td colspan="3"><span class="style57"><?php echo $this->session->userdata('hospital_name')?></span></td>
  </tr>
  <tr>
    <td><span class="style57">Material</span></td>
    <td><span class="style57"><strong>:</strong></span></td>
    <td colspan="3"><span class="style57">Blood  and Bone Marrow</span></td>
  </tr>
  <tr>
    <td><span class="style57">Exam.  Required</span></td>
    <td><span class="style57"><strong>:</strong></span></td>
    <td colspan="3"><span class="style57">Bone  Marrow study</span></td>
  </tr>
</table>
<hr />
<table width="1131" border="0">
  <tr>
    <td width="1125" colspan="3" valign="top"><p><span class="style38"></span><span class="style63"><strong><u>BONE  MARROW ASPIRATION REPORT</u></strong></span>:</p>
    <p class="style63">No organized marrow particles are seen. <br />
        However, marrow is diffusely infiltrated  with clusters of non haemopoietic cells. <br />
        Others cells lines are unremarkable </p>
    <p class="style63">Comments: Features are consistent with  secondary malignant deposit. </p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
    <p class="style63">&nbsp;</p>
     </td>
  </tr>
</table>
<br />
<table width="1002" border="0" cellpadding="1" cellspacing="0">
  <tr>
    <td width="646" valign="top" scope="row"><p>&nbsp;</p>
        <p></p></td>
    <td colspan="2">&nbsp;</td>
    <td width="341" valign="top"><p align="center" class="style57">Dr.  Amin Lutful Kabir<br />
      MBBS, M.Phil, FCPS (Haematology)<br />
      Consultant Haematologist<br />
    Delta Hospital Ltd.</p></td>
  </tr>
</table>
<div align="center" class="style57"><br />
    <span class="style38">Printing Date &amp; Time :
      <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 4hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?>
  </span></div>
<p>&nbsp;</p>
</body>
</html>
