<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <script src="<?php echo base_url(); ?>admin_panel/js/jquery.js"></script>
     
        <script type="text/javascript">
            $(document).ready(function () {
                var options = {
                    chart: {
                        renderTo: 'container',
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Single Line Report on <?php echo $this->session->userdata('year');?>'
                    },
                    tooltip: {
                        formatter: function () {
                            return '<b>' + this.point.name + '</b>: ' + this.y;
                        }
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                connectorColor: '#000000',
                                formatter: function () {
                                    return '<b>' + this.point.name + '</b>: ' + this.y;
                                }
                            },
                            showInLegend: true
                        }
                    },
                    series: []
                };

                $.getJSON("<?php echo base_url(); ?>welcome/GraphicalPieChartReportYearWise.html", function (json) {
                    options.series = json;
                    chart = new Highcharts.Chart(options);
                });
                
            });
        </script>



    </head>
    <body>
        <br><br><br>

        <div align="center"><center style="color: red; font-weight: bold;">Selected Year - <?php echo $this->session->userdata('year'); ?></center></div>
        <div align="center"><center><a href="<?php echo base_url(); ?>welcome/GrapicalPieChartRpt" style="text-decoration: none;">Back</a></center></div>
        <div id="container" style="min-width: 350px; height: 400px; border-radius: 25px; margin: 0 auto"></div>

    </body>
</html>

        <script src="<?php echo base_url(); ?>source/highcharts.js"></script>
        <script src="<?php echo base_url(); ?>source/exporting.js"></script>