<style type="text/css">
<!--
.style41 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; color: #000000; }
.style45 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; font-style: italic; }
.style9 {color: #000000}
.style26 {font-size: 11px}
.style28 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style80 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 15px;
	font-style: italic;
}
.style84 {	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 13px;
}
.style89 {font-size: 14px; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style98 {font-style: italic; font-family: Verdana, Arial, Helvetica, sans-serif;}
.style102 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-weight: bold;
	font-size: 16px;
}
.style103 {
	font-size: 16px;
	font-weight: bold;
}
.style104 {font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 16px; }
.style105 {font-size: 16px}
-->
</style>
<p><br>
</p>
<p>&nbsp;</p>
<table width="567" height="29" border="1" align="center" cellspacing="0" bordercolor="#336699">
  <tr>
    <td height="23"><div align="center"><span class="style1 style41 style9">BONE MARROW REPORT </span></div></td>
  </tr>
</table>
<hr />
<table width="830" border="0" align="center" cellspacing="0" bordercolor="#000000">
  <tr>
    <td width="159"><span class="style45">Test ID </span></td>
    <td width="8"><span class="style45"><strong>:</strong></span></td>
    <td width="157"><span class="style45"><strong><?php echo $this->session->userdata('test_id')?></strong></span></td>
    <td width="214"><span class="style45">Rec. Date : <?php echo $this->session->userdata('reciv_date')?></span></td>
    <td width="283"><span class="style45">Deliv. Date : <?php echo $this->session->userdata('deli_date')?></span></td>
  </tr>
  <tr>
    <td><span class="style45">Patient Name </span></td>
    <td><span class="style45"><strong>:</strong></span></td>
    <td colspan="2"><span class="style45"><strong><font color="#000000"><?php echo $this->session->userdata('patient_name')?></font></strong></span></td>
    <td><span class="style45">Age: <?php echo $this->session->userdata('age')?> Sex: <?php echo $this->session->userdata('sex')?></span></td>
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
    <td class="style45">Material for Study </td>
    <td><span class="style45"><strong>:</strong></span></td>
    <td colspan="3"><span class="style45"><?php echo ('Blood and Bone Marrow')?> </span></td>
  </tr>
  <tr>
    <td class="style45">Exam.  Required</td>
    <td><strong>:</strong></td>
    <td colspan="3"><span class="style45"><?php echo ('Bone Marrow study')?></span></td>
  </tr>
</table>
<hr />
<p>&nbsp;	</p>
<div style="height:750">
  <table width="916" border="0" cellspacing="0">
<?php
            if($this->session->userdata('ce'))
             {
       ?>

  <tr>
    <td colspan="5" valign="top" class="style89"><span class="style103"><?php echo $this->session->userdata('ce')?></span></td>
  </tr>
<?php 
             }
           if($this->session->userdata('hb'))
           {
             
           ?>
  
  <tr>
    <td width="185" valign="top" class="style104">Hb % </td>
    <td width="12" valign="top"><span class="style103">:</span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('hb')?>
	 <?php echo ('gm/dl')?></span></td>
    </tr>
<?php 
             }
           if($this->session->userdata('esr'))
           {
             
           ?>
  
  <tr>
    <td valign="top" class="style104">ESR</td>
    <td valign="top"><span class="style103">:</span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('esr')?>
	 <?php echo ('mm in 1st hr')?></span></td>
    </tr>
<?php 
             }
           if($this->session->userdata('wbc'))
           {
             
           ?>
  
  <tr>
    <td valign="top" class="style104">Total Count (WBC) </td>
    <td valign="top"><span class="style103">:</span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('wbc')?> 
	<?php echo ('/Cumm')?></span></td>
    </tr>
  
  <?php 
             }
           if($this->session->userdata('pc'))
           {
             
           ?>
  
  <tr>
    <td valign="top" class="style104">Platelets Count </td>
    <td valign="top"><span class="style103">:</span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('pc')?> 
	<?php echo ('/Cumm')?></span></td>
    </tr>
  
   
  <?php 
             }
           if($this->session->userdata('neutro'))
           {
             
           ?>
  
  <tr>
    <td colspan="5" valign="top"><u><span class="style104"><strong>DIFFERENTIAL COUNT</strong></span></u></td>
  </tr>
  
  
  
  
  <tr>
    <td valign="top" class="style104">Neutrophil</td>
    <td valign="top"><span class="style103">:</span></td>
    <td width="83" valign="top"><span class="style45"><?php echo $this->session->userdata('neutro')?> <?php echo ('%')?></span></td>
    <td width="628" colspan="2" rowspan="8" valign="top" class="style104"><?php echo $this->session->userdata('pbf')?><br>    </td>
  </tr>
  
   <?php 
             }
           if($this->session->userdata('lymphocytes'))
           {
             
           ?>
  
  
  <tr>
    <td valign="top" class="style104">Lymphocyte</td>
    <td valign="top"><span class="style103">:</span></td>
    <td valign="top"><span class="style45"><?php echo $this->session->userdata('lymphocytes')?> <?php echo ('%')?></span></td>
  </tr>
  
    <?php 
             }
           if($this->session->userdata('eosinophil'))
           {
             
           ?>
  
  
  <tr>
    <td valign="top" class="style104">Eosinophil</td>
    <td valign="top"><span class="style103">:</span></td>
    <td valign="top"><span class="style45"><?php echo $this->session->userdata('eosinophil')?> <?php echo ('%')?></span></td>
  </tr>
   <?php 
             }
           if($this->session->userdata('monnocyte'))
           {
             
           ?>
    
  
  <tr>
    <td valign="top" class="style104">Monocyte</td>
    <td valign="top"><span class="style103">:</span></td>
    <td valign="top"><span class="style45"><?php echo $this->session->userdata('monnocyte')?> <?php echo ('%')?></span></td>
  </tr>
     <?php 
             }
           if($this->session->userdata('blank_parameter_one'))
           {
             
           ?>
    
  
  <tr>
    <td valign="top" class="style89"><span class="style45"><?php echo $this->session->userdata('blank_parameter_one')?></span></td>
    <td valign="top"><span class="style103">:</span></td>
    <td valign="top"><span class="style45"><?php echo $this->session->userdata('blank_one_result')?> <?php echo ('%')?></span></td>
  </tr>
      <?php 
             }
           if($this->session->userdata('blank_parameter_two'))
           {
             
           ?>
    
  
  <tr>
    <td valign="top" class="style89"><span class="style45"><?php echo $this->session->userdata('blank_parameter_two')?></span></td>
    <td valign="top"><span class="style103">:</span></td>
    <td valign="top"><span class="style45"><?php echo $this->session->userdata('blank_two_result')?> <?php echo ('%')?></span></td>
  </tr>
 <?php 
             }
           if($this->session->userdata('blank_parameter_three'))
           {
             
           ?>
    
  
  <tr>
    <td valign="top" class="style89"><span class="style45"><?php echo $this->session->userdata('blank_parameter_three')?></span></td>
    <td valign="top"><span class="style103">:</span></td>
    <td valign="top"><span class="style45"><?php echo $this->session->userdata('blank_three_result')?> <?php echo ('%')?></span></td>
  </tr>
  
   <?php 
             }
           if($this->session->userdata('blank_parameter_four'))
           {
             
           ?>
    
  <tr>
    <td valign="top" class="style89"><span class="style45"><?php echo $this->session->userdata('blank_parameter_four')?></span></td>
    <td valign="top"><span class="style103">:</span></td>
    <td valign="top"><span class="style45"><?php echo $this->session->userdata('blank_four_result')?> <?php echo ('%')?></span></td>
  </tr>
    <?php 
             }
           if($this->session->userdata('hct'))
           {
             
           ?>
    
  
  
  <tr>
    <td colspan="5" valign="top"> <span class="style105"><u><strong class="style28">ABSOLUTE VALUE </strong></u> &nbsp;&nbsp;&nbsp;:HCT- <span class="style98"><?php echo $this->session->userdata('hct')?></span></span> <span class="style45">
	<?php echo ('%')?></span><span class="style105"> , MCV - <span class="style98"><?php echo $this->session->userdata('mcv')?></span></span> <span class="style45"><?php echo ('fL')?></span><span class="style105"> , MCH- <span class="style98"><?php echo $this->session->userdata('mch')?></span></span> <span class="style45"><?php echo ('pg')?></span><span class="style105">, MCHC - <span class="style98"><?php echo $this->session->userdata('mchc')?></span></span> <span class="style45"><?php echo ('g/dL')?></span><span class="style105">, RDW - <span class="style98"><?php echo $this->session->userdata('rdw')?></span></span> <span class="style45"><?php echo ('%')?></span><span class="style105">.</span></td>
  </tr>
  
    <?php 
             }
           if($this->session->userdata('cellularity_info'))
           {
             
           ?>
    
  
  <tr>
    <td colspan="5" valign="top"><u><span class="style102">BONE MARROW ASPIRATION REPORT </span></u></td>
  </tr>
  
  
  <tr>
    <td valign="top" class="style104">Cellularity </td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('cellularity_info')?></span></td>
  </tr>
    <?php 
             }
           if($this->session->userdata('me'))
           {
             
           ?> 
  <tr>
    <td valign="top" class="style104">M:E </td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('me')?></span></td>
    </tr>
      <?php 
             }
           if($this->session->userdata('granulopoiesis'))
           {
             
           ?>
    
  
  <tr>
    <td valign="top"><strong class="style104">Granulopoiesis </strong></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('granulopoiesis')?></span></td>
  </tr>
      <?php 
             }
           if($this->session->userdata('neutrophil_bn'))
           {
             
           ?>
    
  
  
  <tr>
    <td valign="top" class="style89"><span class="controls style105">Neutrophil </span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('neutrophil_bn')?> <?php echo ('%')?></span></td>
    </tr>
        <?php 
             }
           if($this->session->userdata('eosinophil_bm'))
           {
             
           ?>
    
  
  
  <tr>
    <td valign="top" class="style89"><span class="controls style105">Eosinophil</span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('eosinophil_bm')?> <?php echo ('%')?></span></td>
    </tr>
   <?php 
             }
           if($this->session->userdata('monocyte_bn'))
           {
             
           ?>
    
  
  <tr>
    <td valign="top" class="style89"><span class="controls style105">Monocyte</span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('monocyte_bn')?> <?php echo ('%')?></span></td>
    </tr>
    <?php 
             }
           if($this->session->userdata('basophil_bn'))
           {
             
           ?>
    
  
  <tr>
    <td valign="top" class="style89"><span class="controls style105">Basophil</span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('basophil_bn')?> <?php echo ('%')?></span></td>
    </tr>
      <?php 
             }
           if($this->session->userdata('matayle_bn'))
           {
             
           ?>
    
  
  
  <tr>
    <td valign="top" class="style89"><span class="controls style105">Matamyeloyte &nbsp;&nbsp;</span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('matayle_bn')?> <?php echo ('%')?></span></td>
    </tr>
        <?php 
             }
           if($this->session->userdata('blank_one_bn_para'))
           {
             
           ?>
    
  
  <tr>
    <td valign="top" class="style89"><span class="style45"><?php echo $this->session->userdata('blank_one_bn_para')?></span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('blank_one_bn_result')?> <?php echo ('%')?></span></td>
    </tr>
     <?php 
             }
           if($this->session->userdata('blank_two_bn_para'))
           {
             
           ?>
    
  
  
  
  <tr>
    <td valign="top" class="style89"><span class="style45"><?php echo $this->session->userdata('blank_two_bn_para')?></span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('blank_two_bn_result')?> <?php echo ('%')?></span></td>
    <?php 
             }
           if($this->session->userdata('blank_three_bn_para'))
           {
             
           ?>
  </tr>
  <tr>
    <td valign="top" class="style89"><span class="style45"><?php echo $this->session->userdata('blank_three_bn_para')?></span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('blank_three_bn_result')?> <?php echo ('%')?></span></td>
  </tr>
  <?php 
             }
           if($this->session->userdata('lymphopoiesis_info'))
           {
             
           ?>
  <tr>
    <td valign="top" class="style89"><strong class="style104">Lymphopoiesis</strong></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('lymphopoiesis_info')?></span></td>
    <?php 
             }
           if($this->session->userdata('lympho_bn'))
           {
             
           ?>
  </tr>
 
  <tr>
    <td valign="top" class="style104">Lymphocyte</td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('lympho_bn')?> <?php echo ('%')?></span></td>
    </tr>
  
  <?php 
             }
           if($this->session->userdata('plas_cell'))
           {
             
           ?>
  <tr>
    <td valign="top" class="style104">Plasma cell </td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('plas_cell')?> <?php echo ('%')?></span></td>
    </tr>
  
    
  <?php 
             }
           if($this->session->userdata('lymphoblast_bm'))
           {
             
           ?>
  <tr>
    <td valign="top" class="style104">Lymphoblast</td>
    <td valign="top"><strong>:</strong></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('lymphoblast_bm')?> <?php echo ('%')?></span></td>
  </tr>


  <?php
             }
           if($this->session->userdata('blank_bm'))
           {

           ?>

  
  <tr>
    <td valign="top" class="style104">Blast</td>
    <td valign="top"><strong>:</strong></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('blank_bm')?> <?php echo ('%')?></span></td>
  </tr>
  <?php 
             }
           if($this->session->userdata('erythropoesis'))
           {
             
           ?>
  <tr>
    <td valign="top" class="style102">Erythropoiesis</td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('erythropoesis')?></span></td>
  </tr>
  
    <?php 
             }
           if($this->session->userdata('megakaryopoiesis'))
           {
             
           ?>
  <tr>
    <td valign="top" class="style89"><span class="style105"><strong>Megakaryopoiesis</strong></span></td>
    <td valign="top"><span class="style105"><strong>:</strong></span></td>
    <td colspan="3" valign="top"><span class="style45"><?php echo $this->session->userdata('megakaryopoiesis')?></span></td>
  </tr>
  
  <?php 
             }
           if($this->session->userdata('comments'))
           {
             
           ?>
  
  <tr>
    <td colspan="5" valign="top"><span class="style45"><?php echo $this->session->userdata('comments')?></span></td>
  </tr>
  <?php 
             }
           if($this->session->userdata('custom_bn'))
           {
             
           ?>

  
  <tr>
 
    <td colspan="5" valign="top"><span class="style45"><?php echo $this->session->userdata('custom_bn')?></span></td>
  </tr>
  
   <?php
	 
	 }else{
	 ?>
  
  <tr>
    <td colspan="5" valign="top">&nbsp;</td>
  </tr>
    <?php
         }
       ?>
</table>
  <br />
  <br />
</div>

    <table width="856" border="0" align="center" cellspacing="0">
      <tr>
        <td valign="top"><span class="style80"><hr style="width:150px"/>
        &nbsp;&nbsp;&nbsp;Checked by</span><br /></td>
        <td width="197" valign="top">&nbsp;</td>
        <td width="197" valign="top">&nbsp;</td>
        <td width="304" rowspan="4" valign="top"><p class="style26"><span class="style84">Dr. Amin Lutful Kabir </span><br />
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
        <td width="200" valign="top">&nbsp;</td>
        <td colspan="2" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
        <td valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td valign="top">&nbsp;</td>
        <td colspan="2" valign="top"><span class="style89">Printing Date &amp; Time:</span>
          <?php
$today=date("d-m-Y");
$timeset=strtotime("+ 4hour");
$bdtimes=date("h:i:s A",$timeset);

echo "$today, $bdtimes";

?></td>
        <td valign="top">&nbsp;</td>
      </tr>
    </table>
</div>
