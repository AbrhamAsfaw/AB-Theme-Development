<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ABwp
 */

get_header();
?>
	<div class="container-404">
		<h2 class="page-heading">Oh! sorry "404" Page Not found</h2>
		<img src="http://source.unsplash.com/640x480/?puppies">
		<h3>Sorry i think you're lost. Please try the following links.</h3>
		<ul>
			<li><a href="<?php echo site_url(''); ?>">Home Page</a></li>
			<li><a href="<?php echo site_url('/blog'); ?>">Blog List</a></li>
			<li><a href="<?php echo site_url('/tutorials'); ?>">Tutorial List</a></li>
    	</ul>
	</div>
	
<?php
get_footer();
