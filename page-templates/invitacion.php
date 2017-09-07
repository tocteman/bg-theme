<?php
/*
Template Name: invitacion
*/
get_header(); ?>

<div class="el-cuerpo">
<div class="wrapper">
<br> <br> <br>
<div class="row">
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/10/inv080-logo-bg.png" class="aligncenter" width="150"></div>
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/10/inv080-logo-mercedes.png" class="aligncenter" width="150"></div>
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/10/inv080-logo-fabricio.png" class="aligncenter" width="150"></div>
</div><br> <br> <br> 
<div class="row">
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/10/inv080-logo-boss.png" class="aligncenter" width="150"></div>
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/10/inv080-logo-aperol.png" class="aligncenter" width="125"></div>
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/10/elizabeth.png" class="aligncenter" width="200"></div>
</div>
<br> <br> <br> 
<div class="row">
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/11/inv080-logo-banco.png" class="aligncenter" width="150"></div>
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/10/inv080-logo-italpisos.png" class="aligncenter" width="150"></div>
<div class="small-4 column"><img src= "http://www.bgmagazine.com/wp-content/uploads/2016/11/inv080-logo-sony.png" class="aligncenter" width="150"></div>
</div>
<br>
<br>
<br>
<br>
<div class="column row home-pads">
<h5 class="text-center"><span class="titulo-blanco">BG Magazine y Mercedes Benz presentan</span></h5>
<br>
<br>
<br>
<h1 class="text-center"><span class="titulo-blanco">To the Moon and Back</span></h1>
<br> <br>
<div class="text-center"><p style="color:#ffffff">Registra tu asistencia en este formulario y recibe un obsequio especial de Elizabeth Arden en la entrada. <br> Te esperamos el miércoles 9 de noviembre a las 20h00 en la explanada de la rueda moscovita, en el Malecón 2000.</p></div>
<br> 

<div class="row">
<div class="small-12 large-3 medium-2 columns"></div>
<div class="small-12 large-6 medium-8 columns">
<?php if (function_exists("add_formcraft_form")) { add_formcraft_form("[fc id='5'][/fc]"); } ?>
</div>
</div>
<br> <br><br> <br>
<img src= "http://www.bgmagazine.com/wp-content/uploads/2016/10/luna8b.png" class="aligncenter" width="320" height="320">
</div>
</div>
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

