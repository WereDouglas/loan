
 <?php require_once(APPPATH . 'views/header.php'); ?>
  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
     
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="home-main-content ">
          <section class="wrapper site-min-height">
          	<h3> Student Loan Repayment and Recovery Management Information System</h3>
          	<div class="row">
          		<div class="col-lg-12">
          		
					<! -- 1st ROW OF PANELS -->
					<div class="row">
						<!-- TWITTER PANEL -->
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="twitter-panel pn">
								<i class="fa fa-archive fa-4x"></i>
								<p>Students & Beneficiaries.</p>
								<p class="user">@</p>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>TOP PAYMENTS</h5>
								</div>
								<p><img src="assets/img/ui-zac.jpg" class="img-circle" width="50"></p>
								<p><b>Zac Snider</b></p>
									<div class="row">
										<div class="col-md-6">
											<p class="small mt">BENEFICIARIES </p>
											<p>2012</p>
										</div>
										<div class="col-md-6">
											<p class="small mt">TOTAL SPEND</p>
											<p>$ 47,60</p>
										</div>
									</div>
							</div>
						</div><!-- /col-md-4 -->
						
						<div class="col-lg-4 col-md-4 col-sm-4 mb">
							<div class="steps pn">
                                                           
                                                              <a href="<?php echo base_url() . "index.php/student/register"; ?>"> <div class="green-header">
                                                                      <label class="green-header">APPLY FOR LOAN</label>
								</div></a>
							   
                                                            <a href="#">  <label for='op1'>MY ACCOUNT</label></a>
							   
							   
                                                            <a href="#">  <label for='op3'>REMITTANCES</label></a>
							    
							</div>
						</div><! --/col-md-4 -->
					</div><! --/END 1ST ROW OF PANELS -->
				
					
					<! -- 3RD ROW OF PANELS -->
				
                    
					<! -- 5TH ROW OF PANELS -->
					<div class="row">
						<div class="col-md-4 col-sm-4 mb">
							<!-- REVENUE PANEL -->
							<div class="green-panel pn">
								<div class="green-header">
									<h5>REVENUE</h5>
								</div>
								<div class="chart mt">
									<div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-line-color="#fff" data-spot-color="#fff" data-fill-color="" data-highlight-line-color="#fff" data-spot-radius="4" data-data="[200,135,667,333,526,996,564,123,890,464,655]"></div>
								</div>
								<p class="mt"><b>$ 17,980</b><br/>Month Income</p>
							</div>
						</div><!-- /col-md-4 -->
					
                      	<div class="col-md-4 col-sm-4 mb">
					        <div class="stock card">
					        	<div class="stock-chart">
					            	<div id="chart"></div>
								</div>
								<div class="stock current-price">
									<div class="row">
						        		<div class="info col-sm-6 col-xs-6"><abbr>AAPL</abbr>
						            		<time>Yesterday</time>
										</div>
									<div class="changes col-sm-6 col-xs-6">
										<div class="value up"><i class="fa fa-caret-up hidden-sm hidden-xs"></i> 694.00</div>
										<div class="change hidden-sm hidden-xs">+4.95 (3.49%)</div>
									</div>
									</div>
								</div>
								<div class="summary">
					            	<strong>18.3 M</strong> <span>SHARES TRADED</span>
								</div>
					        </div>
						</div><! -- /col-md-4 -->
						
                      	<div class="col-md-4 col-sm-4 mb">
                      		<div class="darkblue-panel pn">
                      			<div class="darkblue-header">
						  			<h5>SITE STATICS</h5>
                      			</div>
                      			<h1 class="mt"><i class="fa fa-user fa-3x"></i></h1>
								<p>+ 1,789 NEW VISITS</p>
								<footer>
									<div class="centered">
										<h5><i class="fa fa-trophy"></i> 17,988</h5>
									</div>
								</footer>
                      		</div><! -- /darkblue panel -->
                      	</div><!-- /col-md-4 -->
                    </div><!-- /END 5TH ROW OF PANELS -->


					<! -- 6TH ROW OF PANELS -->
			

					
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
     <?php require_once(APPPATH . 'views/footer.php'); ?>