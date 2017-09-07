<?php
/*
Template Name: Simple Page
*/
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="wrapper">
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
	
		<header>
		<div class="row">
		<div class="small-12 column margentitulo">
			<h2 style="text-align:center"> <span class="titulo"><?php the_title(); ?></span></h2>
			<br> 
		</div>
		</div>
		</header>
		<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="row">
				<div class="small-12 medium-7 large-8 columns">
				<?php the_content(); ?>
				<hr>
					
				</div>
			<div class="small-12 medium-5 large-4 columns">
				<div class="row">
					<div class= "medium-11 medium-offset-1 columns">
				<?php get_sidebar(); ?>
				</div>
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

<?php get_footer();