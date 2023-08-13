<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Fake Day</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header  id="header" class="site-header">
        <div class="container h-100">
            <div class="site-header__flex d-flex align-items-center justify-content-between h-100">
                <div class="site-header__logobox d-flex align-items-center">
                    <a class="d-flex align-items-center" href="#">
                        <?php get_template_part('template-parts/logo') ?>
                        <h2>One Fake Day</h2>
                    </a>
                </div>
                <ul class="site-header__nav d-flex h-100 align-items-center">
                    <li>
                        <div id="" class="dropdown-links">
                            <a href="#">Real Weddings</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">
                                   
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="" class="dropdown-links">
                            <a href="#">Dressses</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">
                                   
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="" class="dropdown-links">
                            <a href="#">Ideas & Planning</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">
                                   
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="" class="dropdown-links">
                            <a href="#">Honeymoons</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">
                                   
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="" class="dropdown-links">
                            <a href="#">Suppliers</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">
                                   
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="site-header__search">
                <i class="fa fa-search fa-3x"></i>
                </div>

            </div>
            <div id="dropdown-background" class="site-header__dropdown">

            </div>
        </div>
    </header>