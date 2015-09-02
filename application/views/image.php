<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/main.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/animate.css">
        <link rel="stylesheet" href="<?= base_url(); ?>css/responsive.css">
        <link href="<?php echo base_url(); ?>css/dropzone.css" type="text/css" rel="stylesheet" /> 


<div class="col-md-12"> 
   
     <form id="personal-form" name="personal-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/image/'  method="post">            
 <div class="col-md-6">  
     <input id="imgfile" name="imgfile" type="file" /> 
                      

     <img id="preview"  width=150px" height="150px" src="<?= base_url(); ?>images/placeholder.jpg" alt=" Your profile passport image" />
                                </div>
                                    

  <div class="form-group">

                                 <div class="col-sm-12">
                                        <button type="submit" id="personal" class="btn btn-primary col-md-12">Submit</button>
                                    </div>
                                </div>
                                    </form>
        
</div>
<script src="<?= base_url(); ?>js/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= base_url(); ?>js/jquery-1.10.2.min.js"><\/script>')</script>
<script src="<?= base_url(); ?>js/bootstrap.min.js"></script>
<script type="text/javascript">
    

    $("#imgfile").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#preview').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
    </script>