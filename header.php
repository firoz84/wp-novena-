<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package novena
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'novena' ); ?></a>
<?php $options = get_option( 'my_framework' ); ?>
	<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="mailto:support@gmail.com"><i class="icofont-support-faq mr-2"></i><?php echo $options['opt-text'];?></a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i><?php echo $options['opt-address'];?> </li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="tel:+23-345-67890" >
							<span>Call Now : </span>
							<span class="h4"><?php echo $options['opt-num'];?></span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
		 	 <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			  	<img src="<?php echo get_theme_file_uri(); ?>/assets/images/logo.png" alt="" class="img-fluid">
			  </a>

		  	<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
			<span class="icofont-navigation-menu"></span>
		  </button>
		  <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'container_class' => 'collapse navbar-collapse',
					'menu_class'        => 'navbar-nav ml-auto',
					'add_li_class' =>'nav-item active',
					'add_a_class' => 'nav-link',
					'Sub_menu' => 'dropdown-menu',
					
				)
			);
			?>
		  
		</div>
	</nav>
</header>







