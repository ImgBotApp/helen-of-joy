<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package helen-joy
*/

?>

<?php wp_footer(); ?>


<!--FOOTER-->
<footer>
	<div class="container">
		<div>

		</div>
		<nav>
			<ul class="list-unstyled list-inline footer-text">
				<li><a href="blog.html">Blog Archive</a></li>
				<li><a href="audio.html">Audio Archive</a></li>
				<li><a href="video.html">Video Archive</a></li>
				<li><a href="#topofpage">Once more from the top</a></li>
			</ul>
		</nav>
	</div>
</div>
</footer>


<!-- BOOTSTRAP CORE JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
