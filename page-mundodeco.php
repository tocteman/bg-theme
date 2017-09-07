<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<div id="page" role="main">

<div class="wrapper">
	<header>
	<div class="super-pads">
	<h1> <span class="titulo">MUNDO DECO</span></h1>
	</div>
	</header>
	<article>

		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="row">
				<div class="small-12 medium-7 large-8 columns">
					<?php 
					$args = array (
						'post_type' => 'mundo',
						'category_name' => 'mundo-deco',
						);
					$my_query = new WP_Query($args);
					if (have_posts ()):
					while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
		<?php
					if( have_rows('contenidos') ):
	    			while ( have_rows('contenidos') ) : the_row(); ?>
	    			<div class="column row">
	    				<h5><span class="titulo-mundo"><?php the_sub_field('titulo'); ?></span></h5>
	    				<div id="correccionsubtitulo"><h4> <span class="subtitulo-mundo"><?php the_sub_field('subtitulo'); ?></span></h4></div>
	    			</div>
	    			<div class="row">
	    				<div class="small-12 medium-12 large-6 columns">
	    				<div class="super-pads">
							<?php $image = get_sub_field ('imagen');
							if( $image ) {
							ob_start();
							$content = wp_get_attachment_image_src($image, 'large');
							$content = ob_get_clean();
							$content .=' <a href="'. wp_get_attachment_image_url ( $image, 'large').'">';
							$content .= wp_get_attachment_image( $image, 'large');
				            $content .= '</a>';
				            $content = slb_activate($content);
				           echo $content; 
							}
							?>

							</div>

	    				</div>
	    				<div class="small-12 medium-12 large-6 columns">
		    				<p><?php the_sub_field('resena'); ?></p>
		    				<p><a href="http://<?php the_sub_field('info');?>" target="_blank"><strong><?php the_sub_field('info');?></strong></a></p>


		    				
	    				</div>
					</div> 
				<p><?php the_sub_field('embed'); ?></p>
					<hr>
				<br>
		    	<?php endwhile;
				endif;
				?>
			<?php endwhile ?>
		<?php endif ?>
				<br>
				</div>
			<div class="small-12 medium-5 large-4 columns">
				<div class="row">
					<div class= "medium-11 medium-offset-1 columns">
				<?php get_sidebar(); ?>
				</div>
				</div>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>

	<br>
	</div></article></div></div>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();