<link href="<?= base_url(); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="<?= base_url(); ?>css/style.css" rel="stylesheet" type="text/css"> 
<link href="<?= base_url(); ?>css/font-awesome.css" rel="stylesheet" type="text/css"> 
<link href="<?= base_url(); ?>css/animate.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url(); ?>css/dropzone.css" type="text/css" rel="stylesheet" />
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true&libraries=places"></script>
<script>
// This example displays an address form, using the autocomplete feature
// of the Google Places API to help users fill in the information.

    var placeSearch, autocomplete;
    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initialize() {
        // Create the autocomplete object, restricting the search
        // to geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
                /** @type {HTMLInputElement} */(document.getElementById('autocomplete')),
                {types: ['geocode']});
        // When the user selects an address from the dropdown,
        // populate the address fields in the form.
        google.maps.event.addListener(autocomplete, 'place_changed', function () {
            fillInAddress();
        });
    }

// [START region_fillform]
    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }
// [END region_fillform]

// [START region_geolocation]
// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function (position) {
                var geolocation = new google.maps.LatLng(
                        position.coords.latitude, position.coords.longitude);
                var circle = new google.maps.Circle({
                    center: geolocation,
                    radius: position.coords.accuracy
                });
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
// [END region_geolocation]

</script>
 <?php
                                    if (is_array($profile) && count($profile))
                                        {
                                        foreach ($profile as $student) {
                                           $image = $student->image;
                                           $fname = $student->fname;
                                           $id = $student->id;
                                            
                                            
                                        }
                                        } ?>   

<body onload="initialize()">
    <div class="container">
        <div class="row">          
             <form id="station-form" name="station-form" enctype="multipart/form-data"  action='<?= base_url(); ?>index.php/student/address/'  method="post">            
 
                <div class=" col-md-4 ">
                    <div class="alert alert-info"> 
                             
                     <img id="preview"  width=150px" height="150px" src="<?=  base_url();?>uploads/<?= $image?>" alt=" Your profile passport image" />
                            </div>
                  
   <div class="alert alert-success"><b></b> <?php echo $fname; ?> Fill in your location/address details and atleast two guarantees</div>
                </div><!-- /col-lg-6 -->
                <div class="col-md-4 ">
                        <div class="form-group">
                            <div class="col-sm-12">Identification type
                                <select class="form-control" name="IDtype" >
                                    <option>Passport</option>
                                    <option>Driving permit</option>
                                    <option>National ID</option>
                                    <option>Other</option>
                                </select></div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                Identification Number <input type="text" name="IDnumber" class="form-control">
                                <input type="hidden" name="id"value="<?php echo $id; ?>" class="form-control">
                            </div>
                        </div>
                     <div class="form-group">
                            <div class="col-sm-12">
                                1<sup>st</sup> Guarantee name <input type="text" name="GuaranteeName" class="form-control">
                                contact <input type="text" name="GuaranteeContact" class="form-control">
                                   2<sup>st</sup> Guarantee name <input type="text" name="GuaranteeName2" class="form-control">
                                   contact <input type="text" name="GuaranteeContact2" class="form-control">
                            </div>
                        </div>
                </div><!-- /col-lg-6 -->

                <div class="col-md-4 ">
                 
          <div class="form-group"> 
           <div class="col-sm-12">
                                    Area of Residence 
                                    <div id="locationField">
                                        <input class="form-control" id="autocomplete" name="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
                                    </div>
                                    Country 
                                    <input class="form-control"  id="country" name="country" disabled="true"></input>

                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                Physical address<input type="text" name="physical" class="form-control">
                            </div>
                        </div>
                
                        <div class="form-group">
                            <div class="col-sm-12">
                                Region
                                <input class="form-control"  id="administrative_area_level_1" name="administrative_area_level_1" disabled="true"></input>
                                City/town
                                <input class="form-control" id="locality" name="locality"  disabled="true"></input>
                                <input class="form-control" type="hidden" id="postal_code" name="postal_code" ></input>
                                <input class="form-control"  type="hidden" id="street_number" name="street_number"  disabled></input>
                                <input class="form-control" hidden="true" id="route" disabled="true" type="hidden"></input>
                            </div>
                        </div>


                    <div class="widget-content">
                 
                  
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