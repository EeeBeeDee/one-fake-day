<?php
get_header();

 ?>
    <div class="container">
        <div class="archive">
            <h2 class="archive__title">
                <?php echo get_the_archive_title(); ?>
            </h2>
            <div class="row">
                <div class="col-9 py-5">
                    <div class="archive__content">
                        <div class="row">
                            <?php
                            $loopCount = 0;
                            while (have_posts()) {
                                the_post();
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

                                if ($loopCount == 6 or $loopCount == 12) {
                                ?>
                                    <div class="col-12">
                                        <div class="banner-ad banner-ad--primary">
                                            <h2>Check out our latest venues</h2>
                                            <a href="<?php echo get_post_type_archive_link('venue') ?>" class="btn btn--white">Venues</a>
                                        </div>
                                    </div>
                            <?php }
                            }
                            echo paginate_links();
                            wp_reset_postdata();
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col 3">
                    <?php get_template_part('template-parts/ads-container') ?>
                </div>
            </div>
        </div>
    </div>


    </div>
<?php 

get_footer();

?>