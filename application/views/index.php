 <?php require_once(APPPATH . 'views/header-home.php'); ?>
<!--Header_section--> 
 <link rel="stylesheet" href="<?= base_url(); ?>css/demo-styles.css" />
   <style type="text/css">
            #container3 {
                height: 500px; 
                min-width: 310px; 
                max-width: 800px; 
                margin: 0 auto; 
            }
            .loading {
                margin-top: 10em;
                text-align: center;
                color: gray;
            }
        </style>

  <h2>Student Loan Repayment and Recovery Management Information System</h2>
    
<!--Service-->
<section  id="service">
  <div class="container">
         
	   <div class="row">
       <header>
   <a href="#" class="tutorial-link"><img  height="80px" width="450px" class="nav-user-photo" src="<?= base_url(); ?>images/header1.png" alt="account" /></a>
   <a href="<?php echo base_url() . "index.php/administration/login"; ?>"> <img style="float: right;" height="80px" width="150px" class="nav-user-photo" src="<?= base_url(); ?>images/ministry.png" alt="account" /></a>
   
       
       </header>
  <!--===============================Start Demo====================================================-->
<div class="demo-wrapper">
<!-- classnames for the pages should include: 1) type of page 2) page name-->
  <div class="s-page random-restored-page">
    <h2 class="page-title">Some minimized App</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="s-page custom-page">
    <h2 class="page-title">Thank You!</h2>
    <div class="close-button s-close-button">x</div>
  </div>
  <div class="r-page random-r-page">

    <div class="page-content">
      <h2 class="page-title">App Screen</h2>
      <p>Chew iPad power cord chew iPad power cord attack feet chase mice leave dead animals as gifts and stick butt in face chew iPad power cord. Chase mice. Run in circles use lap as chair why must they do that. Intrigued by the shower destroy couch leave hair everywhere sleep on keyboard chew iPad power cord. Use lap as chair. Missing until dinner time stand in front of the computer screen, intently sniff hand. Find something else more interesting. Destroy couch play time so inspect anything brought into the house hate dog burrow under covers. Sleep on keyboard destroy couch so hate dog so hide when guests come over. Chase mice destroy couch lick butt throwup on your pillow use lap as chair yet intrigued by the shower but climb leg. Stare at ceiling make muffins or hunt anything that moves claw drapes. Intently sniff hand intrigued by the shower. Why must they do that. Cat snacks leave dead animals as gifts or inspect anything brought into the house sweet beast so stare at ceiling give attitude. Flop over claw drapes but sun bathe lick butt, and chase mice. Rub face on everything lick butt leave hair everywhere lick butt, missing until dinner time for use lap as chair lick butt. Make muffins leave dead animals as gifts play time. Chew foot intrigued by the shower stare at ceiling inspect anything brought into the house yet hopped up on goofballs. 

      Hunt anything that moves intently sniff hand for hunt anything that moves play time. Chew foot climb leg throwup on your pillow so lick butt yet make muffins hate dog. Intrigued by the shower. Intently sniff hand shake treat bag. Cat snacks burrow under covers make muffins but all of a sudden go crazy find something else more interesting. Flop over chase mice. Give attitude. Inspect anything brought into the house. Stick butt in face sun bathe so find something else more interesting and intrigued by the shower. Rub face on everything use lap as chair. 

      Under the bed claw drapes chase mice but leave hair everywhere yet make muffins yet claw drapes. Use lap as chair. Find something else more interesting stretch for under the bed. Nap all day intrigued by the shower, hate dog sweet beast intently sniff hand so hate dog nap all day. Swat at dog hide when guests come over and mark territory chase mice for cat snacks. Use lap as chair. Lick butt throwup on your pillow need to chase tail. 

      Mark territory. Stick butt in face shake treat bag yet hunt anything that moves, yet hopped up on goofballs yet stare at ceiling under the bed. Give attitude chase imaginary bugs stretch so hunt anything that moves so hide when guests come over but intrigued by the shower find something else more interesting. Make muffins behind the couch for chew foot. Sweet beast flop over but throwup on your pillow. Intently sniff hand use lap as chair and missing until dinner time and chase imaginary bugs. 
      </p>
    </div>
    
    <div class="close-button r-close-button">x</div>
  </div>
<!--each tile should specify what page type it opens (to determine which animation) and the corresponding page name it should open-->
  <div class="dashboard clearfix">
    <ul class="tiles">
      <div class="col1 clearfix">
        <li class="tile tile-big tile-1 slideTextUp" data-page-type="r-page" data-page-name="random-r-page">
          <div><p>This tile's content slides up</p></div>
          <div><p>View all tasks</p></div>
        </li>
        <li class="tile tile-small tile tile-2 slideTextRight" data-page-type="s-page" data-page-name ="random-restored-page">
          <div><p class="icon-arrow-right"></p></div>
          <div><p>Tile's content slides right. Page opens from left</p></div>
        </li>
        <li class="tile tile-small last tile-3" data-page-type="r-page" data-page-name="random-r-page">
          <p class="icon-calendar-alt-fill"></p>
        </li>
        <li class="tile tile-big tile-4 fig-tile" data-page-type="r-page" data-page-name="random-r-page">
          <figure>
            <img src="<?= base_url(); ?>images/blue.jpg" />
            <figcaption class="tile-caption caption-left">Slide-out Caption from left</figcaption>
          </figure>
        </li>
      </div>

      <div class="col2 clearfix">
            <a href="<?php echo base_url() . "index.php/login"; ?>">
        <li class="tile tile-big tile-5" data-page-type="r-page" data-page-name="random-r-page">
            <div><p>  <img style="height: 120px;width: 130px;" src="<?= base_url(); ?>images/account.png" />My account</p></div>
        </li></a>
           <a href="<?php echo base_url() . "index.php/student/register"; ?>">
        
        <li class="tile tile-big tile-6 slideTextLeft" data-page-type="r-page" data-page-name="random-r-page">
          <div><p><img style="height: 120px;width: 130px;" src="<?= base_url(); ?>images/applii.png" />Register</p></div>
          <div><p>Apply</p></div>
        </li></a>
        <!--Tiles with a 3D effect should have the following structure:
            1) a container inside the tile with class of .faces
            2) 2 figure elements, one with class .front and the other with class .back-->
        <li class="tile tile-small tile-7 rotate3d rotate3dX" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="front"><span class="icon-picassa"></span></div>
            <div class="back"><p>Launch Picassa</p></div>
          </div>
        </li>
        <li class="tile tile-small last tile-8 rotate3d rotate3dY" data-page-type="r-page" data-page-name="random-r-page">
          <div class="faces">
            <div class="front"><span class="icon-instagram"></span></div>
            <div class="back"><p>Launch Instagram</p></div>
          </div>
        </li>
      </div>

      <div class="col3 clearfix">      
        <li class="tile tile-2xbig tile-9 fig-tile" data-page-type="custom-page" data-page-name="random-r-page">
          <figure>
            <img src="<?= base_url(); ?>images/summer.jpg" />
            <figcaption class="tile-caption caption-bottom"><?php echo 'Number of applicants:'. count($students).'<br>'; ?><?php echo 'Number of universities:'. count($unis).'<br>'; ?>
            </figure>
        </li>
        <li class="tile tile-big tile-10" data-page-type="s-page" data-page-name="custom-page">
          <div><p>Windows-8-like Animations with CSS3 &amp; jQuery &copy; Sara Soueidan. Licensed under MIT.</p></div>
        </li>
      </div>
    </ul>
  </div><!--end dashboard-->

</div>
<!--====================================end demo wrapper================================================-->
  
  <script src="<?= base_url(); ?>js/scripts.js"></script>

</body>     
      </div>
       <div class="container">
    <div class="service_wrapper">
        <div class="col6">
            
<!--              <div id="container4" style="height: 400px"></div>-->
              <div id="container3"></div>
            
        </div>
           <div class="col6">
               <div id="container4" style="height: 400px"></div></div>>    
        
    </div></div>
    </div>
  </div>
</section>

<!--Service-->
<script src="<?= base_url(); ?>js/modernizr-1.5.min.js"></script>

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
                        text : 'Highmaps basic demo'
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
        
                
<script type="text/javascript">
$(function () {
    $('#container4').highcharts({
        chart: {
            type: 'pie',
            options3d: {
                enabled: true,
                alpha: 45
            }
        },
        title: {
            text: 'Student loans per year'
        },
        subtitle: {
            text: 'Loans in millions'
        },
        plotOptions: {
            pie: {
                innerSize: 100,
                depth: 45
            }
        },
        series: [{
            name: 'Remitted amount(Shs)',
            data: [
                ['2008', 8],
                ['2009', 3],
                ['2010', 1],
                ['2011', 6],
                ['2012', 8],
                ['2013', 4],
                ['2014', 4],
                ['2015', 1],
                ['2016', 1]
            ]
        }]
    });
});
		</script>   
  
<script src="<?= base_url(); ?>js/highmaps.js"></script>
 
	<script type="text/javascript" src="<?= base_url(); ?>js/highcharts.js"></script>

<script src="<?= base_url(); ?>js/ug-all.js"></script>
<script type="text/javascript"  src="<?= base_url(); ?>js/modules/exporting.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>js/highcharts-3d.js"></script>
 
 


</body>
</html>