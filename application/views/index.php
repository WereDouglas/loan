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
        <script src="<?= base_url(); ?>js/wow.min.js"></script>
        <script>
         new WOW(
            ).init();
        </script>

        

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
                                        <li><a href="#utility">Social media</a></li>
                                        <li><a href="#subscribe">Subscribe</a></li>
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
                        <h1>
                           Increasing Access to Higher Education
                        </h1>
                        <p>
                           This loan shall be porcessed for free and no one should solicit funds from any applicant for purposes of securing this education loan.
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

                       <div id="container3" style="height: 400px"></div>
                    </div>

                    <div class="feature-item">

                        <div class="media">
                            <div class="pull-left icon" href="#">
                                <i class="fa fa-qrcode"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Everything is perfectly orgainized</h4>
                                <p>Aipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>
                            </div>
                        </div>
                    </div>

                    <div class="feature-item">

                        <div class="media">
                            <div class="pull-left icon" href="#">
                                <i class="fa fa-recycle"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">Rapid customer support</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay=".8s">
                    <div class="block">
                        <img class="img-responsive" src="<?= base_url(); ?>images/featured-app.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="utility">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 wow fadeInUp" data-wow-delay=".8s">
                    <img class="img-responsive" src="images/mockup.png" alt="">
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInDown" data-wow-delay=".8s">
                    <div class="block">
                        <h2>Amazing Compatibility.</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com Neque porro quisqua
                        </p>
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
                        <h2>Remarkable Features</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea com Neque porro quisquam est, 
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay=".8s">
                    <img class="img-responsive" src="images/app-screen.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section id="subscribe" >
        <div class="container">
            <div class="row">
                <div class="col-md-12 wow fadeInDown" data-wow-delay=".8s">
                    <div class="block">
                        <div class="title text-center">
                            <h2>Subscribe</h2>
                            <p></p>
                        </div>
                        
                        

                        <form class="form-inline text-center col-sm-12 col-xs-12" role="form">
                            <div class="form-group">
                                <input type="text" class="form-control" id="signup-form" >
                                
                                
                            </div>
                            <a href="" type="submit" class="btn btn-default btn-signup">
                                <i class="fa fa-paper-plane"></i>
                            </a>
                        </form>
                    </div>
                    

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

                // Prepare demo data
                var data = [{ 'hc-key': 'ug-2595', value: 0 },
                    { 'hc-key': 'ug-7073', value: 1 },
                    { 'hc-key': 'ug-7074', value: 2 },
                    { 'hc-key': 'ug-7075', value: 3 },
                    { 'hc-key': 'ug-2785', value: 4 },
                    { 'hc-key': 'ug-2791', value: 5 },
                    { 'hc-key': 'ug-3385', value: 6 },
                    { 'hc-key': 'ug-3388', value: 7 },
                    { 'hc-key': 'ug-2786', value: 8 },
                    { 'hc-key': 'ug-7056', value: 9 },
                    { 'hc-key': 'ug-7084', value: 10 },
                    { 'hc-key': 'ug-7058', value: 11 },
                    { 'hc-key': 'ug-1678', value: 12 },
                    { 'hc-key': 'ug-1682', value: 13 },
                    { 'hc-key': 'ug-1683', value: 14 },
                    { 'hc-key': 'ug-1685', value: 15 },
                    { 'hc-key': 'ug-7072', value: 16 },
                    { 'hc-key': 'ug-2759', value: 17 },
                    { 'hc-key': 'ug-7051', value: 18 },
                    { 'hc-key': 'ug-2762', value: 19 },
                    { 'hc-key': 'ug-2767', value: 20 },
                    { 'hc-key': 'ug-2777', value: 21 },
                    { 'hc-key': 'ug-2778', value: 22 },
                    { 'hc-key': 'ug-2780', value: 23 },
                    { 'hc-key': 'ug-2781', value: 24 },
                    { 'hc-key': 'ug-2782', value: 25 },
                    { 'hc-key': 'ug-2783', value: 26 },
                    { 'hc-key': 'ug-2779', value: 27 },
                    { 'hc-key': 'ug-2784', value: 28 },
                    { 'hc-key': 'ug-3382', value: 29 },
                    { 'hc-key': 'ug-3384', value: 30 },
                    { 'hc-key': 'ug-3381', value: 31 },
                    { 'hc-key': 'ug-3383', value: 32 },
                    { 'hc-key': 'ug-3390', value: 33 },
                    { 'hc-key': 'ug-3386', value: 34 },
                    { 'hc-key': 'ug-3391', value: 35 },
                    { 'hc-key': 'ug-3392', value: 36 },
                    { 'hc-key': 'ug-3394', value: 37 },
                    { 'hc-key': 'ug-2750', value: 38 },
                    { 'hc-key': 'ug-7048', value: 39 },
                    { 'hc-key': 'ug-7080', value: 40 },
                    { 'hc-key': 'ug-7081', value: 41 },
                    { 'hc-key': 'ug-1684', value: 42 },
                    { 'hc-key': 'ug-7082', value: 43 },
                    { 'hc-key': 'ug-7068', value: 44 },
                    { 'hc-key': 'ug-7070', value: 45 },
                    { 'hc-key': 'ug-7049', value: 46 },
                    { 'hc-key': 'ug-2787', value: 47 },
                    { 'hc-key': 'ug-7055', value: 48 },
                    { 'hc-key': 'ug-2769', value: 49 },
                    { 'hc-key': 'ug-7052', value: 50 },
                    { 'hc-key': 'ug-2774', value: 51 },
                    { 'hc-key': 'ug-7059', value: 52 },
                    { 'hc-key': 'ug-7083', value: 53 },
                    { 'hc-key': 'ug-7057', value: 54 },
                    { 'hc-key': 'ug-2790', value: 55 },
                    { 'hc-key': 'ug-2776', value: 56 },
                    { 'hc-key': 'ug-7067', value: 57 },
                    { 'hc-key': 'ug-7065', value: 58 },
                    { 'hc-key': 'ug-7066', value: 59 },
                    { 'hc-key': 'ug-7069', value: 60 },
                    { 'hc-key': 'ug-7061', value: 61 },
                    { 'hc-key': 'ug-3389', value: 62 },
                    { 'hc-key': 'ug-7062', value: 63 },
                    { 'hc-key': 'ug-7063', value: 64 },
                    { 'hc-key': 'ug-7064', value: 65 },
                    { 'hc-key': 'ug-7086', value: 66 },
                    { 'hc-key': 'ug-2744', value: 67 },
                    { 'hc-key': 'ug-1679', value: 68 },
                    { 'hc-key': 'ug-1680', value: 69 },
                    { 'hc-key': 'ug-7054', value: 70 },
                    { 'hc-key': 'ug-1686', value: 71 },
                    { 'hc-key': 'ug-7078', value: 72 },
                    { 'hc-key': 'ug-1677', value: 73 },
                    { 'hc-key': 'ug-1688', value: 74 },
                    { 'hc-key': 'ug-1690', value: 75 },
                    { 'hc-key': 'ug-2745', value: 76 },
                    { 'hc-key': 'ug-2752', value: 77 },
                    { 'hc-key': 'ug-2754', value: 78 },
                    { 'hc-key': 'ug-1687', value: 79 },
                    { 'hc-key': 'ug-2757', value: 80 },
                    { 'hc-key': 'ug-7060', value: 81 },
                    { 'hc-key': 'ug-1689', value: 82 },
                    { 'hc-key': 'ug-2760', value: 83 },
                    { 'hc-key': 'ug-2761', value: 84 },
                    { 'hc-key': 'ug-2766', value: 85 },
                    { 'hc-key': 'ug-2765', value: 86 },
                    { 'hc-key': 'ug-2764', value: 87 },
                    { 'hc-key': 'ug-2749', value: 88 },
                    { 'hc-key': 'ug-2768', value: 89 },
                    { 'hc-key': 'ug-2763', value: 90 },
                    { 'hc-key': 'ug-2748', value: 91 },
                    { 'hc-key': 'ug-2771', value: 92 },
                    { 'hc-key': 'ug-2772', value: 93 },
                    { 'hc-key': 'ug-2775', value: 94 },
                    { 'hc-key': 'ug-2788', value: 95 },
                    { 'hc-key': 'ug-2789', value: 96 },
                    { 'hc-key': 'ug-3387', value: 97 },
                    { 'hc-key': 'ug-3393', value: 98 },
                    { 'hc-key': 'ug-7079', value: 99 },
                    { 'hc-key': 'ug-7076', value: 100 },
                    { 'hc-key': 'ug-2746', value: 101 },
                    { 'hc-key': 'ug-2747', value: 102 },
                    { 'hc-key': 'ug-2751', value: 103 },
                    { 'hc-key': 'ug-2758', value: 104 },
                    { 'hc-key': 'ug-2756', value: 105 },
                    { 'hc-key': 'ug-7053', value: 106 },
                    { 'hc-key': 'ug-2770', value: 107 },
                    { 'hc-key': 'ug-2773', value: 108 },
                    { 'hc-key': 'ug-1681', value: 109 },
                    { 'hc-key': 'ug-2753', value: 110 },
                    { 'hc-key': 'ug-2755', value: 111 }];

                    
                // Initiate the chart
                $('#container3').highcharts('Map', {
                    
                    title : {
                        text : 'Applicants per district'
                    },

                    subtitle : {
                        text : 'Source map: <a href="<?= base_url(); ?>js/ug-all.js">countries/ug/ug-all</a>'
                    },

                    mapNavigation: {
                        enabled: true,
                        buttonOptions: {
                            verticalAlign: 'bottom'
                        }
                    },

                    colorAxis: {
                        min: 0
                    },

                    series : [{
                        data : data,
                        mapData: Highcharts.maps['countries/ug/ug-all'],
                        joinBy: 'hc-key',
                        name: 'Random data',
                        states: {
                            hover: {
                                color: '#BADA55'
                            }
                        },
                        dataLabels: {
                            enabled: true,
                            format: '{point.name}'
                        }
                    }]
                });
            });
        </script>
        

  
<script src="<?= base_url(); ?>js/highmaps.js"></script>
 
	<script type="text/javascript" src="<?= base_url(); ?>js/highcharts.js"></script>

<script src="<?= base_url(); ?>js/ug-all.js"></script>
<script type="text/javascript"  src="<?= base_url(); ?>js/modules/exporting.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/highcharts-3d.js"></script>
 