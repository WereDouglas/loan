
       <div class="container">
    <div class="service_wrapper">
        <div class="row">
            
              <div id="container" style="height: 400px"></div>
              <div id="container2" style="min-width: 210px; height: 200px; margin: 0 auto"></div>
            
        </div></div></div>
    </div>
  </div>
<?=  count($female);?>
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
            text: 'Monthly Applications by gender'
        },
        subtitle: {
            text: ''
        },
        xAxis: [{
            categories: ['Male', 'Female'],
            crosshair: true
        }],
        yAxis: [{ // Primary yAxis
            labels: {
                format: '{value} No.',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            },
            title: {
                text: 'Students',
                style: {
                    color: Highcharts.getOptions().colors[1]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Students',
                style: {
                    color: Highcharts.getOptions().colors[0]
                }
            },
            labels: {
                format: '{value} No.',
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
            name: 'Number/count',
            type: 'column',
            yAxis: 1,
            data: [<?php echo count($female); ?>, <?php  echo count($male); ?> ],
            tooltip: {
                valueSuffix: 'No.'
            }

        }, {
            name: 'Number',
            type: 'spline',
            data: [<?php echo count($female); ?>, <?php  echo count($male); ?>],
            tooltip: {
                valueSuffix: 'No.'
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