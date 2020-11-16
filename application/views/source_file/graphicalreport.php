<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>resource/js/jquery-ui.js"></script>
        <link href="<?php echo base_url(); ?>resource/css/jquery-ui.css" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url(); ?>resource/themes/base/jquery.ui.all.css">

        <script type="text/javascript">
            $(document).ready(function () {
                var options = {
                    chart: {
                        renderTo: 'container',
                        type: 'column',
                        marginRight: 130,
                        marginBottom: 25
                    },
                    title: {
                        text: 'ER PR HER-2 AND Single Line Report Grapical Report on<br> <?php echo date("Y");?>',
                        x: -20 //center
                    },
                    subtitle: {
                        text: '',
                        x: -20
                    },
                    xAxis: {
                        categories: []
                    },
                    yAxis: {
                        title: {
                            text: 'Yearly Report'
                        },
                        plotLines: [{
                                value: 0,
                                width: 1,
                                color: '#0000FF'
                            }]
                    },
                    tooltip: {
                        formatter: function () {
                            return '<b>' + this.series.name + '</b><br/>' +
                                    this.x + ': ' + this.y;
                        }
                    },
                    legend: {
                        layout: 'vertical',
                        align: 'right',
                        verticalAlign: 'top',
                        x: -10,
                        y: 100,
                        borderWidth: 0
                    },
                    series: []
                }

                $.getJSON("<?php echo base_url(); ?>welcome/GraphicalReportViewDetails.html", function (json) {
                    options.xAxis.categories = json[0]['data'];
                    options.series[0] = json[1];
                    options.series[1] = json[2];
                    //options.series[2] = json[3];
                    chart = new Highcharts.Chart(options);
                });
            });
        </script>
        <script src="<?php echo base_url(); ?>source/highcharts.js"></script>
        <script src="<?php echo base_url(); ?>source/exporting.js"></script>


    </head>
    <body>
        <br><br><br>

        <div align="center"><center style="color: red; font-weight: bold;">Current Year - <?php echo date("Y"); ?></center></div>
        <div align="center"><center><a href="#" style="text-decoration: none;" data-toggle="modal" data-target="#yearlysearch">If Your need any year search.please click here.</a></center></div>
        <div id="container" style="min-width: 350px; height: 400px; border-radius: 25px; margin: 0 auto"></div>

    </body>
</html>
<?php
$starting_year = 2009;
$ending_year = 2050;

for ($starting_year; $starting_year <= $ending_year; $starting_year++) {
    $years[] = '<option value="' . $starting_year . '">' . $starting_year . '</option>';
}
?>



<div class="modal fade" id="yearlysearch" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Please Select Year</h4>
            </div>
            <div class="modal-body">
                <div class="col-md-5"></div>
                <form id="someform" action="<?php echo base_url(); ?>welcome/YearlySearch.html" method="post">
                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group has-success" style="">
                                <select class="form-control" name="year">
                                    <option selected="selected" value="<?php
$cyear = $this->session->userdata('cyear');

if ($cyear != null) {
    echo $cyear;
} else {
    echo date("Y", strtotime(date("Y-m-d")));
};
?>"><?php
                                            $cyear = $this->session->userdata('year');

                                            if ($cyear != null) {
                                                echo $cyear;
                                            } else {
                                                echo date("Y", strtotime(date("Y-m-d")));
                                            };
                                            ?></option>
                                    <?php echo implode("\n\r", $years); ?>
                                </select> 

                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span></button>
                        </div>
                    </div>


                </form> 

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>