<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
</head>
<body <?php body_class(); ?>>

	<nav class="row navbar navbar-fixed-top navbar-inverse"><div class="container">
		<div class="pull-left navbar-header">
			<a href="<?php bloginfo('url'); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a>
		</div>
		<div>
		<ul class="nav pull-left navbar-nav"><!-- wp_nav_menu starts here -->
		    <li class="current_page_item current_menu_item"><a href="#" title="">Home</a></li>
		    <li><a href="#" title="">About</a></li>
		    <li class="menu-item-has-children page_item_has_children">
		    	<a href="#" title="">Blog</a>
		    	<ul class="sub-menu children">
		    		<li><a href="#" title="">Test</a></li>
		    		<li><a href="#" title="">Lorem Ipsum</a></li>
		    		<li><a href="#" title="">Jawa ipsum</a></li>
		    		<li><a href="#" title="">Okesip</a></li>
		    	</ul>
		    </li>
		    <li><a href="#" title="">Sample</a></li>
		</ul>
		</div>
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
			<h1 class="col-md-7"><?php bloginfo('description'); ?></h1>
		</div>
	</header>