<!DOCTYPE HTML>
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ) ?>"/>

	<title><?php wp_title( '| ', true, 'right' ) ?><?php bloginfo( 'name' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ) ?>"/>
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ) ?>"/>

	<!-- Fix for Internet Explorer prior to version 9
		 by Remy Sharp http://remysharp.com/2009/01/07/html5-enabling-script/ -->
	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class() ?>>

<div id="outer-wrap">
	<div id="inner-wrap">

		<header id="header-container">
			<hgroup>
				<h1 id="site-title"><a href="<?php echo home_url(); ?>"
				                       title="<?php bloginfo( 'name' ); ?>"><?php bloginfo( 'name' ); ?></a></h1>

				<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
			</hgroup>

			<nav>
				<?php wp_nav_menu( array( 'theme_location' => 'top-navigation' ) ); ?>
				<!--				<div class="menu">-->
				<!--					<ul>-->
				<!--						<li><a href="#">Menu item</a></li>-->
				<!--						<li><a href="#">Another one</a></li>-->
				<!--						<li><a href="#">Third menu item</a></li>-->
				<!--					</ul>-->
				<!--				</div>-->
			</nav>
		</header>
		<!-- #header-container ends -->

		<div id="main-container">
			<section id="content-container">
				<article class="post">
					<header>
						<h2 class="entry-title">Post title</h2>

						<p class="entry-meta">Posted on
							<time datetime="2013-01-20">January 20, 2013</time>
							by <a href="#">TDH</a> &bull; <a href="#comments">12 comments</a></p>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna.</p>

					<p>Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci.</p>
				</article>

				<article class="post">
					<header>
						<h2 class="entry-title">A second post title</h2>

						<p class="entry-meta">Posted on
							<time datetime="2013-01-19">January 19, 2012</time>
							by <a href="#">TDH</a> &bull; <a href="#comments">12 comments</a></p>
					</header>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna.</p>
					<ol>
						<li>Lorem</li>
						<li>Ipsum</li>
						<li>Is slightly overused...</li>
					</ol>
					<p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in.</p>
				</article>
			</section>
			<!-- #main-container ends -->

			<aside id="sidebar-container">
				<ul id="sidebar">
					<li class="widget-container">
						<h2 class="widget-title">Widget title</h2>

						<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
							placerat eleifend leo.</p>
					</li>
					<li class="widget-container">
						<h2 class="widget-title">Another widget title</h2>

						<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris
							placerat eleifend leo.</p>
					</li>
				</ul>
			</aside>
			<!-- #sidebar-container ends -->
		</div>

		<footer id="footer-container">
			<nav>
				<div class="menu">
					<ul>
						<li><a href="#">Menu item</a></li>
						<li><a href="#">Another one</a></li>
						<li><a href="#">Third menu item</a></li>
					</ul>
				</div>
			</nav>

			<p>Copyright &copy; 2015, and similar information</p>
		</footer>
		<!-- #footer-container ends -->

	</div>
	<!-- #inner-wrap ends -->
</div>
<!-- #outer-wrap ends -->

</body>

</html>