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
                        text: 'ER PR HER-2 AND Single Line Report Grapical Report on <?php echo $this->session->userdata('year');?>',
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

                $.getJSON("<?php echo base_url(); ?>welcome/GraphicalReportYearlySearch.html", function (json) {
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
        <div align="center"><center style="color: red; font-weight: bold;">Selected Year - <?php echo $this->session->userdata('year'); ?></center></div>
        <div align="center"><center><a href="<?php echo base_url(); ?>welcome/GrapicalRpt.html" style="text-decoration: none;" >Back</a></center></div>
        <div id="container" style="min-width: 350px; height: 400px; border-radius: 25px; margin: 0 auto"></div>
    </body>
</html>