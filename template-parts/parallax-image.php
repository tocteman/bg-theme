<?php
	if ( has_post_thumbnail( $post->ID ) ) :
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
		$image = $image[0];
		?>
	<header id="parallax-background" role="banner" style="background-image: url('<?php echo $image ?>')">
	</header>
	<?php endif;