<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>resource/css/bootstrap.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>_data_table/css/bootstrap-dataTables.css" rel="stylesheet">
        <link rel="icon" type="image/png" href="<?php echo base_url(); ?>resource/img/doctor.ico" />

        <script src="<?php echo base_url(); ?>resource/js/bootstrap.js"></script>

        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/js/menu.js"></script>

        <script src="<?php echo base_url(); ?>resource/JqueryShortCutKey/jquery.hotkeys-0.7.9.min.js" type="text/javascript"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <style type="text/css">
            <!--
            .fontstyle {font-size: 30px}
            -->
        </style>

    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-inner header-drop-nav">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> <strong>  </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo base_url(); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>

                            <?php
                            if ($this->session->userdata('type') === "admin") {
                                ?>


                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit"></span> Setting <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>welcome/add_new_hospital.html"><span class="glyphicon glyphicon-plus"></span> Add New Hospital</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/add_new_doctor.html"><span class="glyphicon glyphicon-plus"></span> Add New Ref. by Name</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/add_new_speciment.html"><span class="glyphicon glyphicon-plus"></span> Add New Specimen</a></li>
                                        <div class="divider"></div>
                                        <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Cellularity </a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Granulopoiesis</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Lymphopoiesis</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Erythropoiesis</a></li>
                                        <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Megakaryopoiesiss </a></li>

                                    </ul>

                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-check"></span> My Report <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>welcome/bone_marrow.html"><span class="glyphicon glyphicon-check"></span>Bone Marrow Report</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/haematology_rpt.html"><span class="glyphicon glyphicon-check"></span>Haematology Report</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/add_new_report_er_pr_her_two.html"><span class="glyphicon glyphicon-check"></span>ER PR HER-2</a></li>                
                                        <li><a href="<?php echo base_url(); ?>welcome/add_new_report_singlie_line_report.html"><span class="glyphicon glyphicon-check"></span>Single Line Report</a></li>             
                                        <li><a href="<?php echo base_url(); ?>welcome/stool_repor.html"><span class="glyphicon glyphicon-check"></span>Stool Report</a></li>             
                                        <li><a href="<?php echo base_url(); ?>welcome/urine_report.html"><span class="glyphicon glyphicon-check"></span>Urine Report</a></li>             
                                        <li><a href="<?php echo base_url(); ?>welcome/add_new_fluid_report.html"><span class="glyphicon glyphicon-check"></span>Ascitic Report</a></li>             
                                        <li><a href="<?php echo base_url(); ?>welcome/add_new_mt_test.html"><span class="glyphicon glyphicon-check"></span>MT Report</a></li>             
                                        <li><a href="<?php echo base_url(); ?>welcome/add_new_report_semen.html"><span class="glyphicon glyphicon-check"></span>Semen Analysis Report</a></li>             
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit"></span> Searching Data<b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>welcome/searching_all_hospital_name.html"><span class="glyphicon glyphicon-search"></span>Search Hospital Name</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/searching_all_doctor_name_name.html"><span class="glyphicon glyphicon-search"></span>Search Doctor Name</a></li>
                                        <div class="divider"></div>

                                        <li><a href="<?php echo base_url(); ?>welcome/by_name_info_searcherprhertwo.html"><span class="glyphicon glyphicon-search"></span>Particular ER PR HER-2</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/by_name_info_searchsingline.html"><span class="glyphicon glyphicon-search"></span>Particular Single Line </a></li>
                                        <div class="divider"></div>


    <!--                                <li><a href="<?php //echo base_url();  ?>welcome/by_gender_info_searcherprhertwo.html"><span class="glyphicon glyphicon-search"></span>By Gender ER PR HER-2</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>welcome/by_gender_singele_line_searchingerprhertwo.html"><span class="glyphicon glyphicon-search"></span>By Gender Single Line </a></li>
                                        <div class="divider"></div>

    <!--                                <li><a href="<?php //echo base_url();  ?>welcome/datewisesearcherprhertwo.html"><span class="glyphicon glyphicon-search"></span>Date Wise ER PR HER-2</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>welcome/datewisesearch_singleLine.html"><span class="glyphicon glyphicon-search"></span>Date Wise Single Line</a></li>
                                        <div class="divider"></div>
                                        <li><a href="<?php echo base_url(); ?>welcome/searching_all_ERPRHER_2SpeccimenName.html"><span class="glyphicon glyphicon-search"></span>Search ER PR HER-2 Specimen Name</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/singline_all_sepcimen_name.html"><span class="glyphicon glyphicon-search"></span>Search Single Specimen Name </a></li>
                                        <div class="divider"></div>
        <!--                                <li><a href="<?php // echo base_url();  ?>welcome/er_comment_all_data.html"><span class="glyphicon glyphicon-search"></span>Search ER Comment </a></li>
                                        <li><a href="<?php // echo base_url();  ?>welcome/pr_comment_all_data.html"><span class="glyphicon glyphicon-search"></span>Search PR Comment</a></li>
                                        <li><a href="<?php // echo base_url();  ?>welcome/er_pr_hertwo_comment_data.html"><span class="glyphicon glyphicon-search"></span>Search HER-2 Comment</a></li>-->
                                        <li><a href="<?php echo base_url(); ?>welcome/single_line_rpt_count.html"><span class="glyphicon glyphicon-search"></span>Search Single Line Report </a></li>
                                        <div class="divider"></div>
        <!--                                <li><a href="<?php // echo base_url();  ?>welcome/date_range_erpor_hertwo.html"><span class="glyphicon glyphicon-search"></span>Search ER PR HER-2 Group by</a></li>-->
                                        <div class="divider"></div>
                                        <li><a href="<?php echo base_url(); ?>welcome/er_pr_her_two_graphical_data.html"><span class="glyphicon glyphicon-search"></span>ER PR HER-2 Graphical View</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/singline_graphical_data.html"><span class="glyphicon glyphicon-search"></span>Single Line Graphical View</a></li>


                                    </ul>
                                </li>


                                <?php
                                /*
                                 * 
                                  <li><a href="<?php echo base_url(); ?>welcome/customized_search.html"><span class="glyphicon glyphicon-search"></span> Search</a></li>

                                 */
                                ?>
                                <li><a href="<?php echo base_url(); ?>welcome/UsingShortCutKey.html"><span class="glyphicon glyphicon-edit"></span> Using Shortcut Key</a></li>

                                <li><a href="<?php echo base_url(); ?>welcome/ViewAllUserInformation.html"><span class="glyphicon glyphicon-edit"></span> All User</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/ViewMyprofile.html"><span class="glyphicon glyphicon-edit"></span> My Profile</a></li>
                                <li><a href="<?php echo base_url(); ?>login/logout.html"><span class="glyphicon glyphicon-search"></span> EXIT</a></li>

                        </div> 


                        <?php
                    } elseif ($this->session->userdata('type') === "User") {
                        ?>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-plus"></span> Setting <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>welcome/add_new_hospital.html"><span class="glyphicon glyphicon-plus"></span> Add New Hospital</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/add_new_doctor.html"><span class="glyphicon glyphicon-plus"></span> Add New Ref. by Name</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/add_new_speciment.html"><span class="glyphicon glyphicon-plus"></span> Add New Specimen</a></li>                <div class="divider"></div>
                                <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Cellularity </a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Granulopoiesis</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Lymphopoiesis</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Erythropoiesis</a></li>
                                <li><a href="#"><span class="glyphicon glyphicon-plus"></span> Add New Megakaryopoiesiss </a></li>
                            </ul>


                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-check"></span> My Report <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>welcome/bone_marrow.html"><span class="glyphicon glyphicon-check"></span>Bone Marrow Report</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/haematology_rpt.html"><span class="glyphicon glyphicon-check"></span>Haematology Report</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/add_new_report_er_pr_her_two.html"><span class="glyphicon glyphicon-check"></span>ER PR HER-2</a></li>                
                                <li><a href="<?php echo base_url(); ?>welcome/add_new_report_singlie_line_report.html"><span class="glyphicon glyphicon-check"></span>Single Line Report</a></li>             
                                <li><a href="<?php echo base_url(); ?>welcome/stool_repor.html"><span class="glyphicon glyphicon-check"></span>Stool Report</a></li>             
                                <li><a href="<?php echo base_url(); ?>welcome/urine_report.html"><span class="glyphicon glyphicon-check"></span>Urine Report</a></li>             
                                <li><a href="<?php echo base_url(); ?>welcome/add_new_fluid_report.html"><span class="glyphicon glyphicon-check"></span>Ascitic Report</a></li>             
                                <li><a href="<?php echo base_url(); ?>welcome/add_new_mt_test.html"><span class="glyphicon glyphicon-check"></span>MT Report</a></li>             
                                <li><a href="<?php echo base_url(); ?>welcome/add_new_report_semen.html"><span class="glyphicon glyphicon-check"></span>Semen Analysis Report</a></li>             
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-edit"></span> Searching Data<b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url(); ?>welcome/searching_all_hospital_name.html"><span class="glyphicon glyphicon-search"></span> Search Hospital Name</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/searching_all_doctor_name_name.html"><span class="glyphicon glyphicon-search"></span> Search Doctor Name</a></li>
                                <div class="divider"></div>

                                <li><a href="<?php echo base_url(); ?>welcome/by_name_info_searcherprhertwo.html"><span class="glyphicon glyphicon-search"></span> Particular ER PR HER-2</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/by_name_info_searchsingline.html"><span class="glyphicon glyphicon-search"></span> Particular Single Line </a></li>
                                <div class="divider"></div>


    <!--                                <li><a href="<?php // echo base_url();  ?>welcome/by_gender_info_searcherprhertwo.html"><span class="glyphicon glyphicon-search"></span>By Gender ER PR HER-2</a></li>-->
<!--                                <li><a href="<?php //echo base_url(); ?>welcome/by_gender_singele_line_searchingerprhertwo.html"><span class="glyphicon glyphicon-search"></span> By Gender Single Line </a></li>-->
                          

    <!--                                <li><a href="<?php // echo base_url();  ?>welcome/datewisesearcherprhertwo.html"><span class="glyphicon glyphicon-search"></span>Date Wise ER PR HER-2</a></li>-->
<!--                                <li><a href="<?php// echo base_url(); ?>welcome/datewisesearch_singleLine.html"><span class="glyphicon glyphicon-search"></span> Date Wise Single Line</a></li>-->
                  
    <!--                                <li><a href="<?php // echo base_url();  ?>welcome/searching_all_ERPRHER_2SpeccimenName.html"><span class="glyphicon glyphicon-search"></span>Search ER PR HER-2 Specimen Name</a></li>-->
                                <li><a href="<?php echo base_url(); ?>welcome/singline_all_sepcimen_name.html"><span class="glyphicon glyphicon-search"></span> Search Single Specimen Name </a></li>
                        
    <!--                                <li><a href="<?php // echo base_url();  ?>welcome/er_comment_all_data.html"><span class="glyphicon glyphicon-search"></span>Search ER Comment </a></li>
                                <li><a href="<?php // echo base_url();  ?>welcome/pr_comment_all_data.html"><span class="glyphicon glyphicon-search"></span>Search PR Comment</a></li>
                                <li><a href="<?php // //echo base_url();  ?>welcome/er_pr_hertwo_comment_data.html"><span class="glyphicon glyphicon-search"></span>Search HER-2 Comment</a></li>-->
<!--                                <li><a href="<?php// echo base_url(); ?>welcome/single_line_rpt_count.html"><span class="glyphicon glyphicon-search"></span> Search Single Line Report </a></li>-->
                                <!--                                <div class="divider"></div>
                                                                <li><a href="<?php //echo base_url();  ?>welcome/date_range_erpor_hertwo.html"><span class="glyphicon glyphicon-search"></span>Search ER PR HER-2 Group by</a></li>-->
                                <div class="divider"></div>
                                <li><a href="<?php echo base_url(); ?>welcome/er_pr_her_two_graphical_data.html"><span class="glyphicon glyphicon-search"></span> ER PR HER-2 Graphical Report</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/singline_graphical_data.html"><span class="glyphicon glyphicon-search"></span> Single Line Graphical Report</a></li>
                                <li><a href="<?php echo base_url();  ?>welcome/GrapicalRpt.html"><span class="glyphicon glyphicon-search"></span> ER PR HER-2 & Single Line Report Compare Graphical Report</a></li>
                                 <li><a href="<?php echo base_url();  ?>welcome/GrapicalPieChartRpt.html"><span class="glyphicon glyphicon-search"></span> Single Line Pie Chart Graphical Report</a></li>

                            </ul>
                        </li>


                        <?php
                        /*
                         *                     <li><a href="<?php echo base_url(); ?>welcome/customized_search.html"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                          <li><a href="<?php echo base_url(); ?>welcome/user_guide.html"><span class="glyphicon glyphicon-edit"></span> Tutorial</a></li>
                         */
                        ?>
                        <li><a href="<?php echo base_url(); ?>welcome/UsingShortCutKey.html"><span class="glyphicon glyphicon-pencil"></span> Using Shortcut Key</a></li>
                        <li><a href="<?php echo base_url(); ?>welcome/ViewMyprofile.html"><span class="glyphicon glyphicon-edit"></span> My Profile</a></li>
                        <li><a href="<?php echo base_url(); ?>login/logout.html"><span class="glyphicon glyphicon-log-out"></span> EXIT</a></li>
                    </div> 
                    <?php
                } else {
                    ?>



                    <?php
                }
                ?>
                </ul>

                </li>
                </ul>

            </div>

        </nav>

        <div id="element" class="introLoading"></div>
        <?php echo $maincontent; ?>

    </body>

    <font color="#FF0000">
    <?php
    $message = $this->session->userdata('message');
//echo $message;
    if (isset($message)) {
        echo $message;
        $this->session->unset_userdata('message');
    }
    ?>
    </font>


 
    <script>
                $(function() {
                $("#element").introLoader();
                        });    </script>
    <script>
                $('ul.nav li.dropdown').hover(function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
        }, function () {
        $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
        });    </script>
    <script>
                $(document).ready(function() {
        // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() }, 
        jQuery(document).bind('keydown', 'Ctrl+s', function() {
        $('#form1').submit();
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+h', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/add_new_hospital.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+d', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/add_new_doctor.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+s', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/add_new_speciment.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+1', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+b', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/BoneMarrowDraft.html";
                return false;
        });
                //			jQuery(document).bind('keydown', 'Ctrl+f',function() {
                //			window.location = "http://192.168.88.18/lab_report_dhl/welcome/bone_marrow.html";
                //			  return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+h', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/haematology_rpt.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+e', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/add_new_report_er_pr_her_two.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+i', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/add_new_report_singlie_line_report.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+t', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/stool_report.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+1', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/redirect_edit_form_erprhertwo.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+m', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/add_new_mt_test.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+u', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/UsingShortCutKey.html";
                return false;
        });
                //                        jQuery(document).bind('keydown', 'Ctrl+p',function() {
                //			window.location = "http://192.168.88.18/lab_report_dhl/welcome/ViewMyprofile.html";
                //			  return false;
                //			});
                //                        
                //                         jQuery(document).bind('keydown', 'Ctrl+x',function() {
                //			window.location = "http://192.168.88.18/lab_report_dhl/login/index.html";
                //			  return false;
                //			});
                //                        
                jQuery(document).bind('keydown', 'Ctrl+2', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/redirect_edit_form_singlineLine.html";
                return false;
        });
                jQuery(document).bind('keydown', 'Ctrl+3', function() {
        window.location = "http://192.168.88.18/lab_report_dhl/welcome/singline_graphical_data.html";
                return false;
        });
                //$.validationEngine.loadValidation("#date")
                //alert($("#formID").validationEngine({returnIsValid:true}))
                //$.validationEngine.buildPrompt("#date","This is an example","error")	 		 // Exterior prompt build example								 // input prompt close example
                //$.validationEngine.closePrompt(".formError",true) 							// CLOSE ALL OPEN PROMPTS
        });
    </script>

</html>