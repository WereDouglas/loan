
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<style>
    .profile-activity img {
    border: 0px solid #C9D6E5;
    border-radius: 0%;
    max-width: 40px;
    margin-right: 10px;
    margin-left: 0px;
    box-shadow: none;
}
    
    
</style>
<div class="widget-box transparent">
    <div class="widget-header widget-header-small">
        <h4 class="blue smaller">
            <i class="icon-4x orange"></i>
         Remit funds to this student
        </h4>

        <div class="widget-toolbar action-buttons">
            <a href="#" data-action="reload">
                <i class="icon-refresh blue"></i>
            </a>

            &nbsp;
            <a href="#" class="pink">
                <i class="icon-trash"></i>
            </a>
        </div>
    </div>

    <div class="widget-body">
        <div class="widget-main padding-8">
            <div id="profile-feed-1" class="profile-feed">
              

          <?php
                                                            if (is_array($students) && count($students)) {
                                                                foreach ($students as $loop) {
                                                                   
                                                            ?>  
                
                
                          <div class="profile-activity clearfix">
                    <div>
                        <img class="pull-left" alt="<?= $loop->name?>" src="<?= base_url(); ?>uploads/<?= $loop->image;?>" />
                        <a class="user" href="<?php echo base_url() . "index.php/student/view_remit/".$loop->id; ?>"> <?= $loop->name?> </a>
                        <?= $loop->gender;?>
                        <a href="#"><?= $loop->email;?></a>

                        <div class="time">
                           
                         <span class="badge badge-warning"> Remitted funds to date:<?=number_format($loop->credit)?></span>
                        </div>
                    </div>
                     
         
                </div>  
                                                                
                                                                
                                                                
                                                                <?php }}?>

                


            </div>
        </div>
    </div>
</div>

