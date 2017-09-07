<?php
/**
 * The template for displaying search results pages.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
<div class="wrapper">
<div class="row">
		<?php do_action( 'foundationpress_before_content' ); ?>
		<h2><div class="titulo-archivo super-pads"><?php _e( 'resultados de la búsqueda', 'foundationpress' ); ?><b> "<?php echo get_search_query(); ?>"</b></div></h2>
			<?php if ( have_posts() ) : ?>
	<div class="small-12 large-8 columns" role="main">
				<div class= "row large-up-2 small-up-1">
					<?php while ( have_posts() ) : the_post(); ?>
						<div class="column">
						<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
						</div>
					<?php endwhile; ?>
					<?php else : ?>
						<?php get_template_part( 'template-parts/content', 'none' ); ?>
				</div>
			<?php endif;?>
	
			<?php do_action( 'foundationpress_before_pagination' ); ?>
			<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>

				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
				</nav>
			<?php } ?>
			</div>
</div>
			

		<div class="small-12 large-4 columns">
		<?php get_sidebar(); ?>
		</div>
	</div>
</div>
<?php do_action( 'foundationpress_after_content' ); ?>
<?php get_footer();
