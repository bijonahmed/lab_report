<style type="text/css">
<!--
.style12 {font-family: Verdana, Arial, Helvetica, sans-serif}
.style13 {color: #000000}
-->
</style>
 <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script><br><br><br>
    <style>
    
        @media print {
  .visible-print {
    display: block !important;
  }
  table.visible-print {
    display: table;
  }
  tr.visible-print {
    display: table-row !important;
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important;
  }
  .hidden-print,
  tr.hidden-print,
  th.hidden-print,
  td.hidden-print {
    display: none !important;
  }
  a[href]:after { display:none; }
}
    </style>
    <style>
            table {
    border-collapse: collapse;
 
}
  @media print{
                        table { page-break-after:auto;}
                        tr    { page-break-inside:avoid;}
                        td    { page-break-inside:auto;}
                        thead { display:table-header-group }
                        border-collapse: collapse;
                        .row-fluid [class*="span"] {
                          min-height: 10px;
                        }
                    }

                    @page { 
                        margin-top: 1cm;
                        margin-right: 1cm;
                        margin-bottom:1cm;
                        margin-left: -1cm;';
                        size:portrait;
                        /*
                        size:landscape;
                        -webkit-transform: rotate(-90deg); -moz-transform:rotate(-90deg);
                        filter:progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
                        */

                    };
</style>
    <div class="container">
 <div align="right">
     <button type="button" class="btn btn-success" onclick="javascript:printDiv('printablediv')"><i class="icon-print"></i> <span class="glyphicon glyphicon-print"></span> Printing</button>
      <button type="button" class="btn btn-success" onclick="tableToExcel('er_only_search', 'HER-2 Date Range')"><i class="icon-print"></i> <span class="glyphicon glyphicon-export"></span> Excel Output</button>
      <a href="<?php echo base_url();?>welcome/customized_search.html"><button type="button" class="btn btn-danger"><i class="icon-search"></i> <strong>&nbsp;Cancel</strong></button></a>
        </div>
    </div>
  <div id="printablediv">
      <font color="red"> <center><h4>Single Line Report<br> <?php echo $this->session->userdata('date_from'); ?> From <?php echo $this->session->userdata('date_to'); ?> <br> Total  Records Found :<?php echo $result; ?></h4></center></font>
<div class="container">
<table width="552" border="1" class="" id="er_only_search" align="center" style="border-collapse:collapse;">
  <tr>
    <td width="50" valign="top"><span class="style8 style13"><strong>S/N.</strong></span></td>
    <td width="415" valign="top"><span class="style8 style13"><strong>Test Name </strong></span></td>
    <td width="65" valign="top"><div align="center" class="style13 style8"><strong>Count</strong></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">1.</span></td>
    <td valign="top"><span class="style10 style12">CD15</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $cd15;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">2.</span></td>
    <td valign="top"><span class="style10 style12">CD117</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $CD117;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">3.</span></td>
    <td valign="top"><span class="style10 style12"> CD30</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $CD30;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">4.</span></td>
    <td valign="top"><span class="style10 style12">CD20</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $CD20;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">5.</span></td>
    <td valign="top"><span class="style10 style12">CD-99</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $CD99;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">6.</span></td>
    <td valign="top"><span class="style10 style12">S100</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $S100;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">7.</span></td>
    <td valign="top"><span class="style10 style12">LCA</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $lca;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">8.</span></td>
    <td valign="top"><span class="style10 style12"> CK</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $CK;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">9.</span></td>
    <td valign="top"><span class="style10 style12">Vimentin</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $Vimentin;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">10</span></td>
    <td valign="top"><span class="style10 style12">HMB45</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $HMB45;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">11.</span></td>
    <td valign="top"><span class="style10 style12"> Desmin</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $desmin;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">12.</span></td>
    <td valign="top"><span class="style10 style12">Kappa</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $Kappa;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">13.</span></td>
    <td valign="top"><span class="style10 style12">Lambda</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $Lambda;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">14.</span></td>
    <td valign="top"><span class="style10 style12">GFAF</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $GFAF;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">15.</span></td>
    <td valign="top"><span class="style10 style12">EMA</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $EMA;?></div></td>
  </tr>
  <tr>
    <td valign="top"><span class="style10 style12">16.</span></td>
    <td valign="top"><span class="style10 style12">T.T.F1</span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $T_T_F1;?></div></td>
  </tr>
   
  <tr>
    <td valign="top">&nbsp;</td>
    <td valign="top"><span class="style10 style12">Total Report </span></td>
    <td valign="top"><div align="center" class="style10 style12"><?php echo $result;?></div></td>
  </tr>
</table>
</div>
</div>
  <script>
var tableToExcel = (function() {
  var uri = 'data:application/vnd.ms-excel;base64,'
    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
  return function(table, name) {
    if (!table.nodeType) table = document.getElementById(table)
    var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
    window.location.href = uri + base64(format(template, ctx))
  }
})()
</script>