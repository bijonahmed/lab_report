
<br><br>
 <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>

<div class="container"><br>
    <center><h3><strong>ALL USER LIST<br>
        Total User : <?php echo count ($SearchUserInfo) ;?>
            </strong></h3></center>
        <div class="form-group has-feedback">

            <table cellpadding="0" cellspacing="0" border="3" class="table table-hover tableradius" id="example" style="background-color: yellowgreen; border-color: yellow;">

                <thead>
                    <tr class="headColor">
                        <th width="280">User Full Name</th>
                        <th width="150">User Type</th>
                        <th width="200">Mobile Number</th>
                        <th width="350">Username</th>
                         <th>Action</th> 
                        
                      




                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($SearchUserInfo as $data) {
                        ?>

                        <tr class="">
                            <td><?php echo $data->full_name; ?></td>
                            <td><?php echo $data->type; ?></td>
                            <td><?php echo $data->mobile_number; ?></td> 
                            <td><?php echo $data->user_name; ?></td> 
                     
                         
                             
 
                              <td>
                                <a class="link" data-toggle="tooltip" data-placement="left"  href="#" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>


                            </td>
                            



                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div> 