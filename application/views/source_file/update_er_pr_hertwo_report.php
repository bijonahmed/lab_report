<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
        <link href="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/job_ jquery-te-1.4.0.css" rel="stylesheet">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>admin_panel/jQuery-TE_v.1.4.0/jquery-te-1.4.0.min.js"></script>
        <script src="<?php echo base_url(); ?>javascript_form/examples/gen_validatorv4.js"  type="text/javascript" xml:space="preserve"></script>


        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

        <script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>

        <script>
            $(document).ready(function () {
                $("#slno").focus();
                $(":focus").css("background-color", "Beige");
            });
        </script>
        <script>
            $(function () {
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
            $(function () {
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
            $(function () {
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
        <style>
            .particularinfo
            {
                font-family: Verdana, Arial, Helvetica, sans-serif;
                font-size: 14px;
                color: red;

            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div align="left"><div class="particularinfo">SL NO: <?php echo $search_erprhertwo->sl_no; ?>, Test ID: <?php echo $search_erprhertwo->test_id; ?>
                            , Patient Name: <?php echo $search_erprhertwo->patient_name; ?>
                        </div></div>


                </div>
                <div class="col-md-3">
                    <div align="right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#bijon"><span class="glyphicon glyphicon-plus"></span>&nbsp;Data</button>
                        <a href="<?php echo base_url(); ?>welcome/redirect_edit_form_erprhertwo.html"><button class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>&nbsp;Edit</button></a>
                    </div>
                </div>


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

            <form action="<?php echo base_url(); ?>data_record/upate_her_two_info.html" method="post">
                <div class="form-group has-success">
                    <div class="row">
                        <div class="col-xs-1">
                            <input type="text" name="sl_no" class="form-control" placeholder="SL NO" id="slno" required="1" value="<?php echo $search_erprhertwo->sl_no; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_erprhertwo->test_id; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" value="<?php echo $search_erprhertwo->reciv_date; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date" value="<?php echo $search_erprhertwo->deli_date; ?>">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" value="<?php echo $search_erprhertwo->patient_name; ?>">
                        </div>
                        <div class="col-xs-1">
                            <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $search_erprhertwo->age; ?>">
                        </div>
                        <div class="col-xs-1">
                            <select name="sex" class="form-control">
                                <option><?php echo $search_erprhertwo->sex; ?></option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">         
                        <div class="col-xs-4">
                            <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name" value="<?php echo $search_erprhertwo->ref_by; ?>">
                            <input type="hidden" name="her_two_id" id="her_two_id" class="form-control" placeholder="Doctor Name" value="<?php echo $search_erprhertwo->her_two_id; ?>">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name" value="<?php echo $search_erprhertwo->hospital_name; ?>">
                        </div>       
                        <div class="col-xs-4">
                            <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name" value="<?php echo $search_erprhertwo->specimen_name; ?>">
                        </div>      

                    </div>

                    <div class="row">         
                        <div class="col-xs-12">
                            <textarea class="jqte-test form-control" name="note"><?php echo $search_erprhertwo->note; ?></textarea>

                        </div>
                    </div>      <strong>ER </strong>
                    <div class="row"> 

                        <div class="col-xs-10">
                            <input type="text"  name="er_rpt" class="form-control" value="<?php echo $search_erprhertwo->er_rpt; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="er_score" value='<?php echo $search_erprhertwo->er_score; ?>'>
                        </div>       


                    </div>
                     <strong>PR </strong>
                    <div class="row"> 

                        <div class="col-xs-10">
                            <input type="text" name="pr_rpt" class="form-control" placeholder="PR" value="<?php echo $search_erprhertwo->pr_rpt; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="pr_score" value='<?php echo $search_erprhertwo->pr_score; ?>'>
                        </div>       


                    </div>
                    <strong> HER-2 </strong>
                    <div class="row"> 

                        <div class="col-xs-10">
                            <textarea class="form-control" name="her_two_rpt" rows="2"><?php echo $search_erprhertwo->her_two_rpt; ?></textarea>
                        </div>
                        <div class="col-xs-2">
                            <br>
                            <select name="her_two_score" class="form-control">
                                <option><?php echo $search_erprhertwo->her_two_score; ?></option>
                                <option></option>
                                <option>"O"</option>
                                <option>1+</option>
                                <option>2+</option>
                                <option>3+</option>

                            </select>
                        </div> 
       <div class="container">
<br><br><br><br><strong>Ki67</strong>                              
  <div class="row">         

                        <div class="col-xs-12">
                            <input type="text" name="kisixtyseven" class="form-control" value="<?php echo $search_erprhertwo->kisixtyseven; ?>">
                        </div>
                         

                    </div>
                    </div>

                    </div> <strong>COMMENTS </strong>
                    <div class="row">         
                        <div class="col-xs-4">
                            <input type="text" name="er_result" class="form-control" value="<?php echo $search_erprhertwo->er_result; ?>">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="pr_result" class="form-control" value="<?php echo $search_erprhertwo->pr_result; ?>">
                        </div>       
                        <div class="col-xs-4">
                            <input type="text" name="her_two_result" class="form-control" value="<?php echo $search_erprhertwo->her_two_result; ?>">
                        </div>      

                    </div>
                    <div class="row"><br>
                        <div class="col-xs-12">
                            <input type="text" name="rpt_noet" class="form-control" placeholder="Note" value="<?php echo $search_erprhertwo->rpt_noet; ?>">
                        </div>  
                    </div><br>
                    <center>
                        <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>&nbsp;UPDATE</button>

                    </center>
            </form>



        </div>




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
<div class="modal fade" id="bijon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><h3>HER-2 DATA</h3></h4>
            </div>
            <div class="modal-body">
                <font color="red">    
                <h3>a) Tumor cells show no staining.<br>
                    Score : 'O'</h3>
                </font>
                <h3><font color="red">b) Weak incomplete membrane staining is observed in more than 10 % of the tumor cells.<br>
                    Score : 1+</font></h3>
                <h3><font color="red">
                    c) Weak to moderate complete membrane staining is observed in more than 10 % of the tumor cells.<br>
                    Score : 2+
                    </font></h3>
                <h3><font color="red">
                    d) Strong complete membrane staining is observed in more than 10 % of the tumor cells.<br>
                    Score : 3+</font></h3>
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
    $(".status").click(function ()
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


<!-- HER-2 Data Modal -->
<div class="modal fade" id="bijon" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel"><h3>HER-2 DATA</h3></h4>
            </div>
            <div class="modal-body">
                <font color="red">    
                <h3>a) Tumor cells show no staining.<br>
                    Score : 'O'</h3>
                </font>
                <h3><font color="red">b) Weak incomplete membrane staining is observed in more than 10 % of the tumor cells.<br>
                    Score : 1+</font></h3>
                <h3><font color="red">
                    c) Weak to moderate complete membrane staining is observed in more than 10 % of the tumor cells.<br>
                    Score : 2+
                    </font></h3>
                <h3><font color="red">
                    d) Strong complete membrane staining is observed in more than 10/30 % of the tumor cells.<br>
                    Score : 3+</font></h3>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>