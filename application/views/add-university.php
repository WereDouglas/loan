
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
 <link href="<?= base_url(); ?>bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url(); ?>bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="<?= base_url(); ?>assets/styles.css" rel="stylesheet" media="screen">
        <style>
            .form-horizontal .controls {
    margin-left: 0px;
}
            
            </style>
<div class="widget-box transparent">
    <div class="widget-header widget-header-small">
        <h4 class="blue smaller">
            <i class="icon-4x orange"></i>
   Add a  University
        </h4> <i class="icon-4x orange"></i><a target="frame" href="<?php echo base_url() . "index.php/university/add"; ?>" class="btn btn-small btn-primary"><i class="icon-add"></i>Add</a>
        <a target="frame" href="<?php echo base_url() . "index.php/university"; ?>" class="btn btn-small btn-grey">  <i class="icon-list"></i>List</a>

    </div>
    <div class="span12" id="container-fluid">
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
  
</div>
      <link href="<?= base_url(); ?>vendors/datepicker.css" rel="stylesheet" media="screen">
        <link href="<?= base_url(); ?>vendors/uniform.default.css" rel="stylesheet" media="screen">
        <link href="<?= base_url(); ?>vendors/chosen.min.css" rel="stylesheet" media="screen">

        <link href="<?= base_url(); ?>vendors/wysiwyg/bootstrap-wysihtml5.css" rel="stylesheet" media="screen">

        <script src="<?= base_url(); ?>vendors/jquery-1.9.1.js"></script>
        <script src="<?= base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?= base_url(); ?>vendors/jquery.uniform.min.js"></script>
        <script src="<?= base_url(); ?>vendors/chosen.jquery.min.js"></script>
        <script src="<?= base_url(); ?>vendors/bootstrap-datepicker.js"></script>

        <script src="<?= base_url(); ?>vendors/wysiwyg/wysihtml5-0.3.0.js"></script>
        <script src="<?= base_url(); ?>vendors/wysiwyg/bootstrap-wysihtml5.js"></script>

        <script src="<?= base_url(); ?>vendors/wizard/jquery.bootstrap.wizard.min.js"></script>

	<script type="text/javascript" src="<?= base_url(); ?>vendors/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="<?= base_url(); ?>assets/form-validation.js"></script>
        
	<script src="<?= base_url(); ?>assets/scripts.js"></script>

  <script>

	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
	

        $(function() {
            $(".datepicker").datepicker();
            $(".uniform_on").uniform();
            $(".chzn-select").chosen();
            $('.textarea').wysihtml5();

            $('#rootwizard').bootstrapWizard({onTabShow: function(tab, navigation, index) {
                var $total = navigation.find('li').length;
                var $current = index+1;
                var $percent = ($current/$total) * 100;
                $('#rootwizard').find('.bar').css({width:$percent+'%'});
                // If it's the last tab then hide the last button and show the finish instead
                if($current >= $total) {
                    $('#rootwizard').find('.pager .next').hide();
                    $('#rootwizard').find('.pager .finish').show();
                    $('#rootwizard').find('.pager .finish').removeClass('disabled');
                } else {
                    $('#rootwizard').find('.pager .next').show();
                    $('#rootwizard').find('.pager .finish').hide();
                }
            }});
            $('#rootwizard .finish').click(function() {
                alert('Finished!, Starting over!');
                $('#rootwizard').find("a[href*='tab1']").trigger('click');
            });
        });
        </script>
    <script type="text/javascript">
      $("#imgfile").change(function(){
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#preview').attr('src', e.target.result);
        }
        reader.readAsDataURL(this.files[0]);
    }
});

      
      
      
      </script>