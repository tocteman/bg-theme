<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="wrapper">
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			
	<div class="row">
		<div class="small-12 medium-7 large-8 columns">
			<div class="super-pads">
				
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
			</div>

		</div>
		<div class="small-12 medium-4 large-3 medium-offset-1 large-offset-1 columns">
			<?php get_sidebar(); ?>
		</div>
		</div>


	</article>
	</div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();