
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <link href="<?php echo base_url(); ?>resource/media/css/jquery.dataTables_themeroller.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>resource/media/css/jquery.dataTables.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>resource/jquery-1.9.1.js"></script>          
        <script src="<?php echo base_url(); ?>resource/media/js/jquery.dataTables.js"></script>
        <script>
            $(document).ready(function () {
                $('#singleLIneRpt').DataTable({
                    // "jQueryUI": true,
                    "processing": true,
                    "serverSide": true,
                    "ajax": {
                        "url": "<?php echo base_url(); ?>welcome/by_name_call_all_singleLine.html",
                        "type": "POST"
                    },
                    "columns": [
                        // {"data": "her_two_id"},
                        {"data": "test_id"},
                        {"data": "sl_no"},
                        {"data": "patient_name"},
                        {"data": "reciv_date"},
                        {"data": "deli_date"},
                        {"data": "ref_by"},
                        {"data": "hospital_name"}
                    ]
                });
            });
        </script>
<br>
        <!-- ER Data Search -->
    <br><br>
    <style>
        .search{
            font-size: 22px;
            color: red;
        }
    </style>
    <div class="container">
        <div class="form-group has-success">
            <h4 class="search">Search Single Line Particular Information</h4>
            <hr>
            <table id="singleLIneRpt" border="1" cellpadding="2" cellspacing="1" width="100%" class="mytable display" style="background-color: yellowgreen; border-color: greenyellow;">

                <thead>
                    <tr class="success">
                        <th width="130">Test ID</th>
                        <th width="50">SL NO</th>
                        <th width="160">Patient Name</th> 
                        <th width="40">Rc.Date</th>
                        <th width="40">De.Date</th>
                        <th width="180">Ref. by</th>
                        <th width="170">Hospital Name</th>
                    </tr>
                </thead>
                <tbody>
                <td></td>
                </tbody>
            </table>
</div>
    </div> 