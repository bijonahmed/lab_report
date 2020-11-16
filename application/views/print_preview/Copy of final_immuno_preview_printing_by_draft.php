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
.style9 {color: #000000}
.style6 {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style26 {font-size: 11px}
.style27 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
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
.style7 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style17 {color: #000000;
	font-weight: bold;
}
.style35 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; color: #000000; }
.style37 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: italic; }
.style39 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-weight: bold;
	font-style: italic;
}
.style38 {font-size: 12px}
-->
 </style>
 
 <p>&nbsp;</p>
 <p><span class="style35">SL NO: <?php echo $this->session->userdata('sl_no')?></span></p>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style2 style9">DUPLICATE COPY </span></div></td>
   </tr>
 </table>
 <br>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style2 style9">IMMUNOHISTOCHEMICAL STUDY </span></div></td>
   </tr>
 </table>
 <br>
 <hr>
 <table width="719" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="128"><span class="style37">Test ID </span></td>
     <td width="7"><span class="style37"><strong>:</strong></span></td>
     <td width="186"><span class="style37"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="184"><span class="style37">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="192"><span class="style37">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td><span class="style37">Patient Name </span></td>
     <td><span class="style37"><strong>:</strong></span></td>
     <td colspan="2"><span class="style37"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td><span class="style37">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td><span class="style37">Ref. by Prof./ Dr. </span></td>
     <td><span class="style37"><strong>:</strong></span></td>
     <td colspan="3"><span class="style37"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td><span class="style37">Hospital / Clinic </span></td>
     <td><span class="style37"><strong>:</strong></span></td>
     <td colspan="3"><span class="style37"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
   <tr>
     <td><span class="style37">Specimen</span></td>
     <td><span class="style37"><strong>:</strong></span></td>
     <td colspan="3"><span class="style37"><?php echo $this->session->userdata('specimen_name')?></span></td>
   </tr>
 </table>
 <hr>
 <table border="0" align="center" cellspacing="0" height="336">
   <tr>
     <td height="20" colspan="3" valign="top"><p> <span class="style39"><?php echo $this->session->userdata('note')?></span><br />
     </p></td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td height="20" colspan="3"><span class="style9"><?php echo $this->session->userdata('reporting_board')?></span></td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td height="21" colspan="3">&nbsp;</td>
   </tr>
   <tr>
     <td width="190" height="86" rowspan=" " valign="top" class="style7"><div align="left"><span class="style6"><span class="style26">DR. KUAZI DIL AFROZ <span class="style12"><br />
         </span></span></span><span class="style12"><span class="style26">MBBS; Phd(Japan)<br />
           Consultant. (Histopathology)<br />
           Delta Hospital Ltd. Dhaka. </span></span><span class="style6"><br />
           </span></div></td>
     <td width="307" class="style7">&nbsp;</td>
     <td width="223" valign="top"><p align="left" class="style26"><span class="style27">DR. SYED SALAHUDDIN AHMED </span><br />
             <span class="style28">MBBS; PhD(Japan) <br />
               WHO Fellow (Cytology) Tata.India<br />
               Senior Consultant (Histopathology) <br />
               Delta Hospital Ltd. Dhaka.</span></p>
         <div align="center"></div>
       <div align="center"></div></td>
   </tr>
   <tr>
     <td height="21" colspan="3" valign="top" class="style7"><div align="center"><br>
        <span class="style9">&nbsp;<span class="style38">Printing Date &amp; Time :
     <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 4hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?>
     </span></span></div></td>
   </tr>
 </table>
 </html>