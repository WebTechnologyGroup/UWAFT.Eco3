<!DOCTYPE html>

		<!-- Team Page
		         UWAFT Team Page Website
		         HTML 5 and PHP technologies used
		         
		         Revision History
		                Thida Pao, 2014.11.02: Complete redesign of Car Page
						Terene,    2014.11.05: re-organized the html page to php with header and footer
		                
		-->
	<?php
//inital setup for this page, this has to be set before include header
$page_title = "Vehicles";
$page_author = "Chanthida Pao";
$page_description = "This it the vehicle page";
//put each needed css link as a element in this array
$page_css = array();
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();
include_once "includes/header.php";
?>
	<div id="teamCarousel" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#teamCarousel" data-slide-to="0" class="active"></li>
	    <li data-target="#teamCarousel" data-slide-to="1"></li>
	    <li data-target="#teamCarousel" data-slide-to="2"></li>
	    <li data-target="#teamCarousel" data-slide-to="3"></li>
	    <li data-target="#teamCarousel" data-slide-to="4"></li>
	  </ol>
	  <center>
	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="images/carpage_car1.jpg" alt="...">
	    </div>
	    <div class="item">
	      <img src="images/carpage_car2.jpg" alt="...">
	    </div>
	    <div class="item">
	      <img src="images/carpage_car3.jpg" alt="...">
	    </div>	    
	    <div class="item">
	      <img src="images/carpage_car4.jpg" alt="...">
	    </div>	
	    <div class="item">
	      <img src="images/carpage_car5.jpg" alt="...">
	    </div>	
	  </div>
	  </center>
	  <!-- Controls -->
	  <a class="left carousel-control" href="#teamCarousel" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#teamCarousel" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>


<p></p>
    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette" id="1999">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">1999</span> Chevrolet Silverado</h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/team_profile4.jpg" >
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="2005">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/team_profile5.jpg" >
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">2005</span> Chevrolet Equinox</h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette" id="2009">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">2009</span> Saturn Vue</h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/team_profile6.jpg" >
        </div>
      </div>

     <hr class="featurette-divider">

      <div class="row featurette" id="2013">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/team_profile7.jpg" >
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">2013</span> Chevrolet Malibu</h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

    <hr class="featurette-divider">

      <div class="row featurette" id="present">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">Presently</span> Chevrolet Camaro</h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/team_profile8.jpg" >
        </div>
      </div>

      <?php
    include_once "includes/footer.php";
    ?>
						