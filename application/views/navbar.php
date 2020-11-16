<!DOCTYPE html> 

<meta charset="utf-8">

<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
<script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>

<!-- Bootstrap -->

<link href="<?php echo base_url(); ?>resource/main.css" rel="stylesheet">
</head>

<div class="col-md-12" style="margin-top: 70px;">
    <?php
    if ($this->session->userdata('type') === "admin") {
        /*
          <a href="<?php echo base_url();?>welcome/patient_informaiton_record.html">
          <button class="btn btn-primary"><span class="glyphicon glyphicon-align-justify"></span>  My Prescription</button>

          </a>
         */
        ?>
        <div class="container">
            <div class="">

                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong><span class="glyphicon glyphicon-edit"></span>&nbsp;DELTA MEDICAL COLLEGE & HOSPITAL</strong>&nbsp;,
                    <strong>ADMIN PANEL</strong>
                    <strong> &nbsp; User Full Name: <?php echo $this->session->userdata('full_name'); ?>, User ID: <?php echo $this->session->userdata('user_id'); ?></strong>
                </div>

            </div>
            <br>

            <div class="row hovergallery">






            </div>
            <br>


            <div class="row hovergallery">








            </div> <br>

            <div class="row hovergallery">



                <div class="col-md-2">
                    <a href="<?php echo base_url(); ?>welcome/add_new_user.html">
                        <img src="<?php echo base_url(); ?>resource/img/revisit.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Create New User" class="img-rounded" style="border:5px solid black;">
                    </a>

                </div>
                <div class="col-md-2">
                    <a href="<?php echo base_url(); ?>welcome/db_backup.html">
                        <img src="<?php echo base_url(); ?>resource/img/db_backup.png" alt="image" data-toggle="tooltip" data-placement="left" title="Backup Database " class="img-rounded" style="border:5px solid black;">

                    </a>

                </div>
                <div class="col-md-2">


                </div>

            </div> 

        </div> 
    </div> 

    </center>


    <?php
} elseif ($this->session->userdata('type') === "User") {
    ?>



    <br>
    <div class="container">
        <div class="">

            <div class="alert alert-info">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong><span class="glyphicon glyphicon-edit"></span>&nbsp;DELTA MEDICAL COLLEGE & HOSPITAL</strong>&nbsp;,
                <strong>  <?php
                    echo "ERPRHER-2-" . count($erprhertwo);
                    ?>,

                    <?php
                    echo "Single Line-" . count($SingleLine);
                    ?>


                </strong>
                <strong> &nbsp; User Full Name: <?php echo $this->session->userdata('full_name'); ?>, User ID: <?php echo $this->session->userdata('user_id'); ?></strong>
            </div>

        </div>
        <br>

        <div class="row hovergallery">
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/add_new_hospital.html">
                    <img src="<?php echo base_url(); ?>resource/img/hospital.jpg" data-toggle="tooltip" data-placement="left" title="Please Add Hospital Name" alt="image" class="img-rounded" style="border:5px solid black;">
                </a>
            </div>

            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/add_new_doctor.html">
                    <img src="<?php echo base_url(); ?>resource/img/doctorICON.jpg" data-toggle="tooltip" data-placement="left" title="Please Add Doctor Name" alt="image" class="img-rounded" style="border:5px solid black;">
                </a>

            </div>

            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/add_new_speciment.html">
                    <img src="<?php echo base_url(); ?>resource/img/speciment_icon.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Pleae Add Specimen Name" class="img-rounded" style="border:5px solid black;">
                </a>

            </div>

            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/bone_marrow.html">
                    <img src="<?php echo base_url(); ?>resource/img/b_marrow.jpg" alt="image" data-toggle="modal" data-target="#search" data-placement="left" title="Add Bone Marrow Report"  class="img-rounded" style="border:5px solid black;">
                </a>

            </div>

            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/customized_search.html">
                    <img src="<?php echo base_url(); ?>resource/img/help.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Custom Search"  class="img-rounded" style="border:5px solid black;">
                </a>

            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/haematology_rpt.html">
                    <img src="<?php echo base_url(); ?>resource/img/investigation.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Add Haematology Report"  class="img-rounded" style="border:5px solid black;">
                </a>

            </div>
        </div>
        <br>


        <div class="row hovergallery">
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/add_new_report_er_pr_her_two.html">
                    <img src="<?php echo base_url(); ?>resource/img/her2.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Add ER PR HER-2 Report " class="img-rounded" style="border:5px solid black;">
                </a>

            </div>

            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/add_new_report_singlie_line_report.html">
                    <img src="<?php echo base_url(); ?>resource/img/single_line.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Add Single Line Report "class="img-rounded" style="border:5px solid black;">
                </a>

            </div>

            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/stool_report.html">
                    <img src="<?php echo base_url(); ?>resource/img/stool.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Add Stool Report" class="img-rounded" style="border:5px solid black;">
                </a>

            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/urine_report.html">
                    <img src="<?php echo base_url(); ?>resource/img/urine.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Add Urine Report" class="img-rounded" style="border:5px solid black;">
                </a>

            </div> 
            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/add_new_fluid_report.html">
                    <img src="<?php echo base_url(); ?>resource/img/new_fluidl.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Add Fluid Report"  class="img-rounded" style="border:5px solid black;">
                </a>

            </div>

            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/add_new_mt_test.html">
                    <img src="<?php echo base_url(); ?>resource/img/mt_test.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Add MT Test Report" class="img-rounded" style="border:5px solid black;">
                </a>

            </div>


        </div> <br>

        <div class="row hovergallery">



            <div class="col-md-2">
                <a href="<?php echo base_url(); ?>welcome/add_new_report_semen.html">
                    <img src="<?php echo base_url(); ?>resource/img/semen_icon.jpg" alt="image" data-toggle="tooltip" data-placement="left" title="Add Semen Analysis Report" class="img-rounded" style="border:5px solid black;">
                </a>

            </div>










            <div class="col-md-2">



                <br>
                <style>
                    .font
                    {
                        color: red;
                    }


                </style>


                <?php
//$total_result=$erprhertwo+$Sline=$SingleLine;
//echo $total_result;
                ?>

                <br>

            </div>


        </div>



    </div> 

    </center>



    <?php
} else {
    ?>

    <?php
}
?>
<div class="modal fade" id="search" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Please Choose  Option Draft and Final Report </h4>
            </div>
            <div class="modal-body">
                <div class="form-group has-success">
                    <br><br>
                    <center>
                        <a href="<?php echo base_url(); ?>welcome/BoneMarrowDraft.html"><button class="btn btn-primary">Draft Bone Marrow</button></a>
                        <a href="<?php echo base_url(); ?>welcome/bone_marrow.html"> <button class="btn btn-success">Final Bone Marrow</button></a>
                        <a href="<?php echo base_url(); ?>welcome/redirect_edit_form_bonemarrow.html"> <button class="btn btn-info">Edit Bone Marrow</button></a>
                    </center>
                </div> 
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
        </div>
    </div>
</div>
