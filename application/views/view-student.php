
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<div class="widget-box transparent">
    <div class="widget-header widget-header-small">
        <h4 class="blue smaller">
            <i class="icon-4x orange"></i>
            Applicant
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
                if (is_array($profile) && count($profile)) {
                    foreach ($profile as $loop) {
                        ?>  
   <span class="profile-picture">
       <img id="avatar" height="100px" width="100px" class="editable" alt="" src="<?= base_url(); ?>uploads/<?= $loop->image; ?>" />
                </span>

                        <div class="profile-activity clearfix">
                          
                                <a class="user" href="#"> <?= $loop->fname.' '.$loop->lname ?> </a>
                                <?= $loop->gender; ?>
                                <a href="#"><?= $loop->email; ?></a>

                                <div class="time">
                                    <i class="icon-time bigger-110"></i>
                                    <?= $loop->created; ?>
                                </div>
                   

                         
                        </div>  



                    <?php }
                }
                ?>




            </div>
               <div id="profile-feed-1" class="profile-feed">
             

                <?php
                if (is_array($application) && count($application)) {
                    foreach ($application as $loop) {
                        ?>  
   <span class="profile-picture">
       <img id="avatar" height="100px" width="100px" class="editable" alt="" src="<?= base_url(); ?>uploads/<?= $loop->image; ?>" />
                </span>
                    <?php }
                }
                ?>




            </div>
            
                <div id="profile-feed-1" class="profile-feed">
             

                <?php
                if (is_array($course )&& count($course)) {
                    foreach ($course as $loop) {
                        ?>  
                    
                      <div class="profile-activity clearfix">
                          
                                <a class="user" href="#"> <?= $loop->university; ?> </a>
                                <?= $loop->stdNo; ?>
                                <a href="#"><?= $loop->course; ?></a>

                            
                                    <?= $loop->duration; ?>
                                  <?= $loop->fees; ?>
                                  <?= $loop->disabled; ?>
                          
                   

                         
                        </div>  
  
                    <?php }
                }
                ?>




            </div>
        </div>
    </div>
</div>

