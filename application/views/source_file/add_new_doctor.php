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
foreach ($view_doctor as $row):
    $view_doctor[] = $row->ref_by;
endforeach;

echo "var javascript_array =" . json_encode($view_doctor);
?>

                $("#ref_by").autocomplete({
                    source: javascript_array
                });

            });
        </script>



        <script>

        </script>
    </head>
    <br><br><br>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <?php
                    if ($CallDoctorNameInfo != null) {
                        ?>  



                        <?php
                    } else {
                        ?>
                        <h3>Add New Ref Dr. Prof. Name</h3>
                        Last Saved Hospital Name:  <font color="blue"><?php
                    if (isset($last_doctor_name)) {

                        echo $last_doctor_name->ref_by;
                    }
                        ?></font><br>
                        <font color="red">Total Record Doctor Name: <?php
                        if (isset($view_doctor)) {
                            echo count($view_doctor);
                        }
                        ?></font>
                        <font color="red"  size="">
                        <?php
                        $message = $this->session->userdata('save_message');
                        //echo $message;
                        if (isset($message)) {
                            echo $message;
                            $this->session->unset_userdata('save_message');
                        }
                        ?>
                        </font>
                         
                        <hr>   


                        <?php
                        if ($CallDoctorNameInfo != null) {
                            ?>   

                            <div align="right">
                                <form name="cancel" method="post" action="<?php echo base_url(); ?>welcome/cancel.html">

                                    <button class="btn btn-danger">Reload</button>
                                </form>

                            </div>
                            <?php
                        }
                        ?>



    <?php
}
?>
                    <?php
                    if ($CallDoctorNameInfo == null) {
                        ?>   

                        <div class="">
                            <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/save_data_add_doctor.html">
                                Add Ref by Dr. / Prof. Name <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess1"></label>
                                    <input type="text" class="form-control" name="ref_by" id="hospital_name"required="1" placeholder="Add Doctor Name" autofocus="" ng-model="ref_by" ><br>
                                    <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>
                                            Saved&nbsp;&nbsp;</button>

                                    </center>

                                </div>
                            </form>
                          
                        </div>
  <br>     <br>
 
    <?php
}
?>
  </div>   <div class="col-md-6">


<?php
if ($CallDoctorNameInfo == null) {
    ?>    

                        <h3>Edit New Ref Dr. Prof. Name</h3>
    <?php
}
?>
                    <br><br>
                    <?php
                    if ($CallDoctorNameInfo == null) {
                        ?>    
                        <hr>
                        <?php
                    }
                    ?>


                    <div align="right">
                    <?php
                    if ($CallDoctorNameInfo != null) {
                        ?>    
                            <a href="<?php echo base_url(); ?>welcome/add_new_doctor.html">
                                <button class="btn btn-danger"><span class="glyphicon glyphicon-refresh"></span>&nbsp;Reload</button>
                            </a>

                        <?php
                    }
                    ?>

                    </div>  



                    <div class="">

<?php
if ($CallDoctorNameInfo == null) {
    ?>
                            <form name="employee" method="post" action="<?php echo base_url(); ?>welcome/search_doctor_record.html">
                                Edit Ref by Dr. / Prof. Name <div class="form-group has-success">
                                    <label class="control-label" for="inputSuccess1"></label>
                                    <input type="text" class="form-control" name="doctor_name" id="ref_by"required="1"><br>
                                    <center> <button class="btn btn-success" onClick="return saved()"><span class="glyphicon glyphicon-edit"></span>
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
        </div>   
 </body>
   <div class="container">

        <div class="form-group has-success">




<?php
if ($CallDoctorNameInfo != null) {
    ?>                
                <br>
                <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example" style="background-color: yellowgreen; border-color: yellow; border-radius: 5px;" >

                    <thead>

                        <tr class="">

                            <td width="100"><div align="left"><strong>Doctor  ID</strong></div></td>
                            <td width="200"><div align="left"><strong>Doctor Name</strong></div></td>

                            <th width="250">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                <?php
                foreach ($CallDoctorNameInfo as $data) {
                    ?>

                            <tr class="">


                                <td><?php echo $data->ref_by_doctor_id ?></td>
                                <td><?php echo $data->ref_by; ?></td>
                                <td><a class="red-tooltip link" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Edit Doctor Name" href="<?php echo base_url(); ?>data_record/edit_doctor_name/<?php
                    if (isset($data)) {
                        echo $data->ref_by_doctor_id;
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