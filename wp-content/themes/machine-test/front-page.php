<?php


get_header(); ?>
<main>

    <section class="intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/intro.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-wrapper">
                        <h6>READ THIS FIRST</h6>
                        <h3>Company Values</h3>

                        <div class="values">
                            <div class="row">

                                <div class="col-6">
                                    <div class="value">
                                        <h5>Honest</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="value">
                                        <h5>Efficient</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="value">
                                        <h5>Helpful</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>

                                <div class="col-6">
                                    <div class="value">
                                        <h5>Quality</h5>
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <a href="" class="btn btn-link">
                            Why we're different
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="dark-sec" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/man-with-laptop.jpg);">

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="text-wrapper">
                        <h6>Words to live by</h6>
                        <h2>Kind words creates confidence.<br>
                            Kind thinkind creates profoundness. <br>
                            kind giving creates love.
                        </h2>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="testimonials">

        <div class="container-righted">
            <div class="row">
                <div class="col-md-4">
                    <div class="text">
                        <h5>What they've said about us</h5>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit
                        </p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="slider">

                        <div class="item">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid expedita consequuntur autem assumenda animi debitis eos esse dolores necessitatibus incidunt voluptate, quisquam neque. Labore, minus? Error debitis quam repellendus asperiores?</p>
                            </div>
                            <div class="author">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonial-1.jpg" alt="">
                                </div>
                                <div class="profile">
                                    <h5>Alice Jophnson</h5>
                                    <h6>Writer at themeNectar</h6>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid expedita consequuntur autem assumenda animi debitis eos esse dolores necessitatibus incidunt voluptate, quisquam neque. Labore, minus? Error debitis quam repellendus asperiores?</p>
                            </div>
                            <div class="author">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonial-2.jpg" alt="">
                                </div>
                                <div class="profile">
                                    <h5>jake Smith</h5>
                                    <h6>Salient Corp</h6>
                                </div>
                            </div>
                        </div>


                        <div class="item">
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid expedita consequuntur autem assumenda animi debitis eos esse dolores necessitatibus incidunt voluptate, quisquam neque. Labore, minus? Error debitis quam repellendus asperiores?</p>
                            </div>
                            <div class="author">
                                <div class="image">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/testimonial-2.jpg" alt="">
                                </div>
                                <div class="profile">
                                    <h5>jake Smith</h5>
                                    <h6>Salient Corp</h6>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

</main>

<?php get_footer(); ?>