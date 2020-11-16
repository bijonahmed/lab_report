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
foreach ($SearchBoneMarrowID as $row):
    $SearchBoneMarrowID[] = $row->test_id;
endforeach;

echo "var javascript_array =" . json_encode($SearchBoneMarrowID);
?>

                $("#test_id").autocomplete({
                    source: javascript_array
                });

            });
        </script>
    </head>
    <br><br><br>
    <body>
                    <form name="bonemarrowtestid" method="post" action="<?php echo base_url(); ?>data_record/find_data_bonemarrowTestid.html">
        <div class="container">
            <div class="row">
                <div style="height: 120px;"></div>
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <h3> Enter Your Test ID</h3>
                      <hr> 
                
                    <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess1"></label>
                                    <input type="text" class="form-control" name="test_id" id="test_id"required="1" placeholder="Enter Test ID" autofocus=""><br>
                                   

                                </div>
                           
                          
                        </div>
                
                <div class="col-md-4">
                    <br><br> <br><br><br>
                  <button class="btn btn-success"><span class="glyphicon glyphicon-search"></span>
                                            Search&nbsp;&nbsp;</button>

                                  
                    
                </div>
                
                
                
  <br>     <br>
 
  
  </div>   


            </div>
                         </form>
        </div>   
 </body>
   <div class="container">

        <div class="form-group has-success">


 

        </div>

    </div>
 