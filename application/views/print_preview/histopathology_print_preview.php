 <!DOCTYPE HTML>
 <html>
     <head>
     <style type="text/css">
<!--
.style9 {color: #000000}
.style26 {font-size: 11px}
.style28 {font-family: Verdana, Arial, Helvetica, sans-serif}
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
}
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style37 {font-size: 15px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style41 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; color: #000000; }
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
#Layer2 {
	position:absolute;
	left:60px;
	top:675px;
	width:190px;
	height:34px;
	z-index:1;
}
.style55 {font-size: 15px; font-family: "Times New Roman", Times, serif; }
-->
     </style>
</head>
<body>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style41"> </span></p>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style41 style9">HISTOPATHOLOGY REPORT </span></div></td>
   </tr>
 </table>
 <br>
 <hr>
 <table width="770" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="136"><span class="style45">Test ID </span></td>
     <td width="8"><span class="style45"><strong>:</strong></span></td>
     <td width="177"><span class="style45"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="216"><span class="style45">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="223"><span class="style45">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td><span class="style45">Patient Name </span></td>
     <td><span class="style45"><strong>:</strong></span></td>
     <td colspan="2"><span class="style45"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td><span class="style45">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td><span class="style45">Ref. by Prof. Dr. </span></td>
     <td><span class="style45"><strong>:</strong></span></td>
     <td colspan="3"><span class="style45"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td><span class="style45">Hospital Clinic </span></td>
     <td><span class="style45"><strong>:</strong></span></td>
     <td colspan="3"><span class="style45"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
   <tr>
     <td class="style45">Specimen</td>
     <td><span class="style45"><strong>:</strong></span></td>
     <td colspan="3"><span class="style45"><?php echo $this->session->userdata('specimen_name')?> </span></td>
   </tr>
</table>
 <hr>

 <br>
 <br>
  <table border="0" align="center" cellspacing="0" height="519">
   <tr>
     <td width="785" height="20" valign="top" class="style37"><div align="justify"><strong><u><?php echo $this->session->userdata('gross')?></u></strong></div></td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37"><div align="justify"><strong> </strong></div></td>
   </tr>
   <tr>
     <td height="20" valign="top" class="style37"><div align="justify"><?php echo $this->session->userdata('gross_rpt')?></div></td>
   </tr>
   <tr>
     <td height="20" valign="top" class="style37"><div align="justify"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></div></td>
   </tr>
   <tr>
     <td height="20" valign="top" class="style37"><div align="justify"><strong><u><?php echo $this->session->userdata('micro')?></u></strong></div></td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37"><div align="justify"><strong> </strong></div></td>
   </tr>
   <tr>
     <td height="20" valign="top" class="style37"><div align="justify"><?php echo $this->session->userdata('micro_rpt')?></div></td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style55"><p>Checked by&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature </p>     </td>
   </tr>
   <tr>
     <td height="20" valign="top" class="style37"><div align="center"><span class="style9"><span class="style7">&nbsp;<span class="style26">Prepared by:
       <?php 
		 $username=$this->session->userdata('full_name');
echo "$username";
		 
?>
     </span></span></span><span class="style9 style26 style28">&nbsp;Printing Date : <?php echo  date("d-m-Y");?></span></div></td>
   </tr>
</table>
  <footer></footer>
<p>&nbsp;	</p>

 </body>
 
 </html>