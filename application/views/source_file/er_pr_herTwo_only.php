<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>

<!-- ER Data Search -->
    <br><br><br>
    <div class="container">
              <div align="right">
                <form name="cancel" method="post" action="<?php echo base_url();?>welcome/customized_search.html">
<button class="btn btn-danger"><span class="glyphicon glyphicon-backward"></span> CLOSE  </button>  
                    
                </form>
             
            </div>
        
    </div>
    <div class="container">
                <div class="form-group has-success">
                    <br><br>
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="er_pr_only_search">

                        <thead>
                            <tr class="success">
                                <th width="150">Test ID</th>
                       <th width="200">ER </th>
                                <th width="200">PR </th>
                                    <th width="200">PR </th>
<?php
/*
       <th>Action</th>
 * 
 */
?>
                         
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($view_data_erprhertwo as $data) {
                                ?>

                                <tr class="">
                                 <td><?php echo $data->test_id; ?></span></td>  
                                 <td><?php echo $data->er_result; ?></span></td>   
                                         <td><?php echo $data->pr_result; ?></span></td>   
                                                  <td><?php echo $data->her_two_result; ?></span></td>    
                                         <?php
                                         
                                         /*
                                        <td>
                                        <a class="link" data-toggle="tooltip" data-placement="left" title="Conditional Searching Only ER Result Show Positive or Negative" href="<?php echo base_url(); ?>data_record/edit_erprhertwo_rpt/<?php echo $data->her_two_id; ?>" onClick="return save();" style="text-decoration:none"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                        <?php
                                        /*
                                          <a class="link" href="<?php echo base_url();?>data_record/delete_dose_schedule/<?php echo $data->patient_id;?>" onClick="return sure();" style="text-decoration:none"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                                          *    </td>
                                         */
                                        ?>

                                   
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>

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