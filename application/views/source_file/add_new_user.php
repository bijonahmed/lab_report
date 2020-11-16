<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <title>Welcome</title>
    <body>
<br><br><br>
<div class="container">
<h1>Add New User</h1>
<hr>
    
  <form action="<?php echo base_url(); ?>data_record/SaveUserInformation.html" method="post">
                <div class="form-group has-success">
                    <div class="row">
                        <div class="col-xs-2">
User Full Name
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="full_name" class="form-control" value="" autofocus="" required="">
                            
                        </div>
                       
                    </div>
                    <br>
                     <div class="row">
                         <div class="col-xs-2">
User Type
                        </div>
                        <div class="col-xs-4">
                          
                            <select name="type" class="form-control">
                                <option value="User">User</option>
                                 <option value="admin">Admin</option>
                                
                            </select>
                           
                            <input type="hidden" name="type" class="form-control" value="<?php echo "User";?>">
                        </div>
                       
                    </div>
                    <br>
                    
<div class="row">
                        <div class="col-xs-2">
Mobile Number
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="mobile_number" class="form-control" value="" required="">
                        </div>
                       
                    </div>
                    
                    
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <strong>Username</strong>
                        </div>
                        <div class="col-xs-4">
                            <input type="text" name="user_name" class="form-control" value="" required="">
                        </div>
                       
                    </div>
                       
                    <br>
                    <div class="row">
                        <div class="col-xs-2">
                            <strong>Password</strong>
                        </div>
                        <div class="col-xs-4">
                            <input type="password" name="password" class="form-control" value="" required="">
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
            chk = confirm("Are You Sure Create User Profile");
            if (chk)
            {
                return true;
            }
            else {
                return false;
            }
        }
    </script>