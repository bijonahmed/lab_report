 <!DOCTYPE HTML>
 <html>
 <style type="text/css">
<!--
.style9 {color: #000000}
.style6 {
	font-size: 12px;
	font-weight: bold;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style27 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
}
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
.style35 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: italic; }
.style41 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; color: #000000; }
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style48 {font-size: 16px}
.style49 {font-size: 16px; font-family: Verdana, Arial, Helvetica, sans-serif; }
.style50 {color: #000000; font-size: 16px; }
.style52 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 17px; font-style: italic; }
.style53 {font-size: 13px}
.style54 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 13px;
	color: #FFFFFF;
}
.style56 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 26px; font-weight: bold; color: #000000; }
.style57 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; }
.style38 {font-size: 12px}
.style59 {font-size: 18}
.style61 {font-size: 13px; color: #FFFFFF; }
-->
 </style>
 
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style56">SL NO: <?php echo $this->session->userdata('sl_no')?></span></p>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style41 style9">IMMUNOHISTOCHEMICAL STUDY </span></div></td>
   </tr>
 </table>
 <br>
 <hr>
 <table width="880" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="176" valign="top"><span class="style52">Test ID </span></td>
     <td width="10" valign="top"><span class="style52"><strong>:</strong></span></td>
     <td width="212" valign="top"><span class="style52"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="226" valign="top"><span class="style52">Rec.Date:<?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="246" valign="top"><span class="style52">&nbsp;Deliv.Date:<?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style52">Patient Name </span></td>
     <td valign="top"><span class="style52"><strong>:</strong></span></td>
     <td colspan="2" valign="top"><span class="style52"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td valign="top"><span class="style52">&nbsp;&nbsp;Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style52">Ref. by Prof./ Dr. </span></td>
     <td valign="top"><span class="style52"><strong>:</strong></span></td>
     <td colspan="3" valign="top"><span class="style52"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style52">Hospital / Clinic </span></td>
     <td valign="top"><span class="style52"><strong>:</strong></span></td>
     <td colspan="3" valign="top"><span class="style52"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
   <tr>
     <td valign="top"><span class="style52">Specimen</span></td>
     <td valign="top"><span class="style52"><strong>:</strong></span></td>
     <td colspan="3" valign="top"><span class="style52"><?php echo $this->session->userdata('specimen_name')?></span></td>
   </tr>
 </table>
 <hr> 
 
 <br>
 <div style="height:540px;">
  <table width="902" border="0" align="center" cellspacing="0">
         <?php
            if($this->session->userdata('note'))
             {
       ?>

   <tr>
     <td width="900" colspan="3" valign="top" class="style35"><p class="style48"> <strong><?php echo $this->session->userdata('note')?></strong><br />
     </p></td>
   </tr>
    <?php
             }
           if($this->session->userdata('er_rpt'))
           {

           ?>
   <tr>
     <td colspan="3" valign="top" class="style49">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="3" valign="top" class="style49">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="3" valign="top" class="style49"><strong>ER&nbsp; &nbsp;&nbsp; &nbsp;:</strong> <?php echo $this->session->userdata('er_rpt')?></td>
   </tr>

    <?php
             }
           if($this->session->userdata('pr_rpt'))
           {

           ?>
   <tr>
     <td colspan="3" valign="top" class="style49">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="3" valign="top" class="style49"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</strong>Quick Score<strong> :</strong><?php echo $this->session->userdata('er_score')?></td>
   </tr>
   <tr>
     <td colspan="3" valign="top" class="style49">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="3" valign="top" class="style49"><strong>PR &nbsp; &nbsp;&nbsp;&nbsp;: </strong><?php echo $this->session->userdata('pr_rpt')?></td>
   </tr>

     <?php
             }
           if($this->session->userdata('pr_score'))
           {

           ?>

   <tr>
     <td colspan="3" valign="top" class="style49">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="3" valign="top" class="style49"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </strong>Quick Score   <strong>:</strong><?php echo $this->session->userdata('pr_score')?></td>
   </tr>
   <tr>
     <td colspan="3" valign="top" class="style49">&nbsp;</td>
   </tr>
      <?php
             }
           if($this->session->userdata('her_two_rpt'))
           {

           ?>

   <tr>
     <td colspan="3" valign="top" class="style49"><strong>HER-2 : </strong><?php echo $this->session->userdata('her_two_rpt')?></td>
   </tr>

     <?php
             }
           if($this->session->userdata('her_two_score'))
           {

           ?>
  
   <tr>
     <td colspan="3" valign="top" class="style49"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>&nbsp;</strong></strong>Score&nbsp;&nbsp;<strong>:</strong><?php echo $this->session->userdata('her_two_score')?></td>
   </tr>
   <tr>   </tr>
   

     
   <tr>
     <td colspan="3" valign="top" class="style49"><br>
      Summary of result:</td>
   </tr>
   <?php
             }
           if($this->session->userdata('er_result'))
           {

           ?>
   <tr>
     <td colspan="3" valign="top" class="style50"><strong>
                 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="style49">&nbsp;&nbsp; ER: </span></strong><span class="style49"><?php echo $this->session->userdata('er_result')?></span></td>
   </tr>
   
   <tr>

     <td colspan="3" valign="top" class="style50"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;<span class="style59">&nbsp;</span><span class="style49">PR: </span></strong><span class="style49"><?php echo $this->session->userdata('pr_result')?></span></td>
   </tr>
    <?php
             }
           if($this->session->userdata('her_two_result'))
           {

           ?>

   <tr>
     <td colspan="3" valign="top" class="style50"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<span class="style49">HER-2:</span></strong><span class="style49"> <?php echo $this->session->userdata('her_two_result')?></span></td>
   </tr>

    <?php
             }
           if($this->session->userdata('rpt_noet'))
           {

           ?>
    <tr>
      <td colspan="3" valign="top" class="style47">&nbsp;</td>
    </tr>
    <tr>
     <td colspan="3" valign="top" class="style47"><p><span class="style9"><?php echo $this->session->userdata('rpt_noet')?><br>
     </span><span class="style9"><br>
       
       
     </span></p>     </td>
   </tr>
   <tr>
     <td colspan="3" valign="top" class="style35"><div align="left"><span class="style9">&nbsp;&nbsp;&nbsp;</span></div>
       <p><br />
     </p></td>
   </tr>
     <?php

	 }else{
	 ?>
     <?php
         }
       ?>
  </table> 
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 </div>
   <tr>
       
     <td width="248" rowspan=" " class="style7"><div align="left"><span class="style6"><br />
     </span></div></td>
     <td width="228" class="style7"><table width="951" border="0" cellpadding="1" cellspacing="0">
       <tr>
         <td width="307" valign="top" scope="row"><p align="left"><span class="style6"><span class="style61">DR. KUAZI DIL AFROZ <span class="style28"><br />
           </span></span></span><span class="style54">MBBS; Phd(Japan)<br />
             Consultant. (Histopathology)<br />
             Delta Hospital Ltd. Dhaka. </span></p>
         <p></p></td>
         <td colspan="2">&nbsp;</td>
         <td width="295" valign="top"><span class="style53"><span class="style27">DR. SYED SALAHUDDIN AHMED </span><br />
             <span class="style28">MBBS; PhD(Japan) <br />
WHO Fellow (Cytology) Tata.India<br />
Senior Consultant (Histopathology) <br />
Delta Hospital Ltd. Dhaka.</span></span></td>
       </tr>
       
     </table></td>
     <td width="377" rowspan="2"><div align="center" class="style57"><br>
         <br>
         <br>
       <span class="style38">Printing Date &amp; Time :
     <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 4hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?>
     </span></div></td>
   </tr>
 <tr>
     <td height="21" class="style7">&nbsp;</td>
 </tr>
   <tr>
     <td colspan="3" class="style7">&nbsp;</td>
   </tr>
 </table>
 </html>