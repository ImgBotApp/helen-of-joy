<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package helen-of-joy
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
												<li><a href="contact.html">Audio Archive</a></li>
												<li><a href="contact.html">Video Archive</a></li>
												<li><a href="#topofpage">Once more from the top</a></li>
								</ul>
						</nav>
				</div>
		</div>
</footer>

<!--MODAL-->
<div class="modal fade" id="contact" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal" method="post">
				<div class="modal-header">
					<h4>Contact Us</h4>
				</div>
				<div class="modal-body">
					<div class="form-group">
						<label for="contact-name" class="col-lg-2 control-label">Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-name" placeholder="Your Name">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-email" class="col-lg-2 control-label">Email:</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="contact-name" placeholder="you@example.com">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-msg" class="col-lg-2 control-label">Message:</label>
						<div class="col-lg-10">
							<textarea name="name" rows="8" cols="80" class="form-control"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
						<button type="btn btn-primary" name="button">Send</button>
				</div>
			</form>
		</div>
	</div>
</div>


<!-- BOOTSTRAP CORE JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>


<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery-3.1.1.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
