<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>


<?php do_action( 'foundationpress_before_content' ); ?>

<?php if ( get_field ('heropregunta') ): ?>
<?php get_template_part( 'template-parts/featured-image' ); ?>
<?php else: ?>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>		
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
			<div class="row">
				<div class="small-9 small-centered column">
					<div class="margentitulo">
						<h1><span class="titulo"><?php the_title(); ?></span></h1>
						<div id="correccionsubtitulo"><h4> <span class="subtitulo"><?php the_field('subtitulo'); ?></span></h4>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class= "small-9 small-centered column">
					<ul class="menu simple">
						<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Compártelo en Facebook."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweetéalo!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			</div>
			<br><br>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

		<div class="wrapper">

			<div class="row">
				<div class="small-12 medium-5 large-4 column"> 
					<div class="text-right">
						<h5><span class="textogris"><?php the_field('texto_gris'); ?></span></h5>
						<ul class= "no-bullet">
						<em><div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					    <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
						</div></em>
						<div class="micro-pads"><em><?php the_terms ($post ->ID, 'edicion'); ?></em></div>
							<?php if( have_rows('creditos')); ?>
							<?php  while ( have_rows('creditos') ) : the_row(); ?>
								<li><strong><?php the_sub_field('campo');?></strong> <?php the_sub_field('particular');?></li>
							<?php endwhile; ?>
						</ul>
					</div>
					<hr>
				</div>
				<div class="small-12 medium-7 large-8 column">
					<?php the_content(); ?>
				</div>
			</div>
		<?php if( have_rows('contenidos') ): ?>
		<?php  while ( have_rows('contenidos') ) : the_row(); ?>
			<div class="row">
				<?php if( get_row_layout() == 'foto' ): ?>
			
				<div class="small-12 medium-7 medium-offset-5 large-8 large-offset-4 columns">
					<div class="super-pads">
					<?php 
					$image = get_sub_field ('la_foto'); 
					$size = 'fp-medium';
					$sizedos = 'fp-large';
					if( $image ) {
					ob_start();
					$content = wp_get_attachment_image_src($image, $size);
					$content = ob_get_clean();
					$content .=' <a href="'. wp_get_attachment_image_url ( $image, $sizedos ).'">';
					$content .= wp_get_attachment_image( $image, $size );
					$content .= '</a>';
					$content = slb_activate($content);
					echo $content; 
					} ?>
					</div>
				</div>
			<?php endif; ?>
		
			<?php if( get_row_layout() == 'dos_fotos' ): ?>

				<div class="small-12 medium-6 columns"> 
					<div class="super-pads">
					<?php
					$image = get_sub_field ('foto1'); 
					$size = 'fp-small';
					$sizedos = 'fp-medium';
					if( $image ) {
					ob_start();
					$content = wp_get_attachment_image_src($image, $size);
					$content = ob_get_clean();
					$content .=' <a href="'. wp_get_attachment_image_url ( $image, $sizedos ).'">';
					$content .= wp_get_attachment_image( $image, $size );
					$content .= '</a>';
					$content = slb_activate($content);
					echo $content; 
					}
					?>
					</div>
				</div>
				<div class="small-12 medium-6 columns"> 
					<div class="super-pads">
					<?php $image = get_sub_field ('foto2'); 
					$size = 'fp-small';
					$sizedos = 'fp-medium';
					if( $image ) {
					ob_start();
					$content = wp_get_attachment_image_src($image, $size);
					$content = ob_get_clean();
					$content .=' <a href="'. wp_get_attachment_image_url ( $image, $sizedos ).'">';
					$content .= wp_get_attachment_image( $image, $size );
					$content .= '</a>';
					$content = slb_activate($content);
					echo $content; 
					}
					?>
					</div>
				</div>
					<?php endif; ?>
		
			<?php if ( get_row_layout() == 'parrafo' ): ?>
				<br>
				<div class="small-12 medium-7 medium-offset-5 large-8 large-offset-4 columns">
					<div class="pads">
					<?php the_sub_field('escritos'); ?>
					</div>
				</div>
			<?php endif; ?>	
			</div>
					       
		<?php endwhile; ?>
	<?php endif; ?>
	<hr>
	<div class="row">
	<div class="small-12 columns">
		<h3 align="center"><span class="subtitulo-mundo">TE RECOMENDAMOS</span></h3>
		<div class="pads">
		<?php rp4wp_children (); ?>
		</div>
		</div>
	</div>
		
	</article>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
</section>
<?php get_footer();

