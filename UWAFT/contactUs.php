<!DOCTYPE html>
<head>
		<!-- Contact us Page
		         UWAFT Contact us Page Website
		         HTML 5 and PHP technologies used
		         
		         Revision History
		                Marvin Sun: Complete Contact us Page		                
		-->
	<?php
//inital setup for this page, this has to be set before include header
$page_title = "Contact us";
$page_author = "Marvin Sun";
$page_description = "This it Contact us page";
//put each needed css link as a element in this array
$page_css = array();
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();
include_once "includes/header.php";
?>
<link rel="stylesheet" type="text/css" href="css/contactUs.css">
</head>
<body>
<header>
<div class="container">
<div class="lead-in">Welcome To Our Team!</div>
<div class="heading">Contact us</div>
</div>
</header>
<div class="container">
<div class="sideleft">
<h2>Find us</h2>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:auto;height:400px;width:700px;"><div id="gmap_canvas" style="height:400px;width:700px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(43.4720646,-80.54294399999998),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(43.4720646, -80.54294399999998)});infowindow = new google.maps.InfoWindow({content:"<b>UWAFT</b><br/>200 University Ave W Waterloo<br/> Kitchener" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>
</div>
<div class="sideright">
	<div class="col-md-7">
	<h2>Contact Info</h2><br>
	<strong>200 University Ave W Waterloo, ON N2L3G1 Canada</strong><br><br>
	<strong>Email: info@uwaft.com</strong>
	<strong>Phone: (519)-999-9999</strong><br>
	<strong>Fax: (519)-999-9999</strong>
	</div>
</div>
</div>
</body>
  <?php
    include_once "includes/footer.php";
  ?>
						
</html> 