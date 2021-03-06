<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package helen-joy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_single() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>

		<?php if ( has_post_thumbnail() ) { ?>
		<div class="post-image">
			<?php the_post_thumbnail(); ?>
		</div><!-- post-image -->
		<?php } ?>

			<div class="post-details">
				<i class="fa fa-user"></i><?php the_author(); ?>
				<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
				<i class="fa fa-tags"></i> <?php the_tags('',',',''); ?>

				<?php edit_post_link( 'Edit this post', '<i class="fa fa-pencil"></i>', ''); ?>
			</div><!-- post-details -->

			<?php
			endif; ?>
		</header>

			<div class="post-excerpt">
				<?php the_excerpt(); ?><a href="<?php echo get_permalink($post->ID); ?>">continue reading &raquo;</a>
			</div><!-- post-excerpt -->
</article><!-- #post-## -->
