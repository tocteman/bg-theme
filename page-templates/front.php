<?php
/*
Template Name: Front
*/
get_header(); ?>
<div id="page" role="main">
	<div class="wrapper">
	<article>
		<div class="row">
			<div class="large-7 columns">
				<?php 
			$args =array (
				'post_type' => 'galeriavisual',
				'posts_per_page' => 2
				);
			$querynoticias = new WP_Query ($args);
			if ( $querynoticias -> have_posts()) : while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-chico'); ?>
						<h3><div class="titulo-archivo"><?php the_title(); ?></div></h3></a>
					<div class="micro-pads">			
					<?php the_category(', ' );?>
					</div>
					<?php the_excerpt();?>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
					<p>Aquí puse y no aparece. </p>
				<?php endif; // End have_posts() check. ?>	
				<?php wp_reset_query() ?>
			</div>
		<div class="large-5 columns">
			<?php 
			$args =array (
				'post_type' => 'post',
				'posts_per_page' => 3
				);
			$querynoticias = new WP_Query ($args);
			if ( $querynoticias -> have_posts()) : while ( have_posts() ) : the_post(); ?>
				<div class="row">
					<div class="small-6 columns">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('archivo-thumb'); ?></a>
					</div>
					<div class="small-6 columns">
						<h5><div class="titulo-noticias"><?php the_title(); ?></div></h5>
						<div class="micro-pads">			
						<?php the_category(', ' );?>
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<p>Aquí puse y no aparece. </p>
			<?php endif; // End have_posts() check. ?>					
		</div>
	<hr>
	</article>


</div>
</div>

<?php get_footer();
