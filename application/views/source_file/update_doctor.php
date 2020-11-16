<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

      <script src="<?php echo base_url(); ?>data_table/js/DT_bootstrap.js"></script>

<script src="<?php echo base_url(); ?>resource/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url(); ?>data_table/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
                $("#hospital_name").focus();
                $(":focus").css("background-color", "white");
            });
        </script>
        <script>
        
        </script>
    </head>
    <br><br><br>
    <body>
        <div class="container">
            <h3>Update Ref by Dr./ Prof. Name</h3>
            <hr>
   <div align="right">
                <form name="cancel" method="post" action="<?php echo base_url();?>welcome/cancel.html">
<button class="btn btn-danger"><span class="glyphicon glyphicon-backward"></span> CLOSE  </button>  
                    
                </form>
             
            </div>
            <div class="row">
                <div class="col-md-4">



                </div>
                <div class="col-md-4">
                    <div class="">
                        <form name="employee" method="post" action="<?php echo base_url(); ?>data_record/update_data_add_doctor.html">
                            Update Dr. Prof. Name <div class="form-group has-success">
                                <label class="control-label" for="inputSuccess1"></label>
                                <input type="text" class="form-control" name="ref_by" id="hospital_name"required="1" placeholder="Add Hospital Name" value="<?php echo $doctorInformation->ref_by;?>"><br>
                                <input type="hidden" class="form-control" name="ref_by_doctor_id" id="hospital_name"required="1" placeholder="Add Hospital Name" value="<?php echo $doctorInformation->ref_by_doctor_id;?>"><br>
                                <center> <button class="btn btn-info" onClick="return save()"><span class="glyphicon glyphicon-edit"></span>
                                        Update&nbsp;&nbsp;</button>
  
                                </center>

                            </div>
                        </form>
                     
                    </div>
 <center>
                         
                        </center> 

                </div>

                <div class="col-md-4">



                </div>
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
