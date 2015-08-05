<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css"> 
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="<?= base_url(); ?>css/animate.css" rel="stylesheet" type="text/css">

<body>

    <div class="container">
        <div class="row">

            <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/save/'  method="post">            

                <div class="col-md-4 ">
                    <div class="alert alert-info"> 
                        <input id="imgfile" name="imgfile" type="file" /> 
                        <img id="preview"  width=150px" height="150px" src="<?=  base_url();?>images/placeholder.jpg" alt=" Your profile passport image" />
                    </div>
                    <div class="alert alert-success"><b></b> Please fill in your details in this form</div>
                </div><!-- /col-lg-6 -->
                <div class="col-md-4 ">

                    <div class="showback">
                        <?php echo $this->session->flashdata('msg'); ?>	

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

                        <div class="form-group">
                            <div class="col-sm-12">
                                Contact/mobile number <input type="text" class="form-control" name="contact" id="contact">
                            </div>
                        </div>

                    </div><!-- /showback -->


                </div><!-- /col-lg-6 -->

                <div class="col-md-4 ">
                    <div class="form-group">
                        <div class="col-sm-12">
                            E-mail <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-12">
                            Social media URL: <input type="text" name="social" id="social" class="form-control">
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
                    <div class="form-group">
                        <label class="clear"> </label> 
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-info">Cancel</button>
                        </div>
                    </div>    


                </div>

            </form>	

        </div>


    </div>


    <!--main content end-->
    <!--footer start-->
    <?php require_once(APPPATH . 'views/footer.php'); ?>

    <script type="text/javascript">
        $("#imgfile").change(function () {
            if (this.files && this.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            }
        });




    </script>
    