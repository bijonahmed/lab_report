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
            $(function() {
<?php
foreach ($view_hospital as $row):
    $view_hospital[] = $row->hospital_name;
endforeach;

echo "var javascript_array =" . json_encode($view_hospital);
?>

                $( "#hospital_name" ).autocomplete({
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
                        if ($CallHospitalNameInfo != null) {
                            ?>    
            <a href="<?php echo base_url();?>welcome/add_new_hospital.html">
 <button class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Reload</button>
            </a>
            <?php
                        }
            ?>
            
        </div>
    </div>
        
        <div class="container">
            <div class="row">
                
              <div class="col-md-6">
           <?php
                        if ($CallHospitalNameInfo != null) {
                            ?>  
          
            
            
            <?php
                        }  else {
                            
                        
            ?>
              
            <h3>Add New Hospital</h3> <h5>Last Saved Hospital Name:<font color="blue"> <?php 
            if(isset($last_hospital_name))
            {
               echo $last_hospital_name->hospital_name; 
            }
            ?></font></h5>
            <strong><font color="red"><h5>Total Record Hospital :<?php if(isset($view_hospital))
            {
                 echo count($view_hospital); 
            }
              ?></h5></font></strong>
            
            <center>  <font color="red" class="fontssize">
                <?php
                $message = $this->session->userdata('save_hospital');
                //echo $message;
                if (isset($message)) {
                    echo $message;
                    $this->session->unset_userdata('save_hospital');
                }
                ?>
                </font></center>
          
            <hr>
             
                    
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_data_add_hosptial.html">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="hospital_name" id="update_hospital_name"required="1" placeholder="Add Hospital Name" ng-model="name" autofocus="1"><br>
                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>
                                        Save&nbsp;&nbsp;</button>

                                </center>

                            </div>
                        </form>
                <?php
                        }
                ?>
            </div>
            
                 <div class="col-md-6">
                <?php
                    if ($CallHospitalNameInfo == null) {
                        ?> 
                   <h3>Edit Hospital</h3>
                      <?php
                    }
                    ?>
             
                       <br><br>
           <?php
                    if ($CallHospitalNameInfo == null) {
                        ?>    
                        <hr>
                        <?php
                    }
                    ?>
             
            <?php
             if ($CallHospitalNameInfo==null) {
            
            
            ?>
              

<form name="employee" method="post" action="<?php echo base_url(); ?>welcome/SearchHosptialNameInfo.html">
                            <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="hospital_name" id="hospital_name"required="1" placeholder="Edit Hospital Name"><br>
                                <center> <button class="btn btn-success" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>
                                        Update&nbsp;&nbsp;</button>

                                </center>

                            </div>
                        </form>

              
            
            <?php
             }
            ?> 
            </div>
            
                
            </div>
           
        </div>
        
         
     <div class="container">
                 <div class="form-group has-success">




                        <?php
                        if ($CallHospitalNameInfo != null) {
                            ?>                

                            <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example" style="background-color: yellowgreen; border-color: yellow; border-radius: 5px;" >

                                <thead>

                                    <tr class="">
                                       
                                        <td width="100"><div align="left"><strong>Hospital ID</strong></div></td>
                                        <td width="200"><div align="left"><strong>Hospital Name</strong></div></td>
                                       
                                        <th width="250">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                 

                                    foreach ($CallHospitalNameInfo as $data) {
                                        ?>

                                        <tr class="">
                                          
                                         
                                            <td><?php echo $data->hospital_id ?></td>
                                             <td><?php echo $data->hospital_name; ?></td>
                                            <td><a class="red-tooltip link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit Hospital Name" href="<?php echo base_url(); ?>data_record/edit_hospital_name/<?php
                                                if (isset($data)) {
                                                    echo $data->hospital_id;
                                                }
                                                ?>" onClick="return sure_();" style="text-decoration:none"><div class="glyphicon glyphicon-edit"></div>&nbsp;EDIT</a></td>

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