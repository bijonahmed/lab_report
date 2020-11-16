<!DOCTYPE html>
<head>

<html lang="en">

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



</head>
<br><br>
<div class="container">
    <center><h3><strong>DRAFT BONE MARROW REPORT</strong></h3></center>
    <hr>   

    <form action="<?php echo base_url(); ?>data_record/save_bone_marrow_infoDraft.html" method="post">

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
                <?php
                /*
                 * 
                  <div class="col-xs-4">
                  <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name">
                  </div> */
                ?>


            </div>
            <br>
        </div>

        <center>
            <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button>


        </center>


    </form> 

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
<script type="text/javascript">
    $('#reciv_date').datepicker()
</script>
<script type="text/javascript">
    $('#deli_date').datepicker()
</script>

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