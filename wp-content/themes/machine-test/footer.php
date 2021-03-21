<?php

/**
 * Footer template partial
 *
 * @package Botega_Scratch_Theme
 *
 */
?>

<footer class="site-footer">

    <?php

    if (have_rows('footer_top_bar_links', 'option')) :

        while (have_rows('footer_top_bar_links', 'option')) : the_row();

            $blog_link_text = get_sub_field('footer_blog_link_text');
            $contact_link_text = get_sub_field('footer_contact_link_text');
    ?>

            <div class="top-links">
                <div class="container">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card secondary-bg">
                                <h4><?php echo $blog_link_text ?></h4>
                                <a href="<?php echo get_permalink(get_page_by_title('Blogs')) ?>" class="btn btn-secondary">Read our Posts</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card primary-bg">
                                <h4><?php echo $contact_link_text ?></h4>
                                <a href="<?php echo get_permalink(get_page_by_title('Contact Us')) ?>" class="btn btn-primary">Contact Us</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

    <?php
        endwhile;
    endif;

    ?>

    <?php

    if (have_rows('footer_social_links', 'option')) :

        while (have_rows('footer_social_links', 'option')) : the_row();

            $twitter_url = get_sub_field('footer_twitter_url');
            $facebook_url = get_sub_field('footer_facebook_url');
            $google_url = get_sub_field('footer_google_url');
            $yelp_url = get_sub_field('footer_yelp_url');
    ?>
            <div class="bottom-sec">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">

                            <div class="social">
                                <a href="<?php echo $twitter_url ?> " target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo $facebook_url ?> " target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="<?php echo $google_url ?>" target="_blank"><i class="fab fa-google"></i></a>
                                <a href="<?php echo $yelp_url ?> " target="_blank"><i class="fab fa-yelp"></i></a>
                            </div>
                            <div class="copyright">
                                <p>&copy; 2020 Salient Business 2.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <?php
        endwhile;
    endif;

    ?>
    <a href="#" class="to-top"></a>
</footer>

<?php wp_footer(); ?>

</body>

</html>