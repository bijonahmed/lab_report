 <!DOCTYPE HTML><head>

<script src="<?php echo base_url();?>jquery-1.7.2.js"></script>
<script src="<?php echo base_url();?>jquery.printPage.js"></script>
<script language="javascript" src="<?php echo base_url();?>jquery.js"></script>
<script language="javascript" src="<?php echo base_url();?>modal.popup.js"></script>
<script src="<?php echo base_url();?>js/assets/js/jquery-1.9.1.js"></script>
<script src="<?php echo base_url();?>js/assets/js/jquery-ui.js"></script>

<link rel="stylesheet" href="<?php echo base_url()?>css/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo base_url();?>themes/base/jquery.ui.all.css">

<link href="<?php echo base_url();?>css/bootstrap.min.css" rel="stylesheet" media="screen">
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.min.css">
<script>
  $(document).ready(function() {

		//Change these values to style your modal popup
		var align = 'center';									//Valid values; left, right, center
		var top = 10; 											//Use an integer (in pixels)
		var width = 900; 										//Use an integer (in pixels)
		var padding = 10;										//Use an integer (in pixels)
		var backgroundColor = '#FFFFFF'; 						//Use any hex code
		var source = '<?php echo base_url();?>pathology_reporting_controller/test_print_vew_ref_by_doctor_name'; 								//Refer to any page on your server, external pages are not valid e.g. http://www.google.co.uk
		var borderColor = '#333333'; 							//Use any hex code
		var borderWeight = 4; 									//Use an integer (in pixels)
		var borderRadius = 5; 									//Use an integer (in pixels)
		var fadeOutTime = 300; 									//Use any integer, 0 = no fade
		var disableColor = '#666666'; 							//Use any hex code
		var disableOpacity = 40; 								//Valid range 0-100
		var loadingImage = '<?php echo base_url();?>loading.gif';		//Use relative path from this page

		//This method initialises the modal popup
        $(".bijon").click(function() {
            modalPopup(align, top, width, padding, disableColor, disableOpacity, backgroundColor, borderColor, borderWeight, borderRadius, fadeOutTime, source, loadingImage);
        });

		//This method hides the popup when the escape key is pressed
		$(document).keyup(function(e) {
			if (e.keyCode == 27) {
				closePopup(fadeOutTime);
			}
		});

    });
</script>
<script>
 $(document).ready(function() {
$(".btnPrint").printPage({
url: "<?php echo base_url(); ?>pathology_reporting_controller/test_print_vew_ref_by_doctor_name.html",
attr: "href",
message:"Your document is being created"
});
});
</script>

</head>


<body>
 <div class="control-group info">
             <div class="controls">
<div class="row-fluid">


  <button type="button" class="btn btnPrint" >Printing</button>

<div class="container">
<table cellpadding="0" cellspacing="0" border="0" class="table" id="">
<div class="alert alert-info">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<strong><i class="icon-user icon-large"></i>&nbsp;Ref by Doctor Search and update</strong>                            </div>
<thead>
<tr>
<th>SL NO</th>
<th>Name of Doctor</th>
</tr>
</thead>
<tbody>
      <?php
        $x=1;
  {

          ?>
<?php

foreach($add_doctor_info as $UiInfo) {
?>
<tr>
  

<td><?php echo $x;?></td>
<td><?php echo $UiInfo->ref_by;?></td>
 <?php
     $x++; }


?>
<td>
   

</td>
</td>
</tr>
<?php }?>
</tbody>
</table>



</div>


</div>
             </div></div>



</body>
</html>
<script type="text/javascript">

$(document).ready(function()
{
    $("#rpt").addClass("text_box_error");

});

</script>
<style>
input[type="text"]
{
    background-color: rgba(0, 255, 0, 0.5);
    border: 1px solid #5B5B5B;

}

input[type="text"]:hover, input[type="text"]:focus
{
    background-color: rgba(0, 255, 0, 1);
    border: 1px solid #5B5B5B;
    font-weight: bold;
}
input[type="text"].text_box_error
{
    background-color: red;
}

input[type="text"].text_box_error:hover
{
    background-color: rgba(255, 0, 0, .5);
}
</style>

