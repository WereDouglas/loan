<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>HESFB</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <!-- Fonts -->




        <!-- CSS -->
        
        <link rel="stylesheet" href="<?= base_url(); ?>social/style.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/animate.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/responsive.css">
        

        <!-- Js -->
        <script src="<?= base_url(); ?>js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?= base_url(); ?>js/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= base_url(); ?>js/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>js/plugins.js"></script>
        <script src="<?= base_url(); ?>js/main.js"></script>
     
     

        <script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=440972012749987";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    </head>
    <body>


    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-6 col-sm-3">
                    <a href="#" class="logo">
                        <img src="<?= base_url(); ?>images/header1.png" alt="">
                    </a>
                </div>
                <div class="col-md-6 col-xs-6 col-sm-6">
                    <div class="menu">
                        <nav class="navbar navbar-default" role="navigation">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <!-- Collect the nav links, forms, and other content for toggling -->
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul class="nav navbar-nav">
                                        <li><a href="#banner">Home</a></li>
                                        
                                        <li><a href="#feature">Reports</a></li>
                                        <li><a href="#utility">Community</a></li>
                                       
                                    </ul>
                                  
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.container-fluid -->
                        </nav>
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 col-sm-3">
    
   <ul>
<li><a href="" class="icon facebook">Facebook</a></li>
<li><a href="" class="icon twitter">Twitter</a></li>
<li><a href="" class="icon googleplus">Google Plus</a></li>
</ul>
  
                </div>
            </div>
        </div>
    </header>

    


    <section id="banner" class="wow fadeInUp">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <div class="block">
                        <img class="app-img img-responsive" src="<?= base_url(); ?>images/app.jpg" alt="">
                    </div>
                    
                </div>
                <div class="col-md-6 col-md-offset-1 col-sm-6">
                    <div class="block">
                        <h3>
                        Student Loan Repayment and Recovery Management Information System
                        </h3>
                        <p>
                            <Strong> Welcome</strong> <br>
The Student Loans Repayment and Recovery System is a system for the HESFB that helps to process students' loans online. The loan is processed for free and no one should solicit funds from any applicant for purposes of securing the loan
   </p>

                        <ul class="download-btn">
                              <li>
                                <a href="<?php echo base_url() . "index.php/student/register"; ?>" class="btn btn-default btn-windows"><i class="fa fa-windows"></i>Register</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() . "index.php/login"; ?>" class="btn btn-default btn-apple"> <i class="fa fa-apple"></i>My  account</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url() . "index.php/administration/login"; ?>" class="btn btn-default btn-andriod"><i class="fa fa-android"></i>Administrator</a>
                            </li>
                          
                        </ul>
                        

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="feature">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".8s">
                    <h2 class="title">Our Focused on Feature</h2>

                    <div class="feature-item">

                        <div id="container" style="height: 430px"></div>
                    </div>

                  

                    
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".8s">
                    <div class="block">
                   
              <div id="container2" style="min-width: 410px; height: 400px; margin: 0 auto"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="utility">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                   <div class="fb-page" data-href="https://www.facebook.com/pages/Higher-Education-Students-Financing-Board/1418927295060943" data-width="700" data-height="300" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/pages/Higher-Education-Students-Financing-Board/1418927295060943"><a href="https://www.facebook.com/pages/Civic-Response-on-Environment-Development/1412115559052900">Civic Response on Environment &amp; Development</a></blockquote></div></div>
  </div>
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay=".8s">
                    <div class="block">
                           
                          <h4 class="media-heading"> REQUIREMENTS</h4>
                             
In order to benefit from the system you must be a student that has completed A level and qualifies to join any institution of higher learning. If you are not a student you will not be able to benefit from the system. Actually you will be treated as an un-authorised user. If you are a student you can click on Regester to be able to go through the application process. 
WRONG INPUTS 
Wrong information may affect the success of your application make sure that you give only correct information to complete the task successful. 
             
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="utility-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".8s">
                    <div class="block">
                       <h4> WRONG INPUTS </h4>
Wrong information may affect the success of your application make sure that you give only correct information to complete the task successful. 

                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".8s">
                    <img class="img-responsive" src="images/app-screen.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <footer class="wow fadeInUp" data-wow-delay=".8s">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                        <a class="footer-logo"href="#">
                                              </a>
                    <p>Copyright © 2015</p>
                    
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

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
          colors: ['#00AFEC', '#8883BC', '#263249', '#5F7F90', '#D9CDB6'],
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
                ['Refund', <?php if (is_array($refund) && count($refund)) {
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
        colors: ['#2f7ed8','#910000','#8bbc21','#1aadce'],
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
                    color: Highcharts.getOptions().colors[4]
                }
            },
            title: {
                text: 'Students',
                style: {
                    color: Highcharts.getOptions().colors[4]
                }
            }
        }, { // Secondary yAxis
            title: {
                text: 'Students',
                style: {
                    color: Highcharts.getOptions().colors[3]
                }
            },
            labels: {
                format: '{value} No.',
                style: {
                    color: Highcharts.getOptions().colors[2]
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
            }, style: {
                    color: Highcharts.getOptions().colors[4]
                }

        }, {
            name: 'Number',
            type: 'spline',
            data: [<?php echo count($female); ?>, <?php  echo count($male); ?>],
            tooltip: {
                valueSuffix: 'No.'
            },
            style: {
                    color: Highcharts.getOptions().colors[2]
                }
        }]
    });
});
</script>

  

<script type="text/javascript" src="<?= base_url(); ?>js/highcharts.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/highcharts-3d.js"></script>
<script type="text/javascript"  src="<?= base_url(); ?>js/modules/exporting.js"></script>

              
	