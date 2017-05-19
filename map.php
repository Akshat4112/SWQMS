<?php include 'includes/layout.inc.php';
include 'includes/connection.inc.php';?>
<style>
.MapPlaceHolder {
    max-height: 680px;
}</style>
<div class="row">
  <div class="col-md-6">
    
<style>
  #map{
    height: 580px;
    width: 100%;
  }
</style>
    <div id="map" class="MapPlaceHolder"></div> 
    <!--script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script-->
    <script>
      // This example adds a search box to a map, using the Google Place Autocomplete
      // feature. People can enter geographical searches. The search box will return a
      // pick list containing a mix of places and predicted search terms.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
      var loca = {lat: 13.34, lng: 80.131};
      function initAutocomplete() {
       // var infoWindow = new google.maps.infoWindow();
        //var latlngbounds =new google.maps.LatLngBounds();
        var map = new google.maps.Map(document.getElementById('map'), {
          center: loca,
          zoom: 13,
          mapTypeId: 'roadmap'
        });
     /**   google.maps.event.addListener(map,'click',function(e){
        alert("Latitude: "+e.latLng.lat()+"\r\nLongitude:"+e.latLng.lng());
      });
        **/
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      
      }
      var locations = [
        {lat: 13.77, lng: 80.131},
        {lat: 13.12, lng: 80.131},
        {lat: 13.42, lng: 80.131},
        {lat: 12.91, lng: 80.131},
        {lat: 12.99, lng: 80.131},
        {lat: 13.24, lng: 80.131},
        {lat: 13.50, lng: 80.131},
        {lat: 13.34, lng: 80.131},
        {lat: 12.77, lng: 80.131},
        {lat: 12.57, lng: 80.131},
        {lat: 12.80, lng: 80.131},
        {lat: 13.90, lng: 80.131},
        {lat: 13.76, lng: 80.131},
        {lat: 13.45, lng: 80.131},
        {lat: 13.37, lng: 80.131},
        {lat: 13.98, lng: 80.131},
        {lat: 13.13123, lng: 80.131},
        {lat: 13.4124, lng: 80.131},
        {lat: 13.41241, lng: 80.131},
        {lat: 13.75325, lng: 80.131},
        {lat: 13.775235, lng: 80.131},
        {lat: 13.741252, lng: 80.131},
        {lat: 13.353255, lng: 80.131},
        {lat: 13.233523, lng: 80.131}
      ] 

    </script>
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVdOx_8x3z7qKmPzsgioLny6qiSd9h7gw&libraries=places&callback=initAutocomplete"
         async defer></script>
    </div>
      <div class="col-md-6">
    <div id="piechart" style="height: 700px;"></div>
</div>





<?php include 'includes/footer.inc.php';?>