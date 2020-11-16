<!DOCTYPE html>
<html lang="en" ng-app="">
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

        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">
        <script src="<?php echo base_url(); ?>admin_panel/js/bootstrap.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/modal.popup.js"></script>
        <script language="javascript" src="<?php echo base_url(); ?>resource/jquery.printPage.js"></script>
 
		<style>
        .box{
        display:block;
        padding: 15px;
        border: 0px solid #ddd;
        background: #eee;
        width: 100px;
        height: 100px;
        margin: 10px;
    }
    
    #selectField{
        border: 1px solid red;
        width: 100px;
    }
    </style>
        <script>
            $(document).ready(function () {
                $("#slno").focus();
                $(":focus").css("background-color", "Beige");
            });
        </script>
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


        <script>
            //specimen_name
            $(document).ready(function () {

                //Change these values to style your modal popup
                var align = 'center';									//Valid values; left, right, center
                var top = 10; 											//Use an integer (in pixels)
                var width = 800; 										//Use an integer (in pixels)
                var padding = 10;										//Use an integer (in pixels)
                var backgroundColor = '#FFFFFF'; 						//Use any hex code
                var source = '<?php echo base_url(); ?>data_record/er_pr_her'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
                var borderColor = '#333333'; 							//Use any hex code
                var borderWeight = 4; 									//Use an integer (in pixels)
                var borderRadius = 5; 									//Use an integer (in pixels)
                var fadeOutTime = 300; 									//Use any integer, 0 = no fade
                var disableColor = '#666666'; 							//Use any hex code
                var disableOpacity = 40; 								//Valid range 0-100
                var loadingImage = '<?php echo base_url(); ?>loading.gif';		//Use relative path from this page

                //This method initialises the modal popup
                $(".bijon").click(function () {
                    modalPopup(align, top, width, padding, disableColor, disableOpacity, backgroundColor, borderColor, borderWeight, borderRadius, fadeOutTime, source, loadingImage);
                });

                //This method hides the popup when the escape key is pressed
                $(document).keyup(function (e) {
                    if (e.keyCode == 27) {
                        closePopup(fadeOutTime);
                    }
                });

            });
        </script>

        <script>
            $(document).ready(function () {
                $(".btnPrint").printPage({
                    url: "<?php echo base_url(); ?>data_record/er_pr_her.html",
                    attr: "href",
                    message: "Your document is being created"
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $(".btnPrintbijon").printPage({
                    url: "<?php echo base_url(); ?>data_record/by_draf_er_pr_her_two.html",
                    attr: "href",
                    message: "Your document is being created"
                });
            });
        </script>
        <style>
            .ui-autocomplete {
                max-width: 450px;
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
             
                <a href="<?php echo base_url(); ?>welcome/redirect_edit_form_erprhertwo.html">
                    <button class="btn btn-success"><span class="glyphicon glyphicon-search"></span>&nbsp;EDIT</button>       
                </a>

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

            <form action="<?php echo base_url(); ?>data_record/save_her_two_info.html" method="post">
                <div class="form-group has-success">
                    <div class="row">
                        <div class="col-xs-1">
                            <input type="text" name="sl_no" class="form-control" placeholder="SL NO" id="slno" required="1" ng-model="sl_no">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="test_id" class="form-control" placeholder="Test ID" ng-model="test_id" value="<?php echo "MIHC15:"; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" name="reciv_date" id="reciv_date" class="form-control" placeholder="Rev. Date">
                        </div>
                        <input type="hidden" name="current_date" value="<?php echo date("Y-m-d"); ?>" >
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="deli_date" id="deli_date" placeholder="Deliv. Date">
                        </div>
                        <div class="col-xs-3">
                            <input type="text" name="patient_name" class="form-control" placeholder="Patient Name" ng-model="patient_name" >
                        </div>
                        <div class="col-xs-1">
                            <input type="text" name="age" class="form-control" placeholder="Age">
                        </div>
                        <div class="col-xs-1">
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
                            <input type="text" name="specimen_name" id="specimen_name" class="form-control" placeholder="Specimen Name">
                        </div>      

                    </div>

                    <div class="row">         
                        <div class="col-xs-12">
                            <textarea class="jqte-test form-control" name="note"><?php echo "Result of Immunostaining for ER, PR & HER-2 of Case No: Block No: ( )"; ?></textarea>

                        </div>
                    </div>     ER
                    <div class="row"> 

                        <div class="col-xs-10">
                            <input type="text"  name="er_rpt" class="form-control" value="<?php echo "About _______ %/ <1 % of the tumor cell nuclei show weak/moderate/strong staining/Tumor cell nuclei show no staining."; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="er_score" value="<?php echo "   / 8"; ?>">
                        </div>       


                    </div>
                    PR
                    <div class="row"> 

                        <div class="col-xs-10">
                            <input type="text" name="pr_rpt" class="form-control" placeholder="PR" value="<?php echo "About _______%/ <1  %  of the tumor cell nuclei show weak/moderate/strong staining/Tumor cell nuclei show no staining."; ?>">
                        </div>
                        <div class="col-xs-2">
                            <input type="text" class="form-control" name="pr_score" value="<?php echo "   / 8"; ?>">
                        </div>       


                    </div>
                    HER-2  
                    <div class="row"> 

                        <div class="col-xs-10">
                          <div id="result">
						   <input class="form-control"  name="her_two_score" type="text" value="<?php echo "Tumor cells show no staining.";?>" style="width: 750px;"/>
						  
						  </div>
                            
                        </div>
                        <div class="col-xs-1">
                        
                             <select name="her_two_score" class="form-control" id="selectField" onChange="SearchHerTwoResult(this.value);" required="1">
                               
								
                        <?php
foreach ($hertwo_score as $value) {
     ?>
	 
<option value="<?php  echo $value->Value."+";?>"> <?php 
if($value==='O')
{
echo $value->Value;

}else
{
	
echo $value->Value."+";	
}
 ?> </option>
<?php } ?>

                            </select>
							
                        </div> 


                    </div>COMMENTS
                    <div class="row">         
                        <div class="col-xs-4">
                            <input type="text" name="er_result" class="form-control" value="<?php echo "Negative/Positive" ?>">
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="pr_result" class="form-control" value="<?php echo "Negative/Positive" ?>">
                        </div>       
                        <div class="col-xs-4">
                            <input type="text" name="her_two_result" class="form-control" value="<?php echo "Negative/Positive/Borderline" ?>">
                        </div>      

                    </div>
                    <div class="row"><br>
                        <div class="col-xs-12">
                            <input type="text" name="rpt_noet" class="form-control" placeholder="Note">
                        </div>  
                    </div><br>
                    <center>
                        <button class="btn btn-primary" onClick="return save()"><span class="glyphicon glyphicon-saved"></span>&nbsp;Save</button>
                        <button class="btn btn-primary btnPrint"><span class="glyphicon glyphicon-print"></span>&nbsp;Print</button>
                        <button class="btn btn-primary btnPrintbijon"><span class="glyphicon glyphicon-print"></span>&nbsp;Draft Print</button>
                        <button class="btn bijon btn btn-primary"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp;Preview</button>
                        <button class="btn btn-primary" data-toggle="modal" data-target="#bijon"><span class="glyphicon glyphicon-zoom-in"></span>&nbsp;DATA</button>
                    </center>




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

    function SearchHerTwoResult(str)
    {
var strUrl = "<?php echo base_url(); ?>welcome/SearchHertworesultinfo.html?Value=" + str;
        //alert(str);
        var xmlhttp;
        if (str == "")
        {
            document.getElementById("result").innerHTML = "";
            return;
        }
        if (window.XMLHttpRequest)
        {// code for IE7+, Firefox, Chrome, Opera, Safari 
            xmlhttp = new XMLHttpRequest();
        }
        else
        {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function()
        {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById("result").innerHTML = xmlhttp.responseText;
                //alert(xmlhttp.responseText);
            }
        }
        xmlhttp.open("GET", strUrl, true);
        xmlhttp.send();
    }
</script>
