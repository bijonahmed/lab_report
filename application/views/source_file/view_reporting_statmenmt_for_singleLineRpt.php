<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>
        <script>
            $(document).ready(function () {
                $(".btnPrint").printPage({
                    url: "<?php echo base_url(); ?>welcome/erprhertwoConditionalReportPrintingFunction.html",
                    attr: "href",
                    message: "Your document is being created"
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
            <button type="button" class="btn btn-success" onclick="tableToExcel('er_only_search', 'Single Line Test Name & Date Range')"><i class="icon-print"></i> <span class="glyphicon glyphicon-export"></span> Excel Output</button>
            <a href="<?php echo base_url(); ?>welcome/customized_search.html"><button type="button" class="btn btn-danger"><i class="icon-search"></i> <strong>&nbsp;Cancel</strong></button></a>
        </div>

    </div>
    <div id="printablediv">
        <font color="red" style="font-size: 15px;"> 
        <center>Single Line Reporting<br> <?php echo $this->session->userdata('starting_date'); ?> From <?php echo $this->session->userdata('ending_date'); ?> <br><?php echo $this->session->userdata('value'); ?> : <?php echo count($information); ?></center></small></font>
    <style>

        .scroll {
            background-color: #00FFFF;
            width: 1200px;
            height: 400px;
            overflow: scroll;
        }

    </style>
    <div class="container">

        <div class="form-group has-feedback">
            <div class="scroll">
                <table cellpadding="0" cellspacing="0" border="3" class="table table-hover tableradius" id="er_only_search" style="">

                    <thead>
                        <tr class="headColor">
                            <th width="280">Test ID</th>
                            <th width="130">SL NO</th>
                            <th width="1000">Patient Name</th>
                            <th width="100">Age</th>
                            <th width="100">Sex</th>
                            <th width="150">Rec. Date</th>
                            <th width="150">Deli. Date</th>

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
                                <td><?php echo $data->sex; ?></td> 
                                <td><?php echo $data->reciv_date; ?></td>  
                                <td><?php echo $data->deli_date; ?></td> 

                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

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
    var tableToExcel = (function () {
        var uri = 'data:application/vnd.ms-excel;base64,'
                , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                , base64 = function (s) {
                    return window.btoa(unescape(encodeURIComponent(s)))
                }
        , format = function (s, c) {
            return s.replace(/{(\w+)}/g, function (m, p) {
                return c[p];
            })
        }
        return function (table, name) {
            if (!table.nodeType)
                table = document.getElementById(table)
            var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}
            window.location.href = uri + base64(format(template, ctx))
        }
    })()
</script>