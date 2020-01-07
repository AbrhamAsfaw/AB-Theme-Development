<?php
/**
 * Displays footer site info
 *
 * @since 1.0
 * @version 1.0  
 */

?>
<div class="row">
	<div class="col-8">
		<?php
		if ( function_exists( 'the_privacy_policy_link' ) ) {
			the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
		}
		?>
	</div>
</div><!-- .site-info -->
