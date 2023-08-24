<?php
get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="container">
        <div class="post">
            <h2 class="post__title">
                <?php the_title(); ?>
            </h2>
            <div class="row">
                <div class="col-9">
                    <div class="post__content">
                        <div class="post__img-container">
                            <img src=<?php echo get_the_post_thumbnail();
                                        ?>>
                        </div>
                        <div class="btn btn--primary">
                            <?php the_category() ?>
                        </div>
                        <?php
                        $featuredVenue = get_field('wedding_venue');
                        if ($featuredVenue) {
                            foreach ($featuredVenue as $post) :
                                setup_postdata($post) ?>
                                <a href="<?php the_permalink(); ?>">
                                    <div class="held-in" style="background: url(<?php echo get_the_post_thumbnail_url(); ?>) center right/cover no-repeat;">
                                        <div class="held-in__container">
                                            <h3> Held at: </h3>
                                            <h2><?php the_title(); ?></h2>
                                        </div>

                                    </div>
                                </a>
                            <?php endforeach;
                        }
                        wp_reset_postdata();
                        the_content() ?>
                    </div>
                </div>
                <div class="col 3">
                    <?php get_template_part('template-parts/ads-container') ?>
                </div>
            </div>
        </div>
    </div>


    </div>
<?php }

get_footer();

?>