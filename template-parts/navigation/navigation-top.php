<?php
/**
 * Displays top navigation
 *
 * @since 1.0
 * @version 1.2
 */

?>
		<nav class="navbar navbar-expand-lg ">

          <div id="logo-img">
                 
                <a href="<?php echo site_url(''); ?>"> <?php  the_custom_logo(); ?> <?php bloginfo('name'); ?> </a>
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