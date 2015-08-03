<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css"> 
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="<?= base_url(); ?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>css/dropzone.css" type="text/css" rel="stylesheet" />


<?php
if (is_array($profile) && count($profile)) {
    foreach ($profile as $student) {
        $image = $student->image;
        $fname = $student->fname;
        $id = $student->id;
    }
}
?>  

<div class="container">
    <div class="row">

        <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/course/'  method="post">            
            <div class="col-md-4">
                      <div class="alert alert-info"> 
                        <img id="preview"  width=150px" height="150px" src="<?= base_url(); ?>uploads/<?= $image ?>" alt=" Your profile passport image" />
                    </div>
    <input type="hidden" name="id"value="<?php echo $id; ?>" class="form-control">
                         
            </div><!-- /col-lg-6 -->


            <div class="col-md-4 ">

                <div class="form-group">
                    <div class="col-sm-12">University/Institute
                        <select class="form-control" name="university">
                            <option>Makerere university</option>

                            <option>MUBS</option>
                        </select></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        Student no/Registration number:<input type="text" name="stdNo" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        Course undertaken: <input type="text" name="course" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        Duration of course(Years): <input type="text" name="duration" class="form-control">
                    </div>
                </div>

                <div class="widget-content">
<?php echo $this->session->flashdata('action'); ?>
                    <div class="form-group">
                        <div class="col-sm-12">
                            Fees per Year: <input type="text" name="fees" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            Disabled: <select name="disabled" class="form-control">
                                <option>Yes</option>
                                <option>No</option>

                            </select>
                        </div>
                    </div>   
                    <hr>

  <div class="form-group">
                <label class="clear"> </label> 
                <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-info">Cancel</button>
                </div>
            </div>  

                </div>

            </div>
        </form>	
        <div class="col-md-4 ">

            <div class="alert alert-danger"><b></b>Upload a minimum of 3 scans(images)your latest 3 qualification is reguired here</div>

            <h4>File Upload</h4>
            <form action="<?php echo site_url('/student/upload'); ?>" class="dropzone"  >
                <input type="hidden" name="id" id="id" value="<?php echo $id; ?>" />
            </form>
            <?php echo $this->session->flashdata('action'); ?>

            <div class="widget-content">

            </div>
          

        </div><!-- /col-lg-6 -->


    </div>

</div>

<!--main content end-->
<!--footer start-->
<?php require_once(APPPATH . 'views/footer.php'); ?>

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
<script src="<?php echo base_url(); ?>js/dropzone.js"></script>