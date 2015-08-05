
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
    width: 18px;
    height: 18px;
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

                                <h2> <?= $loop->fname . ' ' . $loop->lname ?> </h2>
                                <br> Gender:<?= $loop->gender; ?>
                                <br>E-mail:  <a href="#"><?= $loop->email; ?></a>

                                <br> <div class="time">
                                    <i class="icon-time bigger-110"></i>
                                    Date of Submission:  <?= $loop->created; ?>
                                </div>
                            </div>




                            <?php
                        }
                    }
                    ?>

                    <div class="span4 profile-activity clearfix well">


                        <?php
                        if (is_array($course) && count($course)) {
                            foreach ($course as $loop) {
                                ?>  



                                <a class="user" href="#"> <?= $loop->university; ?> </a><br>
                                Student number:<?= $loop->stdNo; ?><br>
                                Course: <a href="#"><?= $loop->course; ?></a><br>


                                Duration:  <?= $loop->duration; ?><br>
                                Cost per year:<?= $loop->fees; ?><br>
                                Is Disabled?:<?= $loop->disabled; ?><br>


                                <?php
                            }
                        }
                        ?>




                    </div>


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
                                                <img data-src="holder.js/260x180" alt="260x180" style="width: 260px; height: 180px;" src="<?= base_url(); ?>uploads/<?= $loop->image; ?>"> </a>
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
              
                <h4>Detailed information</h4>
                <table class="table table-bordered table-striped">
                    <thead>
                    <td colspan="3">
                              <button class="btn">Verify</button> 
                            </td>
                           
                        </thead>        
                    <tbody>
                          <?php
                    if (is_array($profile) && count($profile)) {
                        foreach ($profile as $loop) {
                            ?> 
                           <tr>
                            <td>
                         Application Documents
                            </td>
                            <td>
                                <span class="badge badge-success">2 <input type="checkbox" /></span>
                            </td>
                            <td>
                             
                            </td>
                        </tr>
                                   <tr>
                            <td>
                               Profile Verification
                            </td>
                            <td>
                                <span class="badge">1 <input type="checkbox" /></span>
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
                                <span class="badge badge-success">2 <input type="checkbox" /></span>
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
                                <span class="badge badge-success">2 <input type="checkbox" /></span>
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
                                <span class="badge badge-warning">4 <input type="checkbox" /></span>
                            </td>
                            <td>
                               <?= $loop->email; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                               Social media
                            </td>
                            <td>
                                <span class="badge badge-important">6 <input type="checkbox" /></span>
                            </td>
                            <td>
                                    <?= $loop->social; ?>
                            </td>
                        </tr>
                         <tr>
                            <td>
                             Location
                            </td>
                            <td>
                                  <span class="badge badge-success">2 <input type="checkbox" /></span>
                            </td>
                            <td>
                                  <?= 'Country:'.$loop->country.' '.$loop->residence; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                              Identification
                            </td>
                            <td>
                                <span class="badge badge-info">8</span>
                            </td>
                            <td>
                                  <?= $loop->IDtype.' Number'.$loop->IDnumber; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                1<sup>st</sup> Guarantee
                            </td>
                            <td>
                                <span class="badge badge-inverse">10</span>
                            </td>
                            <td>
                                <?= $loop->GuaranteeName.' Contact:'.$loop->GuaranteeContact; ?>
                            </td>
                        </tr>
                         <tr>
                            <td>
                                2<sup>st</sup> Guarantee
                            </td>
                            <td>
                                <span class="badge badge-inverse">10</span>
                            </td>
                            <td>
                                <?= $loop->GuaranteeName2.' Contact:'.$loop->GuaranteeContact2; ?>
                            </td>
                        </tr>
                          <?php }}?>
                    </tbody>
                </table>
            </div>
        </div>


    </div>
</div>
</div>

