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
    <title>Machine Test</title>
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



                        <?php

                        if (have_rows('top_panel_social_icons', 'option')) :

                            while (have_rows('top_panel_social_icons', 'option')) : the_row();

                                $twitter_url = get_sub_field('twitter_url');
                                $facebook_url = get_sub_field('facebook_url');
                                $google_url = get_sub_field('google_url');
                        ?>
                                <div class="social">

                                    <a href="<?php echo $twitter_url ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="<?php echo $facebook_url ?>" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="<?php echo $google_url ?>" target="_blank"><i class="fab fa-google"></i></a>

                                </div>
                        <?php
                            endwhile;
                        endif;

                        ?>

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