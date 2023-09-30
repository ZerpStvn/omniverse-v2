<?php echo get_header(); ?>
<main class="content-main global-width">

    <section class="single-content">

        <h2><img src="<?php echo get_the_post_thumbnail_url(); ?>" loading="lazy" alt=""></h2>
        <div class="sinlge-detials">
            <p>
                <?php echo get_the_date('F j, Y'); ?>
            </p>
            <p>
                <?php the_title(); ?>
            </p>
            <p>
                <?php the_content(); ?>
            </p>

        </div>
    </section>
    <div class="single-info">
        <section>
            <h2>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s, when an unknown printer took a galley</h2>
            <p>Follow us on our Social media for more updates:</p>
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-instagram"></a>
            <a href="" class="fa fa-linkedin"></a>
        </section>
    </div>

    <section class="blogarticles single-padding">
            <?php
            $contentview = array('post_type' => 'content', 'posts_per_page' => 3);

            $contentquery = new WP_Query($contentview);

            if ($contentquery->have_posts()):
                ?>
                <ul class="blogslist">
                    <?php while ($contentquery->have_posts()):
                        $contentquery->the_post();
                        ?>
                        <a style="text-decoration:none; cursor:pointer;" href="<?php echo get_permalink( ); ?>">
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

                                    <div id="readmore-blogs"><p>Read More</p> <div><img src="<?php echo OMNI_IMG ."/arrow-right-solid.svg"?>" alt=""></div></div>
                                </section>
                            </li>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
            </section>
        <?php endif; ?>
        </section>
</main>
<?php echo get_footer(); ?>