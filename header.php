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
		<script src="https://unpkg.com/ityped@1.0.2"></script>
		<script src="https://cdn.jsdelivr.net/npm/jquery-scrollify@1/jquery.scrollify.min.js"></script>
		<!-- <script src="<?php echo get_template_directory_uri(); ?>/js/ripples.js"></script> -->
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

					<!-- sp-mv -->
					<p class="sp-mv"><img src="<?php echo get_template_directory_uri(); ?>/img/header/drink_photo_3.jpg" alt="スマホ用MV"></p>
					<!-- /sp-mv -->

					<!-- nav -->
					<nav class="nav" role="navigation">
						<div class="mainNavigationContainer">
							<div class="mainNavigationItem home">
								<a href="<?php echo home_url(); ?>">Home<span>冒険の始まり</span></a>
							</div>
							<div class="mainNavigationItem service">
								<a href="<?php echo home_url(); ?>#SERVICE">Service<span>概要</span></a>
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
								<a href="<?php echo home_url(); ?>#CONTACT">Contact<span>いざない</span></a>
							</div>
						</div>
					</nav>
					<!-- /nav -->

					<!-- nav_sp -->
					<!-- ナビメニュー部分 -->
					<!-- <nav class="NavMenu">
					　<ul>
							<li><a href="<?php echo home_url(); ?>">Home<span>冒険の始まり</span></a></li>
							<li><a href="<?php echo home_url(); ?>#SERVICE">Service<span>概要</span></a></li>
							<li><a href="<?php echo home_url(); ?>#MODELS">Models<span>ラインナップ</span></a></li>
							<li><a href="<?php echo home_url(); ?>#STORY">Story<span>原点</span></a></li>
							<li><a href="<?php echo home_url(); ?>#FOUNDERS">Founders<span>創業者</span></a></li>
							<li><a href="<?php echo home_url(); ?>#CONTACT">Contact<span>いざない</span></a></li>
					　</ul>
					</nav> -->
					<!-- ハンバーガーメニュー部分 -->
					<!-- <div class="Toggle">
					　　<span></span>
					　　<span></span>
					　　<span></span>
					</div> -->
					<!-- /nav_sp -->

					<div id="MESSAGE">
						<span id="ityped" class="ityped"></span>
						<div class="inner">
						<!-- <p class="centering"> -->
							<!-- <img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/header/BG_mysterious.jpg" alt="" /> -->
							<!-- <ul>
								<li><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/header/drink-02.png" alt="" /></li>
								<li><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/header/drink-03.png" alt="" /></li>
								<li><img width="100%" src="<?php echo get_template_directory_uri(); ?>/img/header/drink-04.png" alt="" /></li>
							</ul> -->
						<!-- </p> -->
						<div data-aos="fade-down"
								 data-aos-anchor="#border-bottom"
						     data-aos-easing="linear"
						     data-aos-delay="600"
								 data-aos-duration="2000"
						     data-aos-offset="0">
								 <!-- <p class="aka"><img src="<?php echo get_template_directory_uri(); ?>/img/header/drink-04.png" alt="" /></p> -->
						</div>
						<p class="ao"><img src="<?php echo get_template_directory_uri(); ?>/img/header/drink-03.png" alt="" /></p>
						<div data-aos="fade-down"
								 data-aos-anchor="#border-bottom"
						     data-aos-easing="linear"
						     data-aos-delay="200"
								 data-aos-duration="2000"
						     data-aos-offset="0">
						<!-- <p class="kiiro"><img src="<?php echo get_template_directory_uri(); ?>/img/header/drink-02.png" alt="" /></p> -->
					  </div>
					</div>
					<div id="border-bottom"></div>
				</div>
			</header>
			<!-- /header -->
</section>
<script>
ityped.init(document.querySelector("#ityped"), {
  showCursor: false,
	disableBackTyping: true,
  strings: [`Never say 'NO' to adventures. Always say 'YES,' otherwise you'll lead a very dull life.
 Ian Fleming`]
})
ityped.init("#placeholder", {
  placeholder: true,
  showCursor: false
})
</script>
