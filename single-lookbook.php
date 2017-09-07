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
					<div class="small-12 medium-6 large-6">
						<div class="margentitulo">
							<h2><span class="titulo"><?php the_title(); ?></span></h2>
						</div>
						<ul class="menu simple">
							<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Compártelo en Facebook."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweetéalo!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
							<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
	  							'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class= "column small-12 medium-6 large-6 text-right creditoslookbook">
						<em><div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
						    <?php if(function_exists('bcn_display'))
						    {
						        bcn_display();
						    }?>
						</div></em>
						<div class="micro-pads"><em><?php the_terms ($post ->ID, 'edicion'); ?></em></div>
						<ul class= "no-bullet">
							<?php if( have_rows('creditos')); ?>
							<?php  while ( have_rows('creditos') ) : the_row(); ?>
								<li><strong><?php the_sub_field('campo');?></strong>: <?php the_sub_field('particular');?></li>
							<?php endwhile; ?>
						</ul>
					</div>
				</div>
			
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			
					<?php if( have_rows('lasfotos') ): ?>
					<?php  while ( have_rows('lasfotos') ) : the_row(); ?>
						<br> <br>
						<div class="row">
					        				<div class="small-12 medium-6 columns"> 
												<?php $image = get_sub_field ('fotoizq');
												$size = 'fp-small';
												$sizedos = 'fp-medium';
												if( $image ) {
													ob_start();
												$content = wp_get_attachment_image_src($image, $size);
												$content = ob_get_clean();
												$content .=' <a href="'. wp_get_attachment_image_url ( $image, $sizedos).'">';
												$content .= wp_get_attachment_image( $image, $size );
			                					$content .= '</a>';
			                					$content = slb_activate($content);
			                					echo $content; 
											}
												 ?>
											<p><?php the_sub_field ('creditos_izquierda'); ?></p>
											</div>
								        	<div class="small-12 medium-6 columns"> 
												<?php $image = get_sub_field ('fotoder');
												$size = 'fp-small';
												$sizedos = 'fp-medium';
												if( $image ) {
													ob_start();
												$content = wp_get_attachment_image_src($image, $size);
												$content = ob_get_clean();
												$content .=' <a href="'. wp_get_attachment_image_url ( $image, $sizedos).'">';
												$content .= wp_get_attachment_image( $image, $size );
			                					$content .= '</a>';
			                					$content = slb_activate($content);
			                					echo $content; 
											}
												 ?>
											<p><?php the_sub_field ('creditos_derecha'); ?></p>	
											</div>
											<br> <br>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
<div class="row">
<div class="small-12 columns">
		<h3 align="center"><span class="subtitulo-mundo">TE RECOMENDAMOS</span></h3>
		<div class="pads">
		<?php rp4wp_children (); ?>
		</div>
		</div>
	</div>
			
			</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
	</article>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
</section>
<?php get_footer();

