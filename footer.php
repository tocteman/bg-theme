<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="pads-arriba">
<?php echo do_shortcode("[pro_ad_display_adzone id=4058]"); ?>
</div>
<div id="footer-container">
		<?php do_action( 'foundationpress_before_footer' ); ?>
			<footer id="footer">
				<div class="row">
					<?php dynamic_sidebar( 'footer-widgets' ); ?>
					<div class="small-12 medium-5 large-4 columns">
						<div class="vitruvio">
						</div>
					</div>
					<div class="small-12 medium-7 large-8 columns">
							<div id= "fila-uno">
								<ul class="vertical large-horizontal menu">
									<li><a href="http://www.bgmagazine.com/wp-content/uploads/2016/08/MEDIA-KIT-PEQUEÑO.pdf" target="_blank">publicidad</a></li>
									<li><a href="http://www.bgmagazine.com/colaboraciones">colaboraciones</a></li>
									<li><a href="http://www.bgmagazine.com/acerca-de/">acerca de</a></li>
									<li><a href="http://www.bgmagazine.com/contacto">contacto</a></li>
									<li><a href="http://www.bgmagazine.com/legal">legal</a></li>
								</ul>
							</div>
							<div id= "fila-dos">
								<ul class ="vertical large-horizontal menu" style="color:gray">
									<li><a href="http://bgmodels.com.ec/" target="_blank">bg models</a></li>
									<li><a href="http://bggroup.com.ec/" target="_blank">bg group</a></li>
									<li><a href="http://bgproductions.com.ec/">bg productions</a></li>
									<li><a href="https://www.instagram.com/bg_gente/" target="_blank">@bgente</a></li>
								</ul>
							</div>
							<br>
							<ul class="vertical menu">
							<li><ul class="menu">
							<li><a href="http://facebook.com/BGmagazine" target="_blank"><div class="boton-footer"><i class="fa fa-facebook fa-lg" aria-hidden="true"></i></div></a></li>
							<li><a href="http://instagram.com/bgmagazine" target="_blank"><div class="boton-footer"><i class="fa fa-instagram fa-lg" aria-hidden="true"></i></div></a></li>
							</ul></li>
							<div class="ubicacion">
							<li>cuenca-ecuador </li>
							<li>bg[at]bgmagazine.com</li> 
							</div>
							</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
				<?php do_action( 'foundationpress_after_footer' ); ?>
		</div>
		</div> <!-- Close off-canvas total-wrapper inner -->

		<?php do_action( 'foundationpress_layout_end' ); ?>
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->



<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5XDQZC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
</html>
