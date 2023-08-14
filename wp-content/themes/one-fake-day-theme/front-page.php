<?php get_header(); ?>

<div class="margin-block-md"></div>

<div class="container">
    <div class="row">
        <?php

            $blogPosts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => -1
            ));
            while ($blogPosts->have_posts()) {
                $blogPosts->the_post(); ?>
                <div class="col-1"></div>
                <div class="col-4">
                    <div class="post-card">
                        <img class="post-card__img" src="<?php echo get_the_post_thumbnail(); ?>" alt="">
                        <div class="post-card__infobox">
                            <span class="post-card__category">
                                <?php the_category(); ?>
                            </span>
                            <h2 class="post-card__title">
                                <?php the_title(); ?>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
           <?php }
           wp_reset_postdata();
        ?>
    </div>
</div>


    <div style="height: 200vh;">
    </div>

<?php get_footer(); ?>

