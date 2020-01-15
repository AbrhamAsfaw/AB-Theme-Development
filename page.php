<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ABwp
 */

get_header();

while (have_posts()) {
  the_post();

 ?>    

<br>
    <div id="post-container">
    
      <section id="blogpost">

        <div class="card">
          
          <?php if(has_post_thumbnail()) {  ?>

          <div class="card-image">
            <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>">
          </div>

          <?php } ?>

          <div class="card-description">
            <?php the_content(); ?>
          </div>

        </div>

      </section>

      <?php } ?>

    </div>
    <br>

<?php get_footer(); ?>    