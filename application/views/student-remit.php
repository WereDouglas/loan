<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>css/shieldui-all.min.css" />
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
                                                                    <th> </th>
						                  <th>Date</th>
						                  <th>Method(UGX)</th>
						                  <th>Amount</th>
                                                                  <th>Date of Registration</th>
                                                                  <th>User</th>
                                                                   <th>Recieved</th>
						                </tr>
						              </thead>
						              <tbody>
                                                                   <?php
                            if (is_array($remit) && count($remit)) {
                              
                                foreach ($remit as $loop) {
                                    ?> 
						                <tr>
                                                                    <th><img height="100px" width="50px" class="pull-left" alt="<?= $loop->proof?>" src="<?= base_url(); ?>uploads/<?= $loop->proof;?>" />
                   </th>
						                  <td><?=$loop->dor;?></td>
						                  <td><?=$loop->method;?></td>
						                  <td><?=number_format($loop->amount,0);?></td>
						                  <td><?=$loop->created;?></td>
                                                                   <td><?=$loop->user;?></td>
                                                                   <td>
                                                                       
                                                                       <?php 
                         if( $loop->active == "False"){
                                    ?>
                                      <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
 <label class="btn btn-xs btn-default" data-toggle-class="btn-success" value="<?= $loop->id; ?>">
  <input type="radio" name="status" id="<?= $loop->active; ?>" value="<?= $loop->id; ?>" />
  Yes
 </label>
 <label class="btn btn-xs btn-danger active" data-toggle-class="btn-danger" value="<?= $loop->id; ?>">
  <input type="radio" name="status" id="<?= $loop->active; ?>" value="<?= $loop->id; ?>" checked />
  No
 </label>
</div> 
    <?php } ?>

 <?php 
                                    if( $loop->active == "True"){
                                    ?>
                                      <div class="btn-group" data-toggle="buttons" data-toggle-default-class="btn-default">
 <label class="btn btn-xs btn-success active" data-toggle-class="btn-success">
  <input type="radio" name="status" id="<?= $loop->active; ?>" value="<?= $loop->id; ?>" checked />
  Yes
 </label>
 <label class="btn btn-xs btn-default " data-toggle-class="btn-danger">
  <input type="radio" name="status" id="<?= $loop->active; ?>" value="<?= $loop->id; ?>"  />
  No
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
                        
                       
                 $.post("<?php echo base_url()?>index.php/student/recieved", {
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