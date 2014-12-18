<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo"> 
			<?php get_sidebar( 'main' ); ?>
<link href="/css/font-awesome.css" rel="stylesheet">
<link href="/css/footer.css" rel="stylesheet">
<link href="/bootstrap/css/bootstrap-social.css" rel="stylesheet">
<div id="footer">
<div class="container" role="contentinfo" id="footerContainer">
<div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-md-12">
                        <p class="pull-right"><a href="#">Back to top</a></p>
                        <p>&copy; 2014 UWAFT. All rights reserved. &middot; <a href="#">Privacy</a> &middot; <a href="">Terms</a> &middot; <a href="http://localhost/contactus.php">Contact us</a></p>
                    </div>
                </div>
                <div class="row">
                    
                        <a class="btn btn-lg btn-primary btn-circle pull-right" href="https://twitter.com/UWAFT">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a class="btn btn-lg btn-primary btn-circle pull-right" href="https://www.facebook.com/uwaft?fref=ts">
                            <i class="fa fa-facebook"></i>
                        </a>
                </div>
            </div>
        </div><!--/row-->
</div>
</div>
		</footer>  <!-- #colophon --> 
	</div><!-- #page -->
<script src = "/js/jquery-1.11.1.js"></script>
<script src = "/js/jquery-2.1.1.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>