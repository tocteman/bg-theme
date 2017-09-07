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
	<hr>
	<div class="row">
	<div class="medium-centered large-centered medium-8 large-8 columns">
	<?php echo do_shortcode("[pro_ad_display_adzone id=4498]"); ?>
	</div>
	</div>
	<hr>
	<header>
	<div class="row">
		<div class="small-12 medium-8 column margentitulo">
			<h3> <span class="titulo"><?php the_title(); ?></span></h3>
			<div id="correccionsubtitulo"><h4> <span class="subtitulo"><?php the_field('subtitulo'); ?></span></h4></div>
			<?php if( get_field('autor') ): ?>
				<p><u><strong>por:</strong></u> <?php the_field('autor'); ?></p>
			<?php endif; ?>

			<ul class="no-bullet">
					<li><em><div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					    <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
					</div></em></li>
					<li><em><?php the_terms ($post ->ID, 'edicion'); ?></em></li>
			
			<li><ul class="menu simple micro-pads">
					<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Compártelo en Facebook."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweetéalo!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  					'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
			</ul></li>
			</ul>	
		</div>
	</div>
	</header>

			
	<div class="row">
		<div class="small-12 medium-7 large-8 columns">
			<div class="column row">
				<p><?php the_field('intro'); ?></p>
				<br>
			</div>
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
<div class="row">
<div class="small-12 columns">
<h3 align="center">TE RECOMENDAMOS</h3>
					<div class="pads">
<?php rp4wp_children (); ?>
</div>
</div>
</div>
</div>
	</article>
	</div>
<?php endwhile;?>

<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();