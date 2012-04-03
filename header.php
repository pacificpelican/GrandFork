<!DOCTYPE HTML>
<html><!-- new version -->
<head>
    <title><?php
        if ( is_single() ) { single_post_title(); }
        elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' | '; bloginfo('description'); get_page_number(); }
        elseif ( is_page() ) { single_post_title(''); }
        elseif ( is_search() ) { bloginfo('name'); print ' | Search results for ' . wp_specialchars($s); get_page_number(); }
        elseif ( is_404() ) { bloginfo('name'); print ' | Not Found'; }
        else { bloginfo('name'); wp_title('|'); get_page_number(); }
    ?></title>
 
    <meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
 
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
 
    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
 
    <?php wp_head(); ?>
 
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>
<body>
<div id="wrapper" class="hfeed">
    <div id="header">
        <div id="masthead">
 
            <div id="access">
            </div><!-- #access -->
 
        </div><!-- #masthead -->
    </div><!-- #header -->
 
    <div id="main">


<div id="branding">
                <div id="blog-title" class="titleAreas"><span><a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"><?php bloginfo( 'name' ) ?></a></span></div>
<?php if ( is_home() || is_front_page() ) { ?>
                    <div id="blog-description" class="FrontDescription"><?php bloginfo( 'description' ) ?></div>
<?php } else { ?>
                    <div id="blog-description" class="nonFrontDescription"><?php bloginfo( 'description' ) ?></div>
<?php } ?>
            </div><!-- #branding -->
<div id="linksListArea" class="linksList">
<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'menuClass02' ) ); ?>
</div>
