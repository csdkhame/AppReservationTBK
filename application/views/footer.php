<div class="modal fade" id="capacityss" role="dialog">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <!-- <h4 class="modal-title">Gallery</h4> -->
                            </div>
                            
                            <div class="modal-body">                                    
                                <div id="getcapa"></div>
                                <div id="getcapa2"></div>

                            </div>
                            <div class="modal-footer">
                                <!-- <button type="button" class="btn btn-default" data-dismiss="modal" onclick="reset()">Close</button> -->
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                	#getcapa{
                		background-color: #ddd;
                		height: 35px;
                	}
                	.table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th{
                		border-top: none;
                	}
                	#table1{
                		margin-top: 10px !important;
                	}
                </style>
<!--	<footer class="footer footer-white" >
		<div class="container">
			<a class="footer-brand" href="http://www.creative-tim.com">Material Kit PRO</a> 

			<ul class="pull-left">
				<li>
					<a href="" >
						Contacts
					</a>
				</li>
				<li>
					<a href="">
					   About Us
					</a>
				</li>
				
			</ul>

			<ul class="social-buttons pull-right">
				<li>
					<a href="https://twitter.com/" target="_blank" class="btn btn-just-icon btn-simple btn-twitter">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li>
					<a href="https://www.facebook.com/" target="_blank" class="btn btn-just-icon btn-simple btn-dribbble">
						<i class="fa fa-dribbble"></i>
					</a>
				</li>
				<li>
					<a href="https://www.instagram.com/" target="_blank" class="btn btn-just-icon btn-simple btn-instagram">
						<i class="fa fa-instagram"></i>
					</a>
				</li>
			</ul>

		</div>
	</footer>-->
	</div>
	<!-- </div> -->
	<!--     *********    END PRICING 5      *********      -->
</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url(); ?>files/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>files/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>files/js/material.min.js"></script>
    <script src="<?php echo base_url(); ?>files/js/jquery.cookie.js" type="text/javascript"></script>

	<script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.12.0.js"></script>

	<!--    Plugin for Date Time Picker and Full Calendar Plugin   -->
	<!-- <script src="<?php echo base_url(); ?>files/js/moment.min.js"></script> -->

	<!--	Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/   -->
	<script src="<?php echo base_url(); ?>files/js/nouislider.min.js" type="text/javascript"></script>
	

	<!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker   -->
	<!-- <script src="<?php echo base_url(); ?>files/js/bootstrap-datetimepicker.js" type="text/javascript"></script> -->

	<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
	<script src="<?php echo base_url(); ?>files/js/bootstrap-selectpicker.js" type="text/javascript"></script>

	<!--	Plugin for Tags, full documentation here: http://xoxco.com/projects/code/tagsinput/  -->
	<script src="<?php echo base_url(); ?>files/js/bootstrap-tagsinput.js"></script>

	<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput   -->
	<script src="<?php echo base_url(); ?>files/js/jasny-bootstrap.min.js"></script>

	<!--    Plugin For Google Maps   -->
	<!-- <script  type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAFPQibxeDaLIUHsC6_KqDdFaUdhrbhZ3M"></script> -->

	<!--    Plugin for 3D images animation effect, full documentation here: https://github.com/drewwilson/atvImg    -->
	<script src="<?php echo base_url(); ?>files/js/atv-img-animation.js" type="text/javascript"></script>

	<!--    Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc    -->
	<script src="<?php echo base_url(); ?>files/js/material-kit.min.js?v=1.1.1" type="text/javascript"></script>

	<!-- Demo Purpose, JS For Demo Purpose, Don't Include it in your project -->
	<script async defer src="https://buttons.github.io/buttons.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>files/js/jquery.sharrre.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>files/js/main-script.js?v=<?=time()?>"></script> 
	<script src="<?php echo base_url(); ?>files/js/list.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>files/js/list.js" type="text/javascript"></script>
	<!-- <script async defer src="https://maps.googleapis.cn/maps/api/js?key=AIzaSyAxwxcRc1lPkGj_XN_gYa0gKRv9rywrePU"></script> -->
<!--	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAxwxcRc1lPkGj_XN_gYa0gKRv9rywrePU&callback=initMap">
    </script>-->
</script>
	<script type="text/javascript">
		var $section_features = '';
		$().ready(function(){
			materialKitDemo.initSharrre();
		});

	</script>

	<style>
		.index-page .header-filter:after, .presentation-page .header-filter:after {
    background: rgba(132,13,121,.88);
    background: linear-gradient(45deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%);
    background: -moz-linear-gradient(135deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%);
    /* background: -webkit-linear-gradient(135deg,rgba(132,13,121,.88) 0,rgba(208,44,180,.31) 100%); */
    /* background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgb(16, 15, 204)); */
    background: linear-gradient(0deg, rgba(44, 44, 44, 0.2), rgba(224, 23, 3, 0.6));
}
.index-page .page-header, .presentation-page .page-header {
    height: 30vh;
    overflow: hidden;
}
.main-raised {
    margin: 45px 60px 0;
    border-radius: 6px;
    box-shadow: 0 16px 24px 2px rgba(0,0,0,.14), 0 6px 30px 5px rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);
    margin-bottom: 50px;
}
	</style>

<script>


$(document).ready(function(){
	
$('.btn-realtime').on('click',initialize);

});	

      function initialize() {
      	
      	var start;
      	var end;
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 7.9038781, lng: 98.3033694},
          zoom: 16,
          mapTypeControl: false,
          mapTypeId: 'roadmap'
        });
		initAutocomplete(map,start);
        // Create the search box and link it to the UI element.
      }
      
      
      function initAutocomplete(map){
      	   var current_marker = {
              url: 'http://dotdotdottrip.com/pic/icon_marker.png',
              size: new google.maps.Size(71, 71),
              origin: new google.maps.Point(0, 0),
              anchor: new google.maps.Point(17, 34),
              scaledSize: new google.maps.Size(35, 35)
            };
		 
		 var marker2 = new google.maps.Marker({
//		 	 icon : current_marker,
	          draggable: false,
              animation: google.maps.Animation.DROP,
	          map: map
	         
	        });
	        
		if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            start = pos;
			//marker2.setAnimation(google.maps.Animation.BOUNCE);
            marker2.setPosition(pos);
            map.setCenter(pos);
            
			var geocoder = new google.maps.Geocoder;
			//console.log(pos);
			latitude=position.coords.latitude;               
			longitude= position.coords.longitude;
			var latlng = {lat: parseFloat(latitude), lng: parseFloat(longitude)};

			geocoder.geocode({'location': latlng}, function(results, status) 																																				{
	/*console.log(results);*/
    if (status === google.maps.GeocoderStatus.OK) {
      if (results[1]) {
        console.log(results[1].place_id);
        console.log(results[1].formatted_address);
        document.getElementById("current").value = results[1].formatted_address;
      } else {
        window.alert('No results found');
      }
    } else {
      window.alert('Geocoder failed due to: ' + status);
    }
  });

        
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } 

      	var directionsService = new google.maps.DirectionsService;
      	var directionsDisplay = new google.maps.DirectionsRenderer();
	  	       var input = document.getElementById('pac-input');
            
        var searchBox = new google.maps.places.SearchBox(input);
//        map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

         var autocomplete = new google.maps.places.Autocomplete(input);
         autocomplete.bindTo('bounds', map);
         
        var marker = new google.maps.Marker({
          map: map,
          animation: google.maps.Animation.DROP,
          anchorPoint: new google.maps.Point(0, -29)
        });
        
          autocomplete.addListener('place_changed', function() {
          	 marker.setVisible(false);
          	var place = autocomplete.getPlace();

         if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
              map.setZoom(13); 
              console.log(place.geometry);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
           marker.setPosition(place.geometry.location);
           end = place.geometry.location;
		   marker.setVisible(true);
		   var request = {
                origin: start,
                destination: end,
                travelMode: google.maps.TravelMode.DRIVING
            };
        	//console.log(request);
        	directionsDisplay.setMap(map);
        	directionsService.route(request, function (response, status) {
        		
        		 directionsDisplay.setDirections(response);
                    directionsDisplay.setOptions({
                        suppressMarkers: true,
                        preserveViewport: true
                    });
        	});
        }); 
	  }
</script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEiDYwHpd4fR3h1QfTcHmFRCAF4NjVxmM&libraries=places&callback=initAutocomplete"async defer> </script>

</html>










