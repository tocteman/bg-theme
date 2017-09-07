<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81866335-1', 'auto');
  ga('send', 'pageview');
</script>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5XDQZC');</script>
<script>
var trackOutboundLink = function(url) {
   ga('send', 'event', 'outbound', 'click', url, {
     'transport': 'beacon',
     'hitCallback': function(){document.location = url;}
   });
}
</script>

	<script src="https://use.typekit.net/suc6rbi.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<?php do_action( 'foundationpress_after_body' ); ?>
<?php do_action( 'foundationpress_layout_start' ); ?>
	<header id="masthead" class="site-header" role="banner">
		
	<div class="top-bar-container" data-sticky-container>
		<div class="sticky" data-sticky data-options= "anchor: page; marginTop: 0; stickyOn: small;" style= "width:100%;">	
			<nav class="title-bar">
			<div id="site-navigation" class="main-navigation" role="navigation">
					<div class="title-bar-left">
    					<span class="navbars"><i class="fa fa-bars fa-lg" type="button" data-open="offCanvas"></i></span>
    					<div class="homelogomobile"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://www.bgmagazine.com/wp-content/uploads/2016/08/bg96.png" alt="logo bg" width="45" height="20" class="aligncenter"></a></div>
  					</div>	
			</div>
			</nav>
		</div>
	</div>

	<div class="top-bar-container" data-sticky-container>
		<div class="sticky" data-sticky data-options= "anchor: page; marginTop:0; stickyOn: small;" style= "width:100%;">
			<nav id="site-navigation" class="main-navigation top-bar" role="navigation">
				<div class="top-bar">
				<div class="row">
					<div class="large-2 columns">
						<div class="homelogo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://www.bgmagazine.com/wp-content/uploads/2016/08/bg96.png" alt="logo bg" width="45" height="20"></a></div>
					</div>
					<div class="large-8 columns">
						<div class="menu-centered">
							<ul class="menu">
								<li> <a href="http://www.bgmagazine.com/category/moda">moda</a></li>
								<li> <a href="http://www.bgmagazine.com/category/arte">arte</a></li>
								<li> <a href="http://www.bgmagazine.com/category/cultura">cultura</a></li>
								<li> <a href="http://www.bgmagazine.com/category/diseno">diseño</a></li>
								<li> <a href="http://www.bgmagazine.com/category/spacio">spacio</a></li>
								<li> <a href="http://www.bgmagazine.com/category/lifestyle">lifestyle</a></li>
								<li> <a href="http://www.bgmagazine.com/sociales">bgente</a></li>
								<li> <a href="http://www.bgmagazine.com/suscribete">suscríbete</a></li>
							</ul>
						</div>
					</div>
					<div class="large-2 columns">
					<button><i class="fa fa-search fa-fw searchlogo aligncenter" type="button" data-open="searchmodal1"></i></button>
							<div class="reveal" id="searchmodal1" data-reveal>
								<p style="font-weight:700">¿qué anda buscando?</p>
								<?php get_search_form(); ?>
								<button class="close-button" data-close aria-label="Close modal" type="button">
		  						<span aria-hidden="true">&times;</span>
					</button>
							</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
	</header>

	<div class="off-canvas-wrapper">
	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
		<div class="off-canvas position-left" id="offCanvas" data-off-canvas data-position="left">
		<ul class="menu vertical">
			<li> <a href="http://www.bgmagazine.com/category/moda">moda</a></li>
			<li> <a href="http://www.bgmagazine.com/category/arte">arte</a></li>
			<li> <a href="http://www.bgmagazine.com/category/diseno">diseño</a></li>
			<li> <a href="http://www.bgmagazine.com/category/cultura">cultura</a></li>
			<li> <a href="http://www.bgmagazine.com/category/spacio">spacio</a></li>
			<li> <a href="http://www.bgmagazine.com/category/lifestyle">lifestyle</a></li>
			<li> <a href="http://www.bgmagazine.com/sociales">bgente</a></li>
			<li> <a href="http://www.bgmagazine.com/suscribete">suscríbete</a></li>
			<li><button><i class="fa fa-search fa-lg searchlogomob" type="button" data-open="searchmodal1"></i></button></li>
		</ul>
		</div>

	<div class="off-canvas-content" data-off-canvas-content>

	


	<section class="container">
		<?php do_action( 'foundationpress_after_header' );
