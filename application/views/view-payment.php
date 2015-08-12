
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />


<div class="widget-box transparent">
    <div class="widget-header widget-header-small">
       

        <div class="widget-toolbar action-buttons">




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
                            <span class="span3">
                                <img id="avatar" height="160px" width="140px" class="editable" alt="" src="<?= base_url(); ?>uploads/<?= $loop->image; ?>" />
                            </span>

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
          
            <div class="span12">
                <table class="table table-striped">
						              <thead>
						                <tr>
						                  <th></th>
						                  <th>Date</th>
						                  <th>Method</th>
						                  <th>Amount</th>
                                                                  <th>Date of Registration</th>
                                                                
                                                                   <th>Recieved</th>
						                </tr>
						              </thead>
						              <tbody>
                                                                   <?php
                            if (is_array($refund) && count($refund)) {
                              
                                foreach ($refund as $loop) {
                                    ?> 
						                <tr>
                                                                   <th><img height="100px" width="50px" class="pull-left" alt="<?= $loop->proof?>" src="<?= base_url(); ?>uploads/<?= $loop->proof;?>" />
                   </th>
						                  <td><?=$loop->dor;?></td>
						                  <td><?=$loop->method;?></td>
						                  <td><?=number_format($loop->amount,0);?></td>
						                  <td><?=$loop->created;?></td>
                                                                 
                                                                      <td>
                                                                       
                                                                       <?php 
                         if( $loop->active == "False"){
                                    ?>
                                      <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
 <label class="btn btn-xs btn-default" data-toggle-class="btn-success" value="<?= $loop->id; ?>">
  <input type="radio" name="status" id="<?= $loop->active; ?>" value="<?= $loop->id; ?>" />
  Active
 </label>
 <label class="btn btn-xs btn-danger active" data-toggle-class="btn-danger" value="<?= $loop->id; ?>">
  <input type="radio" name="status" id="<?= $loop->active; ?>" value="<?= $loop->id; ?>" checked />
  Off
 </label>
</div> 
    <?php } ?>

 <?php 
                                    if( $loop->active == "True"){
                                    ?>
                                      <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
 <label class="btn btn-xs btn-success active" data-toggle-class="btn-success">
  <input type="radio" name="status" id="<?= $loop->active; ?>" value="<?= $loop->id; ?>" checked />
  Active
 </label>
 <label class="btn btn-xs btn-default " data-toggle-class="btn-danger">
  <input type="radio" name="status" id="<?= $loop->active; ?>" value="<?= $loop->id; ?>"  />
  Off
 </label>
</div> 
                                    <?php } ?>
                                                                       
                                                                       
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
 <script type="text/javascript" src="<?= base_url(); ?>js/shieldui-all.min.js"></script>
  <script>
  
  
  $('.btn-group[data-toggle=buttons]').each(function (i, e) {
    var default_class = $(e).data('toggle-default-class') || 'btn-default';

    $(e).find('label')
        .click(function (event) {
            $(e).find('label')
                .each(function (i, e) {
                    if (!(e == event.target)) {
                        $(e).removeClass($(e).data('toggle-class'))
                            .addClass(default_class);
                     
                        $(e).find('input').removeAttr('checked');
                        console.log($(e).find("input").attr("id"));
                        console.log($(e).find("input").val());
                        
                       
                 $.post("<?php echo base_url()?>index.php/student/refunded", {
			id: $(e).find("input").val(),
                        actives: $(e).find("input").attr("id")
                        
		}, function(response){
                       console.log(response);
		});
                   // alert("active");
                   
                    } else {
                        $(e).removeClass(default_class)
                            .addClass($(e).data('toggle-class'));
                    
                        $(e).find('input')
                            .attr('checked', 1);
                    
                    }
                });
        });
});
  
  </script>