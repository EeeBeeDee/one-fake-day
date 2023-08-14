<?php get_header(); ?>

<div class="container">
    <div class="row">
        <div class="col-9">
            <div class="row">
                <?php

                $blogPosts = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1
                ));
                $loopCount = 0;
                $postCount = $blogPosts->post_count();
                while ($blogPosts->have_posts()) {
                    $blogPosts->the_post(); 
                    $loopCount++ ?>
                    <div class="col-6">
                        <div class="post-card">
                            <a href="<?php the_permalink() ?>">
                                <img class="post-card__img" src="<?php echo get_the_post_thumbnail(); ?>" alt="">
                            </a>
                            <div class="post-card__infobox">
                                <span class="post-card__category">
                                    <a href=""><?php the_category(); ?></a>
                                </span>
                                <h2 class="post-card__title p-3">
                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                </h2>
                            </div>
                        </div>
                    </div>
                 
                <?php
                
                if ($loopCount == 6 OR $loopCount == 12) {
                    ?>
                    <div class="col-12">
                        <div class="banner-ad banner-ad--primary">
                            <h2>Check out our latest venues</h2>
                            <button class="btn btn--white">Venues</button>
                        </div>
                    </div>
               <?php }
            
            
            
            }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="col-3">
            <?php get_template_part('template-parts/ads-container') ?>
        </div>
    </div>
</div>

<div style="height: 50vh;"></div>


<?php get_footer(); ?>