<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?></title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="/wp-content/themes/dhene/css/materialize.min.css"  media="screen,projection"/>

	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); wp_head(); ?>
</head>
<body>
<nav>
	<div class="nav-wrapper">
		<a href="/" class="brand-logo">Denilson.net</a>
		<ul class="right hide-on-med-and-down">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<!-- Dropdown Trigger -->
			<li><a class="dropdown-button" href="#!" data-activates="dropdown1">Dropdown<i class="material-icons right">arrow_drop_down</i></a></li>
		</ul>
	</div>
</nav>
<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
	<li><a href="#!">one</a></li>
	<li><a href="#!">two</a></li>
	<li class="divider"></li>
	<li><a href="#!">three</a></li>
</ul>
<div id="corpo">
	<!--<div id="header">
		<h1><?php /*bloginfo('name'); */?></h1>
		<h2><?php /*bloginfo('description'); */?></h2>
		
		<ul id="nav">
			<?php /*wp_list_cats('sort_column=name'); */?>
		</ul>
	</div>-->
