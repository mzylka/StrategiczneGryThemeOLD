<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NG7ZS69');</script>
	<!-- End Google Tag Manager -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="google-site-verification" content="QHXuPdvbj4bGMoOjS3ovslX82pnQccL6gzv-0ItCLS4" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136771422-1"></script>
	<script>
  		window.dataLayer = window.dataLayer || [];
  		function gtag(){dataLayer.push(arguments);}
  		gtag('js', new Date());

  		gtag('config', 'UA-136771422-1');
	</script>
	<!-- ads -->
	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-3159341869108716",
          enable_page_level_ads: true
     });
	</script>

	<title><?php bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NG7ZS69"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header class="site-header">
		<div class="header-div">
			<div>
				<a href="<?php echo home_url(); ?>"><?php if (function_exists('the_custom_logo')) {
    				the_custom_logo();
					} ?>
				</a>
			</div>	
		</div>
		
		<nav class="navbar navbar-expand-md navbar-dark navbar-custom sticky-top navmenu pb-0 mb-0" role="navigation">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
    				<img src="<?php echo get_template_directory_uri();?>/img/logov3.png" width="300" height="40">
 				 </a>
				<?php
					wp_nav_menu( array(
    				'theme_location'	=> 'primary',
    				'depth'				=> 3,
					'container'			=> 'div',
					'container_class'	=> 'collapse navbar-collapse',
					'container_id'		=> 'bs-example-navbar-collapse-1',
					'menu_class'		=> 'navbar-nav mx-auto',
    				'fallback_cb'		=> 'WP_Bootstrap_Navwalker::fallback',
    				'walker'			=> new WP_Bootstrap_Navwalker()
				));
			?>
			</div>	
		</nav>
	</header>
	
	<div class="container main p-2">
