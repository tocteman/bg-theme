<?php 
/*
Template Name: elhome
*/
get_header(); ?>
<?php echo do_shortcode("[pro_ad_display_adzone id=4670]"); ?>
<div id="page-home" role="main">

	<div class="wrapper">	
	<div class="column row home-pads">
	<div class="imagen-centrada"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/07/logosinmargen.png" class="aligncenter" width="156" height="84">
	</div></div>
		<div class="row">
			<div class="small-12 medium-7 large-7 columns">
				<?php 
				$args = array (
					'posts_per_page' => 1,
						'featured' => 'a1',
					);
				$my_query = new WP_Query($args);
				if (have_posts ()):
				while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
			<?php $do_not_duplicate[] = $post->ID; ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('fp-small'); ?>
					<h3 style="text-align:center;"><span class="titulo"><?php the_title(); ?></span></h3></a>
					<div class="micro-pads">  			
					<p style="text-align:center;"><?php the_category(', ' );?>, <?php the_terms ($post ->ID, 'edicion'); ?></p>
					</div>
					<?php the_excerpt();?>
					
				<?php endwhile; ?>
				<?php else : ?>
					<p>Aquí puse y no aparece. </p>
			
		<?php endif; ?>
		</div>

		<div class="small-12 medium-5 large-5 columns">
		<div class="row">
		<div class="small-12 medium-11 columns medium-centered">
			<?php $args = array (
				'posts_per_page' => 2,
				'featured' => 'a2',
					);
			$my_query = new WP_Query ($args);		
			if (have_posts ()):
			while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		<?php $do_not_duplicate[] = $post->ID; ?>
				<div class="micro-pads">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-chico'); ?>
						<h3><div class="titulo-mediano micro-pads"><?php the_title(); ?></div></a></h3>
						<div class="italicas micro-pads">	
						<?php the_category(', ' );?>, <?php the_terms ($post ->ID, 'edicion'); ?></div>
						<div class="micro-pads">
						<?php the_excerpt();?>
					</div>				
				</div>
			<?php endwhile; ?>
			<?php else : ?>
			<p>Aquí puse y no aparece. </p>
			<?php endif; // End have_posts() check. ?>					
		</div>
		</div>
		</div>
		</div>
	</div>
	</div>
	
	<hr>
	<?php echo do_shortcode("[pro_ad_display_adzone id=4672]"); ?>
	<hr>
<div class="wrapper">

	<div class="super-pads"><h3 align="center"><span class="titulo">MODA & LIFESTYLE </span></h3></div>
	<div class="row pads">
<div class="small-12 medium-5 columns">
	
	<?php 
	$args = array (
					'post_type' =>  array ('lookbook', 'articulo', 'post'),
					'cat' => array (7,43),
					'posts_per_page' => 7,
					'post__not_in' => array_merge($do_not_duplicate, get_option( 'sticky_posts' )),
					);
				$my_query = new WP_Query($args);
				if (have_posts ()):
				while ( $my_query->have_posts() ) : $my_query->the_post(); ?> 
			<?php $do_not_duplicate[] = $post->ID; ?>

	<div class="row micro-pads">
	<div class="small-5 large-5 columns">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?>	
	</div>
	<div class="small-6 columns end">
	<div class="titulo-noticias micro-pads"><?php the_title(); ?></div></a>
	</a>
	<div class="micro-pads italicas"><?php the_category(', ' );?>, <?php the_terms ($post ->ID, 'edicion'); ?></div>

	</div>		
			</div>

				<?php endwhile; ?>
				<?php else : ?>
					<p>Aquí puse y no aparece. </p>
			
		<?php endif; ?>
	</div>

	<div class="small-12 medium-7 columns">
	<?php 
	$args = array (
					'post_type' =>  'shoot',
					'posts_per_page' => 2,
					'featured' => 'b1',
					'post__not_in' => array_merge($do_not_duplicate, get_option( 'sticky_posts' ))
					);
				$my_query = new WP_Query($args);
				if (have_posts ()):
				while ( $my_query->have_posts() ) : $my_query->the_post(); ?> 
			<?php $do_not_duplicate[] = $post->ID; ?>
	<div class="callout transparente">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-chico'); ?>
	<h3><div class="titulo-mediano micro-pads"><?php the_title(); ?></div></h3>
	</a>
	<div class="micro-pads italicas"><?php the_category(', ' );?>, <?php the_terms ($post ->ID, 'edicion'); ?></div>
		<?php the_excerpt();?>

				</div>
				<?php endwhile; ?>
				<?php else : ?>
					<p>Aquí puse y no aparece. </p>
			
		<?php endif; ?>
	</div>
</div>
	</div>
	
	<div style="background-color:#e6e6e6;">
	<div class="column row">
	<div class="small-12 large-8 columns aligncenter ultra-pads">
	<div class="pads"><img src="http://www.bgmagazine.com/wp-content/uploads/2016/08/youmustweb.png" alt="youmustweb" width="300" height="100" class="aligncenter" /></div>
	<div class="super-pads"><?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'you-must', 'slug' ); } ?></div>
	</div>
	</div>
	</div>
<div class="wrapper">
<div class="ultra-pads">
	<h3 align="center"> <span class="titulo">DISEÑO & CULTURA </span></h3>
	</div>
	
	<div class="row pads">

	<div class="small-12 medium-7 columns">
	<?php 
	$args = array (
					'cat' => array (30,33),
					'post_type' =>  'articulo',
					'posts_per_page' => 2,
					'orderby' => 'rand',
					'post__not_in' => array_merge($do_not_duplicate, get_option( 'sticky_posts' ))
					);
				$my_query = new WP_Query($args);
				if (have_posts ()):
				while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<?php $do_not_duplicate[] = $post->ID; ?> 
	<div class="callout transparente">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('featured-chico'); ?>
	<h3><div class="titulo-mediano micro-pads"><?php the_title(); ?></div></h3>
	</a>
	<div class="micro-pads italicas aligncenter"><?php the_category(', ' );?>, <?php the_terms ($post ->ID, 'edicion'); ?></div>
		<?php the_excerpt();?>

				</div>
				<?php endwhile; ?>
				<?php else : ?>
					<p>Aquí puse y no aparece. </p>
			
		<?php endif; ?>
	</div>

<div class="small-12 medium-5 columns">
	
	<?php 
	$args = array (
					'post_type' =>  array ('articulo', 'post', 'galeriavisual', 'columna'),
					'cat' => array (33,30,36,29),
					'posts_per_page' => 7,
					'post__not_in' => array_merge($do_not_duplicate, get_option( 'sticky_posts' ))
					);
				$my_query = new WP_Query($args);
				if (have_posts ()):
				while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
				<?php $do_not_duplicate[] = $post->ID; ?> 

	<div class="row micro-pads">
	<div class="small-5 large-5 columns">
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?>
	
	</div>
	<div class="small-6 columns end">
	<div class="titulo-noticias micro-pads"><?php the_title(); ?></div></a>
	</a>
	<div class="micro-pads italicas"><?php the_category(', ' );?>, <?php the_terms ($post ->ID, 'edicion'); ?></div>
	</div>		
			</div>

				<?php endwhile; ?>
				<?php else : ?>
					<p>Aquí puse y no aparece. </p>
			
		<?php endif; ?>
	</div>
	</div>
</div>
<?php get_footer();