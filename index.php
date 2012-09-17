<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>Google Maps V3 API Sample</title>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">

      function initialize() {
        var mapDiv = document.getElementById('map-canvas');
        var map = new google.maps.Map(mapDiv, {
          center: new google.maps.LatLng(52.84923, -2.032471),
          zoom: 7,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        });
      }
      

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
  <body style="font-family: Arial; border: 0 none;">
    <div id="map-canvas" style="width: 700px; height: 900px"></div>
  </body>
</html>
​