  <!DOCTYPE HTML>
 <html>
 <style type="text/css">
<!--
.style2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 22px;
	font-weight: bold;
	color: #000000;
}
.style3 {
	font-size: 24px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style9 {color: #000000}
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
.style34 {
	color: #000000;
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
}
.style38 {font-size: 12px}
.style42 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; }
.style45 {font-size: 14px}
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px;}
.style49 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 18px;
	font-weight: bold;
}
.style52 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 15px; }
-->
 </style>

 <p><span class="style3">SL NO: <?php echo $this->session->userdata('sl_no')?></span></p>
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
 <table width="791" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="128"><span class="style52">Test ID </span></td>
     <td width="7"><span class="style52"><strong>:</strong></span></td>
     <td width="186"><span class="style52"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="184"><span class="style42">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="264"><span class="style42">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td><span class="style52">Patient Name </span></td>
     <td><span class="style52"><strong>:</strong></span></td>
     <td colspan="2"><span class="style52"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td><span class="style42">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td><span class="style52">Ref. by Prof./ Dr. </span></td>
     <td><span class="style52"><strong>:</strong></span></td>
     <td colspan="3"><span class="style52"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td><span class="style52">Hospital / Clinic </span></td>
     <td><span class="style52"><strong>:</strong></span></td>
     <td colspan="3"><span class="style52"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
   <tr>
     <td><span class="style52">Specimen</span></td>
     <td><span class="style52"><strong>:</strong></span></td>
     <td colspan="3"><span class="style52"><?php echo $this->session->userdata('specimen_name')?></span></td>
   </tr>
 </table>
 <hr>
 <table width="780" border="0" align="center" cellspacing="0">
   <tr>
     <td width="252"><p class="style42"> <span class="style49"><?php echo $this->session->userdata('note')?></span><br />
     </p></td>
   </tr>
   <tr>
     <td><span class="style52"><strong>ER&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; <span class="style47">&nbsp;</span>:</strong> <?php echo $this->session->userdata('er_rpt')?></span></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><span class="style52">Quick Score<strong>&nbsp;</strong>:&nbsp;<strong>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;=&nbsp;&nbsp;&nbsp; &nbsp;<span class="style47">&nbsp;</span>&nbsp; &nbsp;<span class="style47">&nbsp;</span>&nbsp;</strong><?php echo $this->session->userdata('er_score')?><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&quot;O&quot; </span></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td class="style52"><strong>PR&nbsp; &nbsp; &nbsp;     &nbsp;   &nbsp; : </strong><?php echo $this->session->userdata('pr_rpt')?> </td>
   </tr>
   <tr>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td class="style52">Quick Score<strong>&nbsp;</strong>:<strong>&nbsp;&nbsp;  &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;=&nbsp; &nbsp;<span class="style47">&nbsp;</span>&nbsp; &nbsp;<span class="style47">&nbsp;</span>&nbsp;&nbsp;</strong><?php echo $this->session->userdata('er_score')?><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>&quot;O&quot; </td>
   </tr>
   <tr>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><span class="style28"><span class="style38"><span class="style45"><strong>HER-2  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</strong><br>
     a) Tumor cells show no staining.<br>
      <span class="style47">&nbsp;&nbsp;&nbsp;</span> <span class="style47">&nbsp;&nbsp;&nbsp;</span> <span class="style47">&nbsp;&nbsp;</span>Score : 'O'</span></span></span>
       <p class="style47">b) Weak incomplete membrane staining is observed in more than 10 % of the tumor cells.<br>
         &nbsp;&nbsp;&nbsp;&nbsp;<span class="style45">&nbsp;&nbsp;&nbsp; &nbsp; </span>Score : 1+</p>
       <p class="style47">c) Weak to moderate complete membrane staining is observed in more than 10 % of the tumor cells.<br>
         &nbsp;&nbsp;<span class="style45">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>&nbsp; Score : 2+<br>
         <br>
         d) Strong complete membrane staining is observed in more than 10/30 % of the tumor cells.<br>
     &nbsp;&nbsp;&nbsp; <span class="style45">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</span>Score : 3+</p>     </td>
   </tr>
   <tr>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><span class="style28"><strong>Ki67&nbsp; &nbsp;  </strong>: <span class="style45">Negative/Positive</span></span></td>
   </tr>
   <tr>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><span class="style28"><strong>Summary of result:</strong></span></td>
   </tr>
   <tr>
     <td class="style34">   <span class="style45">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ER     :Negative/Positive<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; PR     :Negative/Positive<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; HER-2:Negative/Positive/Borderline</span></td>
   </tr>
   <tr>
     <td class="style7"><p>&nbsp;</p>
     <div align="center" class="style38">&nbsp;Printing Date &amp; Time : <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 5hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?></div></td>
   </tr>
 </table>
 </html>