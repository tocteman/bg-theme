<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>





<div id="page" role="main">


	
<div class="wrapper">

	<header>
	<div class="column row">
	<h1><span class="titulo"><?php the_archive_title();?></span></h1>
	</div>

	</header>

	<article>


	
<div class="row small-up-1 medium-up-2 large-up-3 medium-collapse large-collapse">
<?php $postcount=0; ?>
	<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>

	<div class="column">
		<div class="callout transparente">
			<hr>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('archivo-thumb'); ?>
			<div class="pads">
				<div class="titulo-noticias"><?php the_title(); ?></div></a>
			</div>			
			<em><?php the_category(', ' );?></em>
			<div class="micro-pads">
			<?php the_excerpt();?>
			</div>
		</div>
	</div>
	<?php $postcount ++; ?>
	<?php if ( $postcount == 5) {
			echo "VAMOS HIJUEPUTA!";
			} ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>
			
		</div>

<?php /* Display navigation to next/previous pages when applicable */ ?>
		<?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
			<nav id="post-nav">
				<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
				<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
			</nav>
		<?php } ?>

	</article>


</div>
</div>

<?php get_footer();
