<?php
/*  aboutuS.php
 *  About Us page
 *
 *   Revision
 * 	Created by Terence at 12/03/2014
 */

$page_title = "About US";
$page_author = "Alexey Rusev & Weiwei Chen";
$page_description = "This page presents what we do";
//put each needed css link as a element in this array
//put each needed meta data as a element in this array
$page_meta = array();
//put needed javascript script here
$page_js = array();
include_once 'includes/header.php';
?>
<link href="css/agency.css" rel="stylesheet">
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Welcome To Our Team!</div>
            <div class="intro-heading">It's Nice To Meet You</div>
            <a href="carPage.php" class="page-scroll btn btn-xl">Tell Me More</a>
        </div>
    </div>
</header>

<!-- Services Section -->
<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Our History</h2>
                <h3 class="section-subheading text-muted">Check this out</h3>
            </div>
        </div>
    </div>
</section>

<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Where everything begins...</h2>
            <p class="lead">The University of Waterloo Alternative Fuels Team (UWAFT) has a proud history at the University of Waterloo and was founded in 1996. Since 1996, the team has explored a plethora of fuel types including propane, hydrogen, ethanol, and electricity. In 2005, during the ChallengeX competition, UWAFT became the first student team in the world to put a passenger fuel cell vehicle on the road. The team’s continual passion and dedication has lead to innovative solutions which are always breaking new ground.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="images/history2.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="images/history1.jpg" alt="Generic placeholder image">
        </div>
        <div class="col-md-7">
            <h2 class="featurette-heading">Our collaboration</h2>
            <p class="lead">UWAFT has had over 1000 students participate in the team, with over 75 students participating in the project each term. The team continually pushes student engagement and has formed partnerships with Wilfred Laurier University and Conestoga College to increase student participation in creating a sustainable future. The team works with multiple levels of government and industrial sponsors, such as CrossChasm, to both promote vehicle electrification and the benefits of eco-friendly alternatives.</p>
        </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Future steps</h2>
            <p class="lead">UWAFT is currently competing in the EcoCAR 3 Advanced Vehicle Technology Competition (AVTC) and is continuing to explore advanced technologies and develop student talent. In EcoCAR 3, UWAFT will continue to put innovation into the vehicle and never compromise on performance. The team will examine complex problems particular to the Canadian environment, such as cold start and the integration of real world drive cycles to the design of Canadian performance drivers.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive" src="images/history3.jpg" alt="Generic placeholder image">
        </div>
    </div>

    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">The following is the list of competitions participated in by UWAFT:
                    </h2>
                    </br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="images/carModel.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1996-1997</h4>
                                <h4 class="subheading">Propane Vehicle Challenge (AVTC)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="images/carModel2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>1997-2000</h4>
                                <h4 class="subheading">Ethanol Vehicle Challenge (AVTC)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="images/carModel.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2000-2004</h4>
                                <h4 class="subheading">North East Sustainable Energy Association (NESEA) competitions</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="images/carModel2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2004-2008</h4>
                                <h4 class="subheading">ChallengeX: Crossover to sustainable mode (AVTC)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="images/carModel.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2008-2011</h4>
                                <h4 class="subheading">EcoCAR: The NeXt Challenge (AVTC)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="images/carModel2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2011-2014</h4>
                                <h4 class="subheading">EcoCAR 2: Plugging into the Future (AVTC)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="images/carModel.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>2014-2018</h4>
                                <h4 class="subheading">EcoCAR 3 (AVTC)</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        </div>
    </section>
<hr class="featurette-divider">
<div class="container" id="missionVision">
    <section class="content-header">
        <h1>
            Our Mission and Vision
        </h1>
    </section>
    <section class="content">

        <div class="row featurette">
            <div class="col-md-12">
                <h2 class="featurette-heading">Mission Statement</h2>
                <p class="lead">At UWAFT we continuously break new ground in the field of sustainable transportation through innovation, technology, and student engagement. Through active community involvement we spread the message of sustainability locally, nationally, and internationally.</p>
            </div>
        </div>
        <div class="row featurette" style="background-color: #F2F2F2">
            <div class="col-md-12">
                <h2 class="featurette-heading">Vision Statement</h2>
                <p class="lead">We will shatter the boundaries in the automotive field to become world leaders in sustainability; building the vehicles of tomorrow, today.</p>
            </div>
        </div>
    </section>
</div>
</div>

<?php
include_once "includes/footer.php";
?>

