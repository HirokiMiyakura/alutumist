<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link href="//www.google-analytics.com" rel="dns-prefetch">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/ress.css" type="text/css" />
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="<?php bloginfo('description'); ?>">
<?php wp_head(); ?>
<script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1/jquery.scrollify.min.js"></script>
</head>
<body <?php body_class(); ?>>
<section class="box">
	<!-- header -->
	<header class="header clear" role="banner">

		<!-- logo -->
		<div class="logo-outer">
			<h1 class="logo">
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.png" alt="Logo" class="logo-img">
				</a>
			</h1>
		</div>
		<!-- /logo -->

		<!-- nav -->
		<nav class="nav" role="navigation">
			<div class="mainNavigationContainer">
				<div class="mainNavigationItem service">
					<a href="<?php echo home_url(); ?>#SERVICE">Service<span>概要</span></a>
				</div>
				<div class="mainNavigationItem news">
					<a href="<?php echo home_url(); ?>#NEWS">News<span>軌跡</span></a>
				</div>
				<div class="mainNavigationItem models">
					<a href="<?php echo home_url(); ?>#MODELS">Models<span>ラインナップ</span></a>
				</div>
				<div class="mainNavigationItem logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/header/logo.png" alt="Logo" class="logo-img">
					</a>
				</div>
				<div class="mainNavigationItem story">
					<a href="<?php echo home_url(); ?>#STORY">Story<span>原点</span></a>
				</div>
				<div class="mainNavigationItem founders">
					<a href="<?php echo home_url(); ?>#FOUNDERS">Founders<span>創業者</span></a>
				</div>
				<div class="mainNavigationItem contact">
					<a href="<?php echo home_url(); ?>#CONTACT">Contact<span>ご要望</span></a>
				</div>
			</div>
		</nav>
		<!-- /nav -->
	</header>
	<!-- /header -->
</section>
<script>
ityped.init(document.querySelector("#ityped1"), {
typeSpeed: 35,
showCursor: false,
disableBackTyping: true,
strings: [`Never say 'NO' to adventures.`]
})
ityped.init(document.querySelector("#ityped2"), {
typeSpeed: 35,
showCursor: false,
disableBackTyping: true,
startDelay: 1800,
strings: [`Always say 'YES,' otherwise...`]
})
ityped.init(document.querySelector("#ityped3"), {
typeSpeed: 35,
showCursor: false,
disableBackTyping: true,
startDelay: 3200,
strings: [`you'll lead a very dull life.`]
})
ityped.init(document.querySelector("#ityped4"), {
typeSpeed: 40,
showCursor: false,
disableBackTyping: true,
startDelay: 5000,
strings: [`Ian Fleming`]
})
</script>
