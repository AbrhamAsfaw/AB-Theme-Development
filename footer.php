<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ABTheme
 */

?>

        <footer>
            
            <?php
                get_template_part( 'template-parts/footer/footer', 'widgets' ); ?>

                <div class="row">
                    <div class="col-8">
                        
                    </div>

                <div class="col-4">
                    <nav>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer',
                    
                        ) );
                        ?>
                    </nav>
  ...
                </div>
                
              </div>      
        </footer>

    </main>

   <?php wp_footer(); ?>

</body>

</html>
