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
                <form name="cancel" method="post" action="<?php echo base_url(); ?>welcome/redirect_edit_form_fluidreport.html">
                    <button class="btn btn-danger"><span class="glyphicon glyphicon-search"></span> Search  </button>  

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
            <form action="<?php echo base_url(); ?>data_record/update_ascitic_fluid_info.html" method="post">

                <div class="form-group has-success">
                    <div class="row">

                        <div class="col-xs-2">
                            <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_fluid_rpt->test_id; ?>">
                            <input type="hidden" name="ascitic_fluid_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_fluid_rpt->ascitic_fluid_id; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" required="1" value="<?php echo $search_fluid_rpt->reciv_date; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date" value="<?php echo $search_fluid_rpt->deli_date; ?>">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" value="<?php echo $search_fluid_rpt->patient_name; ?>">
                        </div>
                        <div class="col-xs-1">
                            <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $search_fluid_rpt->age; ?>"> 
                        </div>
                        <div class="col-xs-2">
                            <select name="sex" class="form-control">
                                <option><?php echo $search_fluid_rpt->sex; ?></option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">         
                        <div class="col-xs-4">
                            <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name" value="<?php echo $search_fluid_rpt->ref_by; ?>">
                        </div>
                        <div class="col-xs-4">

                            <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name" value="<?php echo $search_fluid_rpt->hospital_name; ?>">

                        </div> 
                        <div class="col-xs-4">
                            <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name" value="<?php echo $search_fluid_rpt->specimen_name; ?>">
                        </div> 
                        <?php
                        /*
                         * 
                          <div class="col-xs-4">
                          <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name">
                          </div> */
                        ?>


                    </div>
                    <script>
                        function csf_normal_range()
                        {
                            chk = confirm("Are You Sure Want to Set CSF Normal Range .?");
                            if (chk)
                            {
                                return true;
                            }
                            else {
                                return false;
                            }
                        }
                    </script>

                    <div class="row"> 


                        <div class="col-xs-12">





                            <div class="row">
                                <div class="col-xs-1">
                                    <input name="para_four_rpt" type="checkbox" class="form-control"  data-toggle="tooltip" data-placement="left" title="If Your need please CSF fluid normal range Click here Check Box" onClick="return csf_normal_range();" value="<?php echo $search_fluid_rpt->para_four_rpt; ?>" />
                                </div> 

                            </div>
                            <div align="left">

                                <strong><u>PHYSICAL EXAMINATION:</u></strong>
                            </div>
                            <div class="row">


                                <div class="col-xs-1">
                                    Quantity
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="quantity" class="form-control" value="<?php echo $search_fluid_rpt->quantity; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Color 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="color" class="form-control" value="<?php echo $search_fluid_rpt->color; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Appearance  
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="apperance" class="form-control" value="<?php echo $search_fluid_rpt->apperance; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Sediment </div>
                                <div class="col-xs-1">
                                    <input type="text" name="sediment" class="form-control" value="<?php echo $search_fluid_rpt->sediment; ?>">
                                </div>
                                <div class="col-xs-1">
                                    On staning  </div>
                                <div class="col-xs-1">
                                    <input type="text" name="on_staing" class="form-control" value="<?php echo $search_fluid_rpt->on_staing; ?>">
                                </div>
                            </div>
                            <div align="left">

                                <strong><u>BIOCHEMICAL EXAMINATION:</u></strong>
                            </div>

                            <div class="row">
                                <div class="col-xs-1">
                                    Glucose
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="glucous" class="form-control" value="<?php echo $search_fluid_rpt->glucous; ?>">
                                </div>
                                <div class="col-xs-1">
                                    T. Protein 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="t_protein" class="form-control" value="<?php echo $search_fluid_rpt->t_protein; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Chloride 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="chloride" class="form-control" value="<?php echo $search_fluid_rpt->chloride; ?>">
                                </div>

                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-2">
                                    <input type="text" name="parameter_one" class="form-control" placeholder="BLANK" value="<?php echo $search_fluid_rpt->parameter_one; ?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="para_one_rpt" class="form-control" placeholder="Result" value="<?php echo $search_fluid_rpt->para_one_rpt; ?>">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="parameter_two" class="form-control" placeholder="BLANK" value="<?php echo $search_fluid_rpt->parameter_two; ?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="para_two_rpt" class="form-control" placeholder="Result" value="<?php echo $search_fluid_rpt->para_two_rpt; ?>">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="parameter_three" class="form-control" placeholder="BLANK" value="<?php echo $search_fluid_rpt->parameter_three; ?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="para_three_rpt" class="form-control" placeholder="Result" value="<?php echo $search_fluid_rpt->para_three_rpt; ?>">
                                </div>

                            </div>
                            <br>
                            <div align="left">

                                <strong><u>BACTERIOLOGICAL EXAMINATION:</u></strong>
                            </div>    




                            <div class="row">
                                <div class="col-xs-1">
                                    Z.N.Stain
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="zn_stain" class="form-control"value="<?php echo $search_fluid_rpt->zn_stain; ?>">
                                </div>
                                <div class="col-xs-1">
                                    GramStain 
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="gram_stain" class="form-control" value="<?php echo $search_fluid_rpt->gram_stain; ?>">
                                </div>

                            </div>
                            <div align="left">

                                <strong><u>Total Count:</u></strong>
                            </div>   

                            <div class="row">
                                <div class="col-xs-1">
                                    WBC 	
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="wbc" class="form-control" placeholder="WBC" value="<?php echo $search_fluid_rpt->wbc; ?>">
                                </div>
                                <div class="col-xs-1">
                                    RBC 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="rbc" class="form-control" placeholder="RBC" value="<?php echo $search_fluid_rpt->rbc; ?>">
                                </div>



                            </div>

                            <div align="left">

                                <strong><u>Differential count:</u></strong>
                            </div> 

                            <div class="row">
                                <div class="col-xs-1">
                                    Neutrophils	
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="neutrophils" class="form-control" value="<?php echo $search_fluid_rpt->neutrophils; ?>">
                                </div>
                                <div class="col-xs-1">
                                    Lymphocytes
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="lymphocytes" class="form-control" value="<?php echo $search_fluid_rpt->lymphocytes; ?>">
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="parameter_five" class="form-control" placeholder="BLANK" value="<?php echo $search_fluid_rpt->parameter_five; ?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="para_five_rpt" class="form-control" placeholder="Result" value="<?php echo $search_fluid_rpt->para_five_rpt; ?>">
                                </div>
                                <br>
                                <br>





                            </div>
                            <div class="col-xs-5"></div>
                            <button class="btn btn-primary" onClick="return save_()"><span class="glyphicon glyphicon-saved"></span>&nbsp;UPDATE</button>   
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
