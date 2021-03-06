<!DOCTYPE html>
<html class="no-js">
    
    <head>
        <title>HESFB</title>
        <!-- Bootstrap -->
        <link href="<?=  base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?=  base_url();?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?=  base_url();?>vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen">
        <link href="<?=  base_url();?>assets/styles.css" rel="stylesheet" media="screen">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
            <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="<?=  base_url();?>vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>

    
    <body onload="parent.alertsize(document.body.scrollHeight);">
        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><img  height="60px" width="300px" class="nav-user-photo" src="<?= base_url(); ?>images/header1.png" alt="account" /></a>
                   
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li class="dropdown">
                                <a href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"> <i class="icon-user"></i> <?php echo $this->session->userdata('name');?> <i class="caret"></i>

                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a tabindex="-1" href="#">Profile</a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a tabindex="-1" href="<?php echo base_url() . "index.php/"; ?>">Logout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                  
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3" id="sidebar">
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <!--<a href="<?php echo base_url() . "index.php/management/"; ?>" target="frame">-->
                        <li>   <strong> <?php echo $this->session->userdata('level');?></strong>  </li>
                        
                         <?php if ($this->session->userdata('level')=="Loan officer"){?>
                        <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/applications"; ?>"><i class="icon-chevron-right"></i><span class="badge badge-error pull-right"><?php echo count($students);?></span> View applicants</a>
                        </li>
                                
                        <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/approved"; ?>"><i class="icon-chevron-right"></i><span class="badge badge-success pull-right"><?php echo count($studentsyes);?></span> View approved</a>
                        </li>
                         <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/denied"; ?>"><i class="icon-chevron-right"></i><span class="badge badge-success pull-right"><?php echo count($studentsno);?></span> View denied</a>
                        </li>
                         <?php }?>
                                                <?php if ($this->session->userdata('level')=="Operations manager"){?>
                                                      <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/university/"; ?>"><i class="icon-chevron-right"></i> Universities</a>
                        </li>
                        <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/applications"; ?>"><i class="icon-chevron-right"></i><span class="badge badge-error pull-right"><?php echo count($students);?></span> View applicants</a>
                        </li>
                        <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/approved"; ?>"><i class="icon-chevron-right"></i><span class="badge badge-success pull-right"><?php echo count($studentsyes);?></span> View approved</a>
                        </li>
                         <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/denied"; ?>"><i class="icon-chevron-right"></i><span class="badge badge-success pull-right"><?php echo count($studentsno);?></span> View denied</a>
                        </li>
                          <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/remit"; ?>"><i class="icon-chevron-right"></i>Fund remittance</a>
                        </li> 
                        
                        <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/payment"; ?>"><i class="icon-chevron-right"></i>Student re-payments</a>
                        </li>
                          <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/student/recover"; ?>"><i class="icon-chevron-right"></i>Loans to  recover</a>
                        </li>
                       
                        <li>
                            <a target="frame" href="<?php echo base_url() . "index.php/administration/report"; ?>"> Reports</a>
                        </li>
                                                    <?php }?>

                         
                        <?php if ($this->session->userdata('level')=="Administrator"){?>
                        
                        
                      
                            <a target="frame" href="<?php echo base_url() . "index.php/user"; ?>"> Users</a>
                        </li>
                        <?php }?>
                      
                       
                    </ul>
                </div>
                
                <!--/span-->
                <div class="span9" id="content">
                    <iframe id="frame" style="margin-top: 30px;" name="frame" frameborder="no" border="0" scrolling="no" height="1500" width="450" class="span12" src="<?php echo base_url() . "index.php/administration/report"; ?>"> </iframe>

                </div>
            </div>
            <hr>
            <footer>
                <p> 2015</p>
            </footer>
        </div>
        <!--/.fluid-container-->
        <script src="<?=  base_url();?>vendors/jquery-1.9.1.min.js"></script>
        <script src="<?=  base_url();?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?=  base_url();?>vendors/easypiechart/jquery.easy-pie-chart.js"></script>
        <script src="<?=  base_url();?>assets/scripts.js"></script>
        <script>
        $(function() {
            // Easy pie charts
            $('.chart').easyPieChart({animate: 1000});
        });
        </script>
    </body>

</html>