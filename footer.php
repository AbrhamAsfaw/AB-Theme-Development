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

<div class="container">
	<div class="row">
		<div class="col">
		<?php
		if(is_active_sidebar('footer-1')){
		dynamic_sidebar('footer-1');
		}
		?>
		</div>
	<div class="col">
		<?php
		if(is_active_sidebar('footer-2')){
		dynamic_sidebar('footer-2');
		}
		?>
	</div>
	<div class="col">
		<?php
		if(is_active_sidebar('footer-3')){
		dynamic_sidebar('footer-3');
		}
		?>
	</div>
	<div class="col">
		<?php
		if(is_active_sidebar('footer-4')){
		dynamic_sidebar('footer-4');
		}
		?>
	</div>
	</div>  
</div>

	<nav>
		<?php
		wp_nav_menu( array(
			'theme_location' => 'footer',
	
		) );
		?>
	</nav>
		 

</footer>

</main>

<?php wp_footer(); ?>

</body>

</html>
