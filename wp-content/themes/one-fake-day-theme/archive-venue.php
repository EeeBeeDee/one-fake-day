<?php
get_header();

 ?>
    <div class="container">
        <div class="archive">
            <h2 class="archive__title">
                <?php echo get_the_archive_title(); ?>
            </h2>
            <h4 class="venue-archive__subtitle">Find all of our partnered venues here, all guaranteed to make you perfect day just that much more perfect!</h4>
            <div class="row">
                <div class="col-9">
                    <?php

            
                    $loopCount = 0;
                    while (have_posts()) {
                        the_post(); 
                        $loopCount++ ?>
                        <div class="col-12">
                            <div class="venue-card">
                                <a href="<?php the_permalink() ?>">
                                    <img class="venue-card__img" src="<?php echo get_the_post_thumbnail(); ?>" alt="">
                                </a>
                                <div class="venue-card__infobox">
                                    <h2 class="venue-card__title p-3">
                                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <span class="post-card__excerpt">
                                        <p><?php the_excerpt(); ?></p>
                                    </span>
                                </div>
                            </div>
                        </div>
                </div>

                <?php } ?>
                <div class="col 3">
                    <?php get_template_part('template-parts/ads-container') ?>
                </div>
            </div>
        </div>
    </div>


    </div>
    <div style="height: 100vh;"></div>
<?php 

get_footer();

?>