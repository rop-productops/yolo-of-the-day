    <div id="google_maps" >
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      
      
      #map-canvas 
	{
        height:350px;
	width: 900px;
        margin: 10px;
        padding: 10px
      	}
      
      
      
    </style>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7398U731Zi88A0JBIE0AuUYLVIKRzcmY&sensor=FALSE">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(36.9794318, -122.0310751),
          zoom: 14

        };
        
        
    
        var map = new google.maps.Map(document.getElementById("map-canvas"),
           mapOptions);
        var contentString = '<script src="//platform.linkedin.com/in.js" type="text/javascript">&lt;/script>'+
            '<script type="IN/CompanyProfile" data-id="LinkedIn" data-format="inline">&lt;/script>'
           
           contentString='<h> LOOKER</h>'
        var infowindow = new google.maps.InfoWindow({
      content: contentString
        });

           
        function addMarker(location) {
            marker = new google.maps.Marker({
                position: location,
                map: map
            });
            
        }

       Looker = new google.maps.LatLng(36.973983,-122.027819);
       addMarker(Looker);
       google.maps.event.addListener(marker, 'mouseover', function() {
    infowindow.open(map,marker);
             });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      
    </script>

    <div id="map-canvas"/>

</div>
