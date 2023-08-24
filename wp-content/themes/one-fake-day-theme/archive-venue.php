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
                    <div class="row">

                    <div class="col-12">
                        <h3 class="text-center mt-5 fs-1">Find venues in an area that suits you or find all our venues listed underneath:</h3>
                        <div class="acf-map my-5 mx-auto">
                        <?php
                            while (have_posts()) {
                                the_post(); 
                                $mapLocation = get_post_field('venue_location')
                                ?>
                                <div data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>" class="marker">
                                <div class="map__imgbox">
                                    <img class="map__img" src="<?php the_post_thumbnail(); ?>"> 
                                </div>
                                    <a class="primary-color-dark" href="<?php the_permalink() ?>"><h3><?php the_title() ?></h3></a>
                                    <?php echo $mapLocation['address'] ?>
                                </div>
                            <?php }
                            ?>
                        </div>
                    </div>

                    
                    <?php
                    wp_reset_query();

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
                                    <h2 class="venue-card__title">
                                        <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <span class="venue-card__excerpt">
                                        <p><?php the_excerpt(); ?></p>
                                    </span>
                                </div>
                            </div>
                        </div>
                <?php } ?>


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
<?php 

get_footer();

?>