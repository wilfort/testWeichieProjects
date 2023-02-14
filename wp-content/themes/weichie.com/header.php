<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="theme-color" content="#0a0a0a">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="http://localhost/weichieprojectsModel/wp-content/themes/weichie.com/assets/css/custom.css">
</head>
<body>
	<header class="navP">
		<!-- <div class="branding">
			<a href="<?= home_url(); ?>">
				Logo
			</a>
		</div> -->
		<div class="container-fluid">
		<div class="row">
			<div class="col-6">
				<?php
					wp_nav_menu([
						'theme_location'=> 'main-menu',
						'menu_class' => 'main__menu',
						'container_class' => 'main__menu__wrapper',
					]);
				?>
			</div>
			<div class="col-3">
				<button class="registerExpo2" onclick="window.location.href='#About'">
					Visit Site</button>
			</div>
			<div class="col-3">
				<button class="registerExpo3">Register for Expo ></button>
			</div>
		</div>
		</div>
	</header>
