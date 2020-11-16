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
.style39 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12px; font-weight: bold; }
.style59 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style125 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style26 {font-size: 11px}
.style84 {font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 13px;
}
.style136 {font-size: 14px; font-family: Arial, Helvetica, sans-serif; }
.style140 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style142 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 16px; }
.style143 {
	font-size: 16px;
	font-weight: bold;
}
.style144 {font-size: 16px}
-->
 </style>
 
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 <p><span class="style3"> </span><br>
 </p>
 <table width="832" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="826" height="23"><div align="center"><span class="style1 style2 style9">EXAMINATION REPORT</span></div></td>
   </tr>
 </table>
 <br>
 <hr>
 <table width="832" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="147"><span class="style140">Test ID </span></td>
     <td width="7"><span class="style140"><strong>:</strong></span></td>
     <td width="168"><span class="style140"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="257"><span class="style140">Received on: <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="243"><span class="style140">Delivered on: <?php echo $this->session->userdata('deli_date')?></span></td>
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
     <td colspan="3"><span class="style140"><?php echo $this->session->userdata('specimen_name')?></span></td>
   </tr>
 </table>
 <hr>
 <br>
 <div class="span10" style="height:570px">
 <table width="827" height="300" border="0" align="center" cellspacing="0">
  <?php
            if($this->session->userdata('quantity'))
             {
       ?>
   <tr>
     <td height="19" colspan="3" valign="top"><p class="style39 style125"><u>PHYSICAL EXAMINATION</u></p></td>
   </tr>
    
   
   
   <tr>
     <td width="230" height="21" valign="top"><span class="style125">Quantity&nbsp;</span></td>
     <td width="8" valign="top"><span class="style142">:</span></td>
   <td width="583" valign="top"><span class="style125"><?php echo $this->session->userdata('quantity')?> 
   <?php echo "ml"?></span></td>
   </tr>
   
    <?php 
             }
           if($this->session->userdata('color'))
           {
             
           ?>
   <tr>
     <td height="21" valign="top"><span class="style125">Colour&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></td>
     <td valign="top"><span class="style142">:</span></td>
     <td valign="top"><span class="style125"> <?php echo $this->session->userdata('color')?> </span></td>
   </tr>
   
   <?php 
             }
           if($this->session->userdata('apperance'))
           {
             
           ?>
   
   <tr>
     <td height="21" valign="top"><span class="style125">Appearance&nbsp;&nbsp;&nbsp;</span></td>
     <td valign="top"><span class="style142">:</span></td>
     <td valign="top"><span class="style125"> <?php echo $this->session->userdata('apperance')?> </span></td>
   </tr>
     <?php 
             }
           if($this->session->userdata('sediment'))
           {
             
           ?>
   
   
   <tr>
     <td height="21" valign="top"><span class="style125">Sediment</span></td>
     <td valign="top"><span class="style125"><strong>:</strong></span></td>
     <td valign="top"><span class="style125"><?php echo $this->session->userdata('sediment')?></span></td>
   </tr>
   
      <?php 
             }
           if($this->session->userdata('on_staing'))
           {
             
           ?>
   
   <tr>
     <td height="21" valign="top"><span class="style125">On standing&nbsp;&nbsp; </span></td>
     <td valign="top"><span class="style125"><strong>:</strong></span></td>
     <td valign="top"><span class="style125"><?php echo $this->session->userdata('on_staing')?></span></td>
   </tr>
   
      <?php 
             }
           if($this->session->userdata('glucous'))
           {
             
           ?>
   
   
   <tr>
     <td height="21" colspan="3" valign="top"><p class="style125"><strong><u>BIOCHEMICAL&nbsp; EXAMINATION</u></strong></p>     </td>
   </tr>
   
   
   
   <tr>
     <td height="21" valign="top" class="style125">Glucose </td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('glucous')?> <?php echo "mg/dl "?></span></td>
   </tr>
      <?php 
             }
           if($this->session->userdata('t_protein'))
           {
             
           ?>
   
   
   <tr>
     <td height="21" valign="top" class="style125">T.  Protein </td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('t_protein')?> <?php echo "gm/dl"?></span></td>
   </tr>
   
      <?php 
             }
           if($this->session->userdata('chloride'))
           {
             
           ?>
   
   <tr>
     <td height="21" valign="top" class="style125">Chloride </td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('chloride')?> <?php echo "mmol/L"?></span></td>
   </tr>
       <?php 
             }
           if($this->session->userdata('parameter_one'))
           {
             
           ?>
   
   <tr>
     <td height="20" valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('parameter_one')?></span></td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('para_one_rpt')?></span></td>
   </tr>
    <?php 
             }
           if($this->session->userdata('parameter_two'))
           {
             
           ?>
   
   
   <tr>
     <td height="21" valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('parameter_two')?></span></td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('para_two_rpt')?></span></td>
   </tr>
     <?php 
             }
           if($this->session->userdata('parameter_three'))
           {
             
           ?>
   
   
   
   <tr>
     <td height="21" valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('parameter_three')?></span></td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('para_three_rpt')?></span></td>
   </tr>
    <?php 
             }
           if($this->session->userdata('parameter_four'))
           {
             
           ?>
   
   
   
   <tr>
     <td height="21" valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('parameter_four')?></span></td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136">&nbsp;</td>
   </tr>
     <?php 
             }
           if($this->session->userdata('parameter_five'))
           {
             
           ?>
   
    <?php 
             }
           if($this->session->userdata('zn_stain'))
           {
             
           ?>
   
   
   
   <tr>
     <td height="21" colspan="3" valign="top"><p class="style125"><strong><u>BACTERIOLOGICAL  EXAMINATION</u></strong></p>     </td>
   </tr>
   
   
   
   <tr>
     <td height="21" valign="top" class="style125">Z.N.  Stain&nbsp;&nbsp;&nbsp;&nbsp;</td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136"><span class="style144"><?php echo $this->session->userdata('zn_stain')?></span></td>
   </tr>
   
    <?php 
             }
           if($this->session->userdata('gram_stain'))
           {
             
           ?>
   
   
   
   <tr>
     <td height="21" valign="top" class="style125">Gram  Stain&nbsp;&nbsp;&nbsp; </td>
     <td valign="top" class="style136"><span class="style144"><strong>:</strong></span></td>
     <td valign="top" class="style136"> <span class="style144"><?php echo $this->session->userdata('gram_stain')?></span> </td>
   </tr>
   
      <?php 
             }
           if($this->session->userdata('rbc'))
           {
             
           ?>
   
   
   
   <tr>
     <td height="21" colspan="3" valign="top"><strong class="style125"><u>Total Count:-</u></strong></td>
   </tr>
   
   
   
   
   <tr>
     <td height="21" valign="top" class="style125"><strong>A) </strong>RBC </td>
     <td valign="top" class="style136"><span class="style144"><strong>:</strong></span></td>
     <td valign="top" class="style136"><span class="style144"><?php echo $this->session->userdata('rbc')?> <span class="style125"><?php echo "/Cumm "?></span></span></td>
   </tr>
   
      <?php 
             }
           if($this->session->userdata('wbc'))
           {
             
           ?>
   
   
   <tr>
     <td height="21" valign="top" class="style125"><strong>B) </strong>WBC </td>
     <td valign="top" class="style136"><span class="style144"><strong>:</strong></span></td>
     <td valign="top" class="style136"><span class="style144"><?php echo $this->session->userdata('wbc')?> <span class="style125"><?php echo "/Cumm "?>&nbsp;  <?php echo $this->session->userdata('para_four_rpt')?></span></span></td>
   </tr>
   
    <?php 
             }
           if($this->session->userdata('neutrophils'))
           {
             
           ?>
   
   
   <tr>
     <td height="21" colspan="3" valign="top"><p class="style125"><strong><u>Differential  count :- </u></strong></p></td>
   </tr>
   
    <?php 
             }
           if($this->session->userdata('neutrophils'))
           {
             
           ?>
   
   <tr>
     <td height="21" valign="top" class="style125"><strong>A)</strong> Neutrophils&nbsp;&nbsp; </td>
     <td valign="top" class="style136"><span class="style144"><strong>:</strong></span></td>
     <td valign="top" class="style136"><span class="style144"><?php echo $this->session->userdata('neutrophils')?> <span class="style125"><?php echo "%"?></span></span></td>
   </tr>
   
     <?php 
             }
           if($this->session->userdata('lymphocytes'))
           {
             
           ?>
   
   
   <tr>
     <td height="21" valign="top" class="style125"><strong>B)</strong> Lymphocytes </td>
     <td valign="top" class="style136"><span class="style144"><strong>:</strong></span></td>
     <td valign="top" class="style136"><span class="style144"><?php echo $this->session->userdata('lymphocytes')?> <span class="style125"><?php echo "%"?></span></span></td>
   </tr>
   
     <?php 
             }
           if($this->session->userdata('parameter_five'))
           {
             
           ?>
   
   
   
   <tr>
     <td height="21" valign="top" class="style136"><span class="style125"><strong>C)</strong> <?php echo $this->session->userdata('parameter_five')?></span></td>
     <td valign="top" class="style136"><span class="style143">:</span></td>
     <td valign="top" class="style136"><span class="style125"><?php echo $this->session->userdata('para_five_rpt')?></span> </td>
   </tr>
     <?php
	 
	 }else{
	 ?>
   <?php
         }
       ?>
 </table>
 </div>
 <p><br>
 </p>
 <p><br>
 </p>
 <div class="span10">
   <table width="851" border="0" align="center" cellspacing="0">
   <tr>
     <td valign="top"><hr style="width:auto">
     Checked by </td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td width="237" rowspan="6" valign="top"><p align="left" class="style26"><span class="style84">
      Signature</span><span class="style59"> </span></p></td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td width="155" valign="top">&nbsp;</td>
     <td width="227" valign="top">&nbsp;</td>
     <td width="141" valign="top">&nbsp;</td>
   </tr>
   <tr>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
   </tr>
   <tr>
      
   </tr>
 </table>
 
 
 
 
 
 </div>

 <br>
 <p>&nbsp;	</p>
 <p>&nbsp;</p>
  
 </html>