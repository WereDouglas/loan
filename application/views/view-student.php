
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />


<style>

    input[type="checkbox"], input[type="radio"] {
        opacity: 20;
        position: absolute;
        z-index: 12;
        width: 218px;
        height: 0px;
    }
    
    /* CSS */
#VoidBox {
    -webkit-transform:rotate(-30deg);
    -moz-transform:rotate(-60deg);
    -o-transform:rotate(-20deg);
    transform:rotate(-60deg);
    font-size:80px;
    color:green;
    font-weight:bold;
    letter-spacing:80px;
    position:absolute; 
    z-index:1000; 
    top:29%;
    left:-4%;   
    opacity:0.5; 
    filter:alpha(opacity=50);
}
#poidBox {
    -webkit-transform:rotate(-30deg);
    -moz-transform:rotate(-60deg);
    -o-transform:rotate(-20deg);
    transform:rotate(-60deg);
    font-size:80px;
    color:red;
    font-weight:bold;
    letter-spacing:80px;
    position:absolute; 
    z-index:1000; 
    top:29%;
    left:-4%;   
    opacity:0.5; 
    filter:alpha(opacity=50);
}

</style>
<div class="widget-box transparent">
    <div class="widget-header widget-header-small">
        <h4 class="blue smaller">
            <i class="icon-4x orange"></i>
            Applicant
        </h4>

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

                                <h2> <?= $loop->name  ?> </h2>
                                <br> Gender:<?= $loop->gender; ?>
                                <br>E-mail:  <a href="#"><?= $loop->email; ?></a>

                                <br> <div class="time">
                                    <i class="icon-time bigger-110"></i>
                                    Date of Submission:  <?= $loop->created; ?>
                                </div>
                            </div>




                            <?php
                            
                             if($loop->check==""){
                            $error = "THIS PROFILE IS INCOMPLETE!<br>PLEASE PLEASE DONOT VALIDATE";
                             }
                             else{
                                   $error = "";
                         
                                 
                             }
                        }
                    }
                    ?>
<div id="VoidBox" style="display:none;">approved</div>
<div id="poidBox" style="display:none;">denied</div>
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
<div class="span11 error alert alert-danger infobox-red"><?php echo $error;?></div>



                </div>
            </div>
            <div id="profile-feed-1" class=" profile-feed">
                <h3>Application Documents</h3>

                <div class="row-fluid">
                    <div class="block">
                        <div class="block-content collapse in">
                            <div class="row-fluid padd-bottom">


                                <?php
                                if (is_array($application) && count($application)) {
                                    foreach ($application as $loop) {
                                        ?>  


                                        <div class="span3">
                                            <a href="#" class="thumbnail">
                                                
                                                     <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="<?= base_url(); ?>uploads/<?= $loop->image; ?>">
                                            </a>
                                            <input type="checkbox" class="edit_tr btn btn-success btn-mini" id="<?= $loop->id; ?>"/>is validate?
     <span id="Loading_<?= $loop->id; ?>" name="Loading" class ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="ajax Indicator" /></span><br>
                                     
                                        </div>
                            

                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    
                          </div>
                </div>
            </div>
            <div class="span12">

                <h4>Profile information</h4>
                <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/rating/'  method="post">            

                 <table class="table table-bordered table-striped">
                        <thead>
                        <td colspan="2">

                        </td>

                        </thead>        
                        <tbody>
                            <?php
                            if (is_array($profile) && count($profile)) {
                                foreach ($profile as $loop) {
                                    ?> 

                                    <tr>
                                        <td>
                                            Gender
                                            <input type="text" id="id" value="<?= $loop->id; ?>"/>
   
                                        </td>

                                        <td>
                                            <?= $loop->gender; ?>
                                        </td>
                                    </tr>  
                                    <tr>
                                        <td>
                                            Contact
                                        </td>

                                        <td>
                                            <?= $loop->contact; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Contact
                                        </td>

                                        <td>
                                            <?= $loop->contact; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            E-mail
                                        </td>

                                        <td>
                                            <?= $loop->email; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            Details and information:
                                        </td>

                                        <td>
                                            <?php
                                            $details = $loop->personal;
//echo $details;
                                            $details = json_decode($details);

// Put everyting to the screen with var_dump;
//var_dump($details); 
if (is_array($details) && count($details)) {
                                            foreach ($details as $key => $value) {

                                                echo "$key:$value\n";
                                            }
}
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Identification
                                        </td>

                                        <td>
                                            
                                            
                                            <?php
                                            $details = $loop->resident;
//echo $details;
                                            $details = json_decode($details);

// Put everyting to the screen with var_dump;
//var_dump($details);
                                           if (is_array($details) && count($details)) {
                                            foreach ($details as $key => $value) {

                                                echo "$key:$value\n";
                                           }}
                                            ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Parent
                                        </td>

                                        <td>
                                            <?= $loop->parent; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Submissions
                                        </td>

                                        <td>
                                            <?= $loop->check; ?>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>


                                        <td>
                                            Profile verification
                                        </td>


                                    </tr>
                                    <tr>
                                        <td>
                                            Comments/Details
                                        </td>

                                        <td>
                                            <?= $loop->comment; ?>


                                        </td>
                                    </tr>

                                    <tr>



                                    </tr>

                                <?php
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </form>
            </div>
              <div class="span12 profile-activity clearfix well-large">


                        <?php
                        if (is_array($course) && count($course)) {
                            foreach ($course as $loop) {
                                ?>  



                                <a class="user" href="#"> <?= $loop->university; ?> </a><br>
                                Student number:<?= $loop->stdNo; ?><br>
                                Course: <a href="#"><?= $loop->course; ?></a><br>


                                Duration:  <?= $loop->duration; ?><br>
                                Fees per year:<?= number_format($loop->fees,0); ?><br>
                                Is Disabled?:<?= $loop->disabled; ?><br>
                                Approved<input  type="text" id="approved" value="<?= $loop->approved; ?>"/>
                                           
                                
 <div style="float: right">
                                                      <span id="Loadingsa_<?= $loop->id; ?>" name="Loadingsa" class ="Loading"><img src="<?= base_url(); ?>images/ajax-loader.gif" alt="ajax Indicator" /></span><br>
                                     
   
                                                
                                                <a  type="" id="<?= $loop->id; ?>" class=" edit_trsa  btn btn-primary">Approve</a>
                                                <a  type="" id="<?= $loop->id; ?>" class=" edit_trsd  btn btn-danger">dis-approve</a>
                                                
                                            </div>

                                <?php
                            }
                        }
                        ?>




                    </div>
            <div class="clear"></div>
            
            
        </div>


    </div>
</div>
   <script src="<?= base_url(); ?>assets/js/jquery.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function (e) {
        
        if(  $("#approved").val()=="Yes"){
        $("#VoidBox").show();
    }
    if(  $("#approved").val()=="No"){
        $("#poidBox").show();
    }
        $('.Loading').hide();
         $('.Loadings').hide();

        $(".edit_tr").click(function ()
        {
            var ID = $(this).attr('id');
            $("#Loading_" + ID).show();
            console.log(ID);
                    console.log("<?php echo base_url() ?>index.php/student/validate");
                   
            $.post("<?php echo base_url() ?>index.php/student/validate", {id:ID}
            , function (response) {
                //#emailInfo is a span which will show you message
                $("#Loading_" + ID).show();
                setTimeout(finishAjax("#Loading_" + ID, escape(response)), 200);

            });
            function finishAjax(id, response) {
                $('' + id).html(unescape(response));
                $('' + id).fadeIn();
            }
            $("#hide_" + ID).click(function ()
            {
                $("#Loading_" + ID).hide();
                console.log(ID);
            });

        })
        
        
         $(".edit_trs").click(function ()
        {
            var ID = $(this).attr('id');
            var comment = $('#comments').val();
            $("#Loadings_" + ID).show();
           
                   
            $.post("<?php echo base_url() ?>index.php/student/validate_profile", {id:ID,comment:comment}
            , function (response) {
                //#emailInfo is a span which will show you message
                $("#Loadings_" + ID).show();
                setTimeout(finishAjax("#Loadings_" + ID, escape(response)), 200);

            });
            function finishAjax(id, response) {
                $('' + id).html(unescape(response));
                $('' + id).fadeIn();
            }
           

        })
        
        
          $(".edit_trsa").click(function ()
        {
            var ID = $(this).attr('id');
            
            $("#Loadingsa_" + ID).show();
           
                   
            $.post("<?php echo base_url() ?>index.php/student/approve", {id:ID}
            , function (response) {
                //#emailInfo is a span which will show you message
                $("#Loadingsa_" + ID).show();
                setTimeout(finishAjax("#Loadingsa_" + ID, escape(response)), 200);
                 location.reload(); 

            });
            function finishAjax(id, response) {
                $('' + id).html(unescape(response));
                $('' + id).fadeIn();
            }
           

        })
        
        
        
           $(".edit_trsd").click(function ()
        {
            var ID = $(this).attr('id');
            
            $("#Loadingsa_" + ID).show();
           
                   
            $.post("<?php echo base_url() ?>index.php/student/disapprove", {id:ID}
            , function (response) {
                //#emailInfo is a span which will show you message
                $("#Loadingsa_" + ID).show();
                setTimeout(finishAjax("#Loadingsa_" + ID, escape(response)), 200);
                location.reload(); 

            });
            function finishAjax(id, response) {
                $('' + id).html(unescape(response));
                $('' + id).fadeIn();
            }
           

        })
        

    })
</script>

