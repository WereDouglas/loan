<?php require_once(APPPATH . 'views/header.php'); ?>
<!--Header_section--> 


<h2>Student Loan Repayment and Recovery Management Information System</h2>
<h2> <img  height="80px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/ministry.png" alt="account" /></h2>



<div class="container">
    <div class="row">
        <h2> Login</h2>
        <?php echo $this->session->flashdata('msg');?> 
        <form id="user-form" name="user-form" enctype="multipart/form-data" class="form-horizontal"  action='<?= base_url(); ?>index.php/user/authenticate' method="post">
 
<div class="container centered">
    <div class="container col-md-6  centered" style="margin-left: 20%;">

                <div class="form-group">
                    <div class="col-sm-12 ">
                        E-mail <input type="text" name="email" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        Password<input type="password" name="password" class="form-control" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="clear"> </label> 
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-info">Cancel</button>
                    </div>
                </div>   


            </div><!-- /showback -->
</div>
       </form>

    </div><!-- /col-lg-6 -->


</div>
				
</div>





<script type="text/javascript" src="<?= base_url(); ?>js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.nav.js"></script> 
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/jquery.isotope.js"></script>
<script src="<?= base_url(); ?>js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script type="text/javascript" src="<?= base_url(); ?>js/wow.js"></script> 
<script type="text/javascript" src="<?= base_url(); ?>js/custom.js"></script>

</body>
</html>