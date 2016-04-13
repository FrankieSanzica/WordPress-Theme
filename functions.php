<!-- Custom Header -->
<?php
$args = array(
    'flex-width'    => true,
    'width'         => 980,
    'flex-height'    => true,
    'height'        => 200,
    'default-image' => get_template_directory_uri() . '/images/header.png',
);
add_theme_support( 'custom-header', $args );
?>

<!-- Custom Background -->
<?php
$defaults = array(
	'default-image' => get_template_directory_uri() . '/images/background.png',
	'default-color' => '000',
	'wp-head-callback'       => '_custom_background_cb'
);
add_theme_support( 'custom-background', $defaults );
?>


<!-- Sidebar -->
<?php
if ( function_exists('register_sidebar') )
    register_sidebar(array(
    'name' => 'sidebar',
    'before_widget' => '<div class="sidebar-box">',
    'after_widget' => '</div>',
    'before_title' => '<span class="sidebar-title">',
    'after_title' => '</span><div class="dots"></div>',
));
?>
