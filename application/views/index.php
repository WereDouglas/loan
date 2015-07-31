 <?php require_once(APPPATH . 'views/header.php'); ?>
<!--Header_section--> 


  <h2>Student Loan Repayment and Recovery Management Information System</h2>
    <h2> <img  height="80px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/ministry.png" alt="account" /></h2>
   
<!--Service-->
<section  id="service">
  <div class="container">
    <div class="service_wrapper">
      <div class="row">
        <div class="col-lg-4">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><img  height="100px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/bid.png" alt="account" /></span> </div>
            <h3 class="animated fadeInUp wow">Loan Schemes</h3>
            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        <div class="col-lg-4">	
             <a href="<?php echo base_url() . "index.php/student/register"; ?>">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><img  height="100px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/apply.png" alt="apply" /></span> </div>
            <h3 class="animated fadeInUp wow">Apply</h3>
            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
          </div>
             </a>
        </div>
        <div class="col-lg-4">
             <a href="<?php echo base_url() . "index.php/login"; ?>">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><img  height="100px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/identity.png" alt="apply" /></span> </div>
            <h3 class="animated fadeInUp wow">My Account</h3>
            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
          </div> </div>
        </div>
      </div>
	   <div class="row">
        <div class="col-lg-4 mrgTop">
          <div class="service_block">
            <div class="service_icon delay-03s animated wow  zoomIn"> <span><img  height="100px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/recover.png" alt="recover" /></span> </div>
            <h3 class="animated fadeInUp wow">Recovery</h3>
            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
          </div>
        </div>
        <div class="col-lg-4 mrgTop">
          <div class="service_block">
            <div class="service_icon icon2  delay-03s animated wow zoomIn"> <span><img  height="100px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/research.png" alt="recover" /></span> </div>
            <h3 class="animated fadeInUp wow">User Research</h3>
            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
          </div>
        </div>
        <div class="col-lg-4 mrgTop">
          <div class="service_block">
            <div class="service_icon icon3  delay-03s animated wow zoomIn"> <span><img  height="100px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/other.png" alt="recover" /></span> </div>
            <h3 class="animated fadeInUp wow">User Experience</h3>
            <p class="animated fadeInDown wow">Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
          </div>
        </div>
             
      </div>
       <div class="container">
    <div class="service_wrapper">
        <div class="row">
            
              <div id="container" style="height: 400px"></div>
            
        </div></div></div>
    </div>
  </div>
</section>
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
            text: 'Contents of Highsoft\'s weekly fruit delivery'
        },
        subtitle: {
            text: '3D donut in Highcharts'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Delivered amount',
            data: [
                ['Bananas', 8],
                ['Kiwi', 3],
                ['Mixed nuts', 1],
                ['Oranges', 6],
                ['Apples', 8],
                ['Pears', 4],
                ['Clementines', 4],
                ['Reddish (bag)', 1],
                ['Grapes (bunch)', 1]
            ]
        }]
    });
});
		</script>
              
	<script type="text/javascript" src="<?= base_url(); ?>js/highcharts.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/highcharts-3d.js"></script>
<script type="text/javascript"  src="<?= base_url(); ?>js/modules/exporting.js"></script>


</body>
</html>