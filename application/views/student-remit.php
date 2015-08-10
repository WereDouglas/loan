
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />


<div class="widget-box transparent">
  

    <div class="widget-body">
        <div class="widget-main padding-8">

            <div class="row-fluid">
  
            </div>
      
         
            <div class="span12">

               
    
            </div>
            <div class="span12">
                <table class="table table-striped">
						              <thead>
						                <tr>
						                  <th></th>
						                  <th>Date</th>
						                  <th>Method</th>
						                  <th>Amount</th>
                                                                  <th>Date of Registration</th>
                                                                  <th>User</th>
						                </tr>
						              </thead>
						              <tbody>
                                                                   <?php
                            if (is_array($remit) && count($remit)) {
                              
                                foreach ($remit as $loop) {
                                    ?> 
						                <tr>
                                                                  <th></th>
						                  <td><?=$loop->dor;?></td>
						                  <td><?=$loop->method;?></td>
						                  <td><?=number_format($loop->amount,0);?></td>
						                  <td><?=$loop->created;?></td>
                                                                   <td><?=$loop->user;?></td>
						                </tr>
                            <?php }}?>
						                
						              </tbody>
						            </table>
                
                
            </div>
        
            <div class="clear"></div>
            
            
        </div>


    </div>
</div>
     <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
