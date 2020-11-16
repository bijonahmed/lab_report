 <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome</title>

        <style>
            .headColor{
                background-color: black;
                color: white;
            }
        </style>
        <script language="javascript" type="text/javascript">
        function printDiv(divID) {
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = 
              "<html><head><title></title></head><body>" + 
              divElements + "</body>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;

          
        }
    </script>
        <!-- ER Data Search -->
    <br><br><br>
    <div class="container">

    </div>
    <div id="printablediv">
    <font color="red"> <center><h3><?php echo $this->session->userdata('date_from'); ?> From <?php echo $this->session->userdata('date_to'); ?> <br><?php echo $this->session->userdata('value'); ?> : <?php echo count($informationInfo); ?></h3></center></font>

    <div class="container">
         
        <hr>
        <div class="form-group has-feedback">

            <table cellpadding="0" cellspacing="0" border="3" class="table table-hover tableradius" id="er_only_search" style="background-color: yellowgreen; border-color: yellow;">

                <thead>
                    <tr class="headColor">
                        <th width="250">Test ID</th>
                        <th width="150">SL NO</th>
                        <th width="680">Patient Name</th>
                        <th width="100">Age</th>
                        <th width="100">Sex</th>
                        <th width="150">Rec. Date</th>
                        <th width="150">Deli. Date</th>
                       




                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($informationInfo as $data) {
                        ?>

                        <tr class="">
                            <td><?php echo $data->test_id; ?></td>
                            <td><?php echo $data->sl_no; ?></td>
                            <td><?php echo $data->patient_name; ?></td> 
                            <td><?php echo $data->age; ?></td> 
                            <td><?php echo $data->sex; ?></td> 
                            <td><?php echo $data->reciv_date; ?></td>  
                            <td><?php echo $data->deli_date; ?></td> 

                            


                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div></div>