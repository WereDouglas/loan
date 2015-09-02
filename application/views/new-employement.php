
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />


<div class="widget-box transparent">


    <div class="widget-body">
        <div class="widget-main ">

       
          
                <h3>Current job description</h3>

              

            <div class="span12">

                <h4>Update job/Employment description</h4>
                     <section id="service">
            <div class="container">
                <div class="service-wrapper">
                    <div class="row">
                               <table class="table table-bordered table-striped">
                               
                        <tbody>
                            <?php
                            if (is_array($profile) && count($profile)) {
                                foreach ($profile as $loop) {
                                    ?> 

                                
                                    <tr>
                                        <td>
                                            Employment information:
                                        </td>

                                        <td>
                                            <?php
                                            $details = $loop->employement;

                                            $details = json_decode($details);


                                            foreach ($details as $key => $value) {

                                                echo "<strong>$key</strong>:$value".'<br>';
                                            }
                                            ?>
                                        </td>
                                    </tr>
                
                                
                                    </tr>

                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                        <div class="alert alert-info"><b></b>Contact information and  details(current address)</div>

                        <form id="job-form" name="job-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/residential/'  method="post">            

                            <div class=" col-md-12 ">

                                <div class="form-group">
                                    Company name <input type="text" name="Company" id="Company" class="form-control">
                                     
                                      Company address<input type="text" name="Address" id="Address" class="form-control">

                                </div>             
                            </div><!-- /col-lg-6 -->
                            <div class="col-md-12 ">

                                <div class="form-group">
                                    <div class="col-sm-12">
                                       Job title <input type="text" name="Title" id="Title" class="form-control">
                                       Contact <input type="text" name="Contact" id="Contact" class="form-control">
                                       Salary <input type="text" name="Salary" id="Salary" class="form-control">
                                    </div>
                                </div>
                            </div><!-- /col-lg-6 -->
 
                            
                        <div class="col-sm-12">
                            <span class="clear" style="height: 10px;"><br> </span> 
                                <hr>
                                        <button type="submit" id="personal" class="btn btn-default">Submit</button> <button type="reset" class="btn btn-danger">Cancel</button>
                                    </div>
                        </form>	
                    </div>
                </div>
                <span id="loading_job"  name ="loading_job"><img src="<?= base_url(); ?>images/loading.gif" alt="Loading" /></span><br>

            </div>
        </section>
            </div>
          
            <div class="clear"></div>


        </div>


    </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>


<script type="text/javascript">
   
    $('#loading_job').hide();
       

    $("#job-form").submit(function (e) {
        e.preventDefault();
        console.log($(this).serializeArray());
        $('#loading_job').show();
        var job = $(this).serializeArray();


        if (job.length > 0)
        {

            $.post("<?php echo base_url() ?>index.php/student/job", {job:job}
            , function (response) {
                //#emailInfo is a span which will show you message
                $('#loading_job').hide();
                setTimeout(finishAjax('loading_job', escape(response)), 200);

            }); //end change




        } else {
            alert("Please insert missing information");
            $('#loading_job').hide();
        }

        function finishAjax(id, response) {
            $('#' + id).html(unescape(response));
            $('#' + id).fadeIn();
        }
    })


</script>

