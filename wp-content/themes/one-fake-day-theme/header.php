<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Fake Day</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="site-header">
        <div class="container h-100">
            <div class="d-flex align-items-center justify-content-start h-100">
                <div class="site-header__logobox d-flex align-items-center">
                    <a class="d-flex align-items-center" href="#">
                        <?php get_template_part('template-parts/logo') ?>
                        <h2>One Fake Day</h2>
                    </a>
                </div>
                <ul class="site-header__nav d-flex h-100 align-items-center">
                    <li><a href="#">about</a></li>
                    <li>blah</li>
                    <li>contact</li>
                    <li>yeeow</li>
                </ul>

            </div>
        </div>
    </header>