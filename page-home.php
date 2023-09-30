<?php get_header() ?>
<main class="hom-main global-width">
    <div class="navbar">
        <section>
            <div class="header-menu">
                <h1><a href="<?php echo get_home_url() . "/home" ?>"><img
                            src="<?php echo OMNI_IMG . "/Omniverse-logo.svg" ?>" alt="omniverse"></a></h1>
                <a class="close menunav">
                    <span></span>
                    <span></span>
                </a>
            </div>
            <nav>

                <ul>
                    <li><a href="<?php echo get_home_url() . "/home" ?>">Home</a></li>
                    <li><a href="<?php echo get_home_url() . "/about" ?>">Who We Are</a></li>
                    <li><a href="<?php echo get_home_url() . "/offer" ?>">What we offer</a></li>
                    <li><a href="<?php echo get_home_url() . "/blogs" ?>">Updates</a></li>
                    <li><a href="<?php echo get_home_url() . "/contact" ?>">Contact</a></li>

                </ul>
            </nav>
        </section>
    </div>
    <section id="section1" class="section1">
        <h2><img src="<?php echo OMNI_IMG . "/sample-img1.png" ?>" alt=""></h2>
        <div class="section-details-wrap">
            <div class="section-deatils-container">
                <div class="section1-details ">
                    <p>Empowering Clean Energy Worldwide with Innovative Solutions.</p>
                    <p>Power your business with renewable energy.</p>
                    <a id="main-button" href=""> Learn More <i></i></a>
                </div>
                <div class="section1-vid">
                    <iframe width="500" height="315" src="https://www.youtube.com/embed/1kUE0BZtTRc?si=0pZh-BU4_HypvQ5n"
                        title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>

    </section>
    <div id="section2" class="section2">
        <section>
            <h2>Electromagnetic energy flux Reactor (EER) Stationary Power Generation (SPG)</h2>
            <p>Omniverse Energy Management: A SEC-registered leader in clean energy, committed to sustainable solutions
                with global patents and a mission for excellence.</p>
            <a id="main-button" href=""> Learn More <i></i></a>
        </section>
        <div class="section2-vid"> <iframe width="500" height="315"
                src="https://www.youtube.com/embed/1kUE0BZtTRc?si=0pZh-BU4_HypvQ5n" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
    <div id="section3" class="section3">
        <section>
            <h2>Electromagnetic energy flux Reactor (EER) Stationary Power Generation (SPG)</h2>
            <p>Omniverse Energy Management: A SEC-registered leader in clean energy, committed to sustainable solutions
                with global patents and a mission for excellence.</p>
            <a id="main-button" href=""> Learn More <i></i></a>
        </section>
        <div class="section3-vid"> <iframe width="500" height="315"
                src="https://www.youtube.com/embed/1kUE0BZtTRc?si=0pZh-BU4_HypvQ5n" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </div>
    <div id="section4" class="section4">
        <section>
            <h2>Omniverse Updates</h2>
            <a id="morearticle" href="<?php echo get_home_url() . "/blogs" ?>">More Articles</a>

        </section>
        <div class="article-section">

            <?php
            $contentview = array('post_type' => 'content', 'posts_per_page' => 1);

            $contentquery = new WP_Query($contentview);

            if ($contentquery->have_posts()):
                ?>
                <section class="latestarticle">
                    <?php while ($contentquery->have_posts()):
                        $contentquery->the_post();
                        ?>
                        <h2><img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" alt="Omniverse blog"></h2>
                        <p>
                            <?php echo get_the_date('F j, Y'); ?>
                        </p>
                        <p>
                            <?php echo the_title(); ?>
                        </p>
                        <a id="buttonread" href="<?php echo get_home_url() . "/blogs" ?>">Read more</a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </section>
            <?php endif; ?>
            <div class="article2">
                <?php
                $contentview = array('post_type' => 'content', 'posts_per_page' => 6);

                $contentquery = new WP_Query($contentview);

                if ($contentquery->have_posts()):
                    ?>
                    <ul class="listarticle">
                        <?php while ($contentquery->have_posts()):
                            $contentquery->the_post();
                            ?>
                            <a style="text-decoration:none; cursor:pointer;" href="<?php echo get_permalink() ?>">
                                <li>
                                    <section>
                                        <h2><img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy"
                                                alt="Omniverse blog"></h2>

                                        <p>
                                            <span>
                                                <?php echo get_the_date('F j, Y'); ?>
                                            </span><br>
                                            <?php echo the_title(); ?>
                                        </p>

                                    </section>

                                </li>
                            </a>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                        </section>
                    <?php endif; ?>
            </div>
        </div>
        <a id="main-button" href="<?php echo get_home_url() . "/blogs" ?>">
            More Article
        </a>
    </div>
    <div class="section5">

        <img src="<?php echo OMNI_IMG . "/sample-img2.png" ?>" alt="">
        <section>
            <h2>Lorem Ipsum Seacetem Lorem</h2>
            <p>Contact us for more details</p>
            <a href="<?php echo get_home_url() . "/contact" ?>">CONTACT US</a>
        </section>

    </div>
</main>
<?php get_footer() ?>