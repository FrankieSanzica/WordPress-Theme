<head>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css">

<h1>
<img alt="" src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" />
<a href="<!--?php bloginfo('url'); ?-->"><?php bloginfo('name'); ?></a></h1>

<span class="slogan">
<?php bloginfo('description'); ?>
</span>

<div id="nav-bar-tile">
<?php wp_nav_menu(array( 'menu' => 'mainnav', 'menu_class' => 'nav-bar-content', 'menu_id' => 'navigation', 'container' => false, 'theme_location' => 'primary-menu', 'show_home' => '1')); ?>
</div><!-- nav-bar-tile -->

<?php wp_head(); ?>
</head>

