<?php
get_header();

while (have_posts()) {
    the_post(); ?>

    <div class="container">
        <div class="venue">
            <h2 class="venue__title">
                <?php the_title(); ?>
            </h2>
            <div class="row">
                <div class="col-9">
                    <div class="venue__content">
                        <div class="venue__img-container">
                            <img src=<?php echo get_the_post_thumbnail();  
                            ?>>
                        </div>
                        <?php the_content() ?>
                    </div>
                    <div >
                        <div class="acf-map my-5 mx-auto">
                        <?php
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