<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
get_header(); ?>

<?php do_action( 'foundationpress_before_content' ); ?>
<div id="page" role="main">

<div class="wrapper">

	<article>
		<header>
	<div class="super-pads">
	<h1> <span class="titulo">MUNDO CULT</span></h1>
	</div>
	</header>

	<?php do_action( 'foundationpress_post_before_entry_content' ); ?>
			<div class="row">
				<div class="small-12 medium-7 large-8 columns">
				<div class="column row">
				<div class="pads"><h3 style="text-align: center;"><span class="titulo">:: lanzamiento aperol [cue]</span></h3></div>
					<p style="text-align: center;">El hermano fiestero de Campari llegó a Ecuador. Ahora podrás disfrutar del Aperol Spritz en los mejores eventos y restaurantes.
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '2995' ); } ?>
					</p>
					<hr>

					<div class="super-pads">
					<div class="pads"><h3 style="text-align: center;"><span class="titulo">:: el carpazo [uio]</span></h3></div>
					<p style="text-align: center;">Saltaron, cantaron y bailaron un día entero en el festival de música y diseño que se realizó en la Quinta San Luis de Lumbisí. Un día para no olvidar.
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '2888' ); } ?>
					</p>
					</div>
					<hr>

					<div class="super-pads">
					<div class="pads"><h3 style="text-align: center;"><span class="titulo">:: hyundai lounge [cue]</span></h3></div>
					<p style="text-align: center;">Siempre interesados en brindar gratos momentos, Hyundai compatió un coctel con invitados exclusivos, en esta ocasión en la Casa de la Provincia.
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '2988' ); } ?>
					</p>
					</div>
					<hr>

					<div class="super-pads">
					<div class="pads"><h3 style="text-align: center;"><span class="titulo">:: lanzamiento NMD [gye]</span></h3></div>
					<p style="text-align: center;">Adidas Originals botó la casa por la ventana para festejar el lanzamiento de NMD, la zapatilla deportiva que se inspira en el pasado para crear el futuro. 
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '2991' ); } ?>
					</p>
					</div>
					<hr>

					<div class="super-pads"> 
					<div class="pads"><h3 style="text-align: center;"><span class="titulo">:: fiesta de la música [cue]</span></h3></div>
					<p style="text-align: center;">Gracias a la Alianza Francesa de Cuenca, se pudo disfrutar de la mejor música nacional durante dos días seguidos en varios lugares de la ciudad.
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '2989' ); } ?>
					</p>
					</div>
					<hr>

					<div class="super-pads">
					<div class="pads"><h3 style="text-align: center;"><span class="titulo">:: rolings [cue]</span></h3></div>
					<p style="text-align: center;">El bar-restaurante Rolings celebró su segundo aniversario con música en vivo, grandes amigos y muchas sorpresas durante toda la noche.
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '2977' ); } ?>
					</p>
					</div>
					<hr>

					<div class="super-pads">
					<div class="pads"><h3 style="text-align: center;"><span class="titulo">:: el adefesio [uio]</span></h3></div>
					<p style="text-align: center;">Una vez más, El Adefesio reunió nuevos talentos locales para una jornada de música, alimentos orgánicos, diseño y arte independiente, con el propósito de promover la industria ecuatoriana.
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '2994' ); } ?>
					</p>
					</div>
					<hr>

					<div class="super-pads">
					<div class="pads"><h3 style="text-align: center;"><span class="titulo">:: premios disco rojo [gye]</span></h3></div>
					<p style="text-align: center;">La tercera edición de Premios Disco Rojo a la Música se llevó a cabo en el Teatro Centro del Arte. Se rindió homenaje al trabajo de los artistas ecuatorianos, quienes día a día impulsan esta industria en el país.
					<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '2979' ); } ?>
					[/slb_exclude]</p>
					</div>
					<hr>
				</div>
				</div>
				<div class="small-12 medium-5 large-4 columns">
				<div class="row">
					<div class= "medium-11 medium-offset-1 columns">
				<?php get_sidebar(); ?>
				</div>
				</div>
			</div>
		<footer>
			<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
			<p><?php the_tags(); ?></p>
		</footer>

	<br>
	</div></article></div></div>

	<?php do_action( 'foundationpress_after_content' ); ?>

<?php get_footer();