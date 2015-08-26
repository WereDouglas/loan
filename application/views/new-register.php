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

        <link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/animate.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/responsive.css">
        <link href="<?php echo base_url(); ?>css/dropzone.css" type="text/css" rel="stylesheet" />

        <!-- Js -->




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
                                            <li><a href="#banner">Personal</a></li>
                                            <li><a href="#service">Residential</a></li>
                                            <li><a href="#feature">Institution</a></li>
                                            <li><a href="#utility">Loan</a></li>
                                            <!--                                        <li><a href="#subscribe">Subscribe</a></li>-->
                                            <li><a href="#">Home</a></li>
                                        </ul>

                                    </div><!-- /.navbar-collapse -->
                                </div><!-- /.container-fluid -->
                            </nav>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-12 col-sm-3">
                        <ul class="social-info">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>




        <section id="personal"  class="wow fadeInUp">
            <div class="container" >
                <div class="row" style="margin-top: 10%;">
                    <div class="alert alert-info"><b></b> Personal details /origin(Ensure to complete all sections)</div>

                    <div class="block">
                        <form id="personal-form" name="personal-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/personal/'  method="post">            

                            <div class="col-md-4 ">
                                <div class="alert"> 
                                    <input id="imgfile" name="imgfile" type="file" /> 
                                    <img id="preview"  width=150px" height="150px" src="<?= base_url(); ?>images/placeholder.jpg" alt=" Your profile passport image" />
                                </div>
                                <div class="form-group">                              
                                    <div class="col-sm-12">
                                        First name  <input type="text" id="fname" name="fname"  class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-12">
                                        Last name <input type="text" id="lname" name="lname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-12">
                                        Other name <input type="text" id="oname" name="oname" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-sm-12">
                                        Gender <select class="form-control" id="gender" name="gender">
                                            <option>Male</option>
                                            <option>Female</option>

                                        </select>
                                    </div> </div>


                            </div><!-- /col-lg-6 -->
                            <div class="col-md-4 ">

                                <div class="showback">
                                    <?php echo $this->session->flashdata('msg'); ?>	



                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Age <input type="text" class="form-control" name="age" id="age">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Post office Box number <input type="text" class="form-control" name="pobox" id="pobox">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            District of origin <input type="text" class="form-control" name="district" id="district">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Subcounty of origin <input type="text" class="form-control" name="county" id="county">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Parish/War of origin <input type="text" class="form-control" name="parish" id="parish">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Village/LC1 of origin <input type="text" class="form-control" name="village" id="village">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Town of origin <input type="text" class="form-control" name="town" id="town">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Marital status: <select name="married" id="married" class="form-control">
                                                <option>Single</option>
                                                <option>Married</option>
                                                <option>Separated</option>
                                                <option>Divorced</option>
                                                <option>Widowed</option>
                                                <option>Others(specify)</option>

                                            </select>
                                        </div>
                                        Please dont forget to attach applicable documents
                                    </div>   


                                </div><!-- /showback -->


                            </div><!-- /col-lg-6 -->

                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Contact/mobile number <input type="text" class="form-control" name="contact" id="contact">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        E-mail <input type="text" id="email" name="email" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Facebook account: <input type="text" name="social" id="social" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Twitter account<input type="text" name="twitter" id="twitter" placeholder="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Whatsapp account <input type="text" name="whatsapp" id="twitter" placeholder="" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Password<input type="password" name="password" id="password"  class="form-control" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Confirm Password<input type="password" name="password2" id="password2"  class="form-control" placeholder="">
                                    </div>
                                </div>
                                <hr>
                                <span class="clear"><br> </span> 
                                <div class="form-group">

                                    <div class="col-sm-12">
                                        <button type="submit" id="personal" class="btn btn-default">Submit</button> <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                                </div>

                            </div>

                        </form>

                    </div>
                </div>
                <span id="Loading_personal"  name ="Loading_personal"><img src="<?= base_url(); ?>images/loading.gif" alt="Loading" /></span><br>

            </div>
        </section>


        <section id="service">
            <div class="container">
                <div class="service-wrapper">
                    <div class="row">
                        <div class="alert alert-info"><b></b>Contact information and  details(current address)</div>

                        <form id="residential-form" name="residential-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/residential/'  method="post">            

                            <div class=" col-md-4 ">

                                <div class="form-group">
                                    Next of kin <input type="text" name="KinName" id="KinName" class="form-control">
                                    contact <input type="text" name="KinContact" id="KinContact" class="form-control">
                                    Relationship with next of kin <input type="text" name="KinRelationship" id="KinRelationship" class="form-control">

                                </div>             
                            </div><!-- /col-lg-6 -->
                            <div class="col-md-4 ">

                                <div class="form-group">
                                    <div class="col-sm-12">
                                        1<sup>st</sup>Emergency Contact person <input type="text" name="ContactName" id="ContactName" class="form-control">
                                        contact <input type="text" name="ContactNo" id="ContactNo" class="form-control">
                                    </div>
                                </div>
                            </div><!-- /col-lg-6 -->

                            <div class="col-md-4 ">

                                <div class="form-group"> 

                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <div class="col-sm-12">Identification type
                                            <select class="form-control" name="IDtype" id="IDtype" >
                                                <option>Passport</option>
                                                <option>Driving permit</option>
                                                <option>National ID</option>
                                                <option>Other</option>
                                            </select></div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Identification Number <input type="text" name="IDnumber" id="IDnumber" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content">

                                    <span class="clear"><br> </span> 
                                    <div class="form-group">
                                        <label class="clear"> </label> 
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-default">Continue</button> 
                                        </div>
                                    </div> 
                                </div>

                            </div>


                        </form>	
                    </div>
                </div>
                <span id="Loading_residential"  name ="Loading_residential"><img src="<?= base_url(); ?>images/loading.gif" alt="Loading" /></span><br>

            </div>
        </section>


        <section id="utility">
            <div class="container">
                <div class="service-wrapper">
                    <div class="row">
                        <div class="alert alert-info"><b></b>Institute of admission and Financial requirements</div>

                        <form id="institute-form" name="institute-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/institute/'  method="post">            

                            <div class="col-md-4 ">

                                <div class="form-group">
                                    <div class="col-sm-12">University/Institute
                                        <select class="form-control" name="institute" id="institute">
                                            <option>Makerere university</option>

                                            <option>MUBS</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Student No/Registration number:<input type="text" id="stdNo" name="stdNo" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Course undertaken/Faculty/School: <input type="text" id="course" name="course" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Year of admission: <input type="text" name="yearadmitted" id="yearadmitted" class="form-control">
                                    </div>
                                </div>


                            </div>


                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Current year of study: <input type="text" name="yearstudy" id="yearstudy" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Duration of course(Years): <input type="text" name="duration" id="duration" class="form-control">
                                    </div>
                                </div>

                                <div class="widget-content">
                                    
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            Disabled: <select name="disabled" id="disabled" class="form-control">
                                                <option>Yes</option>
                                                <option>No</option>

                                            </select>
                                        </div>    <div class="form-group">
                                    <div class="col-sm-12">
                                        Number of years to be financed: <input type="text" name="period" id="period" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Total amount : <input type="text" name="total" id="total" class="form-control">
                                    </div>
                                </div>
                                        Please attach a certificate when at the upload section
                                    </div>   
                                    <hr>

                                    <div class="form-group">
                                        <label class="clear"> </label> 
                                        <div class="col-sm-12">
                                            <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-info">Cancel</button>
                                        </div>
                                    </div>  
                                </div>


                            </div>
                                       <div class="col-md-4 ">

                           
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Tuition for one academic year:<input type="text" name="fees" id="fees" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Functional fees required for one academic year: <input type="text" name="functional" id="functional" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Research fees required for one academic year: <input type="text" name="research" id="research" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Aid and other appliances for the disabled(Please specify): <input type="text" name="aid" id="aid" class="form-control">
                                </div>
                            </div>
                            
                            </div>
                            <span id="loading_institute"  name ="loading_institute"><img src="<?= base_url(); ?>images/loading.gif" alt="Loading" /></span><br>
                        </form>	
                    </div>   
                </div>

            </div>
        </section>
        
        
     

        <section id="feature">
            <div class="container">
                 <div class="alert alert-info"><b></b>Education history</div>

                <div class="row">
                    <form id="education-form" name="education-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/education/'  method="post">            
              
                        <div class="col-md-4 ">

                            <div class="form-group">
                                <div class="col-sm-12">Institute level of education
                                    <select class="form-control" name="educationInstitute" id="educationInstitute">
                                        <option>University</option>
                                        <option>Tertiary</option>
                                        <option>A-level</option>
                                        <option>O-level</option>
                                        <option>Primary</option>
                                    </select></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Name of Institute/School:<input type="text" name="instituteName" id="instituteName" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2 ">
                              <div class="form-group">
                                <div class="col-sm-12">
                                    Index/Registration No: <input type="text" name="index" id="index" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Year of completion: <input type="text" name="yearcomplete" id="yearcomplete" class="form-control">
                                </div>
                            </div>
                        </div>
                                  
                        <div class="col-md-2 ">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    GPA/Aggregates: <input type="text" name="gpa" id="gpa" class="form-control">
                                </div>
                            </div>

                            <div class="widget-content">
                                <?php echo $this->session->flashdata('action'); ?>
                                <div class="form-group">
                                    <div class="col-sm-12">
                                        Fees paid per Year: <input type="text" name="fees" id="fees" class="form-control">
                                    </div>
                                </div>

                               </div>
                </div>
                           <div class="col-md-4 ">

                           
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Sponsor <input type="text" name="sponsor" id="sponsor" class="form-control">
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Relationship with sponsor <input type="text" name="relationship" id="relationship" class="form-control">
                                </div>
                            </div>
                                 <span class="clear"><br> </span> 

                                <div class="form-group">
                                    <label class="clear"> </label> 
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default">Submit</button>  <button type="button" class="btn btn-default">Continue</button>
                                    </div>
                                </div>
                          



                        </div>
                         </form>
                    <span id="loading_education"  name ="loading_education"><img src="<?= base_url(); ?>images/loading.gif" alt="Loading" /></span><br>
                     
                          </div>
                 	
            </div>
            
        </section>
      


        <section id="utility">
            <div class="container">
                <div class="row">
<h3>Details of a parent/Guardian address</h3>
                   
                    <form id="parent-form" name="parent-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/parent/'  method="post">            
                        <div class="col-md-4 ">
                            
                            <div class="form-group">
                                <div class="col-sm-12">Relationship
                                    <select class="form-control" name="parent">
                                        <option>Father</option>
                                        <option>Mother</option>
                                        <option>Brother</option>
                                        <option>Sister</option>
                                        <option>Guardian</option>
                                        <option>Other</option>
                                    </select></div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Surname:<input type="text" name="surname" id="surname" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    First Name:<input type="text" name="firstname" id="firstname" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Date of birth: <input type="text" name="dob" id="dob" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Email-address: <input type="text" name="email" id="email" class="form-control">
                                </div>
                            </div>
                          
                        
                            <div class="form-group">
                                <div class="col-sm-12">
                                    District: <input type="text" name="district" id="district" class="form-control">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Subcounty: <input type="text" name="subcounty" id="subcounty" class="form-control">
                                </div>
                            </div>

                            

                        </div>
                        <div class="col-md-4 ">
                            
                              
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Town: <input type="text" name="town" id="town" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Parish/Ward: <input type="text" name="parish" id="parish" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Village/LC1: <input type="text" name="village" id="village" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Profession:<input type="text" name="profession" id="profession" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Highest level of education:<input type="text" name="education" id="education" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Contact: <input type="text" name="contact" id="contact" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Monthly income: <input type="text" name="income" id="income" class="form-control">
                                </div>
                            </div>
                        
                        </div>
                        <div class="col-md-4 ">

                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Current residential address: <input type="text" name="residential" id="residential" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Other income sources: <input type="text" name="income" id="income" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    State:    <select class="form-control" name="state" id="state">
                                        <option>Deceased</option>
                                        <option>Living</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    District of origin: <input type="text" name="districtorigin" id="districtorigin" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Sub county of origin: <input type="text" name="countyorigin" id="countyorigin" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Village/LC1 of origin: <input type="text" name="village" id="village" class="form-control">
                                </div>
                            </div>

                            <div class="widget-content">
                                <?php echo $this->session->flashdata('action'); ?>


                                <hr>
  <span class="clear"><br> </span> 

                                <div class="form-group">
                                    <label class="clear"> </label> 
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>

                            </div>

                        </div>
                         <span id="loading_parent"  name ="loading_parent"><img src="<?= base_url(); ?>images/loading.gif" alt="Loading" /></span><br>

                    </form>	     
                </div>
            </div>
        </section>

       

        <section id="utility-payer">
            <div class="container">
                <div class="row">

                    <form id="sibling-form" name="sibling-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/sibling/'  method="post">            

   <h3>Details of Sibling </h3>

                        <div class="col-md-4 "> <div class="form-group">
                                <div class="col-sm-12">
                                    Type of beneficiary <select class="form-control" name="sibType" id="sibType">
                                        <option>Sibling</option>
                                        <option>Dependant</option>                         

                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-sm-12">
                                    Name <input type="text" name="sibName" id="sibName" class="form-control">
                                </div>
                            </div>
                          


                        </div>
   <div class="col-md-4 ">
       
         <div class="form-group">
                                <div class="col-sm-12">
                                    Institution/School/Current-last <input type="text" name="sibSchool" id="sibSchool" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Level of study <input type="text" name="sibStudy" id="sibStudy" class="form-control">
                                </div>
                            </div>
                          
   </div>
     <div class="col-md-4 ">
       
       
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Annual Fees <input type="text" name="sibFees" id="sibFees"class="form-control">
                                </div>
                            </div>
           <span class="clear"><br> </span> 

                                <div class="form-group">
                                    <label class="clear"> </label> 
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
   </div>



                    </form>
                     <span id="loading_sibling"  name ="loading_sibling"><img src="<?= base_url(); ?>images/loading.gif" alt="Loading" /></span><br>

                </div>
            </div>
        </section>
        <section id="economics">
            <div class="container">
                <div class="row">
  <h3>Family Social Economic Indicators</h3>
                    <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/course/'  method="post">            
              <div class="col-md-4 ">

                          
                            <?php echo $this->session->flashdata('action'); ?>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Total number of children from biological father <input type="text" name="stdNo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Total number of children from biological mother <input type="text" name="course" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Are your parents staying together? <input type="text" name="course" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    If no who do you stay with? <input type="text" name="course" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Type of family residence. <select class="form-control" name="famresidence">
                                        <option>Rented</option>
                                        <option>Owned</option>
                                        <option>Employer's</option>
                                        <option>Other</option>

                                    </select>
                                </div>
                            </div>
                           
                    


                        </div>
                        <div class="col-md-2 ">
                             <div class="form-group">
                                <div class="col-sm-12">
                                    Type of house. <select class="form-control" name="famresidence">
                                        <option>Permanent</option>
                                        <option>Semi Permanent</option>

                                    </select>
                                </div>
                            </div>
                                    <div class="form-group">
                                <div class="col-sm-12">
                                    Number of rooms in the family house<input type="text" name="course" class="form-control">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    Average Household monthly expenditure<input type="text" name="course" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Monthly Expenses incurred by family on: <select class="form-control" name="famresidence">
                                        <option>Rent</option>
                                        <option>Food</option>
                                        <option>Clothing</option>
                                        <option>Utilities</option>
                                        <option>Water</option>
                                        <option>Electricity</option>
                                        <option>Gas</option>
                                        <option>Charcoal</option>
                                        <option>Paraffin</option>
                                        <option>Firewood</option>
                                        <option>Airtime</option>
                                        <option>Pay TV</option>
                                        <option>Transport</option>

                                    </select><input type="text" name="course" class="form-control">
                                </div>
                            </div>
                            
                            
                            
                        </div>
                        <div class="col-md-6 ">
                            
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Medical care: <select class="form-control" name="famresidence">
                                        <option>Government health Facility</option>
                                        <option>Private missionary hospital</option>
                                        <option>Private commercial Hospital/Clinic</option>
                                        <option>Insurance cover</option>
                                        <option>Other</option>


                                    </select>
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-sm-12">
                                    Family means of transport: <select class="form-control" name="famresidence">
                                        <option>Private</option>
                                        <option>Public means</option>
                                        <option>Employer's Motor Vehicle</option>
                                        <option>Bicycle</option>
                                        <option>Other</option>


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Reason for borrowing form government to finance your university/Tertiary Education 
                                    <textarea class="form-control"></textarea>


                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Historical background of how your Education has been funded 
                                    <br><textarea class="form-control"></textarea>


                                    </select>
                                </div>
                            </div>
                              <span class="clear"><br> </span> 

                                <div class="form-group">
                                    <label class="clear"> </label> 
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </div>
                                </div>
                            
                        </div>
        

                    </form>	    
                </div>
            </div>
        </section>
        
        
             <section id="economics">
            <div class="container">
                <div class="row">
   <h3>Loan guarantee(family/persons who can support you by paying back small installments of your loan while you are at the university)</h3>
                         
                    <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/course/'  method="post">            
              
                        <div class="col-md-6 ">

                             <?php echo $this->session->flashdata('action'); ?>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    Name <input type="text" name="stdNo" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Profession <input type="text" name="course" class="form-control">
                                </div>
                            </div>
                       
                       
                        </div>
                         <div class="col-md-6 ">
                                  <div class="form-group">
                                <div class="col-sm-12">
                                    Occupation/Source of income <input type="text" name="course" class="form-control">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    Contact/Telephone <input type="text" name="course" class="form-control">
                                </div>
                            </div>
                         <span class="clear"><br> </span> 

                                <div class="form-group">
                                    <label class="clear"> </label> 
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default">Submit</button>  <button type="button" class="btn btn-default">Continue</button>
                                    </div>
                                </div>
                         </div>
                    </form>	    
                </div>
            </div>
        </section>
<hr>
        <section id="utility-payer">
            <div class="container">
               
                <div class="row">
                   	
                    <div class="col-md-12 ">

                        <div class="alert alert-danger"><b></b>Upload all relevant files/attachments here note only images are acceptible i.e png,jpg Upload a minimum of 3 scans(images)your latest 3 qualification is reguired here</div>

                        <h4>File Upload</h4>
                        <form action="<?php echo site_url('/student/upload'); ?>" class="dropzone"  >

                        </form>
                        <?php echo $this->session->flashdata('action'); ?>

                        <div class="widget-content">

                        </div>


                    </div><!-- /col-lg-6 -->
                </div>
                <div class="row">

                    <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/course/'  method="post">            
                        <div class="col-md-4 "></div>
                        <div class="col-md-4 ">
                            <div class="col-sm-12"><input type="checkbox" id="nationalID" name="nationalID">   Applicant's national ID</div>
                            <div class="col-sm-12">  <input type="checkbox" id="nationalID" name="nationalID">Institution admission letter </div>
                            <div class="col-sm-12">   <input type="checkbox" id="nationalID" name="nationalID">Copy of fees structure</div>
                            <div class="col-sm-12"> <input type="checkbox" id="nationalID" name="nationalID"> Guardian /Parent's nation ID</div>
                            <div class="col-sm-12">  <input type="checkbox" id="nationalID" name="nationalID">Death certificates if orphaned</div>
                            <div class="col-sm-12">  <input type="checkbox" id="nationalID" name="nationalID">Copies of Slips UCE and UACE</div>
                            <div class="col-sm-12">  <input type="checkbox" id="nationalID" name="nationalID">Declarations </div>
                            <div class="col-sm-12"> <input type="checkbox" id="nationalID" name="nationalID">Agreements and recommendations</div>
 <span class="clear"><br> </span> 

                                <div class="form-group">
                                    <input type="text" class="form-control" id="signup-form" >


                                </div>
                               
                           
                                <div class="form-group">
                                    <label class="clear"> </label> 
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-default">Submit</button>  <button type="button" class="btn btn-success">Complete</button>
                                    </div>
                                </div>
                        </div>
                          
                    </form>	    
                </div>
            </div>
        </section>
   

  <hr>

        <footer class="wow fadeInUp" data-wow-delay=".8s">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-12">
                        <a class="footer-logo"href="#">
                            <img class="img-responsive" src="images/footer-logo.png" alt="">
                        </a>
                        <p>Copyright © 2015 </p>

                    </div>
                </div>
            </div>
        </footer>

    </body>
</html>

<script src="<?= base_url(); ?>js/vendor/modernizr-2.6.2.min.js"></script>
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= base_url(); ?>js/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>js/plugins.js"></script>
<script src="<?= base_url(); ?>js/main.js"></script>

<script type="text/javascript">
    $('#Loading_personal').hide();
    $('#Loading_residential').hide();
      $('#loading_institute').hide();

    $("#imgfile").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    $("#personal-form").submit(function (e) {
        e.preventDefault();
        console.log($(this).serializeArray());
        $('#Loading_personal').show();
        var posts = $(this).serializeArray();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var password = $("#password").val();
        var email = $("#email").val();
        var gender = $("#gender").val();
        var contact = $("#contact").val();
        var age = $("#age").val();
        var name = fname + ' ' + lname;



        //  var dataString = 'posts=' +posts;
        $("#fname").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
        $("#lname").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
        $("#email").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

        if (fname.length > 0 && lname.length > 0)
        {

            $.post("<?php echo base_url() ?>index.php/student/personal", {age: age, gender: gender, contact: contact, name: name, posts: posts, email: email, password: password}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_daily').hide();
                setTimeout(finishAjax('Loading_personal', escape(response)), 200);

            }); //end change




        } else {
            alert("Please insert missing information");
            $('#Loading_personal').hide();
        }

        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }



    })


    $("#residential-form").submit(function (e) {
        e.preventDefault();
        console.log($(this).serializeArray());
        $('#Loading_residential').show();
        var residential = $(this).serializeArray();


        if (residential.length > 0)
        {

            $.post("<?php echo base_url() ?>index.php/student/residential", {residential: residential}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#Loading_residential').hide();
                setTimeout(finishAjax('Loading_residential', escape(response)), 200);

            }); //end change




        } else {
            alert("Please insert missing information");
            $('#Loading_residential').hide();
        }

        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    })
    
     $("#institute-form").submit(function (e) {
        e.preventDefault();
       // console.log($(this).serializeArray());
        $('#loading_institute').show();
        var posts = $(this).serializeArray();
        var university = $("#institute").val();
        var stdNo = $("#stdNo").val();
        var course = $("#course").val();
        var yearadmitted = $("#yearadmitted").val();
        var yearstudy = $("#yearstudy").val();
        var duration = $("#duration").val();
        var fees = $("#fees").val();
        var disabled = $("#disabled").val();
        var functional = $("#functional").val();
        var research = $("#research").val();
        var aid = $("#aid").val();
        var total = $("#total").val();
        //  var dataString = 'posts=' +posts;
        $("#institute").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
        $("#stdNo").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
        $("#course").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

        if (university.length > 0 && stdNo.length > 0)        {

            $.post("<?php echo base_url() ?>index.php/student/institute", {functional:functional,research:research,aid:aid,total:total,posts: posts, university: university, stdNo:stdNo, course: course, yearadmitted: yearadmitted, yearstudy: yearstudy, duration:duration,fees:fees,disabled:disabled}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#loading_institute').hide();
                setTimeout(finishAjax('loading_institute', escape(response)), 200);

            }); //end change
        } else {
            alert("Please insert missing information");
            $('#loading_institute').hide();
        }

        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }



    })
    
    $('#loading_education').hide();
      $("#education-form").submit(function (e) {
        e.preventDefault();
       // console.log($(this).serializeArray());
        $('#loading_education').show();
        var posts = $(this).serializeArray();
        var instituteName = $("#instituteName").val();
        var index = $("#index").val();
        var yearcomplete = $("#yearcomplete").val();
        var gpa = $("#gpa").val();
        var fees = $("#fees").val();
         var sponsor = $("#sponsor").val();
        var relationship = $("#relationship").val();
       
        //  var dataString = 'posts=' +posts;
        $("#instituteName").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
        $("#gpa").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
        $("#fees").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image

        if (instituteName.length > 0 && fees.length > 0)        {

            $.post("<?php echo base_url() ?>index.php/student/education", {sponsor:sponsor,relationship:relationship,posts: posts, instituteName: instituteName, index:index,yearcomplete: yearcomplete, gpa: gpa, fees: fees}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#loading_education').hide();
                setTimeout(finishAjax('loading_education', escape(response)), 200);

            }); //end change
        } else {
            alert("Please insert missing information");
            $('#loading_education').hide();
        }

        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }



    })
    
    
     $('#loading_parent').hide();
      $("#parent-form").submit(function (e) {
        e.preventDefault();
       // console.log($(this).serializeArray());
        $('#loading_parent').show();
        var posts = $(this).serializeArray();
               
       

        if (posts.length > 0 ) {

            $.post("<?php echo base_url() ?>index.php/student/parents", {posts:posts}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#loading_parent').hide();
                setTimeout(finishAjax('loading_parent', escape(response)), 200);

            }); //end change
        } else {
            alert("Please insert missing information");
            $('#loading_parent').hide();
        }

        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }



    })
    
    
    $('#loading_sibling').hide();
      $("#sibling-form").submit(function (e) {
        e.preventDefault();
       // console.log($(this).serializeArray());
        $('#loading_sibling').show();
        var posts = $(this).serializeArray();
        var sibName = $("#sibName").val();
        var sibType = $("#sibType").val();
        var sibSchool = $("#sibSchool").val();
        var sibStudy = $("#sibStudy").val();
        var sibFees = $("#sibFees").val();
      
       
        //  var dataString = 'posts=' +posts;
        $("#sibName").html('<img src="<?= base_url(); ?>images/loading.gif" />'); // Loading image
       

        if (sibName.length > 0)        {

            $.post("<?php echo base_url() ?>index.php/student/sibling", {sibName:sibName,sibType: sibType,sibSchool:sibSchool, sibStudy:sibStudy,sibFees: sibFees}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#loading_sibling').hide();
                setTimeout(finishAjax('loading_sibling', escape(response)), 200);

            }); //end change
        } else {
            alert("Please insert missing information");
            $('#loading_sibling').hide();
        }

        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }



    })
    


</script>
<script src="<?php echo base_url(); ?>js/dropzone.js"></script>    