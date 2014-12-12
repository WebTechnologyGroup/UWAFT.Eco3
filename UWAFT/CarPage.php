<!DOCTYPE html>
<head>
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

<link rel="stylesheet" type="text/css" href="css/timeline.css">

</head>

<body>
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



<div class="container">
        
        
      

      <!-- START THE FEATURETTES -->


      
      <div class="row featurette">
      <div class="col-lg-6">

          <h2 class="featurette-heading">Our Fleet</h2>

          <p class="lead">Model X is designed from the ground up to blend the best of an SUV with the benefits of a minivan, as only an electric car can. It is an automobile above category, built around the driver. It artfully provides unfettered performance and brilliant functionality.</p>

        </div>

        <div class="col-lg-6" id="1999">
          <h2 class="featurette-heading">&nbsp</h2>          
          <p class="lead"> Come see for yourself <br />Make an appointment or reserve a spot
          <a href="aboutus.php"><i class="glyphicon glyphicon-question-sign"></i></a>
          </p>
        </div>

      </div>


      <div class="row featurette" id="2005">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">1999</span> Chevrolet Silverado</h2>
          <p >Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/carpage_car1.jpg" >
        </div>
      </div>

      <hr class="featurette-divider" id="2009">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/carpage_car2.jpg" >
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">2005</span> Chevrolet Equinox</h2>
          <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

      <hr class="featurette-divider" id="2013">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">2009</span> Saturn Vue</h2>
          <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/carpage_car3.jpg" >
        </div>
      </div>

     <hr class="featurette-divider" id="present">

      <div class="row featurette">
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/carpage_car4.jpg" >
        </div>
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">2013</span> Chevrolet Malibu</h2>
          <p>Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
      </div>

    <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading"><span class="text-muted">Presently</span> Chevrolet Camaro</h2>
          <p >Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive" src="images/carpage_car5.jpg" >
        </div>
      </div>
</div>      

    <div class="container marketing">
            <hr class="featurette-divider">
    <ul class="timeline">
      <li>
        <div class="timeline-badge"><i class="glyphicon glyphicon-road"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">1999 Chevrolet Silverado</h4>

            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge warning"><i class="glyphicon glyphicon-cog"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title"> 2005 Chevrolet Equinox </h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              <p>Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Interagi no mé, cursus quis, vehicula ac nisi. Aenean vel dui dui. Nullam leo erat, aliquet quis tempus a, posuere ut mi. Ut scelerisque neque et turpis posuere pulvinar pellentesque nibh ullamcorper. Pharetra in mattis molestie, volutpat elementum justo. Aenean ut ante turpis. Pellentesque laoreet mé vel lectus scelerisque interdum cursus velit auctor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ac mauris lectus, non scelerisque augue. Aenean justo massa.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge danger"><i class="glyphicon glyphicon-camera"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2009 Saturn Vue</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">2013 Chevrolet Malibu</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge info"><i class="glyphicon glyphicon-tint"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">201? Chevrolet Camaro</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
              <hr>
              <div class="btn-group">
                <button type="button" class="btn btn-primary btn-sm dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-flash"></i> <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge success"><i class="glyphicon glyphicon-fire"></i></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h4 class="timeline-title">Mussum ipsum cacilds</h4>
            </div>
            <div class="timeline-body">
              <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
            </div>
          </div>
        </li>
    </ul>
  </div>
</body>
  <?php
    include_once "includes/footer.php";
    ?>
						

</html>            