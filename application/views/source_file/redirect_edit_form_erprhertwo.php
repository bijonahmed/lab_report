<!DOCTYPE html>
<html lang="en" ng-app="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>resource/angular.min.js"></script>

        <style>
            .red-tooltip + .tooltip > .tooltip-inner {background-color: #f00;}

        </style>
        <style>
            .ui-autocomplete {
                max-width: 550px;
                max-height: 400px;
                overflow-y: auto;
                /* prevent horizontal scrollbar */
                overflow-x: hidden;
                /* add padding to account for vertical scrollbar */
                padding-right: 20px;
            }
            /* IE 6 doesn't support max-height
             * we use height instead, but this forces the menu to always be this tall
             */
            * html .ui-autocomplete {
                height: 500px;
            }
        </style>

        <script>
            $(function () {
<?php
foreach ($SearchErprhertwoID as $row):
    $SearchErprhertwoID[] = $row->test_id;
endforeach;

echo "var javascript_array =" . json_encode($SearchErprhertwoID);
?>

                $("#test_id").autocomplete({
                    source: javascript_array
                });

            });
        </script>
    </head>
    <br><br><br>
    <body ng-app="">
        <style>
            .fontssize
            {
                font-size: 22px;
            }
        </style>
        <div class="container">
            <br>
            <div align="right">
                <?php
                if ($CallerprhertwoNameInfo != null) {
                    ?>   
                <br>
                    <a href="<?php echo base_url(); ?>welcome/add_new_report_er_pr_her_two.html">
                        <button class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Reload</button>
                    </a>
                    <?php
                }
                ?>

            </div>
        </div>

        <div class="container">
            <div class="row">

<br>
                <div class="col-md-3">
                    <?php
                    if ($CallerprhertwoNameInfo == null) {
                        ?> 
                        <h3>Edit ER PR HER-2</h3>
                        <?php
                    }
                    ?>

                    <?php
                    if ($CallerprhertwoNameInfo == null) {
                        ?>    
                      
                        <?php
                    }
                    ?>

                    <?php
                    if ($CallerprhertwoNameInfo == null) {
                        ?>

  <hr>
  <style>
      
      .fontcolor
      {
          
          color: red;
      }
  </style>
  <h3 class="fontcolor">{{test_id}}</h3>
                        <form name="employee" method="post" action="<?php echo base_url(); ?>welcome/SearchEpPrHertwoNameInfo.html">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="test_id" id="test_id"required="1" placeholder="Enter Your Test ID" autofocus="1" ng-model="test_id"><br>
                              
                            </div>
                             </div>
                <div class="col-md-3" style="margin-top: 110px;">
                

              
                            <button class="btn btn-success"><span class="glyphicon glyphicon-search"></span>
                        Search&nbsp;&nbsp;</button>
                             
                        </form>
 


  </div>


    <?php
}
?> 
               

               

            </div>

        </div>


        <div class="container">
            <div class="form-group has-success">




<?php
if ($CallerprhertwoNameInfo != null) {
    ?>                

                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example" style="background-color: yellowgreen; border-color: yellow; border-radius: 5px;" >

                        <thead>

                            <tr class="">

                                <td width="100"><div align="left"><strong>Test ID</strong></div></td>
                                <td width="100"><div align="left"><strong>SL NO</strong></div></td>
                                <td width="400"><div align="left"><strong>Patient Name</strong></div></td>
                                <td width="90"><div align="left"><strong>Age</strong></div></td>
                                <td width="90"><div align="left"><strong>Sex</strong></div></td>

                                <th width="250">Action</th>
                            </tr>
                        </thead>
                        <tbody>
    <?php
    foreach ($CallerprhertwoNameInfo as $data) {
        ?>

                                <tr class="">


                                    <td><?php echo $data->test_id ?></td>
                                    <td><?php echo $data->sl_no ?></td>
                                    <td><?php echo $data->patient_name ?></td>
                                    <td><?php echo $data->age ?></td>
                                    <td><?php echo $data->sex; ?></td>
<td><a class="red-tooltip link" data-toggle="tooltip" data-placement="bottom" 
       title="" data-original-title="Edit ER PR HER-2 Report" 
       href="<?php echo redirect("data_record/edit_erprhertwo_rpt/$data->her_two_id"); ?>" onClick="return sure_();" style="text-decoration:none"><div class="glyphicon glyphicon-edit"></div>&nbsp;EDIT</a></td>

                                    </td>
                                </tr>
                                           <?php
                                       }
                                       ?>
                        </tbody>
                    </table>
                            <?php
                        }
                        ?>

            </div>

        </div>

    </body>
</html>