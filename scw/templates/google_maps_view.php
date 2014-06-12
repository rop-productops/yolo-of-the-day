    <div id="google_maps" >
    
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
      html { height: 100% }
      body { height: 100%; margin: 0; padding: 0 }
      
      
      #map-canvas 
	{
        height:350px;
	width: 900px;
      	}
      
      
      
    </style>
    <script src="//platform.linkedin.com/in.js" type="text/javascript"></script>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7398U731Zi88A0JBIE0AuUYLVIKRzcmY&sensor=FALSE">
    </script>
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(<?php print $this->lat; ?>,<?php print $this->lng; ?>),
          zoom: 14

        };
        
        
    
        var map = new google.maps.Map(document.getElementById("map-canvas"),
           mapOptions);
        
        var contentElement = document.createElement("div")
        contentElement.setAttribute("style", "width:360px; height:256px;")
        contentElement.innerHTML = '\x3cscript type="IN/CompanyProfile" data-id="<?php print $this->linkedin_id; ?>" data-format="inline">\x3c/script>'
        
        IN.parse(contentElement);
        
        var infowindow = new google.maps.InfoWindow({
            content: contentElement
        });

           
        function addMarker(location) {
            marker = new google.maps.Marker({
                position: location,
                map: map
            });
            
        }

       var company = new google.maps.LatLng(<?php print $this->lat; ?>,<?php print $this->lng; ?>);
       addMarker(company);
       google.maps.event.addListener(marker, 'mouseover', function() {
    infowindow.open(map,marker);
             });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      
    </script>

    <div id="map-canvas"/>

</div>
