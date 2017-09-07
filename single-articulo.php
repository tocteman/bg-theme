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
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
	<div class="wrapper">
			<div class="row">
				<div class="small-12 column">
					<div class="margentitulo">
						<h2><span class="titulo"><?php the_title(); ?></span></h2>
						<div id="correccionsubtitulo"><h4> <span class="subtitulo"><?php the_field('subtitulo'); ?></span></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class= "small-12 column">

			<?php if ( get_field ('featuredpregunta') ): ?>
					<?php if ( has_post_thumbnail() ) : ?>
						<div class="ultra-pads">
			<?php $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'fp-large' );
			$content = '<a class="post-thumbnail" href="' . $image_url[0] . '">' . get_the_post_thumbnail( $post_id, 'fp_large' ) . '</a>';
			if ( function_exists('slb_activate') ) :
				$content = slb_activate( $content );
				echo $content; ?>
						</div>
				<?php endif;
				endif; 
						 ?>
			 <?php else: ?><br><br>
			<?php endif; ?>		
				
				</div>
			</div>
			
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
		
			<div class="row">
				<div class="small-12 medium-4 large-4 column"> 
					<div class="text-right">
						<h5><span class="textogris"><?php the_field('texto_gris'); ?></span></h5>
						<ul class= "no-bullet">
						<li><em><div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					    <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
						</div></em></li>
						<li><em><?php the_terms ($post ->ID, 'edicion'); ?></em></li>
					<div class="micro-pads"><?php if( have_rows('creditos')); ?>
					<?php  while ( have_rows('creditos') ) : the_row(); ?>
						<li><strong><?php the_sub_field('campo');?></strong> <?php the_sub_field('particular');?></li>
					<?php endwhile; ?></div>	
					</ul>
					<div class="pads">
					<ul class="menu simple">
						<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Compártelo en Facebook."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweetéalo!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
					</ul>
				</div>
					</div>
					<hr>
				</div>
				<div class="small-12 medium-8 large-8 column">
					<?php the_content(); ?>
			</div>
			</div>
			<div class="row">
			<div class="small-12 columns">
			<hr>
		<h3 align="center"><span class="subtitulo-mundo">TE RECOMENDAMOS</span></h3>
		<div class="pads">
		<?php rp4wp_children (); ?>
		</div>
		</div>
		</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
	</div>
	</article>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
</section>
<?php get_footer();

