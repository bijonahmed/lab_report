<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>

        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
 <script src="<?php echo base_url(); ?>data_table/js/jquery.dataTables.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/DT_bootstrap.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/bootstrap-dataTables-paging.js"></script>
        <script src="<?php echo base_url(); ?>data_table/js/bootstrap-dataTables.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>

        <script>
            $(document).ready(function() {
                $("#test_id").focus();
                $(":focus").css("background-color", "Beige");
            });
        </script>
        <script>
            $(function() {
<?php
foreach ($doctor_info as $row):
    $doctor_info[] = $row->ref_by;
endforeach;

echo "var javascript_array =" . json_encode($doctor_info);
?>

                $("#ref_by").autocomplete({
                    source: javascript_array
                });

            });
        </script>

        <script>
            $(function() {
<?php
foreach ($hospital_info as $row):
    $hospital_info[] = $row->hospital_name;
endforeach;

echo "var javascript_array =" . json_encode($hospital_info);
?>

                $("#hospital_name").autocomplete({
                    source: javascript_array
                });

            });
        </script>

        <script>
            $(function() {
<?php
foreach ($specimen_info as $row):
    $specimen_info[] = $row->specimen_name;
endforeach;

echo "var javascript_array =" . json_encode($specimen_info);
?>

                $("#specimen_name").autocomplete({
                    source: javascript_array
                });

            });
        </script>


        <script>
            $(document).ready(function() {

                //Change these values to style your modal popup
                var align = 'center';									//Valid values; left, right, center
                var top = 10; 											//Use an integer (in pixels)
                var width = 800; 										//Use an integer (in pixels)
                var padding = 10;										//Use an integer (in pixels)
                var backgroundColor = '#FFFFFF'; 						//Use any hex code
                var source = '<?php echo base_url(); ?>data_record/semen_analysis_print_preview'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
                var borderColor = '#333333'; 							//Use any hex code
                var borderWeight = 4; 									//Use an integer (in pixels)
                var borderRadius = 5; 									//Use an integer (in pixels)
                var fadeOutTime = 300; 									//Use any integer, 0 = no fade
                var disableColor = '#666666'; 							//Use any hex code
                var disableOpacity = 40; 								//Valid range 0-100
                var loadingImage = '<?php echo base_url(); ?>loading.gif';		//Use relative path from this page

                //This method initialises the modal popup
                $(".bm").click(function() {
                    modalPopup(align, top, width, padding, disableColor, disableOpacity, backgroundColor, borderColor, borderWeight, borderRadius, fadeOutTime, source, loadingImage);
                });

                //This method hides the popup when the escape key is pressed
                $(document).keyup(function(e) {
                    if (e.keyCode == 27) {
                        closePopup(fadeOutTime);
                    }
                });

            });
        </script>

        <script>
            $(document).ready(function() {
                $(".btnPrint").printPage({
                    url: "<?php echo base_url(); ?>data_record/semen_analysis_print_preview.html",
                    attr: "href",
                    message: "Your document is being created"
                });
            });
        </script>


        <style>
            .ui-autocomplete {
                max-height: 500px;
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
                height: 100px;
            }
        </style>

    </head>
    <br><br><br>
    <body>

        <div class="container">

            <div align="right">
                <button class="btn btn-primary btnPrint"><span class="glyphicon glyphicon-print"></span>&nbsp;Print</button>
                <button class="btn bm btn btn-primary"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp;Preview</button>
                <button class="btn btn-primary" data-toggle="modal" data-target="#search"><span class="glyphicon glyphicon-search"></span>&nbsp;Search</button>       
            </div>




            <br>
            <font color="white"  size="">
            <?php
            $message = $this->session->userdata('save_message');
            //echo $message;
            if (isset($message)) {
                echo $message;
                $this->session->unset_userdata('save_message');
            }
            ?>
            </font>
            <form action="<?php echo base_url(); ?>data_record/save_semen_info.html" method="post">

                <div class="form-group has-success">
                    <div class="row">

                        <div class="col-xs-2">
                            <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo "MB15:"; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" required="1">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="patient_name" class="form-control" placeholder="Patient Name">
                        </div>
                        <div class="col-xs-1">
                            <input type="text" name="age" class="form-control" placeholder="Age">
                        </div>
                        <div class="col-xs-2">
                            <select name="sex" class="form-control">

                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">         
                        <div class="col-xs-4">
                            <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name">
                        </div>
                        <div class="col-xs-4">

                            <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name">

                        </div> 
                        <div class="col-xs-4">
                            <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name" disabled="1">
                        </div> 
<?php
/*
 * 
  <div class="col-xs-4">
  <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name">
  </div> */
?>


                    </div>
                    

                    <div class="row"> 


                        <div class="col-xs-12">





                            <div class="row">
                                <br>

                            </div>
                            <div align="left">

<strong><u>
Collection Time & Phy. Examination:</u></strong>
                            </div><br>
                            <div class="row">


                                <div class="col-xs-2">
                                Collection Time
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="collection_time" class="form-control">
                                </div>
                                <div class="col-xs-2">
                                    Examination Time 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="examination_time" class="form-control">
                                </div>
                                
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-2">
                                   Volume 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="volume" class="form-control" value="<?php echo " ml";?>">
                                </div>
                                <div class="col-xs-2">
                                  Color 
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="color" class="form-control" value="<?php echo " Grayish white";?>">
                                </div>
                                <div class="col-xs-2">
                                    Viscosity 
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="viscosity" class="form-control" value="<?php echo "Viscous";?>">
                                </div> <br> <br>
  <div class="col-xs-2">
                                    Lique. 
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="lique" class="form-control" value="<?php echo " After 30 minutes";?>">
                                </div>
                            </div>
                         
                            <div align="left">

                                <strong><u>Chemical Examination:</u></strong>
                            </div>    




                            <div class="row">
                                <div class="col-xs-2">
                                    Reaction 
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="reaction" class="form-control" value="<?php echo "Alkaline"; ?>">
                                </div>
                                <div class="col-xs-2">
                                  Total Spermatozoa Count
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="total_spermo" class="form-control" value="<?php echo " 80 millions/ml"; ?>">
                                </div>

                            </div>
                                                       
                            <div align="left">

                                <strong><u>Motality & Morphology:</u></strong>
                            </div>    




                            <div class="row">
                                <div class="col-xs-2">
                                   Active 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="active" class="form-control" value="<?php echo "80 %"; ?>">
                                </div>
                                <div class="col-xs-1">
                                   Sluggish 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="sluggish" class="form-control" value="<?php echo "10 %"; ?>">
                                </div>
 <div class="col-xs-1">
                                    Non-motile 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="non_motile" class="form-control" value="<?php echo "10 %"; ?>">
                                </div>
                                 <div class="col-xs-1">
                                  Normal 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="normal" class="form-control" value="<?php echo "80 %"; ?>">
                                </div>
                                 <div class="col-xs-1">
                                  Abnormal 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="abnormal" class="form-control" value="<?php echo "10 %"; ?>">
                                </div><br><br>
                            </div>
                                <div class="row">
                                <div class="col-xs-2">
                                <input type="text" name="epithe_cells" class="form-control" value="<?php echo "Epithelial cells :"; ?>">	
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="epithe_count" class="form-control" value="<?php echo "2-4 /HPF"; ?>">
                                </div>
                                <div class="col-xs-2">
                                   <input type="text" name="pus_cells" class="form-control" value="<?php echo "Pus cells :"; ?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="pus_count" class="form-control" value="<?php echo "2-4 /HPF"; ?>">
                                </div>
                                    <div class="col-xs-2">
                                     <input type="text" name="macrophages" class="form-control" value="<?php echo "Macrophage :"; ?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="macro_count" class="form-control" placeholder="RESULT">
                                </div>
                                    <br><br>
                                    <div class="col-xs-2">
                                        <input type="text" name="blank_one" class="form-control"placeholder="BLANK">
                                </div>
                                <div class="col-xs-1">
                                       <input type="text" name="blank_count" class="form-control" placeholder="RESULT">
                                </div>
                                <div class="col-xs-2">
                                   <input type="text" name="blank_two" class="form-control" placeholder="BLANK">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="two_count" class="form-control" placeholder="RESULT">
                                </div>
                                    <div class="col-xs-2">
                                         <input type="text" name="blank_three" class="form-control"placeholder="BLANK">
                                </div>
                                <div class="col-xs-1">
                                   <input type="text" name="three_count" class="form-control" placeholder="RESULT">
                                </div>



                            </div>

                            <div align="left">

                                <strong><u>Comments:</u></strong>
                            </div> 

                            <div class="row">
                                                              <div class="col-xs-12">
                                    <input type="text" name="comments" class="form-control">
                                </div>
                              
                                <br><br>
                                <br>





                            </div>
                            <div class="col-xs-5"></div>
                            <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button>   
                        </div>




                    </div>

                </div>



        </div>
    </div>  







</div>
</form> 

</div>
</body>


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

<!-- HER-2 Data Modal -->

</div>


<!-- HER-2 Data Search -->
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">SEARCH SEMEN REPORT </h4>
            </div>
            <div class="modal-body">
                <div class="form-group has-success">
                    <br><br> 
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="semen_rpt">

                        <thead>
                            <tr class="success">
                                <th width="200">Test ID</th>
                                <th width="420">Patient. Name</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
foreach ($view_data_semenanalysis as $data) {
    ?>

                                <tr class="">
                                    <td><?php echo $data->test_id; ?></span></td>
                                    <td><?php echo $data->patient_name; ?></span></td>

                                    <td>

                                        <a class="link" data-toggle="tooltip" data-placement="left" title="Edit Semen Analysis Report"  href="<?php echo base_url(); ?>data_record/edit_semen_rpt/<?php echo $data->semen_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>

                                    </td>
                                    </td>
                                </tr>
<?php } ?>
                        </tbody>
                    </table>



                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
<script>
    $('.jqte-test').jqte();

    // settings of status
    var jqteStatus = true;
    $(".status").click(function()
    {
        jqteStatus = jqteStatus ? false : true;
        $('.jqte-test').jqte({"status": jqteStatus})
    });
</script>
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
<script type="text/javascript">
    $('#reciv_date').datepicker()
</script>
<script type="text/javascript">
    $('#deli_date').datepicker()
</script>
<script>
    $('[data-toggle="tooltip"]').tooltip({
        'placement': 'top'
    });
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
        'placement': 'top'
    });

    $('#userNameField').tooltip({
        'show': true,
        'placement': 'bottom',
        'title': ""
    });

    $('#userNameField').tooltip('show');
</script>
