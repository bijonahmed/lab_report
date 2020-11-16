 <!DOCTYPE HTML>
 <html>
 <style type="text/css">
<!--
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
	color: #000000;
}
.style9 {
	color: #000000;
	font-size: 23px;
}
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
}
.style68 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style71 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
.style72 {font-size: 14px; }
.style75 {font-family: Verdana, Arial, Helvetica, sans-serif; }
.style76 {font-size: 18px}
-->
 </style>

 <p>&nbsp; </p>
 <p>&nbsp;</p>
 <table width="549" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="543" height="23"><div align="center"><span class="style1 style2 style9">FROZEN SECTION REPORT  </span></div></td>
   </tr>
 </table>
 <br>
 <hr>
  <div style="height:800">
 <table width="830" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="162"><span class="style68">Test ID </span></td>
     <td width="10"><span class="style68"><strong>:</strong></span></td>
     <td width="133"><span class="style68"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="210"><span class="style68">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="305"><span class="style68">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td><span class="style68">Patient Name </span></td>
     <td><span class="style68"><strong>:</strong></span></td>
     <td colspan="2"><span class="style68"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td><span class="style68">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td><span class="style68">Ref. by Prof. Dr.. </span></td>
     <td><span class="style68"><strong>:</strong></span></td>
     <td colspan="3"><span class="style68"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td><span class="style68">Hospital Clinic </span></td>
     <td><span class="style68"><strong>:</strong></span></td>
     <td colspan="3"><span class="style68"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
   <tr>
     <td><span class="style68">Specimen</span></td>
     <td><span class="style68"><strong>:</strong></span></td>
     <td colspan="3"><span class="style68"><?php echo $this->session->userdata('specimen_name')?></span></td>
   </tr>
 </table>
 </div>
 <hr align="left">
 
<br>
<div style="height:750px">
   <table width="837" border="0" height="" cellspacing="0">
     <tr>
       <td width="831" valign="top" scope="col"><div align="left" class="style71"><U>GROSS</U>:</div></td>
     </tr>
	 
	 
     <tr>
       <td valign="top" scope="row"><div align="justify" class="style76">

	   <?php echo $this->session->userdata('gross_rpt')?></div>	   </td>
     </tr>
	 
	 
     <tr>
       <th valign="top" scope="row"><div align="left" class="style71"><U>MICRO:</U></div></th>
     </tr>
	 
	 
     <tr>
       <td valign="top" scope="row"><div align="left" class="style72">
         <div align="justify" class="style76"><?php echo $this->session->userdata('micro_rpt')?></div>
       </div></td>
     </tr>
	 
	 
   </table>
 </div>
  


  <table width="837" border="0" cellspacing="0">
    <tr>
      <th width="212" scope="col"><div align="left" class="style75">Checked by </div></th>
      <th width="401" scope="col"><span class="style75"></span></th>
      <th width="218" scope="col"><span class="style75">Signature</span></th>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>

     <br>
   
 </html>