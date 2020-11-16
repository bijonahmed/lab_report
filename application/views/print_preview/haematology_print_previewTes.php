 <!DOCTYPE HTML>
<html>
<style type="text/css">
<!--
.style41 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; color: #000000; }
.style9 {color: #000000}
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style125 {font-family: Arial, Helvetica, sans-serif; font-size: 16px; }
.style58 {	font-size: 15px;
	font-weight: bold;
	font-family: Geneva, Arial, Helvetica, sans-serif;
}
.style28 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style75 {color: #000000;
	font-size: 13px;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style26 {font-size: 11px}
.style80 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-style: italic;
}
.style84 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 13px;
}
.style154 {font-family: "Times New Roman", Times, serif; font-size: 16px; }
.style155 {color: #000000; font-size: 16px; font-family: "Times New Roman", Times, serif; }
.style157 {font-family: "Times New Roman", Times, serif; font-weight: bold; font-size: 16px; }
-->
</style>
 <br>
 <br>
 <br>
 <br>
 <br>
 <table width="775" height="29" border="1" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="769" height="23"><div align="center"><span class="style1 style41 style9">HAEMATOLOGY REPORT </span></div></td>
   </tr>
 </table>
 <hr>
 <table width="805" border="0" align="center" cellspacing="0" bordercolor="#000000">
   <tr>
     <td width="140"><span class="style45">Test ID </span></td>
     <td width="8"><span class="style45"><strong>:</strong></span></td>
     <td width="180"><span class="style45"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
     <td width="219"><span class="style45">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
     <td width="248"><span class="style45">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
   </tr>
   <tr>
     <td><span class="style45">Patient Name </span></td>
     <td><span class="style45"><strong>:</strong></span></td>
     <td colspan="2"><span class="style45"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
     <td><span class="style45">Age: <?php echo $this->session->userdata('age')?>, Sex: <?php echo $this->session->userdata('sex')?></span></td>
   </tr>
   <tr>
     <td><span class="style45">Ref. by Prof. Dr. </span></td>
     <td><span class="style45"><strong>:</strong></span></td>
     <td colspan="3"><span class="style45"><?php echo $this->session->userdata('ref_by')?></span></td>
   </tr>
   <tr>
     <td><span class="style45">Hospital Clinic </span></td>
     <td><span class="style45"><strong>:</strong></span></td>
     <td colspan="3"><span class="style45"><?php echo $this->session->userdata('hospital_name')?></span></td>
   </tr>
   <tr>
     <td class="style45">Specimen</td>
     <td><span class="style45"><strong>:</strong></span></td>
     <td colspan="3"><span class="style45"><?php echo "Blood";?> </span></td>
   </tr>
 </table>
 <hr>
 <div align="center" class="style58"><span class="style125">Estimations were carried out by automated Haematology analyzer Sysmes XT-2000i and checked manully </span><br>
     <br>
 </div>
 <table width="845" height="649" border="0" align="center" cellspacing="0">
   <thead>
     <?php
            if($this->session->userdata('hb'))
             {
       ?>
     <tr>
          

       <td width="181" height="62" valign="top" class="style28"><div align="left" class="style154">Haemoglobin <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
       <td width="315" valign="top" class="style28"><div align="left" class="style154"><font color="black"><?php echo $this->session->userdata('hb')?> <?php echo "gm/dl"?></font> <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></div></td>
       <td width="341" valign="top" class="style28"><div align="left" class="style155">Adult:Men 15.0&plusmn;2.0, Women:13.5&plusmn;1.5 <br />
         At birth: 13.5-19.5, 3 Days:14.5-22.5<br />
         1 Month: 11-17,2-6 Months:9.5-13.5 <br />
         2-6 Years: 11-14, 6-12 Years: 11.5-15.5 </div></td>
     </tr>
       <?php
             }
           if($this->session->userdata('esr'))
           {

           ?>
   </thead>
   <tbody>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">ESR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('esr')?> <?php echo "mm in 1st hour (Westergren)";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span></td>
       <td valign="top" class="style155" data-title="Change"><span class="style9">Men:0-10,Women 0-20 <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;</font></span><font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
     </tr>
     <?php

	 }else{
	 ?>
     <tr>
       <td height="21" colspan="3" valign="top" data-title="Company"><span class="style157">Total Count </span></td>
     </tr>
     <?php
         }
       ?>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">Red Blood Cell </td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('rbc')?> <?php echo "million/cumm";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">13.8-5.5</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">Platelete Count</td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('platelete')?> <?php echo "/cumm";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">1,50,000-4,00,000</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style75" data-title="Company"><span class="style155">WBC</span></td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('wbc')?> <?php echo "/cumm";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">4,000-10,000</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">CE </td>
       <td valign="top" class="style155" data-title="Price"><?php echo $this->session->userdata('ce')?> <font color="black"><?php echo "/cumm";?></font></td>
       <td valign="top" class="style155" data-title="Change">50-500</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">RC</td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('rc')?> <?php echo "/cumm";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">&nbsp;</td>
     </tr>
     <tr>
       <td height="21" colspan="3" valign="top" data-title="Company"><strong class="style157">Differential Count</strong></td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">Neutrophil</td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('neutrophils')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">40-80</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">Lymphocytes</td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('lymphocytes')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">20-40</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">Monocytes</td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('monocytes')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">02-10</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">Eosinophil</td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('eosinophils')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">01-06</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">Basophil</td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('basophil')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">&lt;1.0</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style75" data-title="Company"><span class="style154"><?php echo $this->session->userdata('parameter_one')?></span></td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('para_one_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">&nbsp;</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style75" data-title="Company"><span class="style154"><?php echo $this->session->userdata('parameter_two')?></span></td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('para_two_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">&nbsp;</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style75" data-title="Company"><span class="style154"><?php echo $this->session->userdata('parameter_three')?></span></td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('para_three_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">&nbsp;</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style75" data-title="Company"><span class="style154"><?php echo $this->session->userdata('parameter_four')?></span></td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('para_four_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">&nbsp;</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style75" data-title="Company"><span class="style154"><?php echo $this->session->userdata('parameter_five')?></span></td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('para_five_rpt')?> <?php echo "%";?></font></span></td>
       <td valign="top" class="style155" data-title="Change">&nbsp;</td>
     </tr>
     <tr>
       <td height="21" colspan="3" valign="top" data-title="Company"><strong class="style157">Absulote Value </strong></td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">HCT/PCV</td>
       <td valign="top" class="style75" data-title="Price"><font color="black"><span class="style154"><?php echo $this->session->userdata('hct')?> <?php echo "%"?></span></font></td>
       <td valign="top" class="style155" data-title="Change">36-50</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">MCV</td>
       <td valign="top" class="style75" data-title="Price"><font color="black"><span class="style154"><?php echo $this->session->userdata('mcv')?> <?php echo "fl"?></span></font></td>
       <td valign="top" class="style155" data-title="Change">83-101</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">MCH</td>
       <td valign="top" class="style75" data-title="Price"><span class="style154"><font color="black"><?php echo $this->session->userdata('mch')?> <?php echo "pg"?></font></span></td>
       <td valign="top" class="style155" data-title="Change">27-32</td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="">MCHC</td>
       <td valign="top" class="style75" data-title=""><font color="black"><span class="style154"><?php echo $this->session->userdata('mchc')?> <?php echo "g/dL"?></span></font></td>
       <td valign="top" class="style155" data-title="">31.5-34.5</td>
     </tr>
     <tr>
       <td valign="top" class="style155" data-title="">RDW</td>
       <td valign="top" class="style75" data-title=""><font color="black"><span class="style154"><?php echo $this->session->userdata('rdw')?> <?php echo "%"?></span></font></td>
       <td valign="top" class="style155" data-title="">11.6-14.0</td>
     </tr>
     <tr>
       <td height="21" colspan="3" valign="top" data-title="Company"><span class="style154"><strong>BT CT</strong></span></td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="">BT</td>
       <td valign="top" class="style155" data-title=""><font color="black"><?php echo $this->session->userdata('bt_min')?></font> min <font color="black"><?php echo $this->session->userdata('bt_sec')?></font> sec <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
       <td valign="top" class="style155" data-title="">2-7 min. <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </font></td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="">CT</td>
       <td valign="top" class="style155" data-title=""><font color="black"><?php echo $this->session->userdata('ct_min')?></font> min <font color="black"><?php echo $this->session->userdata('ct_sec')?></font> sec <font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></td>
       <td valign="top" class="style155" data-title="">5-11 min. </td>
     </tr>
     <tr>
       <td height="21" valign="top" class="style155" data-title="Company">Malarial Parasite </td>
       <td valign="top" class="style75" data-title=""><span class="style154"><font color="black"><?php echo $this->session->userdata('mp')?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span></td>
       <td valign="top" class="style75" data-title=""><span class="style154"><font color="black">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></span></td>
     </tr>
     <tr>
       <td height="21" colspan="3" valign="top" data-title="Company"><span class="style154"><strong>PBF</strong></span></td>
     </tr>
     <tr>
       <td height="21" colspan="3" valign="top" data-title="Company"><font color="black"><span class="style154"><?php echo $this->session->userdata('pbf')?></span></font></td>
     </tr>
     <tr></tr>
   </tbody>
 </table>
 <table width="856" border="0" align="center" cellspacing="0">
   <tr>
     <td valign="top"><span class="style80">Checked by </span></td>
     <td valign="top">&nbsp;</td>
     <td valign="top">&nbsp;</td>
     <td width="304" rowspan="6" valign="top"><p class="style26"><span class="style84">Dr. Amin Lutful Kabir </span><br />
             <span class="style28">MBBS,M.Phil (Biochemistry) <br />
               FCPS(Haematology), IHTC Fellow <br />
               Consultant Haematology <br />
               Delta Medical College Hospital. </span></p></td>
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
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
   <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
     <td>&nbsp;</td>
   </tr>
 </table>
 <p>&nbsp;</p>
 <p>&nbsp;</p>
 
</html>