<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ABwp
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>
    
    <style>
      .showcase{
        background:url(<?php echo get_theme_mod('showcase_image', get_bloginfo('template_url').'/img/3.jpg'); ?>) no-repeat center center; 
        height : 600px;
      }
    </style>

    <?php wp_head(); ?>

</head>


    
<body <?php body_class(); ?>>

  
  <div>

        <nav class="navbar navbar-expand-md ">
            <div id="logo-img">
                  <a href="<?php echo site_url(''); ?>"> <?php  the_custom_logo(); ?> </a>
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
        </nav>
  </div>          
    
	<div id="content" class="site-content">

    <?php if(!is_front_page()) { ?>
        <main>
    <?php } ?>


