<!doctype html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" type="image/png" href="<?= get_template_directory_uri(); ?>/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?= home_url(); ?>/feed/">
	<link href="https://fontastic.s3.amazonaws.com/PBrgFVcvvh7STe9yVCeFQ3/icons.css" rel="stylesheet">
	<!-- <link href="https://fontastic.s3.amazonaws.com/gRRNm22qUWbaxCi8Cgm6KF/icons.css" rel="stylesheet"> -->
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<header class="main" role="banner"
		data-0="background-color:rgba(250,250,250,0.3);"
		data-300="background-color:rgba(250,250,250,1);"
	>
		<!-- Starting the nav -->
		<div class="banner" 
			>
			<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>">
				<h1><?php bloginfo('name'); ?></h1>
			</a>
		</div>

		<nav class="main">
			<?php wp_nav_menu( array( 
				'container' => false,
				'theme_location' => 'primary' )); 
			?>
		</nav>

		<!-- End of Top-Bar -->
	</header>

	<main role="document">

		<aside class="main">
			<?php /*wp_nav_menu( array( 
					'container' => false,
					'menu_class' => 'nav-section',
					'theme_location' => 'secondary' )
			);*/ ?>
		</aside>