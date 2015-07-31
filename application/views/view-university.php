
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<link href="<?= base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="<?= base_url(); ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
<link href="<?= base_url(); ?>assets/styles.css" rel="stylesheet" media="screen">
<script src="<?= base_url(); ?>vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<style>
    .profile-activity img {
    border: 0px solid #C9D6E5;
    border-radius: 0%;
    max-width: 57px;
    margin-right: 10px;
    margin-left: 0px;
    box-shadow: none;
}
    
</style>
<div class="widget-box transparent">
    <div class="widget-header widget-header-small">
        <h4 class="blue smaller">
            <i class="icon-4x orange"></i>
    Universities
        </h4> Search<input type="text" class="span6 focused" id="typeahead"  data-provide="typeahead" data-items="4" data-source='["Alabama","Alaska","Arizona","Arkansas","California","Colorado","Connecticut","Delaware","Florida","Georgia","Hawaii","Idaho","Illinois","Indiana","Iowa","Kansas","Kentucky","Louisiana","Maine","Maryland","Massachusetts","Michigan","Minnesota","Mississippi","Missouri","Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Dakota","North Carolina","Ohio","Oklahoma","Oregon","Pennsylvania","Rhode Island","South Carolina","South Dakota","Tennessee","Texas","Utah","Vermont","Virginia","Washington","West Virginia","Wisconsin","Wyoming"]'>
                                        <i class="icon-4x orange"></i><a target="frame" href="<?php echo base_url() . "index.php/university/add"; ?>" class="btn btn-small btn-grey"><i class="icon-add"></i>Add</a>
        <a target="frame" href="<?php echo base_url() . "index.php/university"; ?>" class="btn btn-small btn-primary">  <i class="icon-list"></i>List</a>

        <div class="widget-toolbar action-buttons">
            <a href="#" data-action="reload">
                <i class="icon-refresh blue"></i>
            </a>

        </div>
    </div>

    <div class="widget-body">
        <div class="widget-main padding-8">
            <div id="profile-feed-1" class="profile-feed">
                     
                
                <?php
                                                            if (is_array($unis) && count($unis)) {
                                                                foreach ($unis as $loop) {
                                                                   
                                                            ?>  
                
                
                
                          <div class="profile-activity clearfix">
                    <div>
                        <img class="pull-left" alt="<?= $loop->name?>" src="<?= base_url(); ?>uploads/<?= $loop->logo;?>" />
                        <a class="user" href="#"> <?= $loop->name?> </a>
                        <?= $loop->detail;?>
                        <a href="#"><?= $loop->type;?></a>

                        <div class="time">
                            <i class="icon-time bigger-110"></i>
                          <?= $loop->created;?>
                        </div>
                    </div>
                     
                    <div class="tools action-buttons">
                        <a href="#" class="blue">
                            <i class="icon-pencil bigger-125"></i>
                        </a>

                        <a href="#" class="red">
                            <i class="icon-remove bigger-125"></i>
                        </a>
                    </div>
                </div>  
                                                                
                                                                
                                                                
                                                                <?php }}?>

                

              
            </div>
        </div>
    </div>
</div>


       
        <script src="<?= base_url(); ?>vendors/jquery-1.9.1.js"></script>
        <script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>vendors/jquery.uniform.min.js"></script>
        <script src="<?= base_url(); ?>vendors/chosen.jquery.min.js"></script>
     
       

