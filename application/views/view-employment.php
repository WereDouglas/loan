
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/ace-skins.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>ace/font-awesome.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="<?= base_url(); ?>css/bootstrap.min.css" />


<div class="widget-box transparent">


    <div class="widget-body">
        <div class="widget-main ">

       
          
                <h3>Current job</h3>

              

            <div class="span12">

            
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
                      
                    </div>
                </div>
           
            </div>
        </section>
            </div>
          
            <div class="clear"></div>


        </div>


    </div>
</div>
<script src="<?= base_url(); ?>assets/js/jquery.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>

