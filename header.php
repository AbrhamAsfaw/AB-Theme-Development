<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ABTheme
 */

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>AB</title>
</head>

    
<body>

  <header>


        <nav class="navbar navbar-expand-lg ">
          <div id="logo-img">
            <a href="<?php echo site_url(''); ?>">
                <img src="<?php echo get_template_directory_uri(); ?> "> <?php  the_custom_logo(); ?> AB
            </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
                          wp_nav_menu( array(
                              'theme_location'    => 'primary',  
                              'depth'             => 2,
                              'container'         => 'div',
                              'container_class'   => 'collapse navbar-collapse',
                              'container_id'      => 'navbarSupportedContent',
                              'menu_class'        => 'nav navbar-nav',
                              'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                              'walker'            => new WP_Bootstrap_Navwalker(),
                          ) );
                          ?>
              
            </div>
  </header>          
    
	<div id="content" class="site-content">

    <?php if(!is_front_page()) { ?>
        <main>
    <?php } ?>


