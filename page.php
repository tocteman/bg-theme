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
  
    <header>
    <div class="row">
    <div class="small-12 medium-8 column margentitulo">
      <h3> <span class="titulo"><?php the_title(); ?></span></h3>
      <ul class="no-bullet">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="http://schema.org/">
              <?php if(function_exists('bcn_display'))
              {
                  bcn_display();
              }?>
            </div>
      <?php if( have_rows('creditos')); ?>
          <?php  while ( have_rows('creditos') ) : the_row(); ?>
            <li><strong><?php the_sub_field('campo');?></strong> <?php the_sub_field('particular');?></li>
          <?php endwhile; ?>
      </ul>
          <ul class="menu simple">
            <li><a href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Compártelo en Facebook."><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>" title="Tweetéalo!"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>&media=<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo $url; ?>"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
            <li><a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" onclick="javascript:window.open(this.href,
  '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></li>
          </ul>
      <br> 
    </div>
    </div>
    </header>
    <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
      <div class="row">
        <div class="small-12 medium-7 large-8 columns">
        <div class="pads">
        <?php if ( has_post_thumbnail() ) :
        $image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
        $content = '<a class="post-thumbnail" href="' . $image_url[0] . '">' . get_the_post_thumbnail( $post_id, 'large' ) . '</a>';
        if ( function_exists('slb_activate') ) :
        $content = slb_activate( $content );
        echo $content;
        endif;
        endif;
             ?>
        </div>
        <br>
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
      <h3 align="center">TE RECOMENDAMOS</h3>
          <div class="pads">
<?php rp4wp_children (); ?>
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