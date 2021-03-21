<?php
/*
 * Template Name: Home
 * description: >-
  Page template without sidebar
 */


get_header(); ?>
<main>


    <!-- Intro sec  -->

    <?php

    if (have_rows('home_intro')) :

        while (have_rows('home_intro')) : the_row();

            $image = get_sub_field('intro_image');
            $sub_heading = get_sub_field('intro_sub_heading');
            $main_heading = get_sub_field('intro_heading');
            $bottom_link_text = get_sub_field('intro_link_text');
            $bottom_link_url = get_sub_field('intro_link_url');
    ?>
            <section class="intro">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 image-col">
                            <div class="image">
                                <img src="<?php echo $image ?>" alt="" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-6 text-col">
                            <div class="text-wrapper skewed">
                                <h6><?php echo $sub_heading ?></h6>
                                <h3><?php echo $main_heading ?></h3>

                                <?php
                                if (have_rows('intro_four_blocks')) :
                                ?>
                                    <div class="values">
                                        <div class="row">

                                            <?php
                                            while (have_rows('intro_four_blocks')) : the_row();
                                            ?>
                                                <div class="col-6">
                                                    <div class="value">
                                                        <h5><?php echo get_sub_field('intro_sub_block_heading') ?></h5>
                                                        <p>
                                                            <?php echo get_sub_field('intro_sub_block_text') ?>
                                                        </p>
                                                    </div>
                                                </div>

                                            <?php
                                            endwhile;
                                            ?>


                                        </div>
                                    </div>

                                <?php
                                endif;
                                ?>

                                <a href="<?php echo $bottom_link_url ?>" class="btn btn-link">
                                    <?php echo $bottom_link_text ?>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

    <?php
        endwhile;
    endif;

    ?>
    <!-- Intro sec Ends  -->

    <!-- After Intro sec Starts  -->

    <?php

    if (have_rows('home_after_intro_section')) :

        while (have_rows('home_after_intro_section')) : the_row();

            $image = get_sub_field('home_after_intro_section_background_image');
            $sub_heading = get_sub_field('home_after_intro_section_sub_heading');
            $main_heading = get_sub_field('home_after_intro_section_main_text');
    ?>
            <section class="dark-sec" style="background-image: url(<?php echo $image ?>);">

                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="text-wrapper skewed">
                                <h6><?php echo $sub_heading ?></h6>
                                <h2>
                                    <?php echo $main_heading ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
    <?php
        endwhile;
    endif;

    ?>

    <!-- After Intro sec Ends  -->


    <!-- testimonials sec Starts  -->
    <?php

    if (have_rows('testimonials_sec')) :

        while (have_rows('testimonials_sec')) : the_row();
    ?>
            <section class="testimonials">

                <div class="container-righted">
                    <div class="row">

                        <?php

                        if (have_rows('testimonials_intro')) :

                            while (have_rows('testimonials_intro')) : the_row();

                                $testimonials_heading = get_sub_field('testimonials_intro_heading');
                                $testimonials_text = get_sub_field('testimonials_intro_text');
                        ?>
                                <div class="col-md-4">
                                    <div class="text skewed">
                                        <h5><?php echo $testimonials_heading ?></h5>
                                        <p>
                                            <?php echo $testimonials_text ?>
                                        </p>
                                        <a href="<?php echo get_permalink(get_page_by_title('Contact Us')) ?>" class="btn btn-primary">Contact Us</a>
                                    </div>
                                </div>

                        <?php
                            endwhile;
                        endif;

                        ?>

                        <div class="col-md-8">
                            <?php

                            if (have_rows('testimonials')) :
                            ?>
                                <div class="slider">

                                    <?php


                                    while (have_rows('testimonials')) : the_row();
                                        $testimonials_comment = get_sub_field('testimonial_comment');
                                    ?>

                                        <div class="item">
                                            <div class="wrap">
                                                <div class="content ">
                                                    <p>"<?php echo $testimonials_comment ?>"</p>
                                                </div>

                                                <?php

                                                if (have_rows('testimonial_profile')) :
                                                    while (have_rows('testimonial_profile')) : the_row();
                                                        $profile_image = get_sub_field('testimonial_profile_image');
                                                        $profile_name = get_sub_field('testimonial_profile_name');
                                                        $profile_title = get_sub_field('testimonial_profile_sur');
                                                ?>
                                                        <div class="author">
                                                            <div class="image">
                                                                <img src="<?php echo $profile_image ?>" alt="">
                                                            </div>

                                                            <div class="profile">
                                                                <h5><?php echo $profile_name ?></h5>
                                                                <h6><?php echo $profile_title ?></h6>
                                                            </div>
                                                        </div>
                                                <?php
                                                    endwhile;
                                                endif;

                                                ?>

                                            </div>
                                        </div>

                                    <?php endwhile; ?>

                                </div>

                            <?php
                            endif;

                            ?>

                        </div>
                    </div>
                </div>

            </section>

    <?php
        endwhile;
    endif;

    ?>
    <!-- testimonials sec Ends  -->

    <!-- Features sec Starts  -->
    <?php

    if (have_rows('home_features')) :

    ?>
        <section class="features">
            <div class="container">
                <div class="row">
                    <?php
                    while (have_rows('home_features')) : the_row();

                        $feature_icon = get_sub_field('home_feature_icon');
                        $feature_heading = get_sub_field('feature_title');
                        $feature_content = get_sub_field('feature_content');

                    ?>
                        <div class="col-md-4 col-6">
                            <div class="feature">
                                <div class="icon">
                                    <img src="<?php echo $feature_icon ?>" class="img-fluid" alt="">
                                </div>
                                <div class="text">
                                    <h5><?php echo $feature_heading ?></h5>
                                    <p>
                                        <?php echo $feature_content ?>
                                    </p>
                                </div>
                            </div>
                        </div>

                    <?php
                    endwhile;

                    ?>
                </div>
            </div>
        </section>
    <?php
    endif;

    ?>
    <!-- Features sec Ends  -->


    <!-- Teamwork sec Starts  -->

    <?php

    if (have_rows('team_work_section')) :
        while (have_rows('team_work_section')) : the_row();

            $bg_url = get_sub_field('team_work_background_image');
            $teamwork_subheading = get_sub_field('team_work_sub_heading');
            $teamwork_heading = get_sub_field('team_work_heading');

    ?>
            <section class="teamwork dark-sec" style="background-image: url(<?php echo $bg_url ?>">

                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <div class="text-wrapper skewed">
                                <h6><?php echo $teamwork_subheading ?></h6>
                                <h2><?php echo $teamwork_heading ?></h2>
                                <a class="btn btn-secondary" href="<?php echo get_permalink(get_page_by_title('Our Team')) ?>">Meet The Team</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
    <?php
        endwhile;
    endif;

    ?>
    <!-- Teamwork sec Ends  -->

    <!-- Our Team sec Starts  -->
    <?php

    if (have_rows('our_team_sec')) :
        while (have_rows('our_team_sec')) : the_row();

    ?>
            <section class="our-team">

                <div class="container-righted">
                    <div class="row">
                        <div class="col-md-4 align-self-center">
                            <?php

                            if (have_rows('our_team_intro')) :
                                while (have_rows('our_team_intro')) : the_row();

                                    $our_team_subheading = get_sub_field('our_team_intro_heading');
                                    $our_team_mainText = get_sub_field('our_team_intro_text');

                            ?>
                                    <div class="text skewed">
                                        <h5><?php echo $our_team_subheading ?></h5>
                                        <h4>
                                            <?php echo $our_team_mainText ?>
                                        </h4>
                                    </div>
                            <?php
                                endwhile;
                            endif;

                            ?>
                        </div>
                        <div class="col-md-8">
                            <div class="slider">

                                <div class="item">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/team/image4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/team/image5.jpg" alt="" class="img-fluid">

                                    </div>
                                </div>


                                <div class="item">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/team/image6.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>


                                <div class="item">
                                    <div class="image">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/team/image5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </section>
    <?php
        endwhile;
    endif;

    ?>
    <!-- Our Team sec Ends  -->
</main>

<?php get_footer(); ?>