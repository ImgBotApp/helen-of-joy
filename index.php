<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package helen-joy
 */

// Variables

$background_image = get_field('background_image');

get_header();

?>


<!--Blog content-->
<div class="container">
	<div class="row blogpagelayout" id="primary">

		<main id="content" class="col-sm-9" role="main">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</main>

	  <aside class="col-sm-3">
			<?php

			get_sidebar();

			?>
		</aside>

	</div>
</div>

<style>
body.blog {
background-image:url("<?php echo $background_image; ?>");
background-position: center;
background-size: cover;
height:100%;
margin:0;
}
<?php echo $backgound_image; ?>
</style>

<?php

get_footer();

?>
