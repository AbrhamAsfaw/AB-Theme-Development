<?php get_header(); ?>

    <section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme'); ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam'); ?></p>
        <a href="<?php echo get_theme_mod('btn_url', 'http://test.com'); ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started'); ?></a>
      </div>
    </section>
  
    <main>
        
        <br>
            <h2 class="section-heading">Blogs</h2>
        

        <section>
            
            <?php

                $args = array(
                    'post_type' => 'post',
                    'post_per_page' => 2,
                );

                $blogposts = new wp_query($args);

                while ( $blogposts -> have_posts() ) {
                     $blogposts -> the_post();
                  
            ?> 

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

        <?php }

            wp_reset_query();

        ?>
    </section>
    
        	<h2 class="section-heading">Tutorials</h2>

        <section>
            <?php

                $args = array(
                    'post_type' => 'tutorial',
                    'post_per_page' => 4,
                );

                $projects = new wp_query($args);

                while ($projects -> have_posts()) {
                     $projects -> the_post();
                  
            ?> 

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Card Image">
                    </a>
                </div>

                <div class="card-description">
                    <a href="<?php the_permalink(); ?>">
                        <h3><?php the_title(); ?></h3>
                    </a>
                    <p><?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                    </p>
                    <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
                </div>
            </div>

        <?php }

            wp_reset_query();

        ?>
        </section>

        <h2 class="section-heading">Materials</h2>

        <section id="section-source">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum neque qui delectus ad dolor blanditiis perferendis praesentium
                consectetur aut sed provident obcaecati aspernatur perspiciatis, dolores nobis pariatur ipsum vel corrupti!
            </p>
            <a href="#" class="btn-readmore">click here </a>
        </section>

<?php get_footer(); ?>