<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Fake Day</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header id="header" class="site-header">
        <div class="container h-100">
            <div class="site-header__flex d-flex align-items-center justify-content-between h-100">
                <div class="site-header__logobox d-flex align-items-center">
                    <a class="d-flex align-items-center" href="<?php echo site_url(); ?>">
                        <?php get_template_part('template-parts/logo') ?>
                        <h2>One Fake Day</h2>
                    </a>
                </div>
                <ul class="site-header__nav d-flex h-100 align-items-center">
                    <li>
                        <div id="" class="site-header__dropdown-links">
                            <a href="#">Real Weddings</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <ul class="site-header__sub-menu menu-border">
                                                <li class="site-header__sub-links bold">
                                                    <a href="">More Wedding inspiration</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="<?php echo site_url('category/small-weddings') ?>">Small Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="<?php echo site_url('category/city-weddings') ?>">City Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="<?php echo site_url('category/lgbtq+-weddings') ?>">LGBTQ+ Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="<?php echo site_url('category/mature-real-weddings') ?>">Mature Real Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="<?php echo site_url('category/celebrity-weddings') ?>">Celebrity Weddings</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <ul class="site-header__sub-menu menu-border">
                                                <li class="site-header__sub-links bold">
                                                    <a href="">Real Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Irish Real Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Northern Irish Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">UK Real Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Weddings Abroad</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Real Wedding Videos</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Styled Shoes</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <ul class="site-header__sub-menu menu-border">
                                                <li class="site-header__sub-links bold">
                                                    <a href="">Weddings By Season</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Summer Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Winter Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Spring Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Autumn Weddings</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Celebrity Weddings</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="" class="site-header__dropdown-links">
                            <a href="#">Dresses</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-4">
                                            <ul class="site-header__sub-menu menu-border">
                                                <li class="site-header__sub-links bold">
                                                    <a href="">Wedding Style</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Wedding Dress Gallery</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Bridesmaids Style Ideas</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Groom Style</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Mother of the Bride</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <ul class="site-header__sub-menu menu-border">
                                                <li class="site-header__sub-links bold">
                                                    <a href="">Find The Wedding Dress</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Irish Bridal Boutiques</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Bridal Designers</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Bespoke Bridal Designers</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Guides For Choosing a Dress</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Engagement & Proposals</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-4">
                                            <ul class="site-header__sub-menu menu-border">
                                                <li class="site-header__sub-links bold">
                                                    <a href="">Wedding Looks</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Hair & Makeup</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Shoes</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Accessories</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Wedding Guest</a>
                                                </li>
                                                <li class="site-header__sub-links">
                                                    <a href="">Flower Girls & Page Boys</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="" class="site-header__dropdown-links">
                            <a href="<?php echo get_post_type_archive_link('venue') ?>">Venues</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="" class="site-header__dropdown-links">
                            <a href="#">Honeymoons</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="" class="site-header__dropdown-links">
                            <a href="#">Suppliers</a>
                            <div class="site-header__dropdown-menu">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
                <div id="search-btn" class="site-header__search">
                    <i class="fa fa-search fa-3x"></i>
                </div>

            </div>
            <div id="dropdown-background" class="site-header__dropdown">

                <div class="search-overlay">
                    <div class="container position-relative">
                        <i class="fa fa-search search-overlay__icon" aria-hidden="true"></i>
                        <input type="text" class="search-overlay__term" id="search-term" autocomplete="off" placeholder="What are you looking for?">
                        <i class="fa fa-times search-overlay__close" aria-hidden="true"></i>
                    </div>
                    <div class="container">
                        <div class="search-overlay__results">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-spacer"></div>