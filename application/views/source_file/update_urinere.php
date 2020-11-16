<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

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
                var source = '<?php echo base_url(); ?>data_record/print_preview_urinere'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
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
                    url: "<?php echo base_url(); ?>data_record/print_preview_urinere.html",
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
                <form name="cancel" method="post" action="<?php echo base_url(); ?>welcome/urine_cancel.html">
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-backward"></span> CLOSE  </button>  

                </form>

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
            <form action="<?php echo base_url(); ?>data_record/update_urine_re_information.html" method="post">

                <div class="form-group has-success">
                    <div class="row">

                        <div class="col-xs-2">
                            <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_urine_re->test_id; ?>">
                            <input type="hidden" name="urine_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_urine_re->urine_id; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" required="1" value="<?php echo $search_urine_re->reciv_date; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date" value="<?php echo $search_urine_re->deli_date; ?>"> 
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" value="<?php echo $search_urine_re->patient_name; ?>">
                        </div>
                        <div class="col-xs-1">
                            <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $search_urine_re->age; ?>">
                        </div>
                        <div class="col-xs-2">
                            <select name="sex" class="form-control">
                                <option><?php echo $search_urine_re->sex; ?></option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">         
                        <div class="col-xs-4">
                            <input type="text" name="ref_by" id="ref_by" class="form-control" value="<?php echo $search_urine_re->ref_by; ?>">
                        </div>
                        <div class="col-xs-4">

                            <input type="text" name="hospital_name" id="hospital_name" class="form-control" value="<?php echo $search_urine_re->hospital_name; ?>">

                        </div> 
                        <div class="col-xs-2">
                            <input type="text" name="material" id="hospital_name" class="form-control" value="<?php echo $search_urine_re->material; ?>">
                        </div> 
<?php
/*
 * 
  <div class="col-xs-4">
  <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name">
  </div> */
?>


                    </div>
                    <br>
                    <div class="row">         
                        <div class="col-xs-12">


                            <center>   <strong><u>PHYSICAL EXAMINATION</u></strong></center>

                            <br>        
                            <div class="row">

                                <div class="col-xs-1">
                                    Quantity
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="quantity" class="form-control" value="<?php echo $search_urine_re->quantity; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Color
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="color" class="form-control" value="<?php echo $search_urine_re->color; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Appearance
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="apper" class="form-control" value="<?php echo $search_urine_re->apper; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Sediment
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="sediment" class="form-control" value="<?php echo $search_urine_re->sediment; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Spec.Grav.
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="spe_grav" class="form-control" value="<?php echo $search_urine_re->spe_grav; ?>">
                                </div> <br><br>
                                <center><strong><u>CHEMICAL EXAMINATION</u></strong></center>
                                <br>                  <div class="col-xs-1">
                                    Reaction
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="reaction" class="form-control" value="<?php echo $search_urine_re->reaction; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Ex. Ph.
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="ex_ph" class="form-control" value="<?php echo $search_urine_re->ex_ph; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Albumin
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="albumin" class="form-control" value="<?php echo $search_urine_re->albumin; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Sugar
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="sugur" class="form-control" value="<?php echo $search_urine_re->sugur; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Others	
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="others" class="form-control" value="<?php echo $search_urine_re->others; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Acetone
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="acetone" class="form-control"value="<?php echo $search_urine_re->acetone; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-1">
                                    BileSalt</div>
                                <div class="col-xs-1">
                                    <input type="text" name="bile_salt" class="form-control" value="<?php echo $search_urine_re->bile_salt; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Bile pig.
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="bile_pig" class="form-control" value="<?php echo $search_urine_re->bile_pig; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Urobili
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="urobili" class="form-control" value="<?php echo $search_urine_re->urobili; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Chyle  </div>
                                <div class="col-xs-1">
                                    <input type="text" name="chyle" class="form-control" value="<?php echo $search_urine_re->chyle; ?>">
                                </div>
                                <div class="col-xs-1">
                                    B.Jons Protein  </div>
                                <div class="col-xs-1">
                                    <input type="text" name="b_jons_protein" class="form-control" value="<?php echo $search_urine_re->b_jons_protein; ?>">
                                </div>
                            </div>
                            <strong><center><u>MICROSCOPIC EXAMINATION</u></center></strong>

                            <div class="row">
                                <div class="col-xs-1">
                                    Epi. Cell
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="ep_cell" class="form-control" value="<?php echo $search_urine_re->ep_cell; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Pus Cells
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="pus_cells" class="form-control" value="<?php echo $search_urine_re->pus_cells; ?>">
                                </div>
                                <div class="col-xs-1">
                                    RBCs
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="rbcs" class="form-control" value="<?php echo $search_urine_re->rbcs; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Mucus
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="mucus" class="form-control" value="<?php echo $search_urine_re->mucus; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Pus Cust
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="pus_cast" class="form-control" value="<?php echo $search_urine_re->pus_cast; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-1">
                                    Sperto. 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="sperat" class="form-control" value="<?php echo $search_urine_re->sperat; ?>">
                                </div>
                                <div class="col-xs-1">
                                    WBCcast
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="wbc" class="form-control" value="<?php echo $search_urine_re->wbc; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Granu.Cast
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="granuloar" class="form-control" value="<?php echo $search_urine_re->granuloar; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Cal.Oxa.
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="cal_oxa" class="form-control" value="<?php echo $search_urine_re->cal_oxa; ?>">
                                </div>
                                <div class="col-xs-1">
                                    U.A.Cry
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="uric_acid" class="form-control" value="<?php echo $search_urine_re->uric_acid; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-1">
                                    Tre.Phs
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="tre_phs" class="form-control" value="<?php echo $search_urine_re->tre_phs; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Sulph.Cry
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="sulph_cry" class="form-control" value="<?php echo $search_urine_re->sulph_cry; ?>">
                                </div>
                                <div class="col-xs-1">
                                    HaylineCast 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="hayline_cast" class="form-control" value="<?php echo $search_urine_re->hayline_cast; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Bacteria
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="bacteria" class="form-control" value="<?php echo $search_urine_re->bacteria; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Candida
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="candida" class="form-control" value="<?php echo $search_urine_re->candida; ?>">
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-1">
                                    Amor.Ph	
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="amr_ph" class="form-control" value="<?php echo $search_urine_re->amr_ph; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Urate Cry.
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="urate_crys" class="form-control" value="<?php echo $search_urine_re->urate_crys; ?>">
                                </div>
                                <br>
                                <div class="col-xs-1"></div>      
                                <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>&nbsp;UPDATE</button>



                            </div>


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
                <h4 class="modal-title" id="myModalLabel">SEARCH URINE REPORT </h4>
            </div>
            <div class="modal-body">
                <div class="form-group has-success">
                    <br><br> 
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="example">

                        <thead>
                            <tr class="success">
                                <th width="200">Test ID</th>
                                <th width="420">Patient. Name</th>

                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
foreach ($view_data_urine_re as $data) {
    ?>

                                <tr class="">
                                    <td><?php echo $data->test_id; ?></span></td>
                                    <td><?php echo $data->patient_name; ?></span></td>

                                    <td>

                                        <a class="link" data-toggle="tooltip" data-placement="left" title="Edit Urine Report"  href="<?php echo base_url(); ?>data_record/edit_urine_rpt/<?php echo $data->urine_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>



    <?php
    /*
      <a class="link" href="<?php echo base_url();?>data_record/delete_dose_schedule/<?php echo $data->patient_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>
     */
    ?>


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
