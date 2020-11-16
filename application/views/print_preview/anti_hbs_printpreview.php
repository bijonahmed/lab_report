 <!DOCTYPE HTML>
 <html>
 <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
}
.style67 {font-family: Arial, Helvetica, sans-serif}
.style69 {
	font-size: 25px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style84 {font-family: Arial, Helvetica, sans-serif; font-size: 14px; }
.style85 {font-size: 14px}
.style88 {font-size: 16px}
.style89 {font-family: Verdana, Arial, Helvetica, sans-serif; }
.style92 {font-size: 16px; font-family: Verdana, Arial, Helvetica, sans-serif;}
#Layer2 {
	position:absolute;
	left:930px;
	top:430px;
	width:8px;
	height:66px;
	z-index:1;
}
.style94 {font-size: 12px}
.style95 {font-family: Arial, Helvetica, sans-serif; font-size: 17px; }
.style98 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 22px; }
.style99 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style100 {font-size: 18px}
.style9 {color: #000000}
.style103 {font-family: Arial, Helvetica, sans-serif; font-size: 15px; }
.style111 {font-family: Verdana, Arial, Helvetica, sans-serif; font-weight: bold; font-size: 18px; }
.style114 {
	font-family: Geneva, Arial, Helvetica, sans-serif;
	font-size: 19px;
}
.style116 {font-size: 20px}
.style117 {font-family: Arial, Helvetica, sans-serif; font-size: 18px; }
.style125 {font-size: 17px}
-->
 </style>

 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p align="center"><u><span class="style69">Hepatitis Test Report </span></u><br>
     <br>
   <br>
 </p>
 <table width="898" border="0" align="center" cellspacing="0">
   <tr>
     <td width="142" height="29" align="left" valign="top" nowrap scope="col"><span class="style114">Test ID </span></span></td>
     <td width="7" valign="top" nowrap scope="col"><span class="style67 style125">:</span></td>
     <td width="388" valign="top" nowrap scope="col"><span class="style114"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="107" valign="top" nowrap scope="col"><div align="right" class="style95"><u>Lab ID</u> </div></td>
     <td width="88" valign="top" nowrap scope="col"><div align="right" class="style95"><u>Coll. Time</u> </div></td>
     <td width="126" valign="top" nowrap class="style67 style125" scope="col">&nbsp;&nbsp;<u>Rec.Time</u></td>
   </tr>
   <tr>
     <td height="35" valign="top" nowrap class="style114" scope="row">Name</td>
     <td valign="top" nowrap><span class="style85"><span class="style114">:</span></span></td>
     <td valign="top" nowrap><span class="style114"><em><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></em></span></td>
     <td valign="top" nowrap class="style114"><div align="right" class="style95"><?php echo $this->session->userdata('lab_id')?></div></td>
     <td valign="top" nowrap class="style114"><div align="right" class="style95"><?php echo $this->session->userdata('coll_time')?></div></td>
     <td valign="top" nowrap class="style114"><span class="style95">&nbsp;&nbsp;<?php echo $this->session->userdata('reciv_time')?></span></td>
   </tr>
   <tr>
     <td height="28" valign="top" nowrap scope="row"><span class="style114"><span class="style114">Age<strong>:</strong> <em><strong><?php echo $this->session->userdata('age')?></strong></em></span></span></td>
     <td valign="top" nowrap><span class="style114"></span></td>
     <td valign="top" nowrap><span class="style114"><span class="style114">Sex : <strong><?php echo $this->session->userdata('sex')?></strong></span></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
   </tr>
   <tr>
     <td height="31" valign="top" nowrap scope="row"><span class="style114"><span class="style67 style125">Collection Date </span></span></td>
     <td valign="top" nowrap><span class="style85"><span class="style114">:</span></span></td>
     <td valign="top" nowrap class="style67 style88 style92"><span class="style114"><?php echo $this->session->userdata('reciv_date')?></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
   </tr>
   <tr>
     <td height="30" valign="top" nowrap scope="row"><span class="style84 style89 style88"><span class="style114">Receiving Date </span></span></td>
     <td valign="top" nowrap><span class="style85"><span class="style67 style125">:</span></span></td>
     <td valign="top" nowrap class="style67 style88 style92"><span class="style114"><?php echo $this->session->userdata('deli_date')?></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
   </tr>
   <tr>
     <td height="29" valign="top" nowrap scope="row"><span class="style84 style89 style88"><span class="style67 style125">Ref. by Prof./Dr. </span></span></td>
     <td valign="top" nowrap><span class="style85"><span class="style67 style125">:</span></span></td>
     <td valign="top" nowrap class="style67 style88 style92"><span class="style114"><?php echo $this->session->userdata('ref_by')?></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
   </tr>
   <tr>
     <td height="28" valign="top" nowrap scope="row"><span class="style84 style89 style88"><span class="style67 style125">Clinic/Hospital</span></span></td>
     <td valign="top" nowrap><span class="style85"><span class="style67 style125">:</span></span></td>
     <td valign="top" nowrap class="style85"> <span class="style67 style92 style88"><span class="style114"><?php echo $this->session->userdata('hospital_name')?></span></span></td>
     <td colspan="3" valign="top" nowrap><span class="style88"><span class="style114">Specimen: <?php echo $this->session->userdata('specimen_name')?></span></span></td>
   </tr>
   <tr>
     <td valign="top" nowrap scope="row"><span class="style84 style89 style88"><span class="style114">Requested Test </span></span></td>
     <td valign="top" nowrap><span class="style85"><span class="style67 style125">:</span></span></td>
     <td valign="top" nowrap class="style89"><span class="style95"><?php echo $this->session->userdata('test_name')?></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
     <td valign="top" nowrap><span class="style125"></span></td>
   </tr>
   <tr>
     <td colspan="6" valign="top" nowrap scope="row"><b>
     <hr style="width: auto">
     </b></td>
   </tr>
 </table>
 

</div>


<div style="height:800">
  <table width="892" border="0" height="" align="center" cellpadding="1" cellspacing="0">
    <tr>
      <th colspan="5" bordercolor="#000000" scope="row"><b>
        <hr style="width: auto">
      </b></th>
    </tr>
    <tr>
      <td width="204" valign="top" scope="row"><div align="left" class="style98 style100">Test Name </div></td>
      <td width="162" valign="top"><div align="left" class="style111">Result</div></td>
      <td width="183" valign="top"><div align="left" class="style111">Unit</div></td>
      <td width="183" valign="top"><div align="left" class="style111">Opinion</div></td>
      <th width="156"><div align="left"></div></th>
    </tr>
    <tr valign="top">
      <th colspan="5" scope="row"><b>
        <hr style="width: auto">
      </b></th>
    </tr>
    <tr>
      <td valign="top" scope="row"><div align="left" class="style117"><?php echo $this->session->userdata('test_name')?></div></td>
      <td valign="top"><div align="left" class="style117"><?php echo $this->session->userdata('result')?></div></td>
      <td valign="top"><div align="left" class="style117"><?php echo $this->session->userdata('unit')?></div></td>
      <td valign="top"><div align="left" class="style117"><?php echo $this->session->userdata('opinion')?></div></td>
      <th><div align="left"><span class="style67"><span class="style116"><span class="style116"><span class="style100"><span class="style100"></span></span></span></span></span></div></th>
    </tr>
    <tr>
      <th valign="top" scope="row">&nbsp;</th>
      <th valign="top">&nbsp;</th>
      <th valign="top"><div align="left"></div></th>
      <th valign="top"><div align="left"></div></th>
      <th><div align="left"></div></th>
    </tr>
    <tr>
      <td colspan="5" valign="top" scope="row"><div align="left"><span class="style89"><?php echo $this->session->userdata('interpretation')?></span></div></td>
    </tr>
  </table>
 </div>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
 <p><b></b><span class="style9">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></p>
  <table width="936" border="0" cellpadding="1" cellspacing="0">

    <tr>
      <td width="157" valign="top" scope="row"><div align="center"><strong><span class="style103"><?php 
		 $username=$this->session->userdata('full_name');
echo "$username";
		 
?>
      </span></strong> </div></td>
      <td width="185" valign="top"><div align="left"></div></td>
      <td width="244" valign="top"><div align="center" class="style103">
        <div align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 5hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?>
        </div>
      </div></td>
      <td width="191" valign="top"><div align="left"></div></td>
      <td width="149" valign="top"><div align="center"></div></td>
    </tr>
  </table>
  <table width="908" border="0" height="" align="center" cellpadding="1" cellspacing="0">

    <tr valign="top">
      <th colspan="5" scope="row"><div align="left"></div></th>
    </tr>
    <tr>
      <td width="171" valign="top" scope="row"><div align="left">
        <hr style="width: 135px">
        <span class="style67 style94"><span class="style89 style67">&nbsp;<span class="style88"> &nbsp; Printed by </span></span></span></div></td>
      <td width="145" valign="top"><div align="left">
        <hr style="width: 130px">
      <span class="style89">&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="style99">Checked by</span> </div></td>
      <td width="225" valign="top"><div align="left"><b>
        <hr style="width: 170px">
      </b><span class="style89">&nbsp;<span class="style85">&nbsp;&nbsp;&nbsp;&nbsp;<span class="style88">Reporting Date &amp; Time </span></span></span></div></td>
      <td width="359" colspan="2" rowspan="2" valign="top"><div align="center"><span class="style95"><strong>AKM Nabi Newaz  Khan</strong><br>
        B.Sc (Hons) M.Sc in  Biochemistry <br>
        Consultant Biochemist <br>
              <strong>Delta Hospital Ltd.</strong></span>
      </div>
        <div align="left"></div>
      <div align="left"></div>        <div align="left"></div></td></tr>
    <tr>
      <th valign="top" scope="row">&nbsp;</th>
      <th valign="top">&nbsp;</th>
      <th valign="top"><div align="left"></div></th>
    </tr>
 </table>
  </html>