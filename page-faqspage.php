<?php echo get_header(); ?>
<div class="contactfloat global-width">
    <a href="<?php echo get_home_url() ?>">
        <section>
            <h2><img src="<?php echo OMNI_IMG . "/omni-logo2.svg" ?>" alt=""></h2>
            <p>Contact Us</p>
        </section>
    </a>
</div>
<main class="global-width">
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
                    <li><a href="<?php echo get_home_url() . "/faqspage" ?>">FAQs</a></li>
                    <li><a href="<?php echo get_home_url() . "/contact" ?>">Contact</a></li>

                </ul>
            </nav>
        </section>
    </div>
    <div class="faqs1">
        <section>
            <h2>Omniverse Frequently Asked Questions</h2>
        </section>
        <?php
        $contentview = array('post_type' => 'faqs', 'posts_per_page' => -1);

        $contentquery = new WP_Query($contentview);

        if ($contentquery->have_posts()):
            ?>
            <ul class="faqscontainer">
                <?php while ($contentquery->have_posts()):
                    $contentquery->the_post();
                    ?>
                    <li>
                        <section>
                            <h2>
                                <?php the_title(); ?>
                            </h2>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </section>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </ul>

        <?php endif; ?>
    </div>
</main>
<?php echo get_footer(); ?>