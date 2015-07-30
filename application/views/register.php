
 <?php require_once(APPPATH . 'views/header.php'); ?>
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
<body onload="initialize()">


    
    
      <div class="container">
   <div class="row">
                      <h2> Submit  an application</h2>
                        <form class="form-horizontal style-form" method="get">

               
          			<div class=" col-md-4 ">
      				
      				<div class="showback">
      				
							 
                      <form class="form-horizontal style-form" method="get">
                        <div class="alert alert-info"> 
                           <input id="imgfile" type="file" /> 
   <img id="preview"  width=150px" height="150px" src="#" alt=" Your profile passport image" />
                        </div>
                          <div class="form-group">                              
                              <div class="col-sm-12">
                                First name  <input type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                           
                              <div class="col-sm-12">
                                 Last name <input type="text" class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                            
                              <div class="col-sm-12">
                                 Other name <input type="text" class="form-control">
                              </div>
                          </div>
                           <div class="form-group">
                          
                            <div class="col-sm-12">
                                 Gender <select class="form-control">
						  <option>Male</option>
						  <option>Female</option>
						
						</select>
                              </div> </div>
                      
                        
                           <div class="form-group">
                             <div class="col-sm-9">University/Institute<select class="form-control">
						  <option>Makerere university</option>
						
						 <option>MUBS</option>
                               </select></div>
                            </div>
                           <div class="form-group">
                                <div class="col-sm-12">
                               Year of study   <input type="text" class="form-control">
                             </div>
                          </div>
                         <div class="form-group">  <div class="col-sm-9">
                           Area of Residence 
                            <div id="locationField">
                                <input class="form-control" id="autocomplete" name="autocomplete" placeholder="Enter your address" onFocus="geolocate()" type="text"></input>
                            </div>
                              Country 
                            <input class="form-control"  id="country" name="country" disabled="true"></input>
                      
                             </div>
                        </div>
                
              				
      				</div><!-- /showback -->
      		   
      			
      			</div><!-- /col-lg-6 -->
                        		<div class="col-md-4 ">
      				
      				<div class="showback">
      				
			  <div class="alert alert-info"><b></b> Contact information below to complete the registration and application process</div>
			
                    
                         
                        <div class="form-group">
                               <div class="col-sm-12">
                                 Contact/mobile number <input type="text" class="form-control">
                             </div>
                          </div>
                             <div class="form-group">
                               <div class="col-sm-12">
                                 E-mail <input type="text" class="form-control">
                             </div>
                          </div>
                             <div class="form-group">
                            <div class="col-sm-12">Identification type<select class="form-control">
						  <option>Passport</option>
						  <option>Driving permit</option>
                                                   <option>National ID</option>
						 <option>Other</option>
                               </select></div>
                            </div>
                          <div class="form-group">
                               <div class="col-sm-12">
                                 Identification Number <input type="text" class="form-control">
                             </div>
                          </div>
                           <div class="form-group">
                               <div class="col-sm-12">
                                  Physical address<input type="text" class="form-control">
                             </div>
                          </div>
                             <div class="form-group">
                               <div class="col-sm-12">
                                 Social media URL: <input type="text" class="form-control">
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

                    
              				
      				</div><!-- /showback -->
      		   
      			
      			</div><!-- /col-lg-6 -->
					
      	<div class="col-md-4 ">
               <div class="alert alert-success"><b></b> A minimum of your latest 3 qualification is reguired here</div>
						
                             <div class="form-group">
                                <div class="col-sm-12">
                                 Qualification 1 <input type="text" class="form-control">
                             </div>
                          </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                  Qualification 2<input type="text" class="form-control">
                             </div>
                          </div>
                            <div class="form-group">
                               <div class="col-sm-12">
                                 Qualification 3 <input type="text" class="form-control">
                             </div>
                          </div>
                            <div class="form-group">
                              <div class="col-sm-12">
                                Disabled: <select class="form-control">
						  <option>Yes</option>
						  <option>No</option>
                                                  
                               </select>
                             </div>
                          </div>                        
                    
                      
                          <div class="form-group">
                              <div class="col-sm-12">
                                  Password<input type="password"  class="form-control" placeholder="">
                              </div>
                          </div>
                 <div class="form-group">
                               <div class="col-sm-12">
                                 Confirm Password<input type="password"  class="form-control" placeholder="">
                              </div>
                          </div>
                <hr>
                  <div class="form-group">
                      <label class="clear"> </label> 
                       <div class="col-sm-12">
                           <button type="button" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-info">Cancel</button>
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