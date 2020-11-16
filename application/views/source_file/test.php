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
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-hover tableradius" id="er_only_search">

                        <thead>
                            <tr class="success">
                                <th width="150">ER</th>
                                <th width="550">PR</th>
                                         <th width="150">HER-2</th>
                      
 
  
                         
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($view_data_singleline as $data) {
                                ?>

                                <tr class="">
                                    <td><?php echo $data->er_result; ?></span></td>
                                 
                                         <td><?php echo $data->pr_result; ?></span></td>  
                                            <td><?php echo $data->her_two_result; ?></span></td>  
                                         
                                      
                                         

                                   
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