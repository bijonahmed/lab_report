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
.style9 {color: #000000}
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
}
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style38 {font-size: 12px}
.style57 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style63 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; }
.style64 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10px; }
-->
 </style>

 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style2 style9">DUPLICATE COPY </span></div></td>
   </tr>
 </table>
 <br>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style2 style9">BONE MARROW REPORT</span></div></td>
   </tr>
 </table>
 <br>
 <hr>
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
 <hr>
 <table width="684" border="0">
   <tr>
     <td colspan="3" valign="top"><span class="style63">C/F: </span></td>
   </tr>
   <tr>
     <td width="182" valign="top"><span class="style63">HB%</span></td>
     <td width="32" valign="top"><span class="style63"><strong>:</strong></span></td>
     <td width="448" valign="top"><span class="style63">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; gm/dl , ESR: 50&nbsp; mm in 1st hour.&nbsp;&nbsp;&nbsp;&nbsp; </span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Total  Count (WBC)</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">/ Cumm</span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Platelets Count&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">/Cumm,</span></td>
   </tr>
   <tr>
     <td colspan="3" valign="top"><span class="style38"></span></td>
   </tr>
   <tr>
     <td colspan="3" valign="top"><span class="style63"><strong><u>DIFFERENTIAL  COUNT:</u></strong></span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Neutrophil</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp; %</span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Lymphocyte</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp; %</span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Eosinophil</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp; %</span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Monocyte</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp; %</span></td>
   </tr>
   <tr>
     <td colspan="3" valign="top"><span class="style38"></span></td>
   </tr>
   <tr>
     <td colspan="3" valign="top"><span class="style63"><strong><u>BONE  MARROW ASPIRATION REPORT</u></strong></span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Cellularity&nbsp; </span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">Hypercellular </span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">M:E</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style38"></span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63"><strong>Granulopoiesis</strong></span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top" class="style63">Active &nbsp;but  show features of &nbsp;dysgranulopoiesis .</td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Myelocyte</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp;% </span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Neutrophil </span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp;% </span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Eosinophil</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp;% </span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Monocyte </span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp;% </span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Basophil </span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp;% </span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Promyelocyte </span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style63">&nbsp;% </span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63"><strong>Lymphopoiesis</strong></span></td>
     <td valign="top"><span class="style38"><strong>:</strong></span></td>
     <td valign="top" class="style63">There is no evidence  of lymphocytic infiltration </td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Lymphocyte </span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style38"></span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style63">Plasma  cell</span></td>
     <td valign="top"><span class="style63"><strong>:</strong></span></td>
     <td valign="top"><span class="style38"></span></td>
   </tr>
 </table>
 <br>
 <table width="951" border="0" cellpadding="1" cellspacing="0">
   <tr>
     <td width="560" valign="top" scope="row"><p><span class="style63"><strong>Erythropoiesis</strong> <strong>:</strong>Active  and normoblastic.<br>
        <strong>Megakaryopoiesis</strong> <strong>:</strong> Normal</span></p>
       <p class="style56"><strong>Comment:&nbsp; Normal active marrow.</strong></p>
       <p></p></td>
     <td colspan="2">&nbsp;</td>
     <td width="295" valign="top"><p align="center" class="style64">Dr.  Amin Lutful Kabir<br>
        MBBS, M.Phil, FCPS (Haematology)<br>
        Consultant Haematologist<br>
     Delta Hospital Ltd.</p></td>
   </tr>
 </table>
 <div align="center" class="style57"><br>
     <span class="style38">Printing Date &amp; Time :
       <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 4hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?>
   </span></div>
 <p>&nbsp;</p>
