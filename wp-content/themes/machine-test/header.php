<?php

/**
 * The header for our theme.
 *
 * @package machine_test_Theme
 *
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


    <header class="siteHeader">
        <div class="container">
            <div class="row">
                <div class="col-12 d-flex">
                    <div class="logo">
                        <?php
                        if (function_exists('the_custom_logo')) {
                            the_custom_logo();
                        }
                        ?>
                    </div>

                    <div class="right-content ml-auto d-flex align-self-center">
                        
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-instagram"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>

                        <button class="btn-trans search">
                            <i class="far fa-search"></i>
                        </button>

                        <button id="navTrigger">
                            <span class="hamburger"></span>
                        </button>
                    </div>

                    <div class="navbar">
                        <?php
                        $menuParameters = array(
                            "menu" => "Top Menu",
                            'container'            => 'ul',
                            'menu_class'           => 'menu',
                            'echo'                 => true,
                            'fallback_cb'          => 'wp_page_menu',
                            'items_wrap'           => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'                => 2,
                        );
                        ?>
                        <?php echo wp_nav_menu($menuParameters); ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="page-wrap">