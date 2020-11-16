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
.style47 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style80 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-style: italic;
}
.style63 {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 18;
	font-weight: bold;
}
.style66 {font-size: 18}
.style67 {font-family: Arial, Helvetica, sans-serif}
.style68 {font-size: 18; font-weight: bold; }
.style69 {
	font-size: 25px;
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
-->
 </style>

 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p align="center"><u><span class="style69">Immunologial Test Report </span></u><br>
     <br>
   <br>
 </p>
 <table width="859" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="145"><span class="style47">Test ID </span></td>
     <td width="7"><span class="style47"><strong>:</strong></span></td>
     <td width="234"><span class="style47"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="223"><span class="style47">&nbsp;&nbsp;Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="240"><span class="style47">&nbsp;&nbsp;Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td><span class="style47">Patient Name </span></td>
     <td><span class="style47"><strong>:</strong></span></td>
     <td colspan="2"><span class="style47"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td><span class="style47">&nbsp;&nbsp;Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td><span class="style47">Ref. by Prof. Dr. </span></td>
     <td><span class="style47"><strong>:</strong></span></td>
     <td colspan="3"><span class="style47"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td><span class="style47">Hospital Clinic </span></td>
     <td><span class="style47"><strong>:</strong></span></td>
     <td colspan="3"><span class="style47"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
   <tr>
     <td><span class="style47">Specimen</span></td>
     <td><span class="style47"><strong>:</strong></span></td>
     <td colspan="3"><span class="style47"><?php echo $this->session->userdata('specimen_name')?></span></td>
   </tr>
   <tr>
     <td colspan="5">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="5"><b><hr style="width: auto"></b></td>
   </tr>
 </table>
     <br>
 <br>
 <div class="span8" style="height:700px">
   <table width="865" border="0" align="center" cellspacing="0">
  <tr>
    <th colspan="5" scope="col"><b>
      <hr style="width: auto">
    </b></th>
    </tr>
  <tr>
    <td width="159" valign="top" scope="col"><div align="left" class="style68"><span class="style67">Test Name </span></div></td>
    <td width="75" valign="top" scope="col"><div align="left" class="style68"><span class="style67">Result</span></div></td>
    <td width="132" valign="top" scope="col"><div align="left" class="style68"><span class="style67">Unit &nbsp;&nbsp;&nbsp;&nbsp;</span></div></td>
    <td width="141" valign="top" scope="col"><div align="left" class="style63">
      <div align="left">Opinion </div>
    </div></td>
    <td width="348" valign="top" scope="col">&nbsp;</td>
  </tr>
  <tr>
    <th colspan="5" scope="row"><b>
      <hr style="width: auto">
    </b> </th>
    </tr>
  <tr>
    <th valign="top" scope="row"><div align="left"><span class="style66"><span class="style66"></span></span><span class="style47"><?php echo $this->session->userdata('test_name')?></span></div></th>
    <td valign="top"><div align="left"><span class="style66"><span class="style66"></span></span><span class="style47"><?php echo $this->session->userdata('result')?></span></div></td>
    <td valign="top"><div align="left"><span class="style66"><span class="style66"></span></span><span class="style47"><?php echo $this->session->userdata('unit')?></span></div></td>
    <td valign="top"><div align="left"><span class="style66"><span class="style66"></span></span><span class="style47"><?php echo $this->session->userdata('opinion')?></span></div></td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    <td colspan="4" rowspan="4" valign="top"><span class="style47"><?php echo $this->session->userdata('interpretation')?></span></td>
    </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <th valign="top" scope="row">&nbsp;</th>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
    <td valign="top">&nbsp;</td>
  </tr>
</table>




   <p><br>  
     <br>  
     <br>  
   </p>
   <p>&nbsp;</p>
   <p>&nbsp;</p>
 </div>
 <table width="825" border="0" align="center" cellspacing="0">
   <tr>
     <td valign="top"><span class="style80">Checked by </span></td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td width="298" rowspan="6" valign="top"><p align="center"><strong>AKM Nabi Newaz  Khan</strong><br>
       B.Sc (Hons) M.Sc in  Biochemistry <br>
       Consultant Biochemist <br>
  <strong>Delta Hospital  Ltd.</strong></p>     
     </td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td width="160" valign="top">&nbsp;</td>
     <td width="237" valign="top">&nbsp;</td>
     <td width="147" valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr> </tr>
 </table>
 </html>
 </html>