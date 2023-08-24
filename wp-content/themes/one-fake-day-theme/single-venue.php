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
                <div class="col-12 col-lg-9">
                    <div class="venue__content">
                        <div class="venue__img-container mb-5">
                            <img src=<?php echo get_the_post_thumbnail();
                                        ?>>
                        </div>
                        <?php the_content() ?>
                    </div>
                    <div class="carousel">
                        <div class="carousel__container" id="carousel">

                            <ul class="d-flex" id="carousel-flex">
                                <?php if (get_field('carousel_image')) { ?>
                                    <img src="<?php echo get_field('carousel_image', false) ?>" id="slide-image" alt="">
                                <?php } ?>
                                <img src="https://source.unsplash.com/random" alt="" id="slide-image">
                                <img src="https://source.unsplash.com/random/?water" alt="" id="slide-image">
                                <img src="https://source.unsplash.com/random/?car" alt="" id="slide-image">
                                <img src="https://source.unsplash.com/random/?sky" alt="" id="slide-image">
                            </ul>
                            <div class="carousel__nav-btn carousel__nav-btn--left" id="carousel-left">
                                <i class="fa fa-chevron-left"></i>
                            </div>
                            <div class="carousel__nav-btn carousel__nav-btn--right" id="carousel-right">
                                <i class="fa fa-chevron-right"></i>
                            </div>

                            <div class="carousel__info">
                                <?php if (get_field('carousel_heading')) { ?>
                                    <div class="carousel__blurb active">
                                        <h3><?php echo get_field('carousel_heading') ?></h3>
                                        <p><?php echo get_field('carousel_blurb', false) ?></p>
                                    </div>
                                <?php } ?>
                                <div class="carousel__blurb <?php 
                                if (!get_field('carousel_heading')) echo 'active'; ?>">
                                    <h3>BLAH BLAH 222</h3>
                                    <p>If no field group for wedding carousel, it will default to the second pic</p>
                                </div>
                                <div class="carousel__blurb">
                                    <h3>BLAH BLAH 333</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam atque dolor possimus asperiores, quo dolorum dicta unde voluptate ratione tempora!</p>
                                </div>
                                <div class="carousel__blurb">
                                    <h3>BLAH BLAH 444</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam atque dolor possimus asperiores, quo dolorum dicta unde voluptate ratione tempora!</p>
                                </div>
                                <div class="carousel__blurb">
                                    <h3>BLAH BLAH 555</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam atque dolor possimus asperiores, quo dolorum dicta unde voluptate ratione tempora! </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="acf-map my-5 mx-auto">
                        <?php
                        $mapLocation = get_post_field('venue_location')
                        ?>
                        <div data-lat="<?php echo $mapLocation['lat'] ?>" data-lng="<?php echo $mapLocation['lng'] ?>" class="marker">
                            <div class="map__imgbox">
                                <img class="map__img" src="<?php the_post_thumbnail(); ?>">
                            </div>
                            <a class="primary-color-dark" href="<?php the_permalink() ?>">
                                <h3><?php the_title() ?></h3>
                            </a>
                            <?php echo $mapLocation['address'] ?>
                        </div>
                    <?php }
                    ?>
                    </div>
                </div>
                <div class="col 3 d-none d-md-block">
                    <?php get_template_part('template-parts/ads-container') ?>
                </div>
            </div>
        </div>
    </div>
    </div>


    </div>
    <div style="height: 100vh;"></div>
    <?php

    get_footer();

    ?>