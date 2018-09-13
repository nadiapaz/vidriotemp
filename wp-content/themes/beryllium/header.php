<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initialscale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head() ?>
  </head>
<body>

<?php
	$custom_logo_id = get_theme_mod( 'custom_logo' );
	$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
?>
	
	<div id="page">

		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				
				<div class="row">
					<div class="col-sm-2 col-xs-12">
						<div id="gtco-logo"> 
						<a href="index.html"><img src="<?php echo $logo[0]; ?>" alt=""></a>
						</div>
					</div>

				
					<div class="col-xs-10 text-right menu-1">
					<?php if ( has_nav_menu( 'header-menu' ) ) { ?>
  <?php wp_nav_menu( array(
    'theme_location' => 'header-menu',
    'container_id' => 'navbarResponsive',
    'container_class' => 'collapse navbar-collapse',

    'menu_class'  => 'navbar-nav ml-auto'
  ));
  ?>
<?php } ?>
						
					</div>
				</div>
				
			</div>
		</nav>

