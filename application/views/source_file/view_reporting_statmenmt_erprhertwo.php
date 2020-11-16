<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
         <script language="javascript" src="<?php echo base_url();?>resource/jquery.printPage.js"></script>
        <script>
 $(document).ready(function() {
$(".btnPrint").printPage({
url: "<?php echo base_url(); ?>welcome/erprhertwoConditionalReportPrintingFunction.html",
attr: "href",
message:"Your document is being created"
});
});
</script>
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
    </script>
        <style>
            .headColor{
                background-color: black;
                color: white;
            }
        </style>
 
        <!-- ER Data Search -->
    <br><br><br>
    <div class="container">
 <div align="right">
     <a href="<?php echo base_url();?>welcome/redirect_edit_form_erprhertwo.html"><button type="button" class="btn btn-success"><i class="icon-search"></i> <span class="glyphicon glyphicon-search"></span><strong>&nbsp;FIND ID</strong></button></a>
      <button type="button" class="btn btn-success" onclick="tableToExcel('er_only_search', 'ER PR HER-2 Date Range')"><i class="icon-print"></i> <span class="glyphicon glyphicon-export"></span> Excel Output</button>
      <a href="<?php echo base_url();?>welcome/customized_search.html"><button type="button" class="btn btn-danger"><i class="icon-search"></i> <strong>&nbsp;Cancel</strong></button></a>
        </div>
    
    </div>
    <div id="printablediv">
    <font color="red"> <center><h4>ER PR HER-2<br><?php echo $this->session->userdata('date_from'); ?> From <?php echo $this->session->userdata('date_to'); ?> <br> Total Records Found: <?php echo count($information); ?></h4></center></font>

       <div class="container" style=" width: auto;
    height: 400px;
    overflow: scroll;">
       
        <div class="form-group has-feedback">

            <table cellpadding="0" cellspacing="0" border="1" class="table table-hover tableradius" id="er_only_search" style="">

                <thead>
                    <tr class="headColor">
                        <th width="250">Test ID</th>
                        <th width="150">SL NO</th>
                        <th width="1000">Patient Name</th>
                        <th width="150">Age</th>
                        
                        <th width="150">Rec. Date</th>
                        <th width="150">Deli. Date</th>
                          <th width="100">ER</th>
                            <th width="100">PR</th>
                              <th width="150">HER-2</th>
                       <?php
                       /*
                         <th>Action</th> 
                        * 
                        */
                       
                       
                       ?>     
                      




                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($information as $data) {
                        ?>

                        <tr class="">
                            <td><?php echo $data->test_id; ?></td>
                            <td><?php echo $data->sl_no; ?></td>
                            <td><?php echo $data->patient_name; ?></td> 
                            <td><?php echo $data->age; ?></td> 
                     
                            <td><?php echo $data->reciv_date; ?></td>  
                            <td><?php echo $data->deli_date; ?></td> 
                             <td><?php echo $data->er_result; ?></td> 
                              <td><?php echo $data->pr_result; ?></td> 
                               <td><?php echo $data->her_two_result; ?></td> 

                               <?php
                               /*
                                * 
                              <td>
                                <a class="link" data-toggle="tooltip" data-placement="left" title="EDIT ER PR HER-2" href="<?php echo base_url(); ?>data_record/edit_erprhertwo_rpt/<?php echo $data->her_two_id; ?>" onClick="return save()_;" style="text-decoration:none" target="_blank"><span class="glyphicon glyphicon-edit"></span> Edit</a>


                            </td>
                                * 
                                */
                               
                               ?>
                            



                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div> 
</div>
    <script>
        function save()
        {
            chk = confirm("Are You Sure");
            if (chk)
            {
                return true;
            }
            else {
                return false;
            }
        }
    </script>
    
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