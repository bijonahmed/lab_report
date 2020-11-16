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
.style9 {color: #000000}
#Layer1 {
	position:absolute;
	left:142px;
	top:563px;
	width:224px;
	height:63px;
	z-index:1;
}
.style39 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-weight: bold; }
.style49 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 10; }
.style50 {font-size: 10}
.style58 {font-size: 15px}
.style59 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style17 {color: #000000;
	font-weight: bold;
}
.style60 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; }
.style61 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; font-weight: bold; font-style: italic; }
.style63 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; font-style: italic; }
.style65 {font-size: 9px}
-->
 </style>
 
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style3"> </span></p>
 <table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td height="23"><div align="center"><span class="style1 style2 style9">SEMEN ANALYSIS </span></div></td>
   </tr>
 </table>
 <br>
 <hr>
 <table width="719" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="128"><span class="style63">Test ID </span></td>
     <td width="7"><span class="style63"><strong>:</strong></span></td>
     <td width="186"><span class="style63"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="184"><span class="style63">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="192"><span class="style63">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td><span class="style63">Patient Name </span></td>
     <td><span class="style63"><strong>:</strong></span></td>
     <td colspan="2"><span class="style63"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td><span class="style63">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td><span class="style63">Ref. by Prof. Dr. </span></td>
     <td><span class="style63"><strong>:</strong></span></td>
     <td colspan="3"><span class="style63"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td><span class="style63">Hospital Clinic </span></td>
     <td><span class="style63"><strong>:</strong></span></td>
     <td colspan="3"><span class="style63"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
 </table>
 <hr>
 <br>
 <table width="741" border="0" align="center" cellspacing="0">
   <tr>
     <td width="739">  <span class="style39">Collection&nbsp;  Time&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;<strong>: <?php echo $this->session->userdata('collection_time')?></strong></span></td>
   </tr>
   <tr>
     <td class="style39">Examination&nbsp;  Time &nbsp; &nbsp; <strong>:</strong><strong> <?php echo $this->session->userdata('examination_time')?></strong></td>
   </tr>
 </table>
 <br>
 <table width="748" border="0" align="center" cellspacing="0">
   <tr>
     <td colspan="5"><p class="style39"><u>PHYSICAL EXAMINATION</u></p></td>
   </tr>
   <tr>
     <td width="171"><span class="style58">Volume <span class="style59">&nbsp;&nbsp;&nbsp;</span></span><span class="style49">&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
     <td width="10"><span class="style49"><strong>:</strong></span></td>
     <td width="121"><span class="style50"><?php echo $this->session->userdata('volume')?></span></td>
     <td width="95">&nbsp;</td>
     <td width="341"><span class="style50"></span></td>
   </tr>
   <tr>
     <td><span class="style58">Colour&nbsp;&nbsp;&nbsp; &nbsp;<span class="style59">&nbsp;&nbsp;</span></span><span class="style49">&nbsp;&nbsp;</span></td>
     <td><span class="style49"><strong>:</strong></span></td>
     <td><span class="style50"> <?php echo $this->session->userdata('color')?> </span></td>
     <td>&nbsp;</td>
     <td><span class="style50"></span></td>
   </tr>
   <tr>
     <td><span class="style58">Viscosity &nbsp;&nbsp;</span><span class="style49">&nbsp;&nbsp;</span></td>
     <td><span class="style49"><strong>:</strong></span></td>
     <td><span class="style50"> <?php echo $this->session->userdata('viscosity')?> </span></td>
     <td>&nbsp;</td>
     <td><span class="style50"></span></td>
   </tr>
   <tr>
     <td><span class="style58">Liquefication </span></td>
     <td><span class="style49"><strong>:</strong></span></td>
     <td><span class="style50"> <?php echo $this->session->userdata('lique')?> </span></td>
     <td>&nbsp;</td>
     <td><span class="style50"></span></td>
   </tr>
   
   <tr>
     <td colspan="5"><p class="style39"><u>CHEMICAL EXAMINATION</u></p></td>
   </tr>
   <tr>
     <td>Reaction </td>
     <td><strong class="style49">:</strong></td>
     <td> <?php echo $this->session->userdata('reaction')?> </td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   
   <tr>
     <td colspan="5"><p class="style39"><u>MICROSCOPICAL EXAMINATION</u></p></td>
   </tr>
   <tr>
     <td>Total Spermatozoa count</td>
     <td><strong class="style49">:</strong></td>
     <td colspan="3"> <?php echo $this->session->userdata('total_spermo')?> </td>
   </tr>
   
   <tr>
     <td><strong class="style39"><u>Motility</u></strong></td>
     <td><strong class="style49"> </strong></td>
     <td>&nbsp;</td>
     <td><strong><u>Morphology</u></strong></td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>Active&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</td>
     <td><strong class="style49">:</strong></td>
     <td> <?php echo $this->session->userdata('active')?> </td>
     <td>Normal &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td><strong class="style49">: </strong> <?php echo $this->session->userdata('normal')?> </td>
   </tr>
   <tr>
     <td>Sluggish&nbsp;&nbsp;&nbsp; &nbsp;</td>
     <td><strong class="style49">:</strong></td>
     <td> <?php echo $this->session->userdata('sluggish')?> </td>
     <td>Abnormal &nbsp;&nbsp;&nbsp;</td>
     <td><strong class="style49">: </strong> <?php echo $this->session->userdata('abnormal')?> </td>
   </tr>
   <tr>
     <td>Non-motile  &nbsp;</td>
     <td><strong class="style49">:</strong></td>
     <td><?php echo $this->session->userdata('non_motile')?> </td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   
   <tr>
     <td><span class="style39"><u>OTHERS</u></span></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><?php echo $this->session->userdata('epithe_cells')?></td>
     <td>&nbsp;</td>
     <td><?php echo $this->session->userdata('epithe_count')?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><?php echo $this->session->userdata('pus_cells')?></td>
     <td>&nbsp;</td>
     <td><?php echo $this->session->userdata('pus_count')?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><?php echo $this->session->userdata('macrophages')?></td>
     <td>&nbsp;</td>
     <td><?php echo $this->session->userdata('macro_count')?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><?php echo $this->session->userdata('blank_one')?></td>
     <td>&nbsp;</td>
     <td><?php echo $this->session->userdata('blank_count')?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><?php echo $this->session->userdata('blank_two')?></td>
     <td>&nbsp;</td>
     <td><?php echo $this->session->userdata('two_count')?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td><?php echo $this->session->userdata('blank_three')?></td>
     <td>&nbsp;</td>
     <td><?php echo $this->session->userdata('three-count')?></td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   
   <tr>
     <td colspan="5">&nbsp;</td>
   </tr>
   <tr>
     <td colspan="5" class="style39"><em><strong><?php echo $this->session->userdata('comments')?></strong></em></td>
   </tr>
   <tr>
     <td colspan="5" class="style39"><br>
     <br>
     <br></td>
   </tr>
   <tr>
     <td colspan="5"><span class="style60">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span></td>
   </tr>
   <tr>
     <td colspan="5" class="style60"><div align="left"><span class="style17"><span class="style61">Checked by </span>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Signature<br>
       </span></div></td>
   </tr>
   <tr>
     <td colspan="5" class="style60"><div align="center" class="style65">Prting by:
           <?php 
		 $username=$this->session->userdata('full_name');
echo "$username";
		 
?>
     ,      &nbsp;Reporting Date : <?php echo  date("d-m-Y");?></div></td>
   </tr>
 </table>
 <p align="left">&nbsp;</p>
 <br>
 <p>&nbsp;	</p>
 <p>&nbsp;</p>
  
 </html>