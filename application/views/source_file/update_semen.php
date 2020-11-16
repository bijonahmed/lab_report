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
                <form name="cancel" method="post" action="<?php echo base_url();?>welcome/semen_cancel.html">
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
            <form action="<?php echo base_url(); ?>data_record/update_semen_info.html" method="post">

                <div class="form-group has-success">
                    <div class="row">

                        <div class="col-xs-2">
                            <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_semen_rpt->test_id;?>">
                            <input type="hidden" name="semen_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_semen_rpt->semen_id;?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" required="1" value="<?php echo $search_semen_rpt->reciv_date;?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date" value="<?php echo $search_semen_rpt->deli_date;?>">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" value="<?php echo $search_semen_rpt->patient_name;?>">
                        </div>
                        <div class="col-xs-1">
                            <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $search_semen_rpt->age;?>">
                        </div>
                        <div class="col-xs-2">
                            <select name="sex" class="form-control">
                                <option><?php echo $search_semen_rpt->sex;?></option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">         
                        <div class="col-xs-4">
                            <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name" value="<?php echo $search_semen_rpt->ref_by;?>">
                        </div>
                        <div class="col-xs-4">

                            <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name" value="<?php echo $search_semen_rpt->hospital_name;?>">

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
                                    <input type="text" name="collection_time" class="form-control" value="<?php echo $search_semen_rpt->collection_time;?>">
                                </div>
                                <div class="col-xs-2">
                                    Examination Time 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="examination_time" class="form-control" value="<?php echo $search_semen_rpt->examination_time;?>">
                                </div>
                                
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-xs-2">
                                   Volume 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="volume" class="form-control" value="<?php echo $search_semen_rpt->volume;?>">
                                </div>
                                <div class="col-xs-2">
                                  Color 
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="color" class="form-control" value="<?php echo $search_semen_rpt->color;?>">
                                </div>
                                <div class="col-xs-2">
                                    Viscosity 
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="viscosity" class="form-control" value="<?php echo $search_semen_rpt->viscosity;?>">
                                </div> <br> <br>
  <div class="col-xs-2">
                                    Lique. 
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="lique" class="form-control" value="<?php echo $search_semen_rpt->lique;?>">
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
                                    <input type="text" name="reaction" class="form-control" value="<?php echo $search_semen_rpt->reaction;?>">
                                </div>
                                <div class="col-xs-2">
                                  Total Spermatozoa Count
                                </div>
                                <div class="col-xs-2">
                                    <input type="text" name="total_spermo" class="form-control" value="<?php echo $search_semen_rpt->total_spermo;?>">
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
                                    <input type="text" name="active" class="form-control" value="<?php echo $search_semen_rpt->active;?>">
                                </div>
                                <div class="col-xs-1">
                                   Sluggish 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="sluggish" class="form-control" value="<?php echo $search_semen_rpt->sluggish;?>">
                                </div>
 <div class="col-xs-1">
                                    Non-motile 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="non_motile" class="form-control" value="<?php echo $search_semen_rpt->non_motile;?>">
                                </div>
                                 <div class="col-xs-1">
                                  Normal 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="normal" class="form-control" value="<?php echo $search_semen_rpt->normal;?>">
                                </div>
                                 <div class="col-xs-1">
                                  Abnormal 
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="abnormal" class="form-control" value="<?php echo $search_semen_rpt->abnormal;?>">
                                </div><br><br>
                            </div>
                                <div class="row">
                                <div class="col-xs-2">
                                <input type="text" name="epithe_cells" class="form-control" value="<?php echo $search_semen_rpt->epithe_cells;?>">	
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="epithe_count" class="form-control" value="<?php echo $search_semen_rpt->epithe_count;?>">
                                </div>
                                <div class="col-xs-2">
                                   <input type="text" name="pus_cells" class="form-control" value="<?php echo $search_semen_rpt->pus_cells;?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="pus_count" class="form-control" value="<?php echo $search_semen_rpt->pus_count;?>">
                                </div>
                                    <div class="col-xs-2">
                                     <input type="text" name="macrophages" class="form-control" value="<?php echo $search_semen_rpt->macrophages;?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="macro_count" class="form-control" placeholder="RESULT" value="<?php echo $search_semen_rpt->macro_count;?>">
                                </div>
                                    <br><br>
                                    <div class="col-xs-2">
                                        <input type="text" name="blank_one" class="form-control"placeholder="BLANK" value="<?php echo $search_semen_rpt->blank_one;?>">
                                </div>
                                <div class="col-xs-1">
                                       <input type="text" name="blank_count" class="form-control" placeholder="RESULT" value="<?php echo $search_semen_rpt->blank_count;?>">
                                </div>
                                <div class="col-xs-2">
                                   <input type="text" name="blank_two" class="form-control" placeholder="BLANK" value="<?php echo $search_semen_rpt->blank_two;?>">
                                </div>
                                <div class="col-xs-1">
                                    <input type="text" name="two_count" class="form-control" placeholder="RESULT" value="<?php echo $search_semen_rpt->two_count;?>">
                                </div>
                                    <div class="col-xs-2">
                                         <input type="text" name="blank_three" class="form-control"placeholder="BLANK" value="<?php echo $search_semen_rpt->blank_three;?>">
                                </div>
                                <div class="col-xs-1">
                                   <input type="text" name="three_count" class="form-control" placeholder="RESULT" value="<?php echo $search_semen_rpt->three_count;?>">
                                </div>



                            </div>

                            <div align="left">

                                <strong><u>Comments:</u></strong>
                            </div> 

                            <div class="row">
                                                              <div class="col-xs-12">
                                    <input type="text" name="comments" class="form-control" value="<?php echo $search_semen_rpt->comments;?>">
                                </div>
                              
                                <br><br>
                                <br>





                            </div>
                            <div class="col-xs-5"></div>
                            <button class="btn btn-success" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>&nbsp;UPDATE</button>   
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
