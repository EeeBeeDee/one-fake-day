<?php
get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="container">
        <div class="archive">
            <h2 class="archive__title">
                <?php echo get_the_archive_title(); ?>
            </h2>
            <div class="row">
                <div class="col-9">
                    <div class="archive__content">
                        <div class="post__img-container">
                            <img src=<?php echo get_the_post_thumbnail();  
                            ?>>
                        </div>
                        <div class="btn btn--primary">
                            <?php the_category() ?>
                        </div>
                        <?php the_content() ?>
                    </div>
                </div>
                <div class="col 3">
                    <?php get_template_part('template-parts/ads-container') ?>
                </div>
            </div>
        </div>
    </div>

   
    </div>
    <div style="height: 100vh;"></div>
<?php }

get_footer();

?>