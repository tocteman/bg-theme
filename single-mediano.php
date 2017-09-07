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
					<ul class="menu simple">
						<li><i class="fa fa-facebook" aria-hidden="true"></i></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i></li>
						<li><i class="fa fa-pinterest-p" aria-hidden="true"></i></li>
						<li><i class="fa fa-google-plus-square" aria-hidden="true"></i></li>
					</ul>
					<br><br>
					<?php the_post_thumbnail('large'); ?>
					<br><br>
				</div>
			</div>
			
			<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
	
			
			
			
			
			
			

			<div class="row">
				<div class="small-12 medium-5 large-4 column"> 
					<div class="text-right">
						<h5><span class="textogris"><?php the_field('texto_gris'); ?></span></h5>
						<ul class= "no-bullet">
					<?php if( have_rows('creditos')); ?>
					<?php  while ( have_rows('creditos') ) : the_row(); ?>
						<li><strong><?php the_sub_field('campo');?></strong> <?php the_sub_field('particular');?></li>
					<?php endwhile; ?>
					</ul>
					</div>
					<hr>
				</div>
				<div class="small-12 medium-7 large-8 column">
					<?php the_content(); ?></div>
			</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>
	</article>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>
<div class= "row column">
<?php if ( function_exists( "get_yuzo_related_posts" ) ) { get_yuzo_related_posts(); } ?>
</div>
</section>
<?php get_footer();

