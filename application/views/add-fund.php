
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
  Add new  Funding and Financial information
        </h4> 
                                        <i class="icon-4x orange"></i><a target="frame" href="<?php echo base_url() . "index.php/administration/addfund"; ?>" class="btn btn-small btn-grey"><i class="icon-add"></i>Add</a>
        <a target="frame" href="<?php echo base_url() . "index.php/administration/fund"; ?>" class="btn btn-small btn-primary">  <i class="icon-list"></i>List</a>

        <div class="widget-toolbar action-buttons">
            <a href="#" data-action="reload">
                <i class="icon-refresh blue"></i>
            </a>

        </div>
    </div>

   <div class="row-fluid  span12">
         <?php echo $this->session->flashdata('msg'); ?>
                                 <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/university/save/'  method="post">            
              <legend></legend>
                                       
                                         <div class="">
                                       
                                          <div class="controls control-group">
                                              <span> </span><input class="focused span6" name="name" id="name" placeholder="name" id="focusedInput" type="text" >
                                          </div>
                                        </div>
                                          <div class="">
                                       
                                          <div class="controls control-group">
                                              <input class="focused span6" id="location" name="location" placeholder="location" type="text" >
                                          </div>
                                        </div>
                                          <div class="">
                                       
                                          <div class="controls control-group">
                                              <input class="focused span6" id="contact" name="contact" placeholder="contact" type="text" >
                                          </div>
                                        </div>
                                 
                                        <div class="">
                                            <div class="controls control-group">
                                                Type <br><select class="focused span6" name="type" id="select01" >
                                              <option></option>
                                              <option>Government aided</option>
                                              <option>Private</option>
                                              <option>Foreign</option>
                                              <option>Other</option>
                                            </select>
                                          </div>
                                        </div>
                                        <legend></legend>
                                            <div class="controls control-group alert alert-info  span12"> 
                           <input id="imgfile" name="imgfile" type="file" /> 
   <img id="preview"  width=150px" height="150px" src="#" alt="Browse for university logo" />
                        </div><br>                              
                                        <div class="">
                                        Description
                                         
                                        <textarea class="input-xlarge textarea" name="detail" placeholder="Enter text ..." style="width:100%; height:100px"></textarea>
                                        
                                        </div>
                         <legend></legend>
                                        <div class="">
                                          <button type="submit" class="btn btn-primary">Save</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                  
                                    </form>

                                </div>
</div>


       
        <script src="<?= base_url(); ?>vendors/jquery-1.9.1.js"></script>
        <script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>vendors/jquery.uniform.min.js"></script>
        <script src="<?= base_url(); ?>vendors/chosen.jquery.min.js"></script>
     
       

