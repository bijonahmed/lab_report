<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>
    <br><br>
<script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
 

<script src="<?php echo base_url();?>resource/js/jquery-ui.js"></script>
<link href="<?php echo base_url();?>resource/css/jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

 <script language="javascript" src="<?php echo base_url();?>resource/modal.popup.js"></script>
 <script language="javascript" src="<?php echo base_url();?>resource/jquery.printPage.js"></script>

<div class="container">
<h1>Update User Profile</h1>
<hr>
    
  <form action="<?php echo base_url(); ?>data_record/updateUserInformation.html" method="post">
                <div class="form-group has-success">
                    <div class="row">
                        <div class="col-xs-2">
User Full Name
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="full_name" class="form-control" value="<?php echo $SearchUserInfo->full_name;?>" autofocus="">
                            <input type="hidden" name="user_id" class="form-control" value="<?php echo $SearchUserInfo->user_id;?>">
                        </div>
                       
                    </div>
                    <br>
                     <div class="row">
                         <div class="col-xs-2">
User Type
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="type" class="form-control" value="<?php echo $SearchUserInfo->type;?>" disabled="">
                            <input type="hidden" name="type" class="form-control" value="<?php echo $SearchUserInfo->type;?>">
                        </div>
                       
                    </div>
                    <br>
                    
<div class="row">
                        <div class="col-xs-2">
Mobile Number
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="mobile_number" class="form-control" value="<?php echo $SearchUserInfo->mobile_number;?>">
                        </div>
                       
                    </div>
                    
                    
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <strong>Username</strong>
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="user_name" class="form-control" value="<?php echo $SearchUserInfo->user_name;?>">
                        </div>
                       
                    </div>
                       
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <strong>Password</strong>
                        </div>
                        <div class="col-xs-4">
                            <input type="password" name="password" class="form-control" value="<?php echo $SearchUserInfo->password;?>">
                        </div>
                       
                    </div>
                   
                    <br><br>
                     <div class="row">
                        <div class="col-xs-3">
 
                        </div>
                        <div class="col-xs-6">
                              <button class="btn btn-success" onClick="return update()"><span class="glyphicon glyphicon-edit"></span>&nbsp; Update</button>
                   
                        </div>
                       
                    </div>
                    <hr>
                    
                    
                    
                    




                </div>

            </form>    
    





</div>
</body>
   <script>
        function update()
        {
            chk = confirm("Are You Sure Update Your Profile");
            if (chk)
            {
                return true;
            }
            else {
                return false;
            }
        }
    </script>