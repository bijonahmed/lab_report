 <!DOCTYPE HTML>
 <html>
 <style type="text/css">
<!--
.style9 {color: #000000}
.style28 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style12 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
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
.style54 {font-size: 13px}
.style55 {color: #000000; font-weight: bold; font-size: 13px; }
.style56 {color: #000000; font-size: 13px; }
.style57 {font-family: "Times New Roman", Times, serif}
.style61 {font-size: 13px; font-family: "Times New Roman", Times, serif;}
-->
 </style>

 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style41"> </span></p>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style41 style9">CYTOLOGY REPORT </span></div></td>
   </tr>
 </table>
 <br>
 <hr>
 <table width="830" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="136"><span class="style45">Test ID </span></td>
     <td width="8"><span class="style45"><strong>:</strong></span></td>
     <td width="177"><span class="style45"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="216"><span class="style45">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="283"><span class="style45">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
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
  <table border="0" align="center" cellspacing="0" height="477">
   <tr>
     <td width="836" height="20" valign="top" class="style37"><div align="justify"><strong><u><?php echo $this->session->userdata('gross')?></u></strong></div></td>
   </tr>
   <tr>
     <td height="20" valign="top" class="style37"><div align="justify"><?php echo $this->session->userdata('gross_rpt')?></div></td>
   </tr>
   <tr>
     <td height="20" valign="top" class="style37"><div align="justify"><strong><u><?php echo $this->session->userdata('micro')?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </strong></div></td>
   </tr>
   <tr>
     <td height="20" valign="top" class="style37"><div align="justify"><?php echo $this->session->userdata('micro_rpt')?></div></td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37"><strong> </strong></td>
   </tr>
   <tr>
     <td height="22" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" class="style37">&nbsp;</td>
   </tr>
   <tr>
     <td height="18" valign="top" class="style37"><span class="style37"><span class="style47"> <span class="style9"><span class="style12"><span class="style54">
     <label> Checked By</label>
&nbsp;&nbsp;&nbsp;&nbsp;</span></span></span><span class="style55"><span class="style28">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span><span class="style56"><span class="style28">Signature </span></span></span></td>
   </tr>
   <tr>
     <td height="21" valign="top" class="style37"><div align="center" class="style57">
       <div align="center" class="style61"><span class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prepared by:
          <?php 
		 $username=$this->session->userdata('full_name');
echo "$username";
		 
?>
       </span><span class="style9 ">&nbsp;Printing Date : <?php echo  date("d-m-Y");?></span></div>
     </div></td>
   </tr>
 </table>
 </html>