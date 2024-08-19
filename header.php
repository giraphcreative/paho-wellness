<!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!--><html <?php language_attributes(); ?>><!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title><?php wp_title( '|', true, 'right' ); ?> <?php bloginfo( 'sitename' ) ?></title>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head(); ?>
<link href="<?php bloginfo( "template_url" ) ?>/css/main.css?v=6" rel="stylesheet" type="text/css">

</head>
<body <?php body_class(); ?>>
<div class="container">
<header>

	<div class="wrap">
		<div class="logo">
			<a href="/" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img src="<?php print get_logo(); ?>" alt="<?php bloginfo( 'name' ); ?>">
			</a>
		</div>

		<?php if ( get_default_language() ) { ?>
		<div class="languages">
			<?php
			// colors for the language buttons
			$colors = array( 'cyan', 'green', 'sea' );

			// increment per language
			$count = 0;

			// loop through languages
			foreach ( get_languages() as $language ) {

				// output buttons
				print '<a href="/' . $language['abbreviation'] . '" class="btn small ' . $colors[$count] . '">' . $language['name'] . '</a>';

				// increment increase
				$count++;

			}
			?>
		</div>
		<?php } ?>
	
	</div>

</header>

<section class="content">
	<a name="content"></a>
