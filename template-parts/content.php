<?php
/**
 * The default temmplate for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>
<div class="column">
	<div class="callout transparente">
	<hr>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('archivo-thumb'); ?>
		<div class="pads">
		<div class="titulo-noticias"><?php the_title(); ?></div></a>
		</div>
					
		<em><?php the_category(', ' );?>, <?php the_terms ($post ->ID, 'edicion'); ?> </em>
		<div class="micro-pads">
		<?php the_excerpt();?>
		</div>
	</div>
</div>
