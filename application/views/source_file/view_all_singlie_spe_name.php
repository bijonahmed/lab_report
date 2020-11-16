<br><br>
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
                    $('#singline').DataTable({
                      //  "jQueryUI": true,
                        "processing": true,
                        "serverSide": true,
                        "ajax": {
                            "url": "<?php echo base_url(); ?>welcome/call_all_singline_SpeccimenName.html",
                            "type": "POST"
                        },
                        "columns": [
                           
                         //   {"data": "immu_id"},
                            {"data": "test_id"},
                           {"data": "specimen_name"} 
                       //    {"data": "her_two_id"}
                        //   {"data": "note"}
                        ]
                    });
                }); 
</script>
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
              <h4 class="search">Search Single Line Specimen</h4>
                    <hr>
                    <table id="singline" border="1" cellpadding="2" cellspacing="1" width="100%" class="mytable display" style="background-color: yellowgreen; border-color: greenyellow;">

                        <thead>
                            <tr class="success">
                                    <th width="20">ID</th>
                                <th width="350">Specimen name</th>
                                
                           
                         
                            </tr>
                        </thead>
                        <tbody>
                          
 
                          <td></td>
                        </tbody>
                    </table>


</div>
                </div> 

          