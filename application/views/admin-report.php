
       <div class="container">
    <div class="service_wrapper">
        <div class="row">
            
              <div id="container" style="height: 400px"></div>
              <div id="container2" style="min-width: 210px; height: 200px; margin: 0 auto"></div>
            
        </div></div></div>
    </div>
  </div>

<!--Service-->


  <script type="text/javascript" src="<?= base_url(); ?>js/jquery.min.js"></script>





<script type="text/javascript" src="<?= base_url(); ?>js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.nav.js"></script> 
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.isotope.js"></script>
<script src="<?= base_url(); ?>js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Payments Vs Loan'
        },
        subtitle: {
            text: 'Amount in shillings'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'amount(Shs)',
            data: [
                ['Refund',  <?php
                                                            if (is_array($refund) && count($refund)) {
                                                                foreach ($refund as $loop) {
                                                         echo   $loop->sum;        
                                                         }}?>],
                ['Remittance', <?php
                                                            if (is_array($remittance) && count($remittance)) {
                                                                foreach ($remittance as $loop) {
                                                         echo   $loop->sum;        
                                                         }}?>]         
               
            ]
        }]
    });
});
		</script>
                <script type="text/javascript">
$(function () {
    $('#container2').highcharts({
        chart: {
            zoomType: 'xy'
        },
        title: {
            text: 'Monthly Applications'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: [{
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value}°C',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'Temperature',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Rainfall',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} mm',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            opposite: true
        }],
        tooltip: {
            shared: true
        },
        legend: {
            layout: 'vertical',
            align: 'left',
            x: 120,
            verticalAlign: 'top',
            y: 100,
            floating: true,
            backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
        },
        series: [{
            name: 'Rainfall',
            type: 'column',
            yAxis: 1,
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4],
            tooltip: {
                valueSuffix: ' mm'
            }

        }, {
            name: 'Temperature',
            type: 'spline',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6],
            tooltip: {
                valueSuffix: '°C'
            }
        }]
    });
});
		</script>
              
	<script type="text/javascript" src="<?= base_url(); ?>js/highcharts.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/highcharts-3d.js"></script>
<script type="text/javascript"  src="<?= base_url(); ?>js/modules/exporting.js"></script>

</body>
</html>