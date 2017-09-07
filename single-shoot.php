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
				<div class="row column text-center">
					<div class="margentitulodos">
						<h1><span class="tituloshoot"><?php the_title(); ?></span></h1>
					</div>
					<br>
					<ul class= "no-bullet">
						<li><em><div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
					    <?php if(function_exists('bcn_display'))
					    {
					        bcn_display();
					    }?>
						</div></em></li>
						<li><div class="pads"><em><?php the_terms ($post ->ID, 'edicion'); ?></em></div></li>
					<?php if( have_rows('creditos')); ?>
					<?php  while ( have_rows('creditos') ) : the_row(); ?>
						<li><strong><?php the_sub_field('campo');?></strong>: <?php the_sub_field('particular');?></li>
					<?php endwhile; ?>
		
					</ul>
					<ul class="menu simple">
						<li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Compártelo en Facebook."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweetéalo!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
						<li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
					</ul>
				</div>
			<br><br>
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>

			<div class="wrapper">
					<?php if( have_rows('fotos') ): ?>
					<?php  while ( have_rows('fotos') ) : the_row(); ?>
							<?php if( get_row_layout() == 'fotosv' ): ?>
								<?php if( have_rows('fotos_verticales') ): ?>
									<?php  while ( have_rows('fotos_verticales') ) : the_row(); ?>
										<br>
					        			<div class="row small-uncollapse medium-collapse">
					        				<div class="small-12 medium-6 columns"> 
												<?php $image = get_sub_field ('foto_izquierda');
												$size = 'fp-small';
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
											}
												 ?>
												<div class="creditos-fotos"><p><?php the_sub_field ('creditos_izquierda'); ?></p></div>
											</div>
								        	<div class="small-12 medium-6 columns"> 
												<?php $image = get_sub_field ('foto_derecha');
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
												<div class="creditos-fotos"><p><?php the_sub_field ('creditos_derecha'); ?></p></div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							<?php endif; ?>
					        	<?php if( get_row_layout() == 'fotosh' ): ?>
								<?php if( have_rows('fotos_horizontales') ): ?>
									<?php  while ( have_rows('fotos_horizontales') ) : the_row(); ?>
										<br>
					        			<div class="row">
					        			<div class="large-12 columns ceropadding">
					        			
					        				<?php $image = get_sub_field ('foto');
	
												$size = 'large';
												if( $image ) {
												ob_start();
												$content = wp_get_attachment_image_src($image, $size);
												$content = ob_get_clean();
												$content .='<a href="'. wp_get_attachment_image_url ( $image, $size ).'" >' ;
												$content .= wp_get_attachment_image( $image, $size );
			                					$content .= '</a>';
			         
			                					$content = slb_activate($content);
			                					echo $content; 
											}
												 ?>
												<div class="creditos-fotos"> <p><?php the_sub_field ('credito'); ?></p></div>
										</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							<?php endif; ?>
							<?php if( get_row_layout() == 'foto-gigante' ): ?>
										
												<br>
							        			<div class="row">
							        			<div class="large-12 columns ceropadding">
							        			
							        				<?php $image = get_sub_field ('la-foto-gigante');
			
														$size = 'fp-large';
														if( $image ) {
														ob_start();
														$content = wp_get_attachment_image_src($image, $size);
														$content = ob_get_clean();
														$content .='<a href="'. wp_get_attachment_image_url ( $image, $size ).'" >' ;
														$content .= wp_get_attachment_image( $image, $size );
					                					$content .= '</a>';
					         
					                					$content = slb_activate($content);
					                					echo $content; 
													}
														 ?>
														<div class="creditos-fotos"> <p><?php the_sub_field ('credito-gigante'); ?></p></div>
												</div>
												</div>
							<?php endif; ?>
					<?php if( get_row_layout() == 'fotos-vpaspartu' ): ?>
								<?php if( have_rows('fotos_verticales') ): ?>
									<?php  while ( have_rows('fotos_verticales') ) : the_row(); ?>
										<br>
					        			<div class="row">
					        				<div class="small-12 medium-6 columns"> 
												<?php $image = get_sub_field ('foto_izquierda');
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
												<div class="creditos-fotos"> <p class="letra-chica"><?php the_sub_field ('creditos_izquierda'); ?></p></div>
											</div>
								        	<div class="small-12 medium-6 columns"> 
												<?php $image = get_sub_field ('foto_derecha');
												$size = 'fp-small';
												$sizedos = 'fp-medium';
												if( $image ) {
													ob_start();
												$content = wp_get_attachment_image_src($image, $size);
												$content = ob_get_clean();
												$content .=' <a href="'. wp_get_attachment_image_url ( $image, $size ).'">';
												$content .= wp_get_attachment_image( $image, $size );
			                					$content .= '</a>';
			                					$content = slb_activate($content);
			                					echo $content; 
											}
												 ?>
												<div class="creditos-fotos"><p><?php the_sub_field ('creditos_derecha'); ?></p></div>
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>
							<?php endif; ?>
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

