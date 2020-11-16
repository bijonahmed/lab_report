 <!DOCTYPE HTML>
 <html>
 <style type="text/css">
<!--
.style3 {
	font-size: 20px;
	font-weight: bold;
}
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
}
.style39 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; font-weight: bold; }
.style59 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style125 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style26 {font-size: 11px}
.style84 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 13px;
}
.style140 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style148 {
	color: #000000;
	font-size: 25px;
	font-family: "Times New Roman", Times, serif;
}
.style149 {font-family: Arial, Helvetica, sans-serif}
.style150 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 36px;
	font-weight: bold;
}
-->
 </style>

 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style3"> </span><br>
 </p>
 <table width="832" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="826" height="23"><div align="center" class="style1  style148 style149"><strong>Serum  Protein electrophoresis Report</strong>  </div></td>
   </tr>
 </table>
 <br>
 <hr>
 <table width="832" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="147"><span class="style140">Test ID </span></td>
     <td width="7"><span class="style140"><strong>:</strong></span></td>
     <td width="168"><span class="style140"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="257"><span class="style140">Received on: <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="243"><span class="style140">Delivered on: <?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td><span class="style140">Patient Name </span></td>
     <td><span class="style140"><strong>:</strong></span></td>
     <td colspan="2"><span class="style140"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td><span class="style140">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td><span class="style140">Ref. by Prof. Dr. </span></td>
     <td><span class="style140"><strong>:</strong></span></td>
     <td colspan="3"><span class="style140"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td><span class="style140">Hospital Clinic </span></td>
     <td><span class="style140"><strong>:</strong></span></td>
     <td colspan="3"><span class="style140"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
   <tr>
     <td class="style140">Mateiral</td>
     <td><strong class="style140">:</strong></td>
     <td colspan="3"><span class="style140"><?php echo $this->session->userdata('specimen_name')?></span></td>
   </tr>
 </table>
 <hr>
 <br>
 <div class="span10" style="height:570px">
 <table width="827" height="300" border="0" align="center" cellspacing="0">
 
   <tr>
     <td height="19" colspan="3" valign="top"><p class="style39 style125">&nbsp;</p></td>
   </tr>



   <tr>
     <td colspan="3" valign="top"><p><span class="style140"></span><span class="style140"></span><span class="style140">
	 <?php echo $this->session->userdata('protein_electrophoresis')?></span></p>
       <p class="style150">&nbsp; </p>
       <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
   </td>
    </tr>

 
 </table>
 </div>
 <p><br>
 </p>
 <p><br>
 </p>
 <div class="span10">
   <table width="851" border="0" align="center" cellspacing="0">
   <tr>
     <td valign="top"><hr style="width:auto">
     Checked by </td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td width="237" rowspan="6" valign="top"><p align="left" class="style26"><span class="style84">
      Signature</span><span class="style59"> </span></p></td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td width="155" valign="top">&nbsp;</td>
     <td width="227" valign="top">&nbsp;</td>
     <td width="141" valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>

   </tr>
 </table>





 </div>

 <br>
 <p>&nbsp;	</p>
 <p>&nbsp;</p>

 </html>