 <!DOCTYPE HTML>
 <html>
     <head>
<style type="text/css">
<!--
.style1 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
}
.style2 {font-size: 20px}
.style3 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style7 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style8 {	color: #000000;
	font-weight: bold;
}
.style6 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style9 {color: #000000}
.style26 {font-size: 11px}
.style27 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style28 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style29 {font-size: 14px}
.style30 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 14px;
	font-style: italic;
}
.style33 {font-size: 12px}
-->
</style>
</head>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><br />
  <br />
<body>
  <strong><span class="style2">SL NO: <?php echo $this->session->userdata('sl_no')?></span></strong></p>
<table width="460" border="1" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="466"><div align="center"><span class="style1 style2 style9">IMMUNOHISTOCHEMICAL STUDY </span></div></td>
  </tr>
</table>
<br />
<br />
<br />
<div align="center"> <img src="<?php echo base_url();?>images/line.jpg" width="845" height="2" /></div>
<table width="769" border="0" align="center" cellspacing="0">
  <tr>
    <td width="113"><span class="style29 style28 style3"><em><span class="style28 style33">Test ID</span></em></span></td>
    <td width="263"><span class="style29 style28 style3"><em><span class="style28 style33"><strong>: <?php echo $this->session->userdata('test_id')?></strong>&nbsp;&nbsp;</span></em></span><span class="style30">&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
    <td width="387"><span class="style29 style28 style3"><em><span class="style28 style33">Rec. Date <?php echo $this->session->userdata('reciv_date')?>&nbsp;Deli. Date: <?php echo $this->session->userdata('deli_date')?></span></em></span></td>
  </tr>
  <tr>
    <td class="style29 style28 style3"><em>Patient Name </em></td>
    <td><span class="style29 style28 style3"><em><span class="style28 style33"><strong>: <font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></em></span></td>
    <td><span class="style29 style28 style3"><em><span class="style28 style33">Age <strong>: </strong><?php echo $this->session->userdata('age')?> Sex<strong>:</strong> <?php echo $this->session->userdata('sex')?></span></em></span></td>
  </tr>
  <tr>
    <td class="style29 style28 style3"><em>Ref. by Prof.Dr. </em></td>
    <td colspan="2" class="style29 style28 style3"><em><strong>:</strong> <?php echo $this->session->userdata('ref_by')?></em></td>
  </tr>
  <tr>
    <td class="style29 style28 style3"><em>Hospital Clinic </em></td>
    <td colspan="2" class="style29 style28 style3"><em><strong>: </strong><?php echo $this->session->userdata('hospital_name')?></em></td>
  </tr>
  <tr>
    <td class="style29 style28 style3"><em>Specimen</em></td>
    <td colspan="2" class="style29 style28 style3"><em><strong>: </strong><?php echo $this->session->userdata('specimen_name')?></em></td>
  </tr>
</table>
<div align="center"> <img src="<?php echo base_url();?>images/line.jpg" width="845" height="2" /></div>
<table border="0" align="center" cellspacing="0" height="436">
  <tr>
    <td height="21" colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td height="20" colspan="5" valign="top"><strong><?php echo $this->session->userdata('note')?></strong></td>
  </tr>
  <tr>
    <td width="65" height="21" valign="top">&nbsp;</td>
    <td width="168" valign="top">&nbsp;</td>
    <td width="168" valign="top">&nbsp;</td>
    <td width="89" valign="top">&nbsp;</td>
    <td width="231" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td height="20" colspan="5" valign="top"><?php echo $this->session->userdata('reporting_board')?></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td height="67" colspan="2" valign="top"><span class="style6"><span class="style26">DR. KUAZI DIL AFROZ <span class="style3"><br />
    </span></span></span><span class="style3"><span class="style26">MBBS; Phd(Japan)<br />
Consultant. (Histopathology)<br />
Delta Hospital Ltd. Dhaka. </span></span></td>
    <td colspan="2">&nbsp;</td>
    <td valign="top"><span class="style26"><span class="style27">DR. SYED SALAHUDDIN AHMED </span><br />
        <span class="style28">MBBS; PhD(Japan) <br />
WHO Fellow (Cytology) Tata.India<br />
Senior Consultant (Histopathology) <br />
Delta Hospital Ltd. Dhaka.</span></span></td>
  </tr>
  
  <tr>
    <td colspan="5"><div align="center"><span class="style8">Prepared by: <strong>
      <?php 
		 $username=$this->session->userdata('full_name');
echo "$username";
		 
?>
    </strong> </span><span class="style9">&nbsp;Printing Date <span class="style8">:</span> <?php echo  date("d-m-Y");?></span></div></td>
  </tr>
</table>
<p><span class="style8"> </span><span class="style9"></span><span class="style3"> </span></p>
</body>
 </html>