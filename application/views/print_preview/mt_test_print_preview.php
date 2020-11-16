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
.style3 {
	font-size: 20px;
	font-weight: bold;
}
.style9 {
	color: #000000;
	font-size: 25px;
}
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
}
.style59 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style26 {font-size: 11px}
.style84 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 13px;
}
.style140 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style144 {font-weight: bold; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px;}
.style145 {font-size: 16px; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style147 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
-->
 </style>

 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style3"> </span><br>
 </p>
 <table width="832" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="826" height="23"><div align="center"><span class="style1 style2 style9">MANTOUX TEST</span></div></td>
   </tr>
 </table>
 <br>
 <hr>
 <table width="832" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="147"><span class="style140">Test ID </span></td>
     <td width="7"><span class="style140"><strong>:</strong></span></td>
     <td width="168"><span class="style140"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="232"><span class="style140">Received on: <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="268"><span class="style140">Delivered on: <?php echo $this->session->userdata('deli_date')?></span></td>
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
     <td colspan="3" class="style140">Mantoux&nbsp; Test  (M T)</td>
   </tr>
 </table>
 <hr>
 <br>
 <div class="span10" style="height:570px">
   <p align="center" class="style59"><strong><u>MANTOUX TEST: (PPD 10 TU/.1 ml)</u></strong><br>
     <br>
   </p>
   <table width="936" border="0" align="left" cellpadding="1" cellspacing="0">
     <tr>
       <td width="173" valign="top" scope="row"><span class="style147">Date of Inoculation </span></td>
       <td width="10" valign="top"><strong>:</strong></td>
       <td width="747" valign="top" class="style145"><?php echo $this->session->userdata('date_of_inoculation')?></td>
     </tr>
     <tr>
       <td valign="top" class="style147" scope="row">Date of Reporting&nbsp;&nbsp; </td>
       <td valign="top"><strong>:</strong></td>
       <td valign="top"><span class="style145"><?php echo $this->session->userdata('date_of_reporting')?></span></td>
     </tr>
     <tr>
       <td valign="top" scope="row"><strong class="style147">Induration </strong></td>
       <td valign="top"><strong>:</strong></td>
       <td valign="top" class="style144"><?php echo $this->session->userdata('induration')?></td>
     </tr>
     <tr>
       <td valign="top" class="style147" scope="row">Comments</td>
       <td valign="top">&nbsp;</td>
       <td valign="top" class="style145"><?php echo $this->session->userdata('comments')?></td>
     </tr>
     <tr>
       <td valign="top" scope="row">&nbsp;</td>
       <td valign="top">&nbsp;</td>
       <td valign="top">&nbsp;</td>
     </tr>
     <tr>
       <td valign="top" scope="row">&nbsp;</td>
       <td valign="top">&nbsp;</td>
       <td valign="top">&nbsp;</td>
     </tr>
     <tr>
       <td colspan="3" valign="top" class="style147" scope="row"><?php echo $this->session->userdata('note')?></td>
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
     <td width="155" valign="top"><hr style="width:auto">
     Checked by </td>
     <td width="227" valign="top">&nbsp;</td>
     <td width="141" valign="top">&nbsp;</td>
     <td width="237" rowspan="4" valign="top"><p align="left" class="style26"><span class="style84">
      Signature</span><span class="style59"> </span></p></td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="3" valign="top"><div align="center"><span class="style147">Printing Date &amp; Time:</span>
         <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 5hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?>
     </div></td>
     </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
 </table>





 </div>

 <br>
 <p>&nbsp;	</p>
 <p>&nbsp;</p>

 </html>