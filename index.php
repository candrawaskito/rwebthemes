<!DOCTYPE html>
<html>
<head>
	<title>Praktikum Rekayasa Web</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
	</style>
</head>
<body>

	<nav class="row navbar navbar-fixed-top navbar-inverse"><div class="container">
		<div class="pull-left navbar-header">
			<a href="#" class="navbar-brand">Praktikum Rekayasa Web</a>
		</div>
		<ul class="nav pull-left navbar-nav"><!-- wp_nav_menu starts here -->
		    <li class="current-page-item"><a href="#" title="">Home</a></li>
		    <li><a href="#" title="">About</a></li>
		    <li><a href="#" title="">Blog</a></li>
		    <li><a href="#" title="">Sample</a></li>
		</ul>
		<form class="pull-right col-md-3">
			<div class="input-group input-group-sm">
				<input type="text" name="s" placeholder="Search Here" class="form-control" />
				<span class="input-group-btn">
					<button type="button" class="btn btn-default">SEARCH</button>
				</span>
			</div>
		</form>
	</div></nav>
	
	<header id="header" class="site-header container">
		<div class="container">
			<h1 class="col-md-7">Jawa Ipsum baita cucul saras dolan dangu, geger motong pindhah ngadeg</h1>
		</div>
	</header>

	<div class="site-content container">
		<section class="sidebar col-md-3">
			<aside class="widget">
				<h3 class="widget-title">Categories</h3>

				<ul>
					<li><a href="">Technology</a></li>
					<li><a href="">Life Style</a></li>
					<li><a href="">Politics</a></li>
					<li><a href="">Portofolio</a></li>
				</ul>
			</aside>
			
			<aside class="widget">
				<h3 class="widget-title">Meta</h3>

				<ul>
					<li><a href="">Sign In</a></li>
					<li><a href="">Entries RSS</a></li>
					<li><a href="">Comments RSS</a></li>
					<li><a href="">Wordpress.org</a></li>
				</ul>
			</aside>	
		</section>

		<section class="content col-md-9">	

			<?php 
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post(); ?>
		
			<article class="row post">
			
				<header class="entry-header">
					<h1 class="entry-title"><a href="#"><?php the_title(); ?></a></h1>
					<div class="entry-meta">
						<span class="entry-date">
							<a href="" rel="bookmark"><span class="glyphicon glyphicon-calendar"></span> <time class="entry-date" datetime="2014-03-20T14:53:43+00:00"><?php the_time('F jS, Y') ?></time></a>&nbsp;
						</span>
						<span class="byline">
							<span class="author vcard"><a class="url fn n" href="" rel="author"><span class="glyphicon glyphicon-user"></span> <?php the_author_posts_link() ?></a></span>&nbsp;
						</span>
						<span class="comments-link">
							<a href="http://wpapps/wpdev/?p=41#respond" title="Comment on oke"><span class="glyphicon glyphicon-comment"></span> Leave a Comment</a>&nbsp;
						</span>
						<span class="edit-link">
							<a class="post-edit-link" href="http://wpapps/wpdev/wp-admin/post.php?post=41&amp;action=edit"><span class="glyphicon glyphicon-edit"></span> Edit Post</a>
						</span>
					</div>
				</header>

				<div class="entry-content">
					
					<p><?php the_content(); ?></p>

				</div>

				<footer class="entry-footer">
					<span class="entry-more"><a href="" class="btn btn-primary">READ MORE <span class="glyphicon glyphicon-chevron-right"></span></a></span>
				</footer>

			</article>

					<?php 	} // end while
				} // end if
			?>
		</section>
	</div>

	<footer id="colophon" class="site-footer container" role="contentinfo">
		<div class="site-info">
			Proudly powered by <a href="http://ksweb.tif.uad.ac.id/">KSWEB-UAD</a>
		</div><!-- .site-info -->
	</footer>

</body>
</html>