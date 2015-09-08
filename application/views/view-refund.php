
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />


<div class="widget-box transparent">
    <div class="widget-header widget-header-small">
       

        <div class="widget-toolbar action-buttons">

 <h4 class="blue smaller">Pay back</h4>

        </div>
    </div>

    <div class="widget-body">
        <div class="widget-main padding-8">

            <div class="row-fluid">
                <div id="profile-feed-1" class="span12 profile-feed">


                    <?php
                    if (is_array($profile) && count($profile)) {
                        foreach ($profile as $loop) {
                            ?>  
                          

                            <div class="span4">

                                <h2> <?= $loop->fname . ' ' . $loop->lname ?> </h2>
                                <br> Gender:<?= $loop->gender; ?>
                                <br>E-mail:  <a href="#"><?= $loop->email; ?></a>

                                <br> <div class="time">
                                    <i class="icon-time bigger-110"></i>
                                    Date of Submission:  <?= $loop->created; ?>
                                </div>
                            </div>




                            <?php
                        }
                    }
                    ?>

                    <div class="span4 profile-activity clearfix well-large">


                        <?php
                        if (is_array($course) && count($course)) {
                            foreach ($course as $loop) {
                                ?>  



                                <a class="user" href="#"> <?= $loop->university; ?> </a><br>
                                Student number:<?= $loop->stdNo; ?><br>
                                Course: <a href="#"><?= $loop->course; ?></a><br>


                                Duration:  <?= $loop->duration; ?><br>
                                Cost per year:<?= number_format($loop->fees,0);?><br>
                                Is Disabled?:<?= $loop->disabled; ?><br>


                                <?php
                            }
                        }
                        ?>




                    </div>


                </div>
            </div>
            <div id="profile-feed-1" class=" profile-feed">
                <h3>Refund form</h3>

                <div class="row-fluid">
                    <div class="block">
                  
                    
                          </div>
                </div>
            </div>
         
            <div class="span12">

               
               <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/refunding/'  method="post">            

                    <table class="table table-bordered table-striped">
                        
                        <tbody>
                            <?php
                            if (is_array($profile) && count($profile)) {
                              
                                foreach ($profile as $loop) {
                                    ?> 

                                    <tr>
                                        <td>
                                            Date of remittance
                                        </td>
                                        <td>
                                               <div class="form-group">
                                                   <input type="text" class="input-xlarge datepicker" id="date01" name="dor" value="02/16/12">
                                              </div>
                                       
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                           Method of payment
                                        </td>

                                        <td>
                                              <div class="form-group">
                      
                            <select name="method" class="form-control">
                                <option>Cash</option>
                                <option>TT</option>
                                 <option>Mobile Money</option>
                                   <option>Cheque</option>
                                     <option>Bank deposit</option>

                            </select>
                    
                    </div>   
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                           Amount
                                        </td>

                                        <td>
                                            <input type="text" id="amount" name="amount"  class="form-control">
                                            <input type="hidden" id="id" value="<?=$loop->id; ?>" name="id"  class="form-control">
                                      
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Proof of payment
                                        </td>

                                        <td>
                                            <input id="imgfile" name="imgfile" type="file" /> 
                                        </td>
                                    </tr>
                                  
                                      <tr>
                                        <td>
                                          Comments/Details
                                        </td>

                                        <td>
                                            <textarea class="span8" id="comments" name="comments"></textarea>


                                        </td>
                                    </tr>
                                     
                                    <tr>
                                        <td colspan="2">
                                            <div style="float: right">
                                                <button type="submit"  class=" edit_trs  btn btn-primary">Submit</button>
                                                
                                            </div>

                                        </td>

  

                                    </tr>
                                    
                                <?php }
                            } ?>
                        </tbody>
                    </table>
                </form>
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
                                                                  <th>Received/Approved</th>
						                </tr>
						              </thead>
						              <tbody>
                                                                   <?php
                            if (is_array($refund) && count($refund)) {
                              
                                foreach ($refund as $loop) {
                                    ?> 
						                <tr>
                                                                  <th></th>
						                  <td><?=$loop->dor;?></td>
						                  <td><?=$loop->method;?></td>
						                  <td><?=number_format($loop->amount,0);?></td>
						                  <td><?=$loop->created;?></td>
                                                                   <td>
                                                                   
                                                  <?=$loop->active;?>
                                                                   
                                                                   </td>
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
