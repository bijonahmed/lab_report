 <!DOCTYPE HTML>
<style type="text/css">
<!--
.style1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
}
.style2 {font-size: 20px}
#Layer1 {
	position:absolute;
	left:27px;
	top:118px;
	width:853px;
	height:1px;
	z-index:0;
	background-color: #000000;
}
.style6 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
#Layer2 {
	position:absolute;
	left:695px;
	top:931px;
	width:84px;
	height:28px;
	z-index:1;
}
.style7 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
}
.style8 {
	color: #000000;
	font-weight: bold;
}
.style13 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: italic; }
-->
</style>
 <p>&nbsp;</p>
 <p>&nbsp; </p>
 <p><strong><span class="style2">SL NO: <?php echo $this->session->userdata('sl_no')?></span></strong></p>
 <table width="644" border="1" align="center" cellspacing="0" bordercolor="#000000" bgcolor="#FFFFFF">
  <tr>
    <td width="638"><div align="center" class="style1 style2">IMMUNOHISTOCHEMICAL STUDY </div></td>
  </tr>
</table>
 <p><br />
 </p>
 <div align="center"> <img src="<?php echo base_url();?>images/line.jpg" width="675" height="2" />   </div>
   <table width="769" border="0" align="center" cellspacing="0">
     <tr>
       <td width="113"><span class="style13">Test ID</span> </td>
       <td width="263"><span class="style13"><strong>: <?php echo $this->session->userdata('test_id')?></strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
       <td width="387"><span class="style13">Rec. Date <?php echo $this->session->userdata('reciv_date')?>&nbsp;Deli. Date: <?php echo $this->session->userdata('deli_date')?></span></td>
     </tr>
     <tr>
       <td class="style13">Patient Name </td>
       <td><span class="style13"><strong>: <font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
       <td><span class="style13">Age <strong>: </strong><?php echo $this->session->userdata('age')?> Sex<strong>:</strong> <?php echo $this->session->userdata('sex')?></span></td>
     </tr>
     <tr>
       <td class="style13">Ref. by Prof.Dr. </td>
       <td colspan="2" class="style13"><strong>:</strong> <?php echo $this->session->userdata('ref_by')?></td>
     </tr>
     <tr>
       <td class="style13">Hospital Clinic </td>
       <td colspan="2" class="style13"><strong>: </strong><?php echo $this->session->userdata('hospital_name')?></td>
     </tr>
     <tr>
       <td class="style13">Specimen</td>
       <td colspan="2" class="style13"><strong>: </strong><?php echo $this->session->userdata('specimen_name')?></td>
     </tr>
 </table>
   <div align="center"> <img src="<?php echo base_url();?>images/line.jpg" width="682" height="2" /> </div>
 <br />
 <table width="687" border="0" align="center" cellspacing="0">
   <tr>
     <td width="723"><strong><?php echo $this->session->userdata('note')?></strong></td>
   </tr>
 </table>
 <table width="684" height="21" border="0" align="center" cellspacing="0">
   <tr>
     <td><?php echo $this->session->userdata('reporting_board')?></td>
   </tr>
 </table>
   <p><span class="style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="style6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
   <table width="189" border="0" align="right" cellspacing="1">
      <tr>
        <td width="179"><span class="style6"><img src="<?php echo base_url();?>images/line.jpg" width="178" height="2" /></span></td>
      </tr>
      <tr>
        <td class="style6"><div align="center">Signatue </div></td>
      </tr>
 </table>
    <p class="style7"><span class="style8">Printing Date :</span> <?php echo  date("d-m-Y");?> </p>
    <p>&nbsp;	</p>
