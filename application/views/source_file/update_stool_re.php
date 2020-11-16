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
                <form name="cancel" method="post" action="<?php echo base_url(); ?>welcome/cancel.html">
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
            <form action="<?php echo base_url(); ?>data_record/update_stool_re_information.html" method="post">

                <div class="form-group has-success">
                    <div class="row">

                        <div class="col-xs-2">
                            <input type="text" name="test_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_stool_re->test_id; ?>">
                            <input type="hidden" name="stool_id" id="test_id" class="form-control" placeholder="Test ID" value="<?php echo $search_stool_re->stool_id; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date" value="<?php echo $search_stool_re->reciv_date; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date" value="<?php echo $search_stool_re->deli_date; ?>">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" value="<?php echo $search_stool_re->patient_name; ?>">
                        </div>
                        <div class="col-xs-1">
                            <input type="text" name="age" class="form-control" placeholder="Age" value="<?php echo $search_stool_re->age; ?>">
                        </div>
                        <div class="col-xs-2">
                            <select name="sex" class="form-control">
                                <option><?php echo $search_stool_re->sex; ?></option>
                                <option>Male</option>
                                <option>Female</option>

                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">         
                        <div class="col-xs-4">
                            <input type="text" name="ref_by" id="ref_by" class="form-control" placeholder="Doctor Name" value="<?php echo $search_stool_re->ref_by; ?>">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="hospital_name" id="hospital_name" class="form-control" placeholder="Hospital Name" value="<?php echo $search_stool_re->hospital_name; ?>">
                        </div> 
                        <div class="col-xs-2">
                            <input type="text" name="material" id="hospital_name" class="form-control" value="<?php echo $search_stool_re->material; ?>">
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
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#home" data-toggle="tab">PHYSICAL EXAMINATION</a></li>
                                <li><a href="#messages" data-toggle="tab">CHEMICAL EXAMINATION</a></li>

                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home">
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            Quantity
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" name="quantity" class="form-control"  value="<?php echo $search_stool_re->quantity; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Consistency
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" name="consistency" class="form-control"  value="<?php echo $search_stool_re->consistency; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Colour
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" name="color" class="form-control"  value="<?php echo $search_stool_re->color; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            Un. F P 	
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" name="un_fp" class="form-control"  value="<?php echo $search_stool_re->un_fp; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Odour
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" name="ordor" class="form-control"  value="<?php echo $search_stool_re->ordor; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Mucus
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" name="mucus" class="form-control"  value="<?php echo $search_stool_re->mucus; ?>">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            Blood	
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" name="blood" class="form-control"  value="<?php echo $search_stool_re->blood; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Helminth
                                        </div>
                                        <div class="col-xs-2">
                                            <input type="text" name="helminth" class="form-control"  value="<?php echo $search_stool_re->helminth; ?>">
                                        </div>

                                    </div>



                                    <br>  
                                </div>





                                <div class="tab-pane" id="messages">


                                    <br>        
                                    <div class="row">
                                        <div class="col-xs-1">
                                            Reaction
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="reaction" class="form-control" value="<?php echo $search_stool_re->reaction; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            R/S
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="rs" class="form-control" value="<?php echo $search_stool_re->rs; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Fat.
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="fat" class="form-control" value="<?php echo $search_stool_re->fat; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Ova of A.L 	
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="ova_al" class="form-control" value="<?php echo $search_stool_re->ova_al; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Bilirubin
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="bilirubin" class="form-control" value="<?php echo $search_stool_re->bilirubin; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            Ster & sterco</div>
                                        <div class="col-xs-1">
                                            <input type="text" name="str_and_sterobili" class="form-control" value="<?php echo $search_stool_re->str_and_sterobili; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            OBT
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="obt" class="form-control" value="<?php echo $search_stool_re->obt; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Vege. Cell
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="vege_cell" class="form-control" value="<?php echo $search_stool_re->vege_cell; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Epi. Cells 	
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="epithe_cells" class="form-control" value="<?php echo $search_stool_re->epithe_cells; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Pus Cells
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="puss_cell" class="form-control" value="<?php echo $search_stool_re->puss_cell; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            RBC
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="rbc" class="form-control" value="<?php echo $search_stool_re->rbc; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Macrophage
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="macrophages" class="form-control" value="<?php echo $search_stool_re->macrophages; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Muscle Fibre
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="muscle_fibre" class="form-control" value="<?php echo $search_stool_re->muscle_fibre; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Fat Glo.
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="fat_globules" class="form-control" value="<?php echo $search_stool_re->fat_globules; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Starch Gran.
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="starch_granules" class="form-control" value="<?php echo $search_stool_re->starch_granules; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            C.L.Crystals  
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="cl_crystals" class="form-control" value="<?php echo $search_stool_re->cl_crystals; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Bacteria
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="bacteria" class="form-control" value="<?php echo $search_stool_re->bacteria; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Trop. Giardia
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="troph_giardia" class="form-control" value="<?php echo $search_stool_re->troph_giardia; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Ova of A.L
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="ova_al" class="form-control" value="<?php echo $search_stool_re->ova_al; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Larva of 
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="larva_of" class="form-control" value="<?php echo $search_stool_re->larva_of; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            Cyst of Giardia
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="cyst_of_giardia" class="form-control" value="<?php echo $search_stool_re->cyst_of_giardia; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Cyst of  E.Coli
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="cyst_of_col" class="form-control" value="<?php echo $search_stool_re->cyst_of_col; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            T. hominis
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="t_hominis" class="form-control"value="<?php echo $search_stool_re->t_hominis; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Blastocystis hominis
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="blas_homins" class="form-control" value="<?php echo $search_stool_re->blas_homins; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Cast  
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="cast" class="form-control" value="<?php echo $search_stool_re->cast; ?>">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-xs-1">
                                            Fusifo. bacilli 	
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="fusifo_bacili" class="form-control" value="<?php echo $search_stool_re->fusifo_bacili; ?>">
                                        </div>
                                        <div class="col-xs-1">
                                            Candida 
                                        </div>
                                        <div class="col-xs-1">
                                            <input type="text" name="candida" class="form-control" value="<?php echo $search_stool_re->candida; ?>">
                                        </div>
                                        <br><br><br>
                                        <center>
                                            <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>&nbsp;UPDATE</button>


                                        </center>
                                    </div>
                                    <br>

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
                <h4 class="modal-title" id="myModalLabel">SEARCH HAEMATOLOGY REPORT </h4>
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
foreach ($view_data_stool_re as $data) {
    ?>

                                <tr class="">
                                    <td><?php echo $data->test_id; ?></span></td>
                                    <td><?php echo $data->patient_name; ?></span></td>

                                    <td>

                                        <a class="link" data-toggle="tooltip" data-placement="left" title="Edit Stool Report"  href="<?php echo base_url(); ?>data_record/edit_stool_rpt/<?php echo $data->stool_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>



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
