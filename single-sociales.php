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

	<div class="micro-pads">
	<?php echo do_shortcode("[pro_ad_display_adzone id=4498]"); ?>
	<hr>
	</div>
	<header>
	<div class="row pads">
		<div class="small-12 medium-8 column">
			<h2 style="letter-spacing:-0.04em;"><?php the_title(); ?></h2>
			<ul class="menu simple micro-pads">
					<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Compártelo en Facebook."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweetéalo!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
					<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  					'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
			</ul>
				</div>
	</div>
	</header>

			
	<div class="row">
		<div class="small-12 medium-7 large-8 columns">
			<div class="column row">
				<p><?php the_field('intro'); ?></p>
				</div>
				<?php
				if( have_rows('contenidos') ):
    			while ( have_rows('contenidos') ) : the_row(); ?>
    			<div class="column row super-pads">
						<?php $image = get_sub_field ('foto');
						if( $image ) {
						ob_start();
						$content = wp_get_attachment_image_src($image, 'fp_small');
						$content = ob_get_clean();
						$content .=' <a href="'. wp_get_attachment_image_url ( $image, 'large').'">';
						$content .= wp_get_attachment_image( $image, 'featured-chico');
			            $content .= '</a>';
			            $content = slb_activate($content);
			           echo $content; 
						}
						?>
				</div>
				<div class="column row">
					<?php the_sub_field ('gente'); ?>
    			</div>
    			<hr>
				<?php endwhile;
				endif; ?>
    		</div>
		<div class="small-12 medium-5 large-4 columns">
			<div class="row">
				<div class="medium-11 medium-offset-1 columns">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
		</div>
<div class="row">
<div class="small-12 columns">
<h3 align="center"><span class="subtitulo-mundo">TE RECOMENDAMOS</span></h3>
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